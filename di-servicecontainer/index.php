<?php
    
//require "vendor/autoload.php";
require "container.php";
$container = new Container;
    
$container->set(Database::class, function() {
    
    return new Database(host: "locahost",
                        name: "product_db",
                        user: "root",
                        password: "");

});

/*$container = new DI\Container([

    Database::class => function() {

        return new Database(host: "",
                            name: "",
                            user: "",
                            password: "");
    }

]);*/

$repository = $container->get(Repository::class);

$data = $repository->getAll();

var_dump($data);