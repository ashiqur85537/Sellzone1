<?php 

session_start();
session_destroy();

header('location:admin_login_out/login.php');
 ?>