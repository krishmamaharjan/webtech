<php
$email="me@gmail.com";
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
            echo " Email valid";
        }
        <!-- $pattern="/^(?"; -->
        if(preg_match($pattern, $password))
        {
            echo "Password match";
        }