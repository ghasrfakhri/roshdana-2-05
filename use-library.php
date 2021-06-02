<?php

use Morilog\Jalali\Jalalian;

require 'vendor/autoload.php';
//
//$t = \Carbon\Carbon::now('Asia/Tehran');
//
//var_dump($t);

date_default_timezone_set('Asia/Tehran');

$date = Jalalian::now();
var_dump($date->toString());