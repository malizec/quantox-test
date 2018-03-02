<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use App\PersonFactory;

require_once __DIR__ . '/vendor/autoload.php';

$man = PersonFactory::createPerson('male', 'Nenad', 'Cvetkovic', 33, 'Serbian');

echo $man->getFullInfo();
echo '</br>';
echo $man->getMessage();
echo '</br>';
echo $man->getMansStuff();
echo '<hr/>';

$woman = PersonFactory::createPerson('female', 'Milijana', 'Cvetkovic', 18, 'Germanija');

echo $woman->getFullInfo();
echo '</br>';
echo $woman->getMessage();
echo '</br>';
echo $woman->getWomansStuff();
echo '<hr/>';

