<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <!-- stampa testo e lunghezza testo -->
    <h1>Testo:</h1>
    <h2>
        <?php 
            $testo_lungo="Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia omnis necessitatibus ipsam itaque reiciendis libero similique dolore ipsum dignissimos ut nihil culpa iusto velit et consequuntur voluptates, iste quod quibusdam.";
            echo $testo_lungo;
        ?>
    </h2>
    <h2>Il testo è lungo: <?php echo strlen($testo_lungo);?> caratteri</h2>

    <hr>

    <!-- stampa testo con parola che viene censurata e nuova lunghezza -->
    <h1>Testo censurato:</h1>
    <h2>
        <?php
            $bad_word = $_GET["badword"];
            $testo_censurato = str_replace($bad_word, "***", $testo_lungo);
            echo $testo_censurato;
        ?>
    </h2>
    <h2>Il testo è lungo: <?php echo strlen($testo_censurato);?> caratteri</h2>

</body>
</html>