<?php
require 'connect.php';
session_start();
if(!isset($_SESSION['username'])){header('location:auth.php');}

//mendapatkan seluruh data chat
$data = $conn->query("SELECT * FROM wali" , PDO::FETCH_ASSOC)->fetchAll();