<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
    
  </head>
  <body>
  <div class="wrapper">
    <section>
      <div class="login-page">
        <div class="form">
          <form action="welcome.php" method="POST" class="register-form">
            <input type="text" name="email" placeholder="email address"/>
            <button type="submit">Submit</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form action="welcome.php" class="login-form" method="POST">
            <input type="text" name="userid" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">login</button>
            <p class="message">Forgot Password? <a href="#">Click here</a></p>
          </form>
          <?php
          if (isset($_SESSION['id'])) {
          echo $_SESSION['id'];
          } else {
          echo "You are not logged in ";
          }
          ?>
        </div>
      </div>
    </section>
    <?php include "includes/footer.inc.php";?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../js/index.js"></script>
    </div>
   </body>
</html>