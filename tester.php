<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */
<?php
error_reporting(0);
require 'db.php';
 
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
 
//$name = "sdf";
//$password = "sdf";
//$email = "sdf@r54";
 
$sql=$link->query("INSERT INTO tester(tc)VALUES('$name')");
  $sql2=$link->query("INSERT INTO tester(tc)VALUES('$password')");
  $sql3=$link->query("INSERT INTO tester(tc)VALUES('$email')");
  
//$sql = "INSERT INTO `user_info` (`id`,`name`, `password`, `email`) VALUES (NULL, '".$name."', '".$password."', '".$email."');";




