
<?php 
 class operaciones
 {
 	private $n;
 	private $cadena;
 	private $a;
 	private $b;
 	private $c;
 	function __construct()
	{
		$this->n = $n;
		$this->a =$a;
		$this->b =$b;
		$this->c =$c;
	}
	function figonaci()
	{
		$n =$_POST['numero'];
		$v=array();
		$v[0]=0;
		$v[1]=1;
		for ($i=2;$i<=$n;$i++)
			{
	 	 		$v[$i]=$v[$i-1]+$v[$i-2];
 			}
	    echo "el figonaci de ".$n ."es :". $v[$n]; 
	}
	function calcularMenor($a,$b,$c)
	{

        if ($a < $b)
        {
        	if($a < $c)
        	{
        		echo "el numero menor es :".$a;
        	}
        	else 
        		echo "el numero menor es :".$c;
        }
        else
        {
        	if($b < $c)
        	{
        		echo "el numero menor es: ".$b;
        	}
        	else
        		echo "el numero menor es: ".$c;
        }

    }
}


 ?>