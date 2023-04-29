<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Wilders MEUUUH!');
echo $bessie;

$bessie = new Cow('Bienvenue sur mon GITHUB!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

?>