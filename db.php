<?php
// Connect to MySQL
$connection = mysqli_connect('localhost', 'root', '123456', 'messageapp');

//Test Connection

if(mysqli_connect_errno()){
  echo 'DB Connection Error: '.mysqli_connect_error;
}