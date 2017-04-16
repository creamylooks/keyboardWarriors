<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */
echo"{$_POST['tc']}";
$tc=$_POST['tc'];
$sql=$link->query("INSERT INTO tester(tc)VALUES('$tc')");