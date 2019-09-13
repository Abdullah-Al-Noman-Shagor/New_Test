<?php 
   $string = "Wel%come *to( codex<world, the |world o^f pro?gramm&ing.";

// Remove special characters
   $cleanStr = preg_replace('/[^A-Za-z0-9]/', '', $string) ;
   echo $cleanStr;

 ?>