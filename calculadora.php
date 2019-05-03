<!DOCTYPE html>
<html>
<head>
	<title>Calculadora 1.0</title>
</head>
<body>
<form method="post" action="Calcular.php">
	<label>
		Digite o primeiro Numero
	</label>
	<input type="text" name="n1">
	<label>
		Digite o segundo Numero
	</label>
	<input type="text" name="n2">
	<br>
	<br>

	<input type="radio" name="operacao" value="soma">
		<label>Somar</label>
	<input type="radio" name="operacao" value="subtrair">
		<label>Subtração</label> 
	<input type="radio" name="operacao" value="multiplicacao">
		<label>Multiplicacao</label>
	<input type="radio" name="operacao" value="divisao">
		<label>Divisao</label>
		<br>
		<br>
		<input type="submit" name="botao" value="Calcular">	
</form>		

</body>
</html>