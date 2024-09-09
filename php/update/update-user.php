<?php 
require_once '../config/connect.php';

$userId = $_POST['userId'];
$userFIO = $_POST['userFIO'];
$userEmail = $_POST['userEmail'];
$userTel = $_POST['userTel'];
$userAcess = $_POST['userAcess'];

mysqli_query($connect,  query:"UPDATE `user` SET `fio` = '$userFIO', `email` = '$userEmail', `telephone` = '$userTel', `access` = '$userAcess' WHERE `user`.`id_user` = '$userId'");
header('Location:../../admin/admin-user.php');
?>

