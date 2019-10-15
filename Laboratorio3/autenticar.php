<?
    $correo= $_POST["txtCorreo"];
    $password=sha1($_POST["txtPassword"]);

    $rusuario= $_POST['rusuario'];
    if($rusuario=='recordar')
    	setcookie('Usuario',$correo,time()+3600);

    $rpassword =$_POST['rpassword'];
    if($rpassword=='recordar')
    	setcookie('password',$password, time()+3600)
?>
