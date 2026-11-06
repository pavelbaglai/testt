<!DOCTYPE html>
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
</html>
<?php 
$start = strtotime('2026-01-28 09:00:00');
$pro7 = strtotime('2026-01-28 12:00:00');
$pro8 = strtotime('2026-01-28 15:00:00');
$pro9 = strtotime('2026-01-28 18:00:00');
$pro10 = strtotime('2026-01-29 06:00:00');
$pro11 = strtotime('2026-01-29 09:00:00');
$pro12 = strtotime('2026-01-29 12:00:00');
$pro13 = strtotime('2026-01-29 15:00:00');
$pro14 = strtotime('2026-01-29 18:00:00');
$pro15 = strtotime('2026-01-30 06:00:00');
$pro16 = strtotime('2026-01-30 09:00:00');
$pro17 = strtotime('2026-01-30 12:00:00');
$pro18 = strtotime('2026-01-30 15:00:00');
$pro19 = strtotime('2026-01-30 18:00:00');
$pro20 = strtotime('2026-01-31 06:00:00');
$pro21 = strtotime('2026-01-31 09:00:00');
$pro22 = strtotime('2026-01-31 12:00:00');
$pro23 = strtotime('2026-01-31 15:00:00');
$pro24 = strtotime('2026-01-31 18:00:00');
$pro25 = strtotime('2026-02-01 06:00:00');
$pro26 = strtotime('2026-02-01 09:00:00');
$pro27 = strtotime('2026-02-01 12:00:00');
$pro28 = strtotime('2026-02-01 15:00:00');
$pro29 = strtotime('2026-02-01 18:00:00');
$pro30 = strtotime('2026-02-02 06:00:00');
$pro31 = strtotime('2026-02-02 09:00:00');
$pro32 = strtotime('2026-02-02 12:00:00');
$pro33 = strtotime('2026-02-02 15:00:00');
$pro34 = strtotime('2026-02-02 18:00:00');
$pro35 = strtotime('2026-02-03 06:00:00');
$pro36 = strtotime('2026-02-03 09:00:00');
$pro37 = strtotime('2026-02-03 12:00:00');
$pro38 = strtotime('2026-02-03 15:00:00');
$pro39 = strtotime('2026-02-03 18:00:00');
$pro40 = strtotime('2026-02-04 06:00:00');
$pro41 = strtotime('2026-02-04 09:00:00');
$pro42 = strtotime('2026-02-04 12:00:00');
$pro43 = strtotime('2026-02-04 15:00:00');
$pro44 = strtotime('2026-02-04 18:00:00');
$pro45 = strtotime('2026-02-05 06:00:00');
$pro46 = strtotime('2026-02-05 09:00:00');
$pro47 = strtotime('2026-02-05 12:00:00');
$pro48 = strtotime('2026-02-05 15:00:00');
$pro49 = strtotime('2026-02-05 18:00:00');
$pro50 = strtotime('2026-02-06 06:00:00');
$pro51 = strtotime('2026-02-06 09:00:00');
$pro52 = strtotime('2026-02-06 12:00:00');
$pro53 = strtotime('2026-02-06 15:00:00');
$pro54 = strtotime('2026-02-06 18:00:00');
$pro55 = strtotime('2026-02-07 06:00:00');
$pro56 = strtotime('2026-02-07 09:00:00');
$pro57 = strtotime('2026-02-07 12:00:00');
$pro58 = strtotime('2026-02-07 15:00:00');
$pro59 = strtotime('2026-02-07 18:00:00');
$pro60 = strtotime('2026-02-08 06:00:00');
$pro61 = strtotime('2026-02-08 09:00:00');
$pro62 = strtotime('2026-02-08 12:00:00');
$pro63 = strtotime('2026-02-08 15:00:00');
$pro64 = strtotime('2026-02-08 18:00:00');
$pro65 = strtotime('2026-02-09 06:00:00');
$pro66 = strtotime('2026-02-09 09:00:00');
$pro67 = strtotime('2026-02-09 12:00:00');
$pro68 = strtotime('2026-02-09 15:00:00');
$pro69 = strtotime('2026-02-09 18:00:00');
$pro70 = strtotime('2026-02-10 06:00:00');
$pro71 = strtotime('2026-02-10 09:00:00');
$pro72 = strtotime('2026-02-10 12:00:00');
$pro73 = strtotime('2026-02-10 15:00:00');
$pro74 = strtotime('2026-02-10 18:00:00');
$pro75 = strtotime('2026-02-11 06:00:00');
$end = strtotime('2026-02-11 09:00:00');
 
