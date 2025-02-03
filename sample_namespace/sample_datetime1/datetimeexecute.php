<?php
require 'DateTime.php';

use App\Model\DateTime as MyDateTime;

$obj1 = new MyDateTime();
$obj2 = new DateTime();
var_dump($obj1);
var_dump($obj2);