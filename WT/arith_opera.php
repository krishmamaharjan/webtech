<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post" name="calculator">
        <fieldset>
            <legend>calculator</legend>Number 1
            <input type="number" name="num1" required value="<?php if(isset($_POST['num1'])")>
            <br>
            <input type="number" name="num1" required>
            <br>
            <input type="radio" name ="operation" value = " add">Addition
            <input type="radio" name ="operation" value = "sub ">Subtraction
            <input type="radio" name ="operation" value = "mul ">Multiplication
            <input type="radio" name ="operation" value = "div ">Division
            <input type="radio" name ="operation" value = "rem ">Remainder
            <input type="submit" name="submit"> value="calculate"
        </fieldset>
    </form>


    <?php
    // creating the user defined function
    function add($one,$two)
    {
        return $one+$two;
    }
    function sub($one,$two)
    {
        return $one-$two;
    }
    function mul($one,$two)
    {
        return $one*$two;
    }
    function div($one,$two)
    {
        return $one/$two;
    }
    function rem($one,$two)
    {
        if (($one%$two)==0);
        return 0;
        else
        return 1;
    }
    if(isset($_POST['submit'])){
        // capturing the users input
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $opeeration=$_POST['operation'];
    }
    ?>
</body>
</html>