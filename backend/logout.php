<?php

session_start();
$_SESSION = Array();
session_destroy();

header("Location: ../pages/home.php");
?>