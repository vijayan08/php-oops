<?php
require "DateCalc.php";
use App\Models\DateCalc;
$obj1 = new DateCalc();

echo $obj1->getToday();