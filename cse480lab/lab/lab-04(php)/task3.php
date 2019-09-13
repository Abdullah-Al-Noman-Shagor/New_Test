<?php 
   
   $color = array('A' =>'Blue' , 'B'=>'Yellow');
   
   foreach ($color as $key => $value) {

   	# code...
   	$color[$key] = strtoupper($value);
   
   }
   print_r($color);
   echo "<br>";
   foreach ($color as $key => $value) {

   	# code...
   	$color[$key] = strtolower($value);
   
   }
   print_r($color);


?>