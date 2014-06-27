<?php
$a = array( array(
'name' => 'Roma',
'surname' => 'Lapin',
),
array(
'name' => 'Ivan',
'surname' => 'Ivanov',
),
array(
'name' => 'Igor',
'surname' => 'Petrov',
),
array(
'name' => 'Semen',
'surname' => 'Semenov',
),
array(
'name' => 'Nike',
'surname' => 'Petrov',
));

var_dump($a);

$b = array_slice ($a, 0, 2);
var_dump($b);

$c = array_slice ($a, 2);
var_dump($c);

?>

<?php
$epic_people3 = ["Oleg", "Olga", "Mira", "Key", "Oxana"];
$count = count($epic_people3);
$count_half = $count/2;
$count_half= round($count_half);
print_r($epic_people3);

for ($i=0; $i<$count_half; $i++)
{
echo "<a href=\"/massiv.php/?page=".$i."\">".($i + 1)."</a>"; 
}

echo "<br/>"; 
echo $_GET["page"];
?>