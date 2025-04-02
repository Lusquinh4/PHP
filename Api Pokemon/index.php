<?php 
    $url = "https://www.canalti.com.br/api/pokemons.json";
    $pokemons = json_decode(file_get_contents($url));

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            $i = 0;
        foreach($pokemons->pokemon as $Pokemon){
            $i++;
    ?>
    <h4><?=$Pokemon->name?></h4><br>
    <figure style="width:100px; height:100px;">
    <img src="<?=$Pokemon->img?>" alt="">
    </figure>
    <?php } ?>
</body>
</html>