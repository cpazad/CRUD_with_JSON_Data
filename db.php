<?php


$connection = new mysqli('localhost', 'root', '', 'crudwithajax');

// Data Management

$name = $_POST['name'];
$email = $_POST['email'];

// File management
$photo_name = $_FILES['photo']['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];
$unique_name = md5(time().rand()) . $photo_name;

move_uploaded_file( $photo_tmp_name , 'assets/photo/' . $unique_name);

$connection -> query("INSERT INTO students (name, email, photo) VALUE('$name', '$email', '$unique_name') ");

echo "<p class= 'alert alert-success' >Student Added Succesfully !!</p>";


