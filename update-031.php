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
		<title>Noticias</title>
	</head>
	<body>
	<p><a href="news.php"> Volver al Tablón de Noticias </a></p>
	<div class="main-container">
		<p> ACTUALIZACIÓN (MINI): VERSIÓN 0.3.1 </p>
		<p> ¿Qué novedades trae? </p>
		<p> - Se han añadido 2 nuevos niveles a Madrid. </p>
		<p> - Se ha arreglado un bug en el Nivel 18 que no mandaba los datos al servidor. </p>
		<p> - Se ha arreglado varios bugs a la hora de mandar correos para el registro de tu cuenta. </p>	
		<p> - Se han hecho mejoras en la traducción del juego. </p>

		<p> ¿Podrás resolver el mundo del Puzzle? </p>
		<p> &copy; 2017 - 2018 Primitech Studios </p>
	</div>
	</body>
</html>