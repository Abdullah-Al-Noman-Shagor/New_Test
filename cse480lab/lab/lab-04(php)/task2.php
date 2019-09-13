<?php 

   $n = 5;
   $c=0;
   for($x=$n; $x>=1 ;  $x--)
   {
   	for($y=1 ; $y <= $c ;  $y++ )
   	{
   		echo "&nbsp";
   	
   	}

   	for($s = 1 ; $s <= (2*($x-1)+1) ; $s++ )
   	{

        echo "*";
   	}
   	echo "<br>";
   	$c++;
   }
   $c=4;
    for($x=2; $x<=$n ;  $x++)
   {
   	for($y=1 ; $y <= $c ;  $y++ )
   	{
   		echo "&nbsp";
   		
   	}

   	for($s = 1 ; $s <= (2*($x-1)+1) ; $s++ )
   	{

        echo "*";
   	}
   	echo "<br>";
   	$c--;
   }

 ?>