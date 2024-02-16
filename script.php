<?php
$text = $_GET["text"];
$badword = $_GET["badword"];
$text_length = strlen($text);
$new_text = str_replace($badword, "***", $text);
$new_length = strlen($new_text);

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
        <p><?=$text, $text_length?></p>
        <p><?=$new_text, $new_length?></p>
        
    </body>
</html>