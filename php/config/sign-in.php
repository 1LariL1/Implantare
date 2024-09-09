<?php

session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'"); 
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $storedPassword = $user['password']; 

    
    if (password_verify($password, $storedPassword)) {
        
        $_SESSION['user'] = [
            "id_user" => $user['id_user'],
            "email" => $user['email'],
            "telephone" => $user['telephone'],
            "password" => $user['password'],
            "fio" => $user['fio'],
            "access" => $user['access'],
        ];
        header('Location: ../../account.php');
    } else {
        
        header('Location: ../../auth-reg.php');
    }
} else {
    
    header('Location: ../../auth-reg.php');
}
?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>