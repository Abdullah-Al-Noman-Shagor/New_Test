

<?php 

$x = "1_2-3#4-_5";

 
$title = str_replace( array(  '#', '_', '-' ), '', $x);
echo $title;

?>