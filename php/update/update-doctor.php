<?php

    require_once '../config/connect.php';

    $docID = $_POST['docID'];
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
        // echo 'UPLOADED';
        if(move_uploaded_file($file_tmp, $file_destination)) {
            mysqli_query($connect, "UPDATE `doctor` SET `name` = '$docName', `surname` = '$docSurname', `patronymic` = '$docPatronymic', `work_experience` = '$docWE', `specialization` = '$docSpec', `telephone` = '$docTel', `image` = '$file_dest' WHERE `doctor`.`id_doctor` = '$docID'");
        } else {
            echo "Ошибка при загрузке файла.";
        }
    } else {
        // error
        echo "file_tmp: " . $file_tmp . "<br>";
        echo "file_destination: " . $file_destination . "<br>";
        echo "file_dest: " . $file_dest . "<br>";
    }

    header('Location:../../admin/admin-doctor.php');
?>
