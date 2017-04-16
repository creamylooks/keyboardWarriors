<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */

error_reporting(0);
require ('db.php');
 
//$df = $_GET['password'];
//$nn = $_GET['username'];
$id = $_POST["studBCode"];

 
$sql=$link->query("INSERT INTO tester(tc)VALUES('$name')");

//  $sql3=$link->query("INSERT INTO tester(tc)VALUES('$email')");
  
//$sql = "INSERT INTO `user_info` (`id`,`name`, `password`, `email`) VALUES (NULL, '".$name."', '".$password."', '".$email."');";


$ans=$link->query("Select * From student where student_ID='$id'");
$row=$ans->fetch_array();
$firstname=$row['Firstname'];
$lastname=$row['Lastname'];
$image=$row['image_loc'];
?>
<img src='<?php echo "$image"?>' style="display: none">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var img = $('img');
alert(img.attr('src')); // foo.jpg
var fullpath = window.location.host + img.attr('src');
alert(fullpath); // http://example.com/foo.jpg
</script>

