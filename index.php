<?php
	function guessNumber( $number ){
		if( !is_numeric( $number ) ){
			echo 'Error: $number is not an integer';
			return false;
	}

	$random = rand( 1, 10 );

	echo 'The random ';
	echo $random;
	echo '<br/>';

	echo 'The number ';
	echo $number;
	echo '<br/>';

	if( $number == $random ){
		echo 'adivino';

	} else {
		echo 'no adivino';
	}
}
	guessNumber( 3 );
?>

