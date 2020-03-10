<?php
$apiKey = "48005cd80f33115f970f05d4dc4ad6ef";
$cityId = "1259424";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>

<style>
.bod{
    
   
    color: #38910f;
}

.report-container {
    font-family:  Times New Roman;
    border: #E0E0E0 1px solid;
    padding: 20px 35px 25px 35px;
    border-radius: 2px;
    width: 100%;
    background-color: #7fdfdf8a;
  
}
.forday {
    font-size: 16px;
}
.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
}

.weather-forecast {
    color: #212121;
    /*font-size: 1.2em;*/
    font-weight: bold;
   /* margin: 20px 0px;*/
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    /*line-height: 25px;*/
}
</style>

</head>
<body>

    <div class="report-container bod">
        <h3><?php echo $data->name; ?> Weather Status</h3>
        <div class="forday">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="forday">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>


</body>
</html>