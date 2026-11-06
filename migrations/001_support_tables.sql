-- Supplemental tables referenced by the PHP pages but absent from __DB2__.sql.
-- Apply to the application's telephone database. Existing tables are preserved.
CREATE TABLE IF NOT EXISTS statistics (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    ip VARCHAR(45) NOT NULL DEFAULT '',
    os TEXT NOT NULL,
    host VARCHAR(255) NOT NULL DEFAULT '',
    page TEXT NOT NULL,
    INDEX statistics_date (date)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

CREATE TABLE IF NOT EXISTS online (
    ip VARCHAR(45) NOT NULL PRIMARY KEY,
    time BIGINT UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

CREATE TABLE IF NOT EXISTS content (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    interface_id INT NOT NULL,
    content TEXT NOT NULL,
    date DATE NOT NULL,
    UNIQUE KEY content_interface_date (interface_id, date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
