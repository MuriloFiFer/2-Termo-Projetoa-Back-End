<?

require_once 'Carro.php';


class Moto extends Carro{


	public function getMarca($marca){
		$this->marca = $marca;
	}	


	public function setMarca($marca){
		$this->marca = $marca;
	}	
	

}


	
	



?>