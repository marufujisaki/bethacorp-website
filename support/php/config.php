<?php
  $conn = mysqli_connect("localhost","bethac9_usersupport","bethacorpsupport","bethac9_support_chat");
  if(!$conn){
    echo("database connected") . mysqli_connect_error();
  }
?>