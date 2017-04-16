<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */

error_reporting(0);
require ('db.php');
 

$id = $_POST["studBCode"];



$ans=$link->query("Select * From student where student_ID='$id'");
$row=$ans->fetch_array();
$firstname=$row['Firstname'];
$lastname=$row['Lastname'];
$image=$row['image_loc'];
echo "$image.':'.$firstname.':'.$lastname";
?>




