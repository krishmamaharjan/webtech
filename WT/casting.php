<?php
$a=2022;
$b = (int)$a;
echo $b;
echo "<br>";
echo gettype($b);
echo "<br><br>";
// Casting in php is done with these statement
// (string),(int),(float),(bool),(array),(object),(unset)->convert to data type NULL

// syntax   define(name,value,case_insensitive)
define("USER","admin");
echo USER;
echo "<br>";
echo "<br>";

// $_POST,$_GET,$_SERVER,$_REQUEST

// FORM


if(isset($_POST['login']))
{
    // capturing the form data
    $uname = $_POST['user'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $upass = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['Gender'];
    if($uname=="admin" AND $upass=="admin"){
        echo"Login Success";
    }
    else{
        echo"Login failed";
    }
    if(isset($_POST['login']))
    {
        if(!empty($_POST['iagree']))
        {
            echo"You have logged in successfully";
        }
        else
        {
            echo"Please accept the terms and condition";        }
    }
}

?>
<form method ="POST" name="login"  >
    Username <input type="text" name = "user"><br><br>
    First Name <input type="text" name = "fname"><br><br>
    Last Name <input type="text" name = "lname"><br><br>
    Password <input type="password" name = "password"><br><br>
    Confirm Password <input type="password" name = "password"><br><br>
    
    Email <input type="email" name = "email"><br><br>
    <label for="">Gender</label>
            <input type="radio" name="Gender" value="male" checked>Male
            <input type="radio" name="Gender" value="female" >Female
            <input type="radio" name="Gender" value="others" >others
            <br><br>
    <input type="checkbox" name ="iagree">
    <label for="">If I accept terms and condition.</label><br><br>
    <input type="submit" name = "login" value ="login"><br>

    
</form>

<?php

echo "Dear $fname $lname";
echo "<br>";

echo "Username $uname";
echo "<br>";
echo $email;
echo "<br>";
echo $upass;
echo "<br>";

echo $gender;
?>



