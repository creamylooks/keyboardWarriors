<?php


require ('db.php');
$ans=$link->query("Select * From tester");
$msg = "";
while($rows = $ans->fetch_array()){
    $msg .=getInfo($rows['student_ID']);
}
echo msg;



function getInfo($no){
    global $link;
    $ans=$link->query("Select * From student where student_ID='$no'");
    $tr = $ans->fetch_assoc();
    $xxx = "<tr><td>".$tr['Firstname']."</td><td>".$tr['Lastname']."</td><td>".$tr['student_ID']."</td></tr>";
    return $xxx;
}