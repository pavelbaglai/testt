<?php
require_once __DIR__ . '/src/bootstrap.php';
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('Europe/Moscow');
// --- НАСТРОЙКИ ПОДКЛЮЧЕНИЯ --- //
$db = Database::connect(null, 'utf8mb4');
if (!$db) die('Ошибка подключения к MySQL');


// Диапазон лет
$startYear = 2024;
$endYear = (int)date('Y');

// Месяцы
$months = array(
    1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь',
    7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
);
$month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
$year = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');
if ($month < 1 || $month > 12 || $year < 1 || $year > 9999) {
    http_response_code(400);
    exit('Invalid month or year');
}
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$todayDay = ($month == date('n') && $year == date('Y')) ? (int)date('j') : null;

// --- Загружаем все ДР из БД и строим карту: месяц => день => количество --- //
$res = Database::query("SELECT dr FROM richstone_katalog");
$birthdays = array();
while ($row = Database::fetchAssoc($res)) {
    $dt = explode('.', $row['dr'] ?? '');
    if (count($dt) == 3) {
        $d = (int)$dt[0];
        $m = (int)$dt[1];
        if (!isset($birthdays[$m][$d])) $birthdays[$m][$d] = 0;
        $birthdays[$m][$d]++;
    }
}

// --- Функция: получить месяц и день через $delta дней от текущего дня $day и месяца $month --- //
function getNextDay($day, $month, $year, $delta = 1) {
    $ts = mktime(0,0,0, $month, $day, $year);
    $ts2 = $ts + 86400 * $delta;
    return array((int)date('n', $ts2), (int)date('j', $ts2));
}

// --- Подсчет --- //
$todayRow = array();
$tomorrowRow = array();
$in34daysRow = array();

for ($day = 1; $day <= $daysInMonth; $day++) {
    // Сегодня
    $todayRow[$day] = isset($birthdays[$month][$day]) ? $birthdays[$month][$day] : 0;

    // Завтра
    list($m2, $d2) = getNextDay($day, $month, $year, 1);
    $tomorrowRow[$day] = isset($birthdays[$m2][$d2]) ? $birthdays[$m2][$d2] : 0;

    // Через 3+4 дня
    list($m3, $d3) = getNextDay($day, $month, $year, 2);
    list($m4, $d4) = getNextDay($day, $month, $year, 3);
    $in34daysRow[$day] = (isset($birthdays[$m3][$d3]) ? $birthdays[$m3][$d3] : 0)
        + (isset($birthdays[$m4][$d4]) ? $birthdays[$m4][$d4] : 0);
}

// --- ИТОГ по каждому дню --- //
$itogRow = array();
for ($day = 1; $day <= $daysInMonth; $day++) {
    $itogRow[$day] = $todayRow[$day] + $tomorrowRow[$day] + $in34daysRow[$day];
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>ДР по дням</title>
<style>
    table { border-collapse:collapse; margin-top:10px; }
    th, td { border:1px solid #999; padding:4px 8px; text-align:center; }
    th.yellow { background: yellow; }
    th.green { background: #d1f7ce; }
    th { background: #e3eaf6; }
    td.bold { font-weight: bold; }
    td.yellow { background: yellow; }
    small { color: #555; }
</style>
</head>
<body>
<form method="get">
    <label for="month">Месяц:</label>
    <select name="month" id="month">
        <?php foreach ($months as $num => $name): ?>
            <option value="<?php echo $num ?>"<?php if ($num == $month) echo ' selected'; ?>><?php echo $name ?></option>
        <?php endforeach; ?>
    </select>
    <label for="year">Год:</label>
    <select name="year" id="year">
        <?php for ($y = $startYear; $y <= $endYear; $y++): ?>
            <option value="<?php echo $y ?>"<?php if ($y == $year) echo ' selected'; ?>><?php echo $y ?></option>
        <?php endfor; ?>
    </select>
    <button type="submit">Показать</button>
    <a href="./drt.php">Основной</a>
</form>

<!-- ТЕКУЩАЯ ДАТА И ВРЕМЯ -->
<p>Сейчас: <b><?php echo date('d.m.Y H:i:s') ?> МСК</b></p>
<table>
    <!-- Шапка: дни месяца -->
    <tr>
        <th>дата</th>
        <?php for ($day = 1; $day <= $daysInMonth; $day++): ?>
            <?php
                $wday = date('N', mktime(0,0,0,$month,$day,$year));
                $class = '';
                if ($wday == 6 || $wday == 7) $class = 'green';
                if ($day == $todayDay) $class = trim($class . ' yellow');
            ?>
            <th class="<?php echo $class ?>"><?php echo $day ?></th>
        <?php endfor; ?>
    </tr>
    <!-- Сегодня ДР -->
    <tr>
        <td>сегодня ДР</td>
        <?php for ($day = 1; $day <= $daysInMonth; $day++): ?>
            <td<?php if ($day == $todayDay) echo ' class="yellow"'; ?>><?php echo $todayRow[$day] ?></td>
        <?php endfor; ?>
    </tr>
    <!-- Завтра ДР -->
    <tr>
        <td>Завтра ДР</td>
        <?php for ($day = 1; $day <= $daysInMonth; $day++): ?>
            <?php
                list($m2, $d2) = getNextDay($day, $month, $year, 1);
                $tip = isset($months[$m2])
                    ? sprintf('%02d %s', $d2, function_exists('mb_strtolower') ? mb_strtolower($months[$m2], 'UTF-8') : strtolower($months[$m2]))
                    : sprintf('%02d', $d2);
            ?>
            <td<?php if ($day == $todayDay) echo ' class="yellow"'; ?>>
                <?php echo $tomorrowRow[$day]; ?>
            </td>
        <?php endfor; ?>
    </tr>
    <!-- Через 3/4 дня ДР -->
    <tr>
        <td>Через 3/4 дня ДР</td>
        <?php for ($day = 1; $day <= $daysInMonth; $day++): ?>
            <?php
                list($m3, $d3) = getNextDay($day, $month, $year, 2);
                list($m4, $d4) = getNextDay($day, $month, $year, 3);
                $tip = (isset($months[$m3]) && isset($months[$m4]))
                    ? sprintf('%02d %s и %02d %s',
                        $d3, function_exists('mb_strtolower') ? mb_strtolower($months[$m3], 'UTF-8') : strtolower($months[$m3]),
                        $d4, function_exists('mb_strtolower') ? mb_strtolower($months[$m4], 'UTF-8') : strtolower($months[$m4])
                    )
                    : sprintf('%02d и %02d', $d3, $d4);
            ?>
            <td<?php if ($day == $todayDay) echo ' class="yellow"'; ?>>
                <?php echo $in34daysRow[$day]; ?>
            </td>
        <?php endfor; ?>
    </tr>
    <!-- Итог по дню -->
    <tr>
        <td class="bold">ИТОГ</td>
        <?php for ($day = 1; $day <= $daysInMonth; $day++): ?>
            <td class="bold<?php if ($day == $todayDay) echo ' yellow'; ?>"><b><?php echo $itogRow[$day] ?></b></td>
        <?php endfor; ?>
    </tr>
</table>
</body>
</html>