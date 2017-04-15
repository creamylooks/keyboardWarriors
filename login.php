<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 5:26 PM
 */
session_start();
require_once 'db.php';
if (isset($_POST['Submit'])) {
    if (empty($_POST['Username'])||($_POST['Username']=="")) {// this checks if email field is empty
        $_SESSION['Username'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Course name field cannot be empty </div>";
        header('Location: index.php');
    }else{
        $un=$_POST['Username'];
    }
    if (empty($_POST['Password'])||($_POST['Password']=="")) {// this checks if email field is empty
        $_SESSION['Password'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Course Code field cannot be empty </div>";
        header('Location: index.php');
    }else{
        $ps=$_POST['Password'];
    }
    if (!empty($_POST['Username'])||!($_POST['Username']=="")&&(!(empty($_POST['Password'])||!($_POST['Password']=="")))) {
        $username = $link->real_escape_string(strip_tags($un));
        $password = $link->real_escape_string(strip_tags($ps));

        $ins = $link->query("SELECT password FROM lecturers where lecturer_ID='$username'");
        $row = $ins.fetch_array();
        if ($password == $row['password']) {

            $_SESSION['login'] = true;

            header('Location: createevent.php');
        } else {
            $_SESSION['coursefailed'] = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> Failed to login. Please check your credentials</div>";
            header('Location: index.php');
        }
    }
}