<?php

require('itemsClass.php');

echo '<!DOCTYPE html>
<html>
	<head>
		<title>Inventario</title>
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body>
	<script type="text"/javascript" src="js/main.js"></script>
	';
// instace of the items
$items = new Items();

// get all ite ms on the database
$myItems= $items->all();

echo '
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>created</th>
		<th>updated</th>
	<tr>

	<tr>
';
// get an item
// $myItem = $items->get( 8 );
foreach ( $myItems as $key => $eachItem ) {
	echo'
	<tr>
		<td>'; print_r( $eachItem['id'] ); echo '</td>
		<td>'; print_r( $eachItem['name'] ); echo '</td>
		<td>'; print_r( $eachItem['created'] ); echo '</td>
		<td>'; print_r( $eachItem['updated'] ); echo '</td>
		<td><button onclick="deleteItem'.$eachItem['id']; echo'()">borrar</button></td>
		<td><button onclick="updateItem'.$eachItem['id']; echo'()">update</button></td>
	</tr>';	
}

echo '</table>';


echo '
	</body>
</html>';

// update an item
$items->update(2, 'Test update');

// create a new item
// $items->create('Test 2');

// delete an item
$items->delete(10);


