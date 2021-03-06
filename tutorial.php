<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    //$fgmembersite->RedirectToURL("login.php");
    //exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Tutorial y Preguntas Frecuentes</title>
	</head>
	<body>
	<p><a href="cities.php"> Volver a la Pantalla de Selección </a></p>
	<div class="tutorial-question-selection">
																<p> CÓMO JUGAR </p>  												                          
		<p> - El objetivo del juego es terminar el puzzle en el menor tiempo posible para ganar las 3 estrellas. </p>
		<p> - Las imágenes se dividirán en más o en menos piezas dependiendo del tipo de nivel. Por ejemplo, Granada es más difícil que Melilla. </p>
		<p> - Mueve las piezas seleccionándolas y dejándolas en el lugar que creas conveniente. </p>
		<p> - Con un toque empezará el puzzle. ¡BUENA SUERTE! </p>
		
															<p> PREGUNTAS FRECUENTES </p>
		 <p> - ¿Cómo sé que he terminado el puzzle? </p>
		 <p> Cuando hayas colocado bien todas las piezas del puzzle, volverá a su formato normal y te indicará los puntos y estrellas que has conseguido. </p>
		 <p> - He visto un fallo dentro del juego. ¿Qué puedo hacer? </p>
		 <p> Lo más seguro es que sea un error de programación. Por si acaso, reinicia el juego y comprueba si el error vuelve a suceder. Si ha sucedido unas 3 veces, contacta con nosotros a través de nuestro correo electrónico. Estaremos agradecidos de saber el error para arreglarlo.</p>
		 <p> - Soy un usuario de móvil y no puedo mover las piezas de un puzzle. ¿Por qué? </p>
		 <p> Porque este juego está EN DESARROLLO y todavía no hemos diseñado los controles para el móvil.</p>
		 <p> - Este nivel es muy díficil. ¿Estás seguro que se pueden hacer las 3 estrellas? </p>
		 <p> No te preocupes, lo tenemos todo comprobado. Está todo perfectamente pasable. No pasa nada si no las consigues a la primera vez, podrás intentarlo todas las veces que quieras. </p>
		 <p> - He vuelto a entrar al juego y he visto que he perdido mis datos. ¿Qué puedo hacer? </p>
		 <p> Muy sencillo. Vete a la pantalla principal y selecciona la imagen principal de configuración y regístrate. Sigue todos los pasos, y una vez hecho, tus progresos se sincronizarán con automáticamente. </p>

		 <p> Esperamos haber solucionado tu pregunta con este cuestionario. Si no ha sido así, contacta con nosotros a través de nuestro correo: primitech.studios@gmail.com </p>

	</div>
	</body>
</html>