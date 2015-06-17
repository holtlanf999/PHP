<?php 
	error_reporting( E_ALL );
	ini_set( 'display_errors', 1 );
?>

<?php  
	echo '<form action="action.php" method="post">';
	echo '<p>Your name: <input type="text" name="name" /></p>';
	echo '<p>Your age: <input type="text" name="age" /></p>';
	echo '<p><input type="submit" /></p>';
	echo '</form>';
?>

