<?php 

// la forma mas basica
define('API_URL','https://whenisthenextmcufilm.com/api');

// CURLOPT_RETURNTRANSFER
// curl handle
$ch = curl_init(API_URL);

curl_setopt($ch , CURLOPT_RETURNTRANSFER,true);

$data = curl_exec($ch);

$response = json_decode($data,true);

//var_dump($response);

$footer = "Derechos reservados Programador: Angel Herrera ©2025";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de marvel</title>
</head>
<body>
    <img src="spidey.jpg" alt="" class="fondo">
    <main>
        <section>
            <div class="title">
                <h2>LA PROXIMA PELICULA DE MARVEL:</h2>
            </div>
             <div class="movie">
                <h2><?= $response["title"] ?></h2>
                <p class="group-p">Disponible en <?= $response["days_until"] ?> días</p><br>
                <p class="group-p">Fecha de estreno: <?= date("d/m/Y",strtotime($response["release_date"])); ?></p>
            </div>
            <div class="img-shadow">
                <div class="img">
                    <img src="<?= $response["poster_url"];?>" alt="<?= $response["title"] ?>" title="<?= $response["title"] ?>" >
                </div>
            </div>
            <div class="next">
                <h5>La siguiente pelicula es: <?= $response["following_production"]["title"]; ?></h5>
            </div>
            <footer>
                <p> <?=  $footer ?> </p>
            </footer>
        </section>
    </main>
</body>
</html>