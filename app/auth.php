<?php
  require_once 'config.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = mysql_real_escape_string($_POST['user']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $query = "SELECT client_id, user_name, last_login FROM client WHERE user_name='$user' AND password_hash='$pass'";
  
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_assoc($result);
    if ( mysql_num_rows($result) == 1 ) {
      $_SESSION['user_name'] = $row['user_name'];
      echo 'true';
    } else {
      echo 'false';
    }
  } elseif (isset($_SESSION['user_name'])){
    //party
   } else {
    header( 'Location: login.php' );
   }
?>