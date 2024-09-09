<?php
require_once '../config/connect.php';

$doctorId = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM doctor WHERE `doctor`.`id_doctor` = '$doctorId'");
header('Location:../../admin/admin-doctor.php');
?>