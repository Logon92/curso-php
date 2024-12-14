<!-- Llamada a API -->

<?php

    const API_URL = "https://whenisthenextmcufilm.com/api";
    # Inicializar una nueva sesión de cURL; ch = cURL handle
    $ch = curl_init(API_URL);
    # Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Ejecutar la petición y guardamos el resultado
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    // Una alternativa sería utilizar file_get_contents
    // $result = file_get_contents(API_URL); // si solo quires hacer un GET de una API

    curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <!-- <pre style="font-size: 8px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre> -->
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]?>" />
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente película es <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>


<style>
    :root {
        background: black;
        color: white;
    }

    main {
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    h3, p {
        color:aliceblue;
    }

    img {
        margin-top: 2em;
        border-radius: 10px;
    }
</style>