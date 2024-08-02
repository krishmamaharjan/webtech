<?php

// creating index array
$scores = array(1,"Sita",3);
echo $scores[0];    //1
echo "<br>";
echo $scores[2];    //1
echo "<br>";
print_r($scores);
echo "<br>";
unset($scores[1]);
// printing all the elements of array by using for each loop
foreach($scores as $s)
{
    echo $s. " ";
}
echo "<br>";
// aassociative array
$names = array("anish"=>"Sanepa","jenisha"=>"koteshwor","Manshi"=>"Sanepa");
// lets print anish address)
echo $names["anish"];
echo "<br>";

foreach($names as $i=>$v)
{
    echo $i. " is from ".$v. "<br>";
}

$names=array
(
    "anish"=>array("lastname"=>"dangol","age"=>21,"address"=>"Sanepa"),
    "Manshi"=>array("lastname"=>"Kandu","age"=>21,"address"=>"Sanepa"),
    "Jenisha"=>array("lastname"=>"parajuli","age"=>21,"address"=>"koteshwor")
);
// printing all members
echo "we have ".sizeof($names). "members";
echo "<br>";
$i=1;
foreach($names as $k=>$v)
{
    echo $i. " " .strtoupper($k);
    echo "<br>";
    foreach($v as $key=>$value){
        echo ucwords($key). "=".ucwords($value). " ";
    }
    echo "<hr>";
    $i++;
}

// function add($num1,$num2)
// {
//      return $num1+$num2;
// }
