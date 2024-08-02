<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="register" enctype="multipart/form-data">
       Username  <input type="text" name="username" placeholder="username"><br><br>
        Password <input type="password" name="password" placeholder="password"><br><br>
        E-mail  <input type="email" name="email" placeholder="your@domain.com"><br><br>
        <input type="submit" name="register" value="Register"><br>
    </form>
    <div>Already have an account <a href="login.php">Login</a></div>

    <?php
    if(isset($_POST['register']))
    {
        // capturing the data
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        
        // if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        // {
        //     echo " Email not verified";
        // }
        // $pattern="/^(?";
        // if(preg_match($pattern, $password))
        // {
        //     echo "Password match";
        // }

        if(!empty($username) && !empty($password) && !empty($email))
        {
            // sql statement for inserting the data
            $sql="INSERT INTO users(username,password,email) VALUES('$username',
            md5('$password'),'$email')";
            // making connection
            require("connection.php");
            // executing the query
            $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($qry)
            {
                echo "$username  registered successfully.";
            }
        }
        else
        {
            echo "All fields are required";
        }
    }
    ?>
</body>
</html>