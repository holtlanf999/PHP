<?php 

	class form{

		public function initHtml(){
			echo '<!DOCTYPE html>';
			echo '<html>';
		}

		public function createHead( $title, $charSet, $cssFileName ){
			echo '<head>';
				echo '<title>'.$title.'</title>';
				echo '<meta charset="'.$charSet.'"/>';
				echo '<link rel="stylesheet" href="css/'.$cssFileName.'">';
			echo '</head>';
		}

		public function initBody( $id, $title ){
			echo '<body>';
				echo '<div id="'.$id.'">';
					echo '<h1>'.$title.'</h1>';
		}

		public function initForm(){
			echo '<form id="register" action="checkReg.php" method="post" accept-charset="UTF-8">';
		}

		public function titulo( $label, $name, $placeholder ){
			echo '<label for="'.$label.'" class="hidden">Titulo: </label>'.'<input type="text" name="'.$name.'" placeholder="'.$placeholder.'" required="required"/>';	
		}

		public function email( $label, $labelVal, $name, $placeholder ){
			echo '<label for="'.$label.'" class="hidden">'.$labelVal.'</label>'.'<input type="email" name="'.$name.'" placeholder="'.$placeholder.'" required="required"/>';
		}

		public function message( $label, $labelVal, $name, $placeholder ){
			echo '<label for="'.$label.'" class="hidden">'.$labelVal.'</label>'.'<textarea name="'.$name.'" placeholder="'.$placeholder.'" required="required"></textarea>';	
		}

		public function reset( $value ){
			echo '<input type="reset" value="'.$value.'" class="button"/>';
		}

		public function submit( $name ){
			echo '<input type="submit" name="'.$name.'"  class="button"/>';
		}

		public function endForm(){
			echo '</form>';
		}

		public function endBody(){
				echo '</div>';
			echo '</body>';
		}

		public function endHtml(){
			echo '</html>';
		}

	}

	$printForm = new form();

	$printForm->initHtml();
	$printForm->createHead( 'Contact Form', 'UTF-8', 'main.css' );
	$printForm->initBody( 'contact-form', 'Contact Form' );
	$printForm->initForm();
	$printForm->titulo( 'Titulo', 'titulo', ' Título' );
	$printForm->email( 'Email', 'email: ','email', ' email' );
	$printForm->message( 'message', 'Mensaje: ', 'message',' Mensaje' );
	$printForm->reset( 'Borrar datos del formulario' );
	$printForm->submit( 'submit-btn' );
	$printForm->endForm();
	$printForm->endBody();
	$printForm->endHtml();
?>