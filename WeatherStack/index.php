<?php
    $url = "http://api.weatherstack.com/current?apikey=dd65eecbfb7999e580e2c395620fa838";
    $clima = json_decode(file_get_contents($url));

    echo "<pre>";
    print_r($clima);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api WeatherStack</title>
</head>
<body>
    
</body>
</html>