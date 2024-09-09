<?php
$user="root";
$password="123";
$host="localhost";
$db="implantare";
$dbh='mysql:host='.$host.';dbname='.$db.';char set=utf8';
$pdo=new PDO($dbh, $user, $password);
$connect = mysqli_connect("localhost", "root", "123", "implantare");
if (!$connect){
    die('error');
}
?>