$current_time = time(); // Get the current time
 
if ($current_time < $start) {
    echo '
    <div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        28.01.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon">??</div>
    
    <div class="temperature">
        -2
        <sup>°C</sup>
    </div>  
    <div class="condition">пасмурно</div>
</div>';
}
else if ($current_time >= $start && $current_time < $pro7) {
    echo '
    <div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        28.01.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -2
        <sup>°C</sup>
    </div>  
    <div class="condition">снег с дождем</div>
</div>';


}
 else if ($current_time >= $pro7 && $current_time <= $pro8) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        28.01.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -1
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';

} 
 else if ($current_time >= $pro8 && $current_time <= $pro9) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        28.01.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -1
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 

 else if ($current_time >= $pro9 && $current_time <= $pro10) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        28.01.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -2
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
	
} 
 else if ($current_time >= $pro10 && $current_time <= $pro11) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        29.01.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -6
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
	
} 
 else if ($current_time >= $pro11 && $current_time <= $pro12) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        29.01.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -8
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
	
} 
 else if ($current_time >= $pro12 && $current_time <= $pro13) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        29.01.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
 else if ($current_time >= $pro13 && $current_time <= $pro14) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        29.01.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -6
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
 else if ($current_time >= $pro14 && $current_time <= $pro15) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        29.01.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -9
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
	
} 
 else if ($current_time >= $pro15 && $current_time <= $pro16) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        30.01.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
 else if ($current_time >= $pro16 && $current_time <= $pro17) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        30.01.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
 else if ($current_time >= $pro17 && $current_time <= $pro18) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        30.01.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -13
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
 else if ($current_time >= $pro18 && $current_time <= $pro19) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        30.01.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -13
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
	
} 
 else if ($current_time >= $pro19 && $current_time <= $pro20) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        30.01.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
    
} 
 else if ($current_time >= $pro20 && $current_time <= $pro21) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        31.01.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -17
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
 else if ($current_time >= $pro21 && $current_time <= $pro22) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        31.01.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -17
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
 else if ($current_time >= $pro22 && $current_time <= $pro23) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        31.01.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
	
} 
 else if ($current_time >= $pro23 && $current_time <= $pro24) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        31.01.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -13
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>'; 
} 
 else if ($current_time >= $pro24 && $current_time <= $pro25) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        31.01.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -15
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
 else if ($current_time >= $pro25 && $current_time <= $pro26) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        01.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -21
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
 else if ($current_time >= $pro26 && $current_time <= $pro27) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        01.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -20
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro27 && $current_time <= $pro28) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        01.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -18
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro28 && $current_time <= $pro29) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        01.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -19
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro29 && $current_time <= $pro30) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        01.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -21
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro30 && $current_time <= $pro31) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        02.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -25
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro31 && $current_time <= $pro32) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        02.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -23
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro32 && $current_time <= $pro33) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        02.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -19
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
else if ($current_time >= $pro33 && $current_time <= $pro34) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        02.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/soln.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -17
        <sup>°C</sup>
    </div>  
    <div class="condition">солнечно</div>
