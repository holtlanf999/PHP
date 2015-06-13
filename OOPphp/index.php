<!DOCTYPE html>
<html>
	<head>
		<title>PHP OOP</title>
	</head>
	<body>
		<?php
			
			function test(){
				$a = 1;
				echo $a;
			}
			test();
		?>

		<!-- Global scope -->

		<?php
			$x = 5;
			$y = 10;

			function myTest1(){
				global $x, $y;
				$y = $x + $y;
			}

			myTest1();
			echo $y;
		?>

		<?php
			$a = 5;
			$b = 10;
			
			function myTest2(){ //function.
				$GLOBALS[ 'b' ] = $GLOBALS[ 'a' ] + $GLOBALS[ 'b' ];
			}
			
			myTest2();
			echo $b;
		?>

		<!-- static keyword -->

		<?php  
			function myTest3(){
				static $c = 0;
				echo $c;
				$c++;
			}
			myTest3();
			myTest3();
			myTest3();
		?>

		<!-- classes -->

		<?php 
			class myClass{
				// class properties and methods goes in here.
			}

			$obj0 = new myClass();
			var_dump($obj0);	
		?>

		<!-- class properties -->

		<?php
			class myClass1{
				public $prop1 = "I'm a class property";
			}
			
			$obj = new myClass1();
			
			echo $obj->prop1; // read class properties.
		?>

		<!-- Class methods-->

		<?php 
			class myClass2{
				public $prop2 = "I'm a class property!";

				public function setProperty( $newVal ){
					$this->prop2 = $newVal;
				}

				public function getProperty(){
					return $this->prop2 . "<br/>";
				}
			}

			$obj1 = new myClass2();

			echo $obj1->getProperty(); //get the property value.

			$obj1->setProperty("I'm a new property value"); //set a new one.

			echo $obj1->getProperty(); //read it out again to show the change.
		?>

		<!-- construct and destruct -->

		<?php 
			class myClass3{
				public $prop3 = "I'm a class property";

				public function __construct(){
					echo 'The class "', __CLASS__, '" was initiated.<br />';
				}	

				public function __destruct(){
					echo 'The class "', __CLASS__, '" was destroyed.<br />';
				}
			}

			$obj2 = new myClass3;
		?>

		<?php 
			class MyClass4{
				const CONSTANT = 'constant value';

				function showConstant() {
					echo self::CONSTANT;
				}
			}

			echo MyClass4::CONSTANT;

			$class = new MyClass4();
			$class-> showConstant();

			echo $class::CONSTANT;
		?>

	</body>
</html>