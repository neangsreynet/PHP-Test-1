<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(!empty($name) && !empty($email) && !empty($password) && !empty($confirm_password)){
      if($password !== $confirm_password){
        echo "password doesn't match!";
      }else{
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
      }
    }else{
      echo "<h2>Error: All fields are required.</h2>";
    }

}else{
  echo "<h2>Invalid Request</h2>";
}
?>