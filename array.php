<?php 
$ucitelj="Milan";
$ucitelj.=" Pasic";
$prvoDva=["Strahinja","Petar","Luka","Emilija","Jovana","Jovan","Milica" ];


echo "<br> $ucitelj <br>";
echo $prvoDva[6];


for ($i=0; $i <count($prvoDva) ; $i++) { 
    echo "<br>".$prvoDva[$i];
}

echo "<hr>";

$prvoDva[0]="Nikola";
$prvoDva[1]="Handjo";


for ($i=0; $i <count($prvoDva) ; $i++) { 
    echo "<br>".$prvoDva[$i];
}
array_push($prvoDva, "Milka" );
echo "<hr>";
for ($i=0; $i <count($prvoDva) ; $i++) { 
    echo "<br>".$prvoDva[$i];
}



?>