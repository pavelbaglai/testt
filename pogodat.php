<?php
// PHP 5.3.3 + MySQL 5.1.73 compatible config (mysqli)
define('DB_HOST','localhost');
define('DB_NAME','telephone');
define('DB_USER','root');
define('DB_PASS','web2012irc');

define('ADMIN_PASSWORD','admin123');

function db(){
    static $mysqli = null;
    if ($mysqli === null) {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_error) {
            die('DB connection failed: ' . $mysqli->connect_error);
        }
        $mysqli->set_charset('cp1251');
        $mysqli->query("SET NAMES cp1251");
    }
    return $mysqli;
}

function autoIcon($d){
    if (strpos($d,'Снегг')!==false) return 'sneg.jpg';
    if (strpos($d,'Гроза с дождем')!==false) return 'groza_dozd.jpg';
    if (strpos($d,'Ясно')!==false) return 'soln.jpg';
    if (strpos($d,'Гроза')!==false) return 'groza.jpg';
    if (strpos($d,'Дождь')!==false) return 'dozd.jpg';
    if (strpos($d,'Снег')!==false) return 'snegopad.jpg';
    if (strpos($d,'Пасмурно')!==false) return 'oblachno.jpg';
    if (strpos($d,'Переменная облачность')!==false) return 'perem.jpg';
    return 'perem.jpg';
}


$mysqli = db();

// 1) last passed time
$sql = "SELECT forecast_at, temperature, description, icon, extra_text
        FROM weather_forecast
        WHERE forecast_at <= NOW()
        ORDER BY forecast_at DESC
        LIMIT 1";
$res = $mysqli->query($sql);
$w = ($res) ? $res->fetch_assoc() : null;

// 2) if none, take nearest future
if (!$w) {
    $sql = "SELECT forecast_at, temperature, description, icon, extra_text
            FROM weather_forecast
            WHERE forecast_at > NOW()
            ORDER BY forecast_at ASC
            LIMIT 1";
    $res = $mysqli->query($sql);
    $w = ($res) ? $res->fetch_assoc() : null;
}
?>
<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <style>

.weather-informer {
    font-family: Arial, sans-serif;
    /* width: 411px; */
    /* height: 184px; */
    background: white;
    color: #2a4e7a;
    /* padding: 30px; */
    /* border-radius: 20px; */
    /* box-shadow: 0 10px 30px rgb(0 0 0 / 20%); */
    text-align: center;
    MARGIN: 5PX;
}
        
        .city-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .date-time {
            font-size: 11px;
            opacity: 0.9;
            margin-bottom: 12px;
        }
        
        .temperature {
            font-size: 35px;
           /* font-weight: 300;*/
            margin: 13px 0;
        }
        
        .temperature sup {
            font-size: 20px;
        }
        
        .weather-icon {
            font-size: 30px;
            margin: 15px 0;
        }
        
        .condition {
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }
        
        .update-info {
            font-size: 12px;
            opacity: 0.8;
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 15px;
        }
  
        </style>
    </head>
<body>


<?php if ($w) { ?>
    <div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
    <?php echo date('d.m.Y', strtotime($w['forecast_at'])); ?> |
    по состоянию <?php echo date('H:i', strtotime($w['forecast_at'])); ?>     </div>
    <div class="weather-icon">
    <?php
        $icon = (!empty($w['icon'])) ? $w['icon'] : autoIcon($w['description']);
    ?>
    <img src="/ed/upload-files/2025/pogoda/<?php echo htmlspecialchars($icon, ENT_QUOTES, 'UTF-8'); ?>" width="55" height="45" alt=""></div>
    
    <div class="temperature">
    <?php
$temp = (int)$w['temperature'];
$tempText = ($temp > 0) ? ('+' . $temp) : (string)$temp; // 0 останется "0", отрицательные уже со знаком "-"
?>
    <?php echo $tempText; ?> <sup>°C</sup></div>
    <div class="condition"> <?php echo $w['description']; ?></div>

<?php } else { ?>
    <p>Нет данных</p>
<?php } ?>

</body>
</html>
