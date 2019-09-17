<?php 
$a =$_GET['a'];
$b =$_GET['b'];
$c =$_GET['c'];
 ?>	
<?php 
include("Operaciones.php");

$numeromenor=new operaciones();
$numeromenor->calcularMenor($a,$b,$c);
 ?>



