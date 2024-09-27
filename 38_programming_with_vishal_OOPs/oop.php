<?php

// Parent class
class class1 {
    // Constructor
    function __construct() {
        echo "construct<br>";
    }

    // Method in parent class
    function test1() {
        echo "Class1_test<br>";
    }

    // Destructor
    function __destruct() {
        echo "destruct<br>";
    }
}

// Child class extending the parent class
class class2 extends class1 {
    // Method in child class
    function test2() {
        echo "class2 test 2<br>";
        parent::__construct();
    }
}

// Creating an object of the child class
$obj = new class2(); // This will call the constructor of class1
$obj->test2(); // Calling the method from class2

?>
