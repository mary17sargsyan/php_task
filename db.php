<?php

$serverName = "localhost";
$userName = "root";
$Password = "lBK}rT=PjwlVod5E5";
$dbname="mytask";
$tableName="user";
$conn= mysqli_connect($serverName, $userName, $Password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}
