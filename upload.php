<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/15/17
 * Time: 8:35 PM
 */
require_once 'db.php';
if (isset($_POST['Submit'])) {
    if (empty($_POST['firstname'])||($_POST['firstname']=="")) {// this checks if email field is empty
        $_SESSION['firstname'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Firstname cannot be empty </div>";
        header('Location: createstudent.php');
    }else{
        $firstname=$_POST['firstname'];
    }
    if (empty($_POST['lastname'])||($_POST['lastname']=="")) {// this checks if email field is empty
        $_SESSION['lastname'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>Start time cannot be empty </div>";
        header('Location: createstudent.php');
    }else{
        $lastname=$_POST['lastname'];

    }if (empty($_POST['id'])||($_POST['id']=="")) {// this checks if email field is empty
        $_SESSION['id'] = "<div class='alert alert-danger'>
        <span class='glyphicon glyphicon-info-sign'></span>End time cannot be empty </div>";
        header('Location: createstudent.php');
    }else{
        $id = $_POST['id'];
    }
    $folder="../wwwroot";
    //echo print_r($_FILES['image']);
    $imgFile = $_FILES['image']['name'];

    $tmp_dir = $_FILES['image']['tmp_name'];



    if(($imgFile)&&(!empty($firstname))&&(!empty($id))&&(!empty($lastname))) {
        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension and make it lowercase
        $imgFile=$id.".".$imgExt;
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

        if(in_array($imgExt, $valid_extensions)){//check if extension is valid


                        if (!move_uploaded_file($tmp_dir, $folder . $imgFile)) {
                            $_SESSION['fileerror'] = "<div class='alert alert-danger'>
                                       <span class='glyphicon glyphicon-info-sign'></span>Image cannot be moved</div>";
                        } else {
                            $firstname = $link->real_escape_string(strip_tags($_POST['firstname']));
                            $lastname = $link->real_escape_string(strip_tags($_POST['lastname']));

                            move_uploaded_file($tmp_dir, $folder . $imgFile);
                            $imgurl = $folder . $imgFile;
                            $link->query("INSERT INTO student (student_ID,image_loc, Firstname, Lastname)VALUES ('$id', '$imgurl', '$firstname','$lastname')");

                            header('location: createstudent.php');
                            $_SESSION['filesuccess'] = "<div class='alert alert-success'>
                                       <span class='glyphicon glyphicon-info-sign'></span>Student created successfully.</div>";
                        }
        }
    }
}
