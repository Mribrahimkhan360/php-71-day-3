<?php
class class1{
	function __construct(){
		echo "construct";
	}
	function test()
	{
		// code...
		echo "Class1_test";
	}
	function __destruct(){
		echo "destruct";
	}
}
$obj= new class1();
$obj->test();
?>