<body style=" 
	background-color:#FFF0C9;
	">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>

<h2>Ejercicio 2</h2>
<h3>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array:</h3>
<br/>
<pre>
<?php
//cuadrados perfectos
$cuadrados=[];
for ($i=0; $i <50 ; $i++) { 
	$cuadrados[]=$i*$i;
	# code...	
} 
print_r($cuadrados)
?>
</pre>
<div id="num"></div>
<script>
tabla=[];
for(i = 0;i<=50;i++){
    tabla[i]=i*i;
} console.log(tabla);
for(i in tabla)
document.getElementById('num').innerHTML =tabla;
</script>