
    <!-- <?php
    echo "TOday is". date("Y-m-d h:m:s");
    echo "<br>";
    echo "<h1>Welcome to php programming</h1>";
    phpinfo();
?> -->

<!-- <?=10?>  -->
<?php

//variable
$name = "Krishma Maharjan";
$address="Sanepa";
$ward=2;
$payment=true;
$amount = 300.33;

// getting the data type of the variables
echo "name variable is a type of ".gettype($name);
echo "<br>";
echo "Ward variable is a type of ".gettype($ward);
echo "<br>";
echo "payment variable is a type of ".gettype($payment);
echo "<br>";
echo "$amount variable is a type of ".gettype($amount);
echo "<br>";

// unset or clearing in the variable
unset($amount);
echo "$amount variable is a type of ".gettype($amount);
echo "<br>";

// unsetting multiple variable at once
unset($name,$payment);
// arithmetic operatioms
$num1 = 10;
$num2=10.22;
$sum=$num1+$num2;
echo "The sum of $num1 and $num2 is ".$sum. "<br>";
echo 'The sum of $num1 and $num2 is '.$sum. "<br>";

echo "Hello world !<br><br>";

var_dump($sum);
