<?php
    require 'conn.php';
    require 'functions.php';
    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            if(tambah($_POST) > 0) {
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Adding Data</h2>
    <form action="" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" required name="name">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required name="email">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Address" required name="address">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Gender" required name="gender">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Position" required name="position">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Status" required name="status">
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="submit">
      </div>
    </form>
  </div>
</body>
</html>
