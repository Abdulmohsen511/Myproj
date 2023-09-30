<?php
$conn = mysqli_connect('localhost','root','root','Proj');

if(!$conn){
  //  echo 'faill';
  echo 'Error: ' . mysqli_connect_error();
}