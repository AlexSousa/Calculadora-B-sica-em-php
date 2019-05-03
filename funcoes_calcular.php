<?php
class Cal {
	private $n1;
	private $n2;
	private $total;
	
	function __construct()
	{
		$this->n1=0;
		$this->n2=0;
		$this->total=0;
	}
	public function setN1($copia_n1){
		$this->n1=$copia_n1;
	}

	public function SetN2($copia_n2){
		$this->n2=$copia_n2;
		
	}
	public function somar(){
		$this->total=$this->n1+$this->n2;
	}
	public function subtrair(){
		if ($this->n1>$this->n2) {
			$this->total=$this->n1-$this->n2;
		} else {
			$this->total=$this->n2-$this->n1;
		}
	}
	public function multiplicacao(){
		$this->total=$this->n1*$this->n2;
	}
	public function divisao(){
		$this->total=$this->n1/$this->n2;
	}
	public function getTotal(){
		return $this->total;
	}
}
?>