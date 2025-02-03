<?php
class Container {

    private array $registry = [];

    public function set(string $name, Closure $value): void
    {
        $this->registry[$name] = $value;
    }

    public function get(string $class_name):object
    {
        if(array_key_exists($class_name,$this->registry)){
            return $this->registry[$class_name]();
        }
       // echo "<pre>";
        //print_r($class_name);
        $reflector = new ReflectionClass($class_name);
        $constructor = $reflector->getConstructor();
        echo "<pre>";
        var_dump($constructor);
        
        if($constructor===null){
            //echo "<pre>";
            //print_r($class_name);
            return new $class_name;
        }
        $dependencies = [];
        foreach($constructor->getParameters() as $parameter){
            $type = $parameter->getType();
            
            $dependencies[] = $this->get((String)$type);
        }
        //echo "<pre>";
        //var_dump($dependencies);
        return new $class_name(...$dependencies);
        //return new $class_name;
    }
}