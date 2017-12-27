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
		<link rel="stylesheet" type="text/css" href="css/city.css">
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<title>Segovia</title>
	</head>
	<body>
	<div class="main-container">
		<ul>
			<li>
				<p>Acueducto Romano</p>
				<div>
					<p><a href="puzzle.php?name=segovia/acueducto-segovia">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Alcázar de Segovia</p>
				<div>
					<p><a href="puzzle.php?name=segovia/alcazar-segovia">¡Hacer el puzzle!</a></p>
				</div>
			</li>
			<li>
				<p>Plaza de la Artillería</p>
				<div>
					<p><a href="puzzle.php?name=segovia/plaza-artilleria-segovia">¡Hacer el puzzle!</a></p>
				</div>
			</li>
		</ul>
		</div>
	</body>
</html>