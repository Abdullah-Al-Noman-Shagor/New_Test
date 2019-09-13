<?php 
 $str = "The quick brown [dog]";
 $start  = strpos($str, '[');
 $end    = strpos($str, ']', $start + 1);
 $length = $end - $start;
 $result = substr($str, $start + 1, $length - 1);
 echo $result;


 ?>