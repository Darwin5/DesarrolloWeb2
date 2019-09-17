<?php 

$n =$_POST['numero'];

 ?>	

 <?php 
include("Operaciones.php");

$figonaci = new operaciones();
$figonaci->figonaci($n);


?>
