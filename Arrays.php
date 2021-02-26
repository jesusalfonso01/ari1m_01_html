<body style=" 
	background-color:#FFF0C9;
	">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>
<h1><center>Arrays</center></h1>
<h2><center>Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto</center></h2>

<form>
<button>Mostrar</button>
<input name="mes" id="mes" value="<?=$_GET["mes"]?>"onkeyup="Mostrar()"/>
</form>
<br/>
<?php
if(!isset($_GET["mes"]))
	$_GET["mes"]=1;
$meses = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
$mes= $_GET['mes'];
foreach ($meses as $n=>$m){
if ($n==$mes-1){
echo $m;
}}

?>
</br>
</br>

<div id="t"></div>
<script>

mes = [
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];
function Mostrar(){
	meses=document.getElementById('mes').value;
document.getElementById('t').innerHTML =mes[meses-1];
}
Mostrar();
</script>



<h2><center>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto</h2>
<br/>

<?php
$companeros = [
	'1'=> 'Andrei',
	'2'=> 'Fabian',
	'3'=> 'Hector',
	'4'=> 'Gabriel',
	'5'=> 'Nury',
	'6'=> 'Agustina',
	'7'=> 'Jesús',
	'10'=> 'Ismael',
	'8'=> 'Daniel',
	'12'=> 'Jesús Alfonso',
	'13'=> 'Javier',
	'14'=> 'Rodrigo S.',
	'15'=> 'Alvaro',
	'16'=> 'Darius',
	'17'=> 'Ivan',
	'18'=> 'Rodrigo T.',
];
$i=rand(0,count($companeros));
$c=0;
foreach($companeros as $m=>$nombre){
		$c++;

		if($i==$c)
			echo $m. '-'.$nombre.'<br/>';
}
?>
</br>
<div id="r3"></div>
<script>
puestos= [
	'1-Andrei',
	'2-Fabian',
	'3-Hector',
	'4-Gabriel',
	'5-Nury',
	'6-Agustina',
	'7-Jesus',
	'10-Ismael',
	'8-Daniel',
	'12-Jesus Alfonso',
	'13-Javier',
	'14-Rodrigo S.',
	'15-Alvaro',
	'16-Darius',
	'17-Ivan',
	'18-Rodrigo T.',
];
i=Math.random()*((puestos.length)-1);
i=Math.round(i);
console.log(i);
console.log(puestos);
document.getElementById('r3').innerHTML =puestos[i];
</script>
	<h2>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array</h2>
<?php
	//arrays
		$raiz = [
			'vacio',
			'√1=>1',
			'√4=>2',
			'√9=>3',
			'√16=>4',
			'√25=>5',
			'√36=>6',
			'√49=>7',
			'√64=>8',
			'√81=>9',
			'√100=>10',
			'√121=>11',
			'√144=>12',
			'√169=>13',
		];
?>

<form>

	<button onclick="seleccionar()"> seleccionar </button>

<?php

	$txt='<select name="resultado raiz(1-13)">';
	for ($i=1; $i<= 13; $i++)
		$txt.='<option>'.$i.'</option>';
	$txt.='</select>';
	echo $txt;
?>
</form>

<?php
echo $txt[$_GET["$txt"]];
?>

<div id="u" </div>

<div id="v" </div>