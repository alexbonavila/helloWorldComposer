<?php

namespace Com\Iesebre\Dam2\alexbonavila\helloWorldComposer;

use Faker\Factory;

require __DIR__ . "/../vendor/autoload.php";

class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct(){

        $this->faker = Factory::create();
    }

    public function say_hello(){
        echo "Hola ". $this->faker->name."\n";
    }

}