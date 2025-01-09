<?php
include 'monitor.php';
include 'cpu.php';
use monitor\WorkProgress;
$obj1 = new WorkProgress();

//use cpu\WorkProgress;
$obj2 = new cpu\WorkProgress();

$obj1->dowork();
$obj2->dowork();