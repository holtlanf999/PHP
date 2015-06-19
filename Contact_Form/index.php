<!DOCTYPE html>
<html>
	<head>
		<title>Contact Form</title>
		<link rel="stylesheet" href="css/main.css"/>
		<meta charset="UTF-8"/>
	</head>
	<body>

		<div id="contact-form">

			<h1>Contact Form</h1>

			<?php 

				// $label;
				// $labelVal;
				// $name;
				// $placeholder;
				// $value;

				class form{

					public function initForm(){
						echo '<form id="register" action="checkReg.php" method="post" accept-charset="UTF-8">';
					}

					public function titulo( $label, $name, $placeholder ){
						echo '<label for="'.$label.'" class="hidden">Titulo: </label>'.'<input type="text" name="'.$name.'" placeholder="'.$placeholder.'"/>';	
					}

					public function email( $label, $labelVal, $name, $placeholder ){
						echo '<label for="'.$label.'" class="hidden">'.$labelVal.'</label>'.'<input type="email" name="'.$name.'" placeholder="'.$placeholder.'"/>';
					}

					public function message( $label, $labelVal, $name, $placeholder ){
						echo '<label for="'.$label.'" class="hidden">'.$labelVal.'</label>'.'<textarea name="'.$name.'" placeholder="'.$placeholder.'"></textarea>';	
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
				}

				$printForm = new form();

				$printForm->initForm();
				$printForm->titulo( 'Titulo', 'titulo', ' Título' );
				$printForm->email( 'Email', 'email: ','email', ' email' );
				$printForm->message( 'message', 'Mensaje: ', 'message',' Mensaje' );
				$printForm->reset( 'Borrar datos del formulario' );
				$printForm->submit( 'submit-btn' );
				$printForm->endForm();
			?>

	</div><!-- contact-form -->

	</body>
</html>