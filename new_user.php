<?php
include "connect.php";
session_start();
$sql="INSERT INTO user VALUES (NULL,'{$_POST["Type"]}', '{$_POST["Name"]}', '{$_POST["Email"]}', '{$_POST["Username"]}', '{$_POST["Password"]}')";
    if (mysqli_query($con, $sql)) {
        header('Location: index.php');
      } else {
        header("Location: F_Loginerror.php");
      }
?>