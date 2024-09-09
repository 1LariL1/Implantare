<?php

require_once '../config/connect.php';

$serviceType = $_POST['serviceType'];
$serviceName = $_POST['serviceName'];
$serviceCost = $_POST['serviceCost'];

mysqli_query($connect, query:"INSERT INTO `service` (`id_service`, `id_type_service`, `service`, `price`) VALUES (NULL, '$serviceType', '$serviceName', '$serviceCost')");

header('Location:../../admin/admin-service.php');

?>