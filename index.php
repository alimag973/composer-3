<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    

<?php
require __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;
$daisy = new Cow('Hello, Farm!');


$daisy->setEyes('$$')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');

echo $daisy . PHP_EOL;
?>
</pre>
</body>
</html>