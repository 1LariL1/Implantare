<?php
require_once '../config/connect.php';

$appointmentId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM appointment WHERE `appointment`.`id_appointment` = '$appointmentId'");
header('Location:../../admin/admin-appointment.php');
?>