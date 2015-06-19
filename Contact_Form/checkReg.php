<?php

	class Template{
		public function printThanks(){
			if( empty( $_POST['titulo'] ) or empty( $_POST['email'] ) or empty( $_POST['message'] ) ){
				echo '<p>Ha ocurrido un error</p>';
			} else {
				echo '<p>Gracias por registrarte!</p>';
				echo '<p>El titulo de tu mensaje es: '.$_POST[ 'titulo' ].'</p>';
				echo '<p>Tu correo es: '.$_POST[ 'email' ].'</p>';
				echo '<p>Tu mensaje: '.$_POST[ 'message' ].'</p>'; 
			}
		}

	}

	$pt = new Template();

	$pt->printThanks();
	
?>