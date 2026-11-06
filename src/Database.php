<?php

declare(strict_types=1);

/** PDO access shared by the application's independently executable PHP pages. */
final class Database
{
    private static ?PDO $current = null;
    private static array $connections = [];
    private static string $lastError = '';

    public static function setting(string $name, string $default = ''): string
    {
        $value = getenv($name);
        return $value === false ? $default : $value;
    }

    public static function connect(?string $database = null, ?string $charset = null): PDO
    {
        $database ??= self::setting('DB_NAME', 'telephone');
        $charset ??= self::setting('DB_CHARSET', 'cp1251');
        $key = $database . ':' . $charset;
        if (!preg_match('/\A[a-zA-Z0-9_]+\z/', $database)
            || !preg_match('/\A[a-zA-Z0-9_]+\z/', $charset)) {
            throw new InvalidArgumentException('Invalid database name or charset');
        }
        if (!isset(self::$connections[$key])) {
            $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s',
                self::setting('DB_HOST', '127.0.0.1'), self::setting('DB_PORT', '3306'),
                $database, $charset);
            self::$connections[$key] = new PDO($dsn,
                self::setting('DB_USER'), self::setting('DB_PASSWORD'), [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_STRINGIFY_FETCHES => true,
                ]);
        }
        return self::$current = self::$connections[$key];
    }

    public static function selectDatabase(string $name, mixed $connection = null): bool
    {
        self::connect($name);
        return true;
    }

    /** Parameters must be used for all new queries containing request data. */
    public static function query(string|PreparedQuery $sql, mixed $connection = null, array $params = []): DatabaseResult|bool
    {
        if ($sql instanceof PreparedQuery) {
            $params = $sql->params;
            $sql = $sql->sql;
        }
        $pdo = $connection instanceof PDO ? $connection : (self::$current ?? self::connect());
        try {
            $statement = $pdo->prepare($sql);
            foreach (array_values($params) as $index => $value) {
                $statement->bindValue($index + 1, $value,
                    is_int($value) ? PDO::PARAM_INT : ($value === null ? PDO::PARAM_NULL : PDO::PARAM_STR));
            }
            $statement->execute();
            self::$lastError = '';
            if ($statement->columnCount() === 0) {
                $statement->closeCursor();
                return true;
            }
            $result = new DatabaseResult($statement->fetchAll(PDO::FETCH_BOTH),
                array_map(fn (int $i) => $statement->getColumnMeta($i)['name'],
                    range(0, $statement->columnCount() - 1)));
            $statement->closeCursor();
            return $result;
        } catch (PDOException $error) {
            // Some legacy pages intentionally recover from duplicate INSERTs.
            // Keep their false-on-error contract without exposing SQL or secrets.
            self::$lastError = $error->getCode();
            error_log('Database query failed (SQLSTATE ' . $error->getCode() . ')');
            return false;
        }
    }

    public static function statement(string $sql, array $params): PreparedQuery
    {
        return new PreparedQuery($sql, $params);
    }

    public static function identifier(string $name): string
    {
        if (!preg_match('/\A[a-zA-Z0-9_]+\z/', $name)) {
            throw new InvalidArgumentException('Invalid SQL identifier');
        }
        return $name;
    }

    public static function fetchAssoc(DatabaseResult|bool $result): array|false
    {
        $row = self::fetchArray($result);
        return $row === false ? false : array_filter($row, 'is_string', ARRAY_FILTER_USE_KEY);
    }

    public static function fetchRow(DatabaseResult|bool $result): array|false
    {
        $row = self::fetchArray($result);
        return $row === false ? false : array_values(array_filter($row, 'is_int', ARRAY_FILTER_USE_KEY));
    }

    public static function fetchArray(DatabaseResult|bool $result, int $mode = 3): array|false
    {
        if (!$result instanceof DatabaseResult || !isset($result->rows[$result->position])) {
            return false;
        }
        $row = $result->rows[$result->position++];
        return match ($mode) {
            1 => array_filter($row, 'is_string', ARRAY_FILTER_USE_KEY),
            2 => array_values(array_filter($row, 'is_int', ARRAY_FILTER_USE_KEY)),
            default => $row,
        };
    }

    public static function numRows(DatabaseResult|bool $result): int
    {
        return $result instanceof DatabaseResult ? count($result->rows) : 0;
    }

    public static function seek(DatabaseResult|bool $result, int $offset): bool
    {
        if (!$result instanceof DatabaseResult || !isset($result->rows[$offset])) {
            return false;
        }
        $result->position = $offset;
        return true;
    }

    public static function result(DatabaseResult|bool $result, int $row, int|string $field = 0): mixed
    {
        if (!$result instanceof DatabaseResult) {
            return false;
        }
        if (is_string($field) && str_contains($field, '.')) {
            $field = substr($field, strrpos($field, '.') + 1);
        }
        return $result->rows[$row][$field] ?? false;
    }

    public static function freeResult(DatabaseResult|bool $result): bool
    {
        if ($result instanceof DatabaseResult) {
            $result->rows = [];
            $result->position = 0;
        }
        return true;
    }

    public static function error(mixed $connection = null): string
    {
        return self::$lastError;
    }

    public static function setCharset(string $charset, mixed $connection = null): bool
    {
        if (!preg_match('/\A[a-zA-Z0-9_]+\z/', $charset)) {
            throw new InvalidArgumentException('Invalid charset');
        }
        return self::query('SET NAMES ' . $charset, $connection) === true;
    }

    public static function close(mixed $connection = null): bool
    {
        // Request-scoped pooled PDO connections also serve included pages.
        return true;
    }
}

/** Buffered rows retain the seek/count behavior used by legacy templates. */
final class DatabaseResult
{
    public int $position = 0;

    public function __construct(public array $rows, public array $columns = []) {}
}

final class PreparedQuery
{
    public function __construct(public readonly string $sql, public readonly array $params) {}
}
