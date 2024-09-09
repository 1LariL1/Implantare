<?php 
require_once '../config/connect.php';

$serviceId = $_POST['serviceId'];
$serviceType = $_POST['serviceType'];
$serviceName = $_POST['serviceName'];
$servicePrice = $_POST['servicePrice'];

mysqli_query($connect,  query:"UPDATE `service` SET `id_type_service` = '$serviceType', `service` = '$serviceName', `price` = '$servicePrice' WHERE `service`.`id_service` = '$serviceId'");
header('Location:../../admin/admin-service.php');
?>

