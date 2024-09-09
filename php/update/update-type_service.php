<?php 
require_once '../config/connect.php';

$type_serviceId = $_POST['type_serviceId'];
$typeService = $_POST['typeService'];

mysqli_query($connect,  query:"UPDATE `type_service` SET `type` = '$typeService' WHERE `type_service`.`id_type_service` = '$type_serviceId'");
header('Location:../../admin/admin-service.php');
?>

