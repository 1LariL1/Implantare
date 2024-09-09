<?php

    require_once '../../php/config/connect.php';

    $id_appointment= $_GET['id'];
    $appointment = mysqli_query($connect, query:"SELECT appointment.id_appointment, appointment.id_user, appointment.id_service, appointment.id_doctor, user.email, service.service, doctor.surname, doctor.name, doctor.patronymic, appointment.date, appointment.time FROM `appointment` JOIN user ON appointment.id_user=user.id_user JOIN `service` ON appointment.id_service=service.id_service JOIN doctor ON appointment.id_doctor=doctor.id_doctor WHERE `id_appointment` = '$id_appointment'");
    $appointment = mysqli_fetch_assoc($appointment);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">  
    <title>Административная панель</title>
</head>
<body>
    <header>

        <div class="container">
            <div class="header_box">
                <a href="../../main.php"><img src="../../image/logo.png" alt="Logotip"></a>
                <p class="admin-title">АДМИНИСТРАТИВНАЯ ПАНЕЛЬ</p>
            </div>
        </div>


        <div class="nav_box">
            <ul class="nav_ul">
                <li><a href="../../about.php" class="nav_text">О КЛИНИКЕ</a></li>
                <li><a href="../../doctors.php" class="nav_text">ВРАЧИ</a></li>
                <li><a href="../../services.php" class="nav_text">УСЛУГИ И ЦЕНЫ</a></li>
                <li><a href="../../account.php" class="nav_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
        
    </header>
    <main>
        <div class="admin-container">
            <div class="nav-admin">
                <ul class="">
                    <li class="admin-li"><a href="../admin-doctor.php" class="admin-li-a">Врачи</a></li>

                    <li class="admin-li"><a href="../admin-service.php" class="admin-li-a">Услуги</a></li>

                    <li class="admin-li"><a href="../admin-user.php" class="admin-li-a">Пользователи</a></li>

                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Записи</a></li>

                    <li class="admin-li"><a href="../admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="../admin-appointment.php" class="back-admin">← Назад</a>
                <form action="../../php/update/update-appointment.php" method="post">
                    <input type="hidden" name="appID" value="<?= $appointment['id_appointment']?>">
                    <div class="admin-box">
                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Пользователь</label>
                            </div>
                            <select name="appUser" class="admin-input" required style="">
                                    <?php
                                    $users = mysqli_query($connect, query:"SELECT * FROM `user`");
                                    $users = mysqli_fetch_all($users);
                                    {
                                    ?>
                                    <option style="background-color: #BFE4EC;" value="<?= $appointment['id_user'] ?>"><?= $appointment['email'] ?></option>
                                        <?php
                                        foreach ($users as $user){
                                        echo "<option value='" . $user[0] . "'>" . $user[2] . "</option>";
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Услуга</label>
                            </div>
                            <select name="appService" class="admin-input" required style="">
                                    <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service`");
                                    $services = mysqli_fetch_all($services);
                                    {
                                    ?>
                                    <option style="background-color: #BFE4EC;" value="<?= $appointment['id_service'] ?>"><?= $appointment['service'] ?></option>
                                        <?php
                                        foreach ($services as $service){
                                        echo "<option value='" . $service[0] . "'>" . $service[2] . "</option>";
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Доктор</label>
                            </div>
                            <select name="appDoctor" class="admin-input" required style="">
                                <?php
                                    $doctors = mysqli_query($connect, "SELECT * FROM doctor");
                                    $doctors = mysqli_fetch_all($doctors);
                                    $full_name = implode(" ", array($appointment['surname'], $appointment['name'], $appointment['patronymic']));
                                    {
                                ?>
                                <option style="background-color: #BFE4EC;" value="<?= $appointment['id_doctor'] ?>"><?= $full_name ?></option>
                                    <?php
                                    foreach ($doctors as $doctor){
                                        $full_name = implode(" ", array($doctor[1], $doctor[2], $doctor[3]));
                                        echo "<option value='" . $doctor[0] . "'>" . $full_name . "</option>";
                                    }
                                    ?>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Дата</label>
                            </div>
                            <input type="date" name="appDate" class="admin-input" required style="padding-bottom: 8px;" value="<?= $appointment['date'] ?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Время</label>
                            </div>
                            <input type="time" name="appTime" class="admin-input" required style="padding-bottom: 8px;" value="<?= $appointment['time'] ?>">
                        </div>
                    </div>
                    <button type="submit" class="add-but">Изменить</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="foot_box">
                <ul class="ul_left">
                    <li><a href="../../main.php"><img src="../../image/logo.png" alt="LOGO"></a></li>
                    <li><a href="../../about.php" class="fot_text foot_box1">О КЛИНИКЕ</a></li>
                    <li><a href="../../doctors.php" class="fot_text">ВРАЧИ</a></li>
                    <li><a href="../../services.php" class="fot_text">УСЛУГИ И ЦЕНЫ</a></li>
                    <li><a href="../../account.php" class="fot_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
                </ul>

                <ul class="ul_right">
                    <li class="number_foot">+7(800)800-80-80</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>