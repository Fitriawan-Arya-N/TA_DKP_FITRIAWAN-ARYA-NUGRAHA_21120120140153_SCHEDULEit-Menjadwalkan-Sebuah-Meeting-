<?php
    include("user.php");

    // get data dari field input
  
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    // instalasi atau menciptakan object dari class user
    $username = new user($username, $password);
  
    $username->login();
  ?>
   

                  