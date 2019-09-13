<?php 

function SieveOfEratosthenes($n) 
{ 
    
    $prime = array_fill(0, $n+1, true); 
  
    for ($p = 2; $p*$p <= $n; $p++) 
    { 
          
        
        if ($prime[$p] == true) 
        { 
              
           
            for ($i = $p*$p; $i <= $n; $i += $p) 
                $prime[$i] = false; 
        } 
    } 
  
    $sum = 0;
    for ($p = 1000; $p <= 3000; $p++) 
        if ($prime[$p]) 
             $sum += $p;
   
   echo $sum;         
} 
  
// Driver Program to test above function 
    $n = 35000; 
    
    SieveOfEratosthenes($n); 
  
// This code is contributed by mits 
?>