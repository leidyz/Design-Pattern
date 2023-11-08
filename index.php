<?php
require_once "tigger.php";

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();

$tigger2 = Tigger::getInstance();
$tigger2->roar();

echo "The tiggers have roared ".tigger::getCounter()." times."


?>