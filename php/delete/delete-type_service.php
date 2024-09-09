<?php
require_once '../config/connect.php';

$typeId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM type_service WHERE `type_service`.`id_type_service` = '$typeId'");
header('Location:../../admin/admin-service.php');
?>