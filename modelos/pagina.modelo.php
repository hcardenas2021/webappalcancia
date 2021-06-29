<?php
require_once "conexion.php";

class ModeloFormularios{

static public function mdlseleccionarahorros($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id asc ");
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt=null;

	}

static public function mdlbuscarunahorro($tabla,$item,$valor){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ");
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt -> fetch();
	}


static public function mdltotalahorros($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(vahorrado) as vahorrado FROM $tabla");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalahorros50($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM( vahorrado ) AS vahorrado50 FROM $tabla where tipom =50");
			
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalahorros100($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM( vahorrado ) AS vahorrado100 FROM $tabla where tipom =100");
			
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalahorros200($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM( vahorrado ) AS vahorrado200 FROM $tabla where tipom =200");
			
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalahorros500($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM( vahorrado ) AS vahorrado500 FROM $tabla where tipom =500");
			
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalahorros1000($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT SUM( vahorrado ) AS vahorrado1000 FROM $tabla where tipom =1000");
			
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalmonedas($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm FROM $tabla");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalmonedas50($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm50 FROM $tabla where tipom =50");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalmonedas100($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm100 FROM $tabla where tipom =100");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

static public function mdltotalmonedas200($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm200 FROM $tabla where tipom =200");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

static public function mdltotalmonedas500($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm500 FROM $tabla where tipom =500");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}

	static public function mdltotalmonedas1000($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT sum(cantidadm) as cantidadm1000 FROM $tabla where tipom =1000");
			$stmt->execute();
			return $stmt -> fetch();
			$stmt->close();
			$stmt=null;
	}



	static public function mdlguardarahorro($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fecha, tipom, cantidadm, vahorrado) VALUES (:fecha, :tipom, :cantidadm, :vahorrado)");
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":tipom", $datos["tipom"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidadm", $datos["cantidadm"], PDO::PARAM_STR);
		$stmt->bindParam(":vahorrado", $datos["vahorrado"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "correcto";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}	

	}

	static public function mdlactualizarahorro($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha = :fecha, tipom=:tipom, cantidadm=:cantidadm, vahorrado=:vahorrado WHERE id = :id");
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":tipom", $datos["tipom"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidadm", $datos["cantidadm"], PDO::PARAM_STR);
		$stmt->bindParam(":vahorrado", $datos["vahorrado"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "correcto";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}	

	}

static public function mdleliminarahorro($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);
		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}	
	}




}
?>