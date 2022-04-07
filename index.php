<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $testo_lungo="Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia omnis necessitatibus ipsam itaque reiciendis libero similique dolore ipsum dignissimos ut nihil culpa iusto velit et consequuntur voluptates, iste quod quibusdam."
    ?>
    <h1>Testo: <?php echo $testo_lungo;?></h1>
    <h2>Il testo è lungo: <?php echo strlen($testo_lungo);?> caratteri</h2>
</body>
</html>