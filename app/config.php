<?php
session_start();
  $mysql = mysql_connect('db_1','root','password') or die(mysql_error());
  if (!mysql_select_db('demo')) {
    echo "Database doesn't exist " . mysql_error();
  }
?>