<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 6:07 AM
 */
session_start();
require_once 'db.php';
if (isset($_POST['submit'])) {
    if (empty($_POST['course'])||($_POST['course']=="")) {// this checks if email field is empty
        $_SESSION['course'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Course name field cannot be empty </div>";
        header('Location: stud_course.php');
    }else{
        $cos=$_POST['course'];
    }
    if (empty($_POST['student'])||($_POST['student']=="")) {// this checks if email field is empty
        $_SESSION['student'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Course Code field cannot be empty </div>";
        header('Location: stud_course.php');
    }else{
        $stud=$_POST['student'];
    }

    if((!empty($_POST['course'])||!($_POST['course']=="")&&!empty($_POST['student'])||!($_POST['student']==""))){

        foreach ($student as $item){
            $ins =$link->query("insert into stud_course set(student_ID ,course_ID )values('$item','$cos')");

        }
        if($ins){
            $_SESSION['ins'] = "<div class='alert alert-success'>
        <span class='glyphicon glyphicon-info-sign'></span>Student course mapping done successfully </div>";
            header('Location: stud_course.php');
        }
    }
}