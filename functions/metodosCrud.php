<?php 

	class metodos{
		public function mostrarDatos($sql){
			//$c= new conectar();
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			//var_dump($datos);
			$sql="INSERT INTO `material-maestro`(`material_name`, `categories`, `cantidad`, `areaName`) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function insertarDatosOrders($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			//var_dump($datos);
			$sql="INSERT INTO `orders`(`material_name`, `categories`, `cantidad`, `areaName`) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			//var_dump($datos);
		
			$sql="UPDATE `material-maestro` set material_name='$datos[0]',
			cantidad='$datos[1]', categories='$datos[2]', areaName='$datos[3]'
			where id='$datos[4]'";
			
			return $result=mysqli_query($conexion,$sql);

		}
        
        public function actualizaDatosNombreCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			//var_dump($datos);
		
			$sql="UPDATE `categories` set categoria='$datos[0]'
            where categories_id='$datos[1]'";
			
			return $result=mysqli_query($conexion,$sql);

		}
		
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from `material-maestro` where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
        
        public function eliminarDatosNombreCategoria($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from `categories` where categories_id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}

		public function creaCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="INSERT INTO `categories`(`categoria`) VALUES ('$datos[0]')";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>