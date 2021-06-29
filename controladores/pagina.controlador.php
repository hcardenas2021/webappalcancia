<?php


class ControladorFormularios{

static public function ctrmostrarahorros(){

	$tabla = "ahorro";
	$respuesta = ModeloFormularios::mdlseleccionarahorros($tabla);
	return $respuesta;
}

static public function ctrseleccionarunahorro($item,$valor){

	$tabla = "ahorro";
	$respuesta = ModeloFormularios::mdlbuscarunahorro($tabla,$item,$valor);
	return $respuesta;
}

static public function ctrtotalahorrado($tabla){

	$vahorrado = ModeloFormularios::mdltotalahorros($tabla);
	return $vahorrado;
}

static public function ctrtotalahorrado50($tabla){

	$vahorrado50 = ModeloFormularios::mdltotalahorros50($tabla);
	return $vahorrado50;
}

static public function ctrtotalahorrado100($tabla){

	$vahorrado100 = ModeloFormularios::mdltotalahorros100($tabla);
	return $vahorrado100;
}

static public function ctrtotalahorrado200($tabla){

	$vahorrado200 = ModeloFormularios::mdltotalahorros200($tabla);
	return $vahorrado200;
}
static public function ctrtotalahorrado500($tabla){

	$vahorrado500 = ModeloFormularios::mdltotalahorros500($tabla);
	return $vahorrado500;
}

static public function ctrtotalahorrado1000($tabla){

	$vahorrado1000 = ModeloFormularios::mdltotalahorros1000($tabla);
	return $vahorrado1000;
}

static public function ctrtotalmonedas($tabla){
	$cantidadm = ModeloFormularios::mdltotalmonedas($tabla);
	return $cantidadm;
}

static public function ctrtotalmonedas50($tabla){
	$cantidadm50 = ModeloFormularios::mdltotalmonedas50($tabla);
	return $cantidadm50;
}

static public function ctrtotalmonedas100($tabla){
	$cantidadm100 = ModeloFormularios::mdltotalmonedas100($tabla);
	return $cantidadm100;
}

static public function ctrtotalmonedas200($tabla){
	$cantidadm200 = ModeloFormularios::mdltotalmonedas200($tabla);
	return $cantidadm200;
}

static public function ctrtotalmonedas500($tabla){
	$cantidadm500 = ModeloFormularios::mdltotalmonedas500($tabla);
	return $cantidadm500;
}

static public function ctrtotalmonedas1000($tabla){
	$cantidadm1000 = ModeloFormularios::mdltotalmonedas1000($tabla);
	return $cantidadm1000;
}


public function ctrguardarahorro(){
	if(isset($_POST["fecha"])){
		$tabla = 'ahorro';		
		$datos = array("fecha" => $_POST["fecha"],
			"tipom" => $_POST["tipom"],
			"cantidadm" => $_POST["cantidadm"],
			"vahorrado" => $_POST["vahorrado"],);
		$respuesta = ModeloFormularios::mdlguardarahorro($tabla, $datos);
		echo '<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
		window.location = "index.php";
		</script>';
	}
}

public function ctrlactualizarahorro(){
	if(isset($_POST["fecha"])){
		$tabla = 'ahorro';		
		$datos = array("fecha" => $_POST["fecha"],
			"tipom" => $_POST["tipom"],
			"cantidadm" => $_POST["cantidadm"],
			"id" => $_POST["id"],
			"vahorrado" => $_POST["vahorrado"],);
		$respuesta = ModeloFormularios::mdlactualizarahorro($tabla, $datos);
		echo '<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
		window.location = "misahorros";
		</script>';
	}
}


	public function ctreliminarahorro(){

	if(isset($_POST["rh"])){

		$valor=$_POST["rh"];
		$tabla='ahorro';
		$respuesta = ModeloFormularios::mdleliminarahorro($tabla, $valor);

		if ($respuesta=='ok'){
			echo '<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
		window.location = "misahorros";
		</script>';

		}
		}

}
}
?>