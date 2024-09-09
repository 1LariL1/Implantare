<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: auth-reg.php');
}

require_once '../config/connect.php';

$userIdEdit = $_POST['userIdEdit'];
$editFIO = $_POST['editFIO'];
$editEmail = $_POST['editEmail'];
$editTel = $_POST['editTel'];
$editNewPass = $_POST['editNewPass'];
$editOldPass = $_POST['editOldPass'];

if (empty($editNewPass)) {
    $storedPassword = $_SESSION['user']['password']; 
    if (password_verify($editOldPass, $storedPassword)) {
        mysqli_query($connect, "UPDATE user SET fio = '$editFIO', email = '$editEmail', telephone = '$editTel' WHERE user.id_user = '$userIdEdit'");
        $_SESSION['user']['fio'] = $editFIO;
        $_SESSION['user']['email'] = $editEmail;
        $_SESSION['user']['telephone'] = $editTel;
        header('Location: ../../account.php');

    } else {
        header('Location: ../config/failed-pass.html');
    }

} else {
    $storedPassword = $_SESSION['user']['password']; 

    if (password_verify($editOldPass, $storedPassword)) {
        $hashedPassword = password_hash($editNewPass, PASSWORD_DEFAULT); 
        mysqli_query($connect, "UPDATE user SET fio = '$editFIO', email = '$editEmail', telephone = '$editTel', password = '$hashedPassword' WHERE user.id_user = '$userIdEdit'");
        $_SESSION['user']['fio'] = $editFIO;
        $_SESSION['user']['email'] = $editEmail;
        $_SESSION['user']['telephone'] = $editTel;
        $_SESSION['user']['password'] = $hashedPassword;

        header('Location: ../../account.php');
    } else {
        header('Location: ../config/failed-pass.html');
    }
}
?>
