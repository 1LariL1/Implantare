<?php 
require_once '../config/connect.php';

$appID = $_POST['appID'];
$appUser = $_POST['appUser'];
$appService = $_POST['appService'];
$appDoctor = $_POST['appDoctor'];
$appDate = $_POST['appDate'];
$appTime = $_POST['appTime'];

mysqli_query($connect,  query:"UPDATE `appointment` SET `id_user` = '$appUser', `id_service` = '$appService', `id_doctor` = '$appDoctor', `date` = '$appDate', `time` = '$appTime' WHERE `appointment`.`id_appointment` = '$appID'");
header('Location:../../admin/admin-appointment.php');
?>

