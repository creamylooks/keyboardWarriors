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
$ins = $link->query("insert into tester(tc)VALUES ('$id')");


$ans=$link->query("Select * From student where student_ID='$id'");
$row=$ans->fetch_array();
$firstname=$row['Firstname'];
$lastname=$row['Lastname'];
$image=$row['image_loc'];
$student=$row['student_ID'];


$data = array();
$data=['image'=>$image,'firstname'=>$firstname,'lastname'=>$lastname,'student'=>$student];
echo json_encode(array('user'=>$data));

?>




