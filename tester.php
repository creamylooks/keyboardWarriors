<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */
require_once 'db.php';
echo"{$_POST['tc']}";
if(!empty($_POST['tc'])){
$sql=$link->query("INSERT INTO tester(tc)VALUES('$tc')");
}