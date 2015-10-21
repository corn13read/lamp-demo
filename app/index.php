<?php
  if (!isset($_SESSION['user_name'])){
    header( 'Location: login.php' );
  }
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Desert of the real</title>
  <meta name="description" content="AJAX Demo">
  <meta name="author" content="Richard Silver">

  <link rel="stylesheet" href="style.css">
  <script>
    $(document).ready(function(){
      $("#login").click(function(){
        user=$("#user").val();
        password=$("#pass").val();
        $.ajax({
           type: "POST",
           url: "auth.php",
           data: "user="+user+"&pass="+pass,
           success: function(html){    
             if(html=='true') {
               window.location="welcome.php";
              } else {
                $("#error").html("Wrong username or password");
              }
            },
        });
      return false;
      });
    });
  </script>
</head>

<body>

<h1>Welcome <?php $_SESSION['user_name'] ?> to the desert of the real</h1>

</body>
</html>