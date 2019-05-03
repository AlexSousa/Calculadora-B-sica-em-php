<?php
require_once'funcoes_calcular.php';
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$op=$_POST['operacao'];
$funcao = new Cal();
$funcao->setN1($n1);
$funcao->setN2($n2);
switch ($op) {
	case 'soma':
		$funcao->somar();
		break;
	case 'subtrair':
		$funcao->subtrair();
		break;
	case 'multiplicacao':
		$funcao->multiplicacao();
		break;
	case 'divisao';
		$funcao->divisao();
		break;
}
echo $funcao->getTotal();
?>