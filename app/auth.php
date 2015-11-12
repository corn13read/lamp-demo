<?php
  require_once 'config.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
      $query = $conn->prepare("SELECT client_id, user_name, last_login FROM client WHERE user_name = :user AND password_hash = :pass");
      
      $query->execute(array('user' => $_POST['user'], 'pass' => $_POST['pass']));
    } catch(PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }

    $row = $query->fetchAll();
    
    if ( count($row) == 1) {
      $user = $row[0]['user_name'];
      $_SESSION['user_name'] = $user;
      //update last_login time
      $query = $conn->prepare("UPDATE client SET last_login = NOW() WHERE user_name = :user");
      $query->execute(array('user' => $user));
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