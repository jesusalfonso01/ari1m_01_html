<?php
if (!isset($_GET["meses"]))
	$_GET["meses"]=1;
?>
<body style=" 
	background-color:#FFF0C9;
	">
<head>
	<meta name="viewport" content="width=device-width", initial-scale="1", maxium-scale="2">
</head>
<center><h1>Ejercicio 2</h1></center>
<h2>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto</h2>
<form>
<input value="<?=$_GET['meses']?>" type="text" name="meses" id ="nmeses" onkeyup="calcular();"/>
<button> seleccionar </button>
</form>
<div style="background-color:pink;"id="mes">resultado </div>
<?php
//arrays meses del año
$meses = [
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
	];
echo $meses[$_GET["meses"]-1];
?>
<script>
function  calcular(){
meses  =  [
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
] ;
dia= document.getElementById('nmeses').value ;
document.getElementById('mes').innerHTML= meses[mes-1];
}
calcular();
</script>