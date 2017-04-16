<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/16/17
 * Time: 1:14 AM
 */
echo"{$_GET['tc']}";
$tc=$_GET['tc'];
$sql=$link->query("INSERT INTO tester(tc)VALUES('$tc')");