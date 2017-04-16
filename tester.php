<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */


require ('db.php');
 

$id = $_POST["studBCode"];



$ans=$link->query("Select * From student where student_ID='$id'");
$row=$ans->fetch_array();
$firstname=$row['Firstname'];
$lastname=$row['Lastname'];
$image=$row['image_loc'];
$student=$id;


$data = array();
$data=['image'=>$image,'firstname'=>$firstname,'lastname'=>$lastname,'student'=>$student];
echo json_encode(array('user'=>$data));

?>




