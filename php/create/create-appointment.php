<?php

require_once '../config/connect.php';

$appUser = $_POST['appUser'];
$appService = $_POST['appService'];
$appDoctor = $_POST['appDoctor'];
$appDate = $_POST['appDate'];
$appTime = $_POST['appTime'];

mysqli_query($connect, query:"INSERT INTO `appointment` (`id_appointment`, `id_user`, `id_service`, `id_doctor`, `date`, `time`) VALUES (NULL, '$appUser', '$appService', '$appDoctor', '$appDate', '$appTime')");

header('Location:../../admin/admin-appointment.php');

?>