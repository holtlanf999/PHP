<?php
	$a = 1; ] //Global Scope.

	function test(){
		echo $a; // Local var scope.
	};

	test(); // undefined var at line 5.
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
	$x = 5; //var.
	$y = 10; //var.
	
	function myTest2(){ //function.
		$GLOBALS[ 'y' ] = $GLOBALS[ 'x' ] + $GLOBALS[ 'y' ];
	}
	
	myTest2(); //call function.
	echo $y; //show result.
?>

<!-- static keyword -->

<?php  
	function myTest3(){
		static $x = 0;
		echo $x;
		$x++;
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

	$obj = new myClass();
	var_dump($obj);	
?>

<!-- class properties -->
<?php
	class myClass1{
		public $prop1 = "I'm a class property";
	}
	
	$obj = new myClass1();
	
	echo $obj->prop1; // read class properties.
?>

<!-- Class methods DA ERROR, HAY QUE REVISARLO-->

<?php 
	class myClass2{
		public $prop1 = "I'm a class property!";

		public function setProperty( $newVal ){
			this->$prop1 = $newVal;
		}

		public function getProperty(){
			return $this->$prop1 . "<br/>";
		}
	}

	$obj = new myClass2();

	echo $obj->getProperty(); //get the property value.
?>
