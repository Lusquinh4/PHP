<?php
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api WeatherStack</title>
</head>
<body class="flex justify-center items-center w-screen h-screen">
    <div class="flex items-center flex-col text-white bg-linear-to-r from-blue-300 to-blue-900 size-100 rounded-lg">
        <header class="mb-10 flex align-top justify-center mt-10 g-">
            <h1 class="text-2xl font-bold">Previsão do Tempo&nbsp;</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 flex align-center">
            <path fill-rule="evenodd" d="M4.5 9.75a6 6 0 0 1 11.573-2.226 3.75 3.75 0 0 1 4.133 4.303A4.5 4.5 0 0 1 18 20.25H6.75a5.25 5.25 0 0 1-2.23-10.004 6.072 6.072 0 0 1-.02-.496Z" clip-rule="evenodd" />
            </svg>
        </header>
    <form action="" method="post" class="flex flex-col items-center justify-center w-auto bg-white/30 rounded-md">
        <div class="flex flex-row p-2">
            <select name="Cidades" id="">
                <option value=""></option>
            </select>
        </div>
        <input type="submit" name="checar" value="Checar">
    </form>
    <?php
        if (isset($_POST['checar'])){
            $local = $_POST['local'];

            $apiKey = "dd65eecbfb7999e580e2c395620fa838";
            $url = "http://api.weatherstack.com/current?access_key=$apiKey&query=$local";

            $requisição = file_get_contents($url);
            $clima = json_decode($requisição, true);

            if (isset($clima['current'])) {
                ?>
                    <br>
                        <div class="bg-white/30 font-bold">
                            <?php
                                echo "Temperatura Atual: " . $clima['current']['temperature'] . "°C<br>";
                                echo "Clima: " . $clima['current']['weather_descriptions'][0] . "<br>";
                                echo "</div>";
                        } else {
                                echo "Erro: " . $clima['error']['info'];
                                }

            }
    ?>
    </div>
</body>
</html>