<?php
/**
 * This is some boilerplate to use RedBeanPHP in a composer project with nategood/Commando and the league/csv. To use this, copy
 * settings.ini.sample to settings.ini and populate with the information for your own database
 */
require_once 'vendor/autoload.php';

use \RedBeanPHP\R as R;

$config = parse_ini_file( __DIR__.'/settings.ini', true);

$db = $config['db'];

R::setup('mysql:host=' . $db['host'] . ';dbname='. $db['name'], $db['username'] , $db['password']);
