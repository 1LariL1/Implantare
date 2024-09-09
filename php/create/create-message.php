<?php

require_once '../config/connect.php';

$userId = $_POST['userId'];
$messageService = $_POST['messageService'];
$messageDate = $_POST['messageDate'];
$messageComment = $_POST['messageComment'];

mysqli_query($connect, query:"INSERT INTO `message` (`id_message`, `id_user`, `id_service`, `date`, `comment`) VALUES (NULL, '$userId', '$messageService', '$messageDate', '$messageComment')");

header('Location:../../account.php');

?>