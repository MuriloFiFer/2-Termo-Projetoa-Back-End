<?

require_once 'Veiculo.php';


class Carro extends Veiculo{

	

	public function getMarca($marca){
		$this->marca = $marca;
	}	


	public function setMarca($marca){
		$this->marca = $marca;
	}	
	

}

?>