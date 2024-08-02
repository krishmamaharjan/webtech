 <?php
 require_once('inc_session.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all Users</title>
 </head>
 <body>
    <?php include('header.php')?>
    <h1>All Users</h1>
   
    <?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    $sql = "SELECT * FROM users ORDER BY id DESC";
    include("../connection.php");
    $qry=mysqli_query($conn,$sql) or die(mysql-error($conn));
    // for displaying all users
    if($qry)
    {
        echo "<table border=0 cellpadding=4 ccellspacing=4><tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created At</th>
        <th><th>Actions</th></th>
        </tr>
        ";
        
        while($row=mysqli_fetch_array($qry))
        {
            $id=$row["id"];
            echo "<tr>";
            echo "<td>". $row["id"]. "</td> ";
            echo "<td>". $row["username"]. "</td> ";
            echo "<td>". $row["password"]. "</td> ";
            echo "<td>". $row["email"]. " </td>";
            echo "<td>". $row["role"]. " </td>";
            echo "<td>". $row["status"]. "</td> ";
            echo "<td>". $row["created_at"]. "</td> ";
            echo "<td>". $row["updated_at"]. "</td> ";
            // echo "<td> <a href=manageusers.php?id=$id&action=edit>EDIT</a></td>";
            echo "<td> <a href=manageusers.php?id=$id&action=edit>EDIT</a> | <a href=manageusers.php?id=$id&action=delete>Delete</a></td>";
            echo "<tr>";

            echo "<br> ";

        }
    }
    ?>
 </body>
 </html>