<?php 

require_once './vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$database = (new Factory())->createDatabase();
var_dump($database);