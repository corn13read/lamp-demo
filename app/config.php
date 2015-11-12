<?php
session_start();
  try {
    $conn = new PDO("mysql:host=db_1;dbname=demo", 'root', 'password') or die(mysql_error());
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
  	echo 'Error: ' . $e->getMessage();
  }
?>