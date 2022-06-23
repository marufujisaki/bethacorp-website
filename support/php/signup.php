<?php
  session_start();
  include_once "config.php";
  $fname = mysqli_real_escape_string($conn,$_POST['fname']);
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    // check if the user email is valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      // check if the email already exists in the db
      $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
      if(mysqli_num_rows($sql) > 0){
        echo "$email - this email already exists";
      }else{
        $ran_id = rand(time(), 100000000);
        $status = "Active now";
        $user_type = 1;
        $new_img_name = "null";
        $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status, user_type)
        VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}', {$user_type})");
        if($insert_query){
            $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($select_sql2) > 0){
              $result = mysqli_fetch_assoc($select_sql2);
              $_SESSION['unique_id'] = $result['unique_id'];
              echo "success";
            }
        }
      }
    }else{
      echo "$email - this is not a valid email";
    }
  }else{
    echo "All input fields are required";
  }

?>