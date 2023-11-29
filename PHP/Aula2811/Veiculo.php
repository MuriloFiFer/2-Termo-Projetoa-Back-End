<?php

//	Modificadores de visibilidade

//public -> atributps e metodos estão acessiveis por todos, dentro e fora da classe onde estão implementados

//protected  -> atributos e metodos estão acessiveis pela propria classe onde estão declarados e pelas classes hereiras)herança)

//private -> atriburtos e metodos estão acessiveis aénas pela classe onde estão declarados.


class Veiculo{

	public $marca;
	protected $modelo;
	public $cor;

	public function Ligar(){
		echo "Ligado...";
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
}

?>