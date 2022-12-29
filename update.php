<?php
      include "conn.php";
      $id = $_REQUEST['id'];
      $nama  = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $address = $_REQUEST['address'];
      $gender = $_REQUEST['gender'];
      $position = $_REQUEST['position'];
      $status = $_REQUEST['status'];
      $mysqli  = "UPDATE karyawan SET nama='$nama', email='$email', address='$address', gender='$gender', position='$position', status='$status' WHERE id='$id'";
      $result  = mysqli_query($conn, $mysqli);
      mysqli_close($conn);
    
      header("location:index.php")
?>