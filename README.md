# Design-Pattern

Description of the task:

Design patterns are solutions to recurring problems in software construction. There are many cataloged software patterns, we will learn the application of some of the most important ones in PHP.

Level 1
Singleton
You have the following class definition that is intended to be modeled after the famous Tigger character from A A. Milne's "Winnie The Pooh" books:

File: tigger.php

class Tigger {

       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
       }

}

It seems reasonable to expect that there is only one Tigger object (after all, it is the only one!), but the current implementation allows for multiple different Tigger objects:

Refactor the Tigger class into a Singleton considering the following points:

Define the getInstance() method that has no arguments. This function is responsible for creating an instance of the Tigger class only once and returning that single instance each time it is called.
Print Tigger's roar multiple times.
Add a getCounter() method that returns the number of times Tigger has roared.