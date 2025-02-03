<?php
require "vendor/autoload.php";
use DI\Container;
/*require 'src/Repository.php';
require 'src/Container.php';
require 'src/Database.php';
require 'src/BookCalc.php';*/

/*$container = new Container();
$container->set(Database::class, function(){
    return new Database(host:"localhost",
                        name:"product_db",
                        user:"root",
                        password:"");
});*/
//$database = $container->get(Database::class);
//$database = new Database();
//$datetime = new \DateTime();
//$getbook = new BookCalc();
//$repository = new Repository($database,$datetime,$getbook);
//$repository = new Repository($database);
$container = new Container([
    Database::class => function () {
        return new Database(host:"localhost",
                            name:"product_db",
                            user:"root",
                            password:"");
    }
]);
$repository = $container->get(Repository::class);
$data = $repository->getAll();
//$data = $repository->getToday();
$data1 = $repository->fetchbookdetails();
echo "<pre>";
var_dump($data);
var_dump($data1);