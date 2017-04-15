<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 5:26 PM
 */
session_start();
require_once 'db.php';
if (isset($_POST['submit'])) {
    if (empty($_POST['date'])||($_POST['date']=="")) {// this checks if email field is empty
        $_SESSION['date'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Date field cannot be empty </div>";
        header('Location: createevent.php');
    }else{
        $d=$_POST['date'];
    }
    if (empty($_POST['start'])||($_POST['start']=="")) {// this checks if email field is empty
        $_SESSION['start'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Start time cannot be empty </div>";
        header('Location: createevent.php');
    }else{
        $s=$_POST['start'];

    }if (empty($_POST['end'])||($_POST['end']=="")) {// this checks if email field is empty
        $_SESSION['end'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>End time cannot be empty </div>";
        header('Location: createevent.php');
    }else{
        $e=$_POST['end'];
    }if (empty($_POST['course'])||($_POST['course']=="")) {// this checks if email field is empty
        $_SESSION['course'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Course field cannot be empty </div>";
        header('Location: createevent.php');
    }else{
        $cos=$_POST['course'];
    }
    if (!empty($_POST['date'])||!($_POST['date']=="")&&!empty($_POST['end'])||!($_POST['end']=="")&&!empty($_POST['course'])||!($_POST['course']=="")&&(!(empty($_POST['start'])||!($_POST['start']=="")))) {

        $date = $link->real_escape_string(strip_tags($d));
        $start = $link->real_escape_string(strip_tags($s));
        $end = $link->real_escape_string(strip_tags($e));
        $course = $link->real_escape_string(strip_tags($cos));


        if ($link->query("INSERT INTO event (course_Code, event_date, start_time, end_time)VALUES('$course','$date','$start','$end')")){

            $_SESSION['coursefailed'] = "<div class='alert alert-sucess'>
            <span class='glyphicon glyphicon-info-sign'></span> Event was successfully created</div>";
            header('Location: createevent.php');
        } else {
            $_SESSION['coursefailed'] = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> Failed to create event</div>";
            header('Location: createevent.php');
        }
    }
}