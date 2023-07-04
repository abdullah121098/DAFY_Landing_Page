<?php
session_start();

unset($_SESSION['a_mail']);
unset($_SESSION['a_name']);

header("Location:login.php");
?>