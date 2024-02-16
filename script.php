<?php
$text = $_GET["text"];
$badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Badwords</title>
        <meta charset="UTF-8">
        <meta name="author" content="Daniele Ercoli">
        <meta name="description" content="esercizio">
        <meta name="keyword" content="html, php">
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
    </head>

    <body>
        <p><?=$text?></p>
        <h2><?=$badword?></h2>
    </body>
</html>