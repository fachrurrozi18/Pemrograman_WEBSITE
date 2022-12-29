<?php
    require "conn.php";
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * from karyawan WHERE id = '$id'");
    while($data = mysqli_fetch_array($sql)){ 
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
    <h2>Ubah</h2>
    <form action="update.php" method="post">
      <div class="input-box">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="text" placeholder="Enter your name" name="name" value="<?php echo $data['nama']; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" value="<?php echo $data['email']; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Address" name="address" value="<?php echo $data['address']; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Gender" name="gender" value="<?php echo $data['gender']; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Position" name="position" value="<?php echo $data['position']; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Your Status" name="status" value="<?php echo $data['status']; ?>">
      </div>
      <div class="input-box button">
        <input type="Submit" value="Update" name="submit">
      </div>
      <?php } ?>
    </form>
  </div>
</body>
</html>
