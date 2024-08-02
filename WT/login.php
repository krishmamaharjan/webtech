<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <script>
        alert("Welcome to javascript World");
    </script>
</head>
<body>
    <form method="POST" name="login" action="">
       Username <input type="text" name="user" placeholder="Username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>" ><br><br>
        Password <input type="password" name="password" placeholder="Password"value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>"><br><br>
        <input type="checkbox" name="remember" value="rem">Remember me <br><br>
        <input type="submit" name="login" value="login">
</form>
<?php
//processing the form
//checking the form is submitted or not
if(isset($_POST['login'])){
    //capturig the forms data
    $uname=$_POST['user'];
    $upass=$_POST['password'];
    $rem = $_POST['remember'];
    if($uname=="admin" AND $upass=="admin"){
        // storing the session value
        $_SESSION["time"]=date("Ymdhisa");
        $_SESSION['name']="admin";

        if($rem=="rem")
        {
            setcookie("username",$uname,time()+(15*24*60*60),"/");
            setcookie("password",$upass,time()+(15*24*60*60),"/");
        }
        // redirecting to the dashboard
        header("Location: admin/dashboard.php");
        // echo "login success";
    }
    else{
        echo "Login failed";
    }
}
?>
</body>
</html>