<?php

    require_once '../config/connect.php';
    
    $docName = $_POST['docName'];
    $docSurname = $_POST['docSurname'];
    $docPatronymic = $_POST['docPatronymic'];
    $docWE = $_POST['docWE'];
    $docSpec = $_POST['docSpec'];
    $docTel = $_POST['docTel'];

    $file_name = $_FILES['docImage']['name'];
    $file_tmp = $_FILES['docImage']['tmp_name'];
    $file_destination = "../../image/doctors/".$file_name;
    $file_dest = "image/doctors/".$file_name;
    
    if(isset($_FILES['docImage']) && $_FILES['docImage']['error'] === UPLOAD_ERR_OK) {
        if(move_uploaded_file($file_tmp, $file_destination)) {
            mysqli_query($connect, "INSERT INTO `doctor` (`name`, `surname`, `patronymic`, `work_experience`, `specialization`, `telephone`, image) VALUES ('$docName', '$docSurname', '$docPatronymic', '$docWE', '$docSpec', '$docTel', '$file_dest')");
        } else {
            echo "Ошибка при загрузке файла.";
        }
    } else {
        echo "file_tmp: " . $file_tmp . "<br>";
        echo "file_destination: " . $file_destination . "<br>";
        echo "file_dest: " . $file_dest . "<br>";
    }

    header('Location:../../admin/admin-doctor.php');
?>
