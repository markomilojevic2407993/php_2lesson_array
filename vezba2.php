<?php 

$patike=["Nike", "Adidas", "Reabok"];
//rsort (revarse-sort) sort
sort($patike);



echo "$patike[0] $patike[1]  $patike[2]";


unset($patike[0]);

var_dump($patike);


?>