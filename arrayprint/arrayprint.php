<?php
	$cars = array ( 
		'volvo',
		'BMW', 
		'Toyota',
		'Mercedez-Benz', 
		'Ford', 
		'Audi' 
	);

echo '<select>';

for ( $index = 0; $index < sizeof( $cars ); $index ++) { 
	echo '<option>';
	echo $cars[$index];
}

echo '</select>';

?>


<?php
	$cars = array ( 
		1 => 'volvo',
		2 => 'BMW', 
		3 => 'Toyota',
		4 => 'Mercedez-Benz', 
		5 => 'Ford', 
		6 => 'Audi' 
	);

echo '<select>';

foreach ( $cars as $index => $car ) { 
	echo '<option value"'.$index.'">';
	echo $car;
	echo '</option>';
}

echo '</select>';

?>