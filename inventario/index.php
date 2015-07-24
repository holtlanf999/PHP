<?php

require('itemsClass.php');

// instace of the items
$items = new Items();

// get all items on the database
$myItems= $items->all();
// echo '<hr><pre>'; print_r($myItems); echo '</pre><hr>';

// get an item
// $myItem = $items->get( 8 );
foreach ( $myItems as $key => $eachItem ) {
	echo '<hr><pre>'; print_r( $eachItem ); echo '</pre><hr>';
}


// update an item
$items->update(2, 'Test update');

// create a new item
$items->create('Test 2');

// delete an item
$items->delete(10);


