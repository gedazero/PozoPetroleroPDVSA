<?php
	class Modelo_Grafico{
		private $conexion;
		function __construct()
		{
			require_once('db.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
        }


		function TraerDatosGraficoLine(){
			$sql = "CALL SP_DATOSGRAFICO_POZO_1()";	
			$arreglo = array();
			
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
	}

	class Modelo_Grafico2{
		private $conexion;
		function __construct()
		{
			require_once('db.php');
			$this->conexion = new conexion();
			$this->conexion->conectar();
        }


		function TraerDatosGraficoLine(){
			$sql = "CALL SP_DATOSGRAFICO_POZO_2()";	
			$arreglo = array();
			
			if ($consulta = $this->conexion->conexion->query($sql)) {

				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					$arreglo[] = $consulta_VU;
				}
				return $arreglo;
				$this->conexion->cerrar();	
			}
		}
	}
?>