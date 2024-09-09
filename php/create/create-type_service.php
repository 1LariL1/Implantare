<?php

require_once '../config/connect.php';

$typeService = $_POST['typeService'];

mysqli_query($connect, query:"INSERT INTO `type_service` (`id_type_service`, `type`) VALUES (NULL, '$typeService')");

header('Location:../../admin/admin-service.php');

?>