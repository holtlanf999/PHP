( function( window ){
	
	function remove( id ){
		var xhr = new XMLHttpRequest();
		xhr.open( "DELETE",url )
	}

	function deleteElement(){
		confirm( 'are you sure you want to delete' );

		if ( confirm ){
			console.log( "Borrado" );
		}else{
			console.log( "Existente" );
		}
	}

	return{
		destroy:deleteElement
	}
} )( window );