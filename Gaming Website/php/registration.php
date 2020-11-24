<?php
echo 'Current PHP version: ' . phpversion();
?>

<?php

session_start();
//connection          //server    //db_user   //db_name
$db=mysqli_connect("sql12.freemysqlhosting.net","sql12378284","GaRaleRXdJ","sql12378284");
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
//incoming variables
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//encrypt password
$en_pass = sha1($password);

// checking user
$user_check_query = "SELECT * From users WHERE email = '$email' or username = '$username' LIMIT 1";
$result = mysqli_query($db,$user_check_query);
$alredy_user = mysqli_fetch_assoc($result);
if($alredy_user){
    if($alredy_user['email'] === $email){echo "already registered email";}
    if($alredy_user['username'] === $username){echo "already username exist";}
}
else{
    $user_insert_query = " INSERT INTO users (name,username,email,password) VALUES('$name','$username','$email','$en_pass')";
    mysqli_query($db,$user_insert_query);
    //echo "registered";
}
?>
<?php
        echo "<script> location.href='http://localhost/WDL-Project-Gaming-Website/Gaming%20Website/login.html';</script>";
        exit;
?>