<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Login for Demo</title>
  <meta name="description" content="AJAX Demo">
  <meta name="author" content="Richard Silver">

  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
               window.location="index.php";
              } else {
                $("#login_error").html("Wrong username or password");
              }
            },
        });
      return false;
      });
    });
  </script>
</head>

<body>
<h1>Desert Login</h1>
<div id="error"></div>
  <fieldset>
    <form action="./" method="post">
      <ul>
        <li>
          <label for="name">Username </label>
          <input type="text" size="50"  name="user" id="user" />
        </li>
        <li>
          <label for="name">Password</label>
          <input type="password" size="50"  name="pass" id="pass" />
        </li>
        <li>
          <label></label>
          <input type="submit" id="login" name="login" value="Login">
        </li>
      </ul>
    </form>
</fieldset>

</body>
</html>