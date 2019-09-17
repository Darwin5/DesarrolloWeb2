<?php 
$n =$_GET['numero'];
echo $n;
 ?>	
<?php 
include("Operaciones.php");

$figonaci = new operaciones();
$figonaci->figonaci();


?>
