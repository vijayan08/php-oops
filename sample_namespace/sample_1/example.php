<?php
require 'Item.php';
require 'functions.php';


use App\Models\Admin\Item;
use const App\Utils\MAX;
use function App\Utils\sayHello;
//$obj = new App\Models\Admin\Item();
//$obj = new Item();
$obj = new Item;
var_dump($obj);

echo MAX;
sayHello();