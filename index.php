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

