<?php
require_once 'vendor/autoload.php';
USE App\classes\FullName;

$fullName = new Fullname($_POST);
$result =$fullName->index();
include 'index.php';


//
//
//echo '<pre>';
//print_r($_POST);
//
//echo $_POST['first_name'];
//echo $_POST['last_name'];
//echo $_POST['full_name'];
//echo $_POST['btn'];