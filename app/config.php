<?php
  $mysql = mysql_connect('mysql','root','password') or die(mysql_error());

  if (!mysql_select_db('client')) {
    echo "Database doesn't exist " . mysql_error();
  }
?>