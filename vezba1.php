<?php 
  $vozila=["BMW","Mercedes","Audi"];
  array_push($vozila, "Zastava");
  echo $vozila[3]."<br>".$vozila[1]."<br>".$vozila[2]."<br>".$vozila[0];

$a=0;
 while ($a <= count($vozila)) {
    echo "<br>".$a;
    $a++;
 }
echo "<hr>";
$brojVozila=count($vozila);
var_dump($brojVozila);
var_dump($vozila);


?>