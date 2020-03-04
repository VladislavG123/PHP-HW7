<?php

include_once "Models/Tag.php";

$tag = new Tag('a');

$tag->prependBody('asd');

$tag->addAttribute('href', 'http://google.com');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $tag->getString() ?>
</body>
</html>