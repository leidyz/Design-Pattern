<?php
/*Define the getInstance() method that has no arguments. This function is responsible for creating an instance of the Tigger class only once and returning that single instance each time it is called.
Print Tigger's roar multiple times.
Add a getCounter() method that returns the number of times Tigger has roared.*/
class Tigger{

    private static $instance = null;
    private static $totalRoars = 0;

    private function __construct(){
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        echo "Grrr!" . PHP_EOL;
        self::$totalRoars++;
    }

    public static function getCounter(){
        return self::$totalRoars;
    }


}



?>