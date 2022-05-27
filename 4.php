<?php 
$user='serj';
$password=22121987;
$db='users';
$link=mysqli_connect('localhost', $user,$password,$db);
if (!$link) {
    die("Ошибка соединения");
} 
mysqli_query($link, "INSERT INTO `users` (`Name`, `family`) VALUES ('{$_POST['name']}', '{$_POST['family']}')");
  
?>