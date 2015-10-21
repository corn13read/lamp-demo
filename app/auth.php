<?php
  require_once 'config.php';

  session_start();

  $user = mysql_real_escape_string($_POST['user']);
  $pass = md5(mysql_real_escape_string($_POST['pass']));

  $query = "SELECT client_id user_name last_login FROM client WHERE user_name='$user' AND password_hash='$pass";
  $result = mysql_query($query);
  $row = mysql_fetch_assoc($result);

  if ( $mysql_num_rows($result) == 1 ) {
    echo 'true';
    $_SESSION['user_name'] = $row['user_name'];
  } else {
    echo 'false';
  }
?>