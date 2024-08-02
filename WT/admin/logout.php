<?php
require_once("inc_session.php");
// uset the session
unset($_SESSION['name']);
unset($_SESSION['time']);
// alternatively you can use session_destroy()
session_destroy();
// redirecting to login
header("Location: ../login.php ");
?>