<?php 
$filas =$_GET['nrofilas'];
$columnas =$_GET['nrocol'];
?>
<table border="1">
		<?php 
		for ($i=0;$i<=$filas;$i++)
		{
            echo "<tr>";	
        
			for	($j=0;$j<=$columnas;$j++)
			{
				echo "<td>";
       			 if ($i ==0) //primela fila
      	   	  {

         		 if($j==0)
          		  echo "X";
            	 else
       	   		  echo $j;
       	   		
			   }
			   else 
			   {

			   	if($j==0)
			    	{
			   		
			   		echo $i;
			   	
			    	}
			   	else
			    	{
			   		echo $i*$j;
			    	}
			    
			    }
			    echo "</td>";
		    }

		     echo "</tr>";
		}
		?>
</table>