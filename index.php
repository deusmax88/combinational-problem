<?php
require_once ("vendor/autoload.php");

$persister = new Combinations\Persister\File("combinations.txt");
//$persister = new Combinations\Persister\Console();

//$algorithm = new Combinations\Algorithm\Recursive();
//$algorithm = new Combinations\Algorithm\One();
$algorithm = new Combinations\Algorithm\External();

$generator = new Combinations\Generator($algorithm, $persister);

$options = getopt("f:c:");
$fieldsCount = $options['f'];
$chipCount = $options['c'];

$generator->generate($fieldsCount, $chipCount);