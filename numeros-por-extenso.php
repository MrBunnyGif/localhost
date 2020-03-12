<?php
	$algarismo = ['zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];
	$d10 = ['dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezeseis', 'dezesete', 'dezoito', 'dezenove'];
	$decimais = ['', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa',];
	$centesimos = ['cento', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecenstos', 'oitocentos', 'novescentos'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="#">
		<input type="number" name="input">
		<input type="submit">
	</form>
</body>
</html>
<?php
	$numero = $_POST["input"];
	$numero_tam = strlen($numero);
	if($numero_tam == 3){
		if($numero == 100){
			echo 'cem';
		}else if($numero[2] == 0){
			echo $centesimos[$numero[0]-1];
		}else if($numero[1] == 0){
			echo $centesimos[$numero[0]-1]." e ".$algarismo[$numero[2]];
		}else if($numero[1] == 1){
			echo $centesimos[$numero[0]-1]." e ".$d10[$numero[2]];
		}else{
			echo $centesimos[$numero[0]-1]." e ".$decimais[$numero[1]-1]." e ".$algarismo[$numero[2]];
		}
	}else if($numero_tam == 2){
		if ($numero < 20 && $numero >= 10){
			echo $d10[$numero[1]];
		}else if($numero[1] == 0){
			echo $decimais[$numero[0]-1];
		}else{
			echo $decimais[$numero[0]-1]." e ".$algarismo[$numero[1]];
		}
	}else if($numero_tam == 1){
		echo $algarismo[$numero[0]];
	}else{
		echo 'mil';
	}
?>