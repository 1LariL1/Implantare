<?php

require_once '../config/connect.php';

$userFIO = $_POST['userFIO'];
$userEmail = $_POST['userEmail'];
$userTel = $_POST['userTel'];
$userPass = $_POST['userPass'];
$userAccess = $_POST['userAccess'];

$hashedPassword = password_hash($userPass, PASSWORD_DEFAULT);

mysqli_query($connect, query:"INSERT INTO `user` (`id_user`, `fio`, `email`, `telephone`, `password`, `access`) VALUES (NULL, '$userFIO', '$userEmail', '$userTel', '$hashedPassword', '$userAccess')");

header('Location:../../admin/admin-user.php');

?>