</div>';
} 
else if ($current_time >= $pro34 && $current_time <= $pro35) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        02.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -19
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
}
else if ($current_time >= $pro35 && $current_time <= $pro36) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        03.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -20
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro36 && $current_time <= $pro37) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        03.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -19
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro37 && $current_time <= $pro38) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        03.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -13
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro38 && $current_time <= $pro39) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        03.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -12
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro39 && $current_time <= $pro40) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        03.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -17
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro40 && $current_time <= $pro41) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        04.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -20
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro41 && $current_time <= $pro42) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        04.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -18
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro42 && $current_time <= $pro43) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        04.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro43 && $current_time <= $pro44) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        04.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -12
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro44 && $current_time <= $pro45) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        04.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro45 && $current_time <= $pro46) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        05.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -12
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro46 && $current_time <= $pro47) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        05.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -12
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro47 && $current_time <= $pro48) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        05.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -8
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro48 && $current_time <= $pro49) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        05.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -8
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro49 && $current_time <= $pro50) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        05.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -9
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro50 && $current_time <= $pro51) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        06.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -7
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro51 && $current_time <= $pro52) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        06.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -7
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro52 && $current_time <= $pro53) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        06.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro53 && $current_time <= $pro54) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        06.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -4
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro54 && $current_time <= $pro55) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        06.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro55 && $current_time <= $pro56) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        07.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro56 && $current_time <= $pro57) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        07.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro57 && $current_time <= $pro58) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        07.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro58 && $current_time <= $pro59) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        07.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro59 && $current_time <= $pro60) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        07.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -5
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else if ($current_time >= $pro60 && $current_time <= $pro61) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        08.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -7
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro61 && $current_time <= $pro62) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        08.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -7
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro62 && $current_time <= $pro63) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        08.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -8
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro63 && $current_time <= $pro64) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        08.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -8
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro64 && $current_time <= $pro65) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        08.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -10
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro65 && $current_time <= $pro66) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        09.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -18
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro66 && $current_time <= $pro67) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        09.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -16
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro67 && $current_time <= $pro68) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        09.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro68 && $current_time <= $pro69) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        09.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -13
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro69 && $current_time <= $pro70) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        09.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -16
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 
else if ($current_time >= $pro70 && $current_time <= $pro71) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        10.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -20
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 

else if ($current_time >= $pro71 && $current_time <= $pro72) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        10.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -18
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
} 

else if ($current_time >= $pro72 && $current_time <= $pro73) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        10.02.2026 | по состоянию на 12:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -15
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
} 
else if ($current_time >= $pro73 && $current_time <= $pro74) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        10.02.2026 | по состоянию на 15:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/perem.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -14
        <sup>°C</sup>
    </div>  
    <div class="condition">переменная облачность</div>
</div>';
}
else if ($current_time >= $pro74 && $current_time <= $pro75) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        10.02.2026 | по состоянию на 18:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -15
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 


else if ($current_time >= $pro75 && $current_time <= $end) {
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        11.02.2026 | по состоянию на 06:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/snegopad.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -15
        <sup>°C</sup>
    </div>  
    <div class="condition">снег</div>
</div>';
} 
else 
{
    echo '<div class="weather-informer">
    <div class="city-name">МИНСК</div>
    <div class="date-time">
        11.02.2026 | по состоянию на 09:00
    </div>
    
    <div class="weather-icon"><img src="ed/upload-files/2025/pogoda/oblachno.jpg" 
  width="55" height="45" ></div>
    
    <div class="temperature">
        -15
        <sup>°C</sup>
    </div>  
    <div class="condition">облачно</div>
</div>';
}
?>

<?php
  /*<body>
		
  <div class="maop">
          <p href='http://pogoda.rw'><iframe width="180" height="200" style="overflow: hidden; border: 0; border-radius: 5px;" src="http://pogoda.rw/wdgt/26850"></iframe></p>
              </div>
              <a class='' target='_blank' href='http://pogoda.rw'></a>
  </body>*/
  

?>