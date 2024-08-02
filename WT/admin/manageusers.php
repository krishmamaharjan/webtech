<?php
require_once('inc_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <?php
    //redirect if your not clicked on edit or delete button
    if(isset($_GET['id']) && isset($_GET['action']))
    {
    //getting the id and action
    $id=$_GET['id'];
    $action=$_GET['action'];
    switch($action){
        case 'delete':{
          //echo "Delete mode on";
          $sql= "DELETE FROM users WHERE id=$id";
          require_once("../connection.php");
          $qry=mysqli_query($conn,$sql) or die(mysqli_error(($conn)));
          if($qry){
            header("Location: users.php?mgs=$id Deleted succesfully");
     
          }
          break;
        }
        // case 'edit':{
        // //  echo "Edit mode on";
        // while($row=mysqli_fetch_array($qry)){
        //     $eemail=$row['email'];
        //     $erole=$row['row'];
        //     $estatus=$row['status'];
        //     echo"<form method=post action=edituser.php>";
        //     echo "<fieldset><legend>EDIT $eusername </legend>";

        //     echo "<input type = hidden name = id value=$eid><br>";
        //     echo "";
        //     echo "";
        //     echo "";
        //     echo "";
        //     echo "";
        // }
        case 'edit':{
            $sql="SELECT * FROM users WHERE id=$id";
            require_once("../connection.php");
            $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
           while($row=mysqli_fetch_array($qry)){
            $eid=$row['id'];
            $eusername=$row['username'];
            $eemail=$row['email'];
            $erole=$row['role'];
            $estatus=$row['status'];
            echo "<form method=post action=edituser.php>";
            echo "<fieldset><legend> Edit $eusername </legend><br>";
            echo "<input type = hidden name = id value=$eid><br>";
            echo "username<input type=text name=username value=$eusername> <br>";
            echo "email<input type=email name=email value=$eusername><br>";
            echo "role<input type=text name=role value=$erole><br>";
            echo "status<input type=text name=status value=$estatus><br>";
            echo "<input type=submit name=submit value=UPDATE>";
            echo "</form>";
             //echo "Edit mode on";
            }
    }
    
    }
}

    else{
        header("Location: users.php");
    }
    
    ?>
</body>
</html>