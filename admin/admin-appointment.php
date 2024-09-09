<? require_once '../php/config/connect.php';
?>

<?php
session_start();
if (!$_SESSION['user'] || $_SESSION['user']['access'] != 1) {
    header('Location: ../auth-admin.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Административная панель</title>
</head>
<body>
    <header>

        <div class="container">
            <div class="header_box">
                <a href="../main.php"><img src="../image/logo.png" alt="Logotip"></a>
                <p class="admin-title">АДМИНИСТРАТИВНАЯ ПАНЕЛЬ</p>

                <!-- <div class="header_wrap">
                    <img src="image/map.png" alt="Map">
                    <div class="header_text">
                        <p class="map_font">Мы находимся по адресу:</p>
                        <p class="map_font2">г. Москва, пер. Сивцев Вражек, д. 26/28</p>
                    </div>
                </div> 
                <div class="header_wrap">
                    <img src="image/clock.png" alt="Clock">
                    <div class="header_text">
                        <p class="map_font">Работаем без выходных:</p>
                        <p class="map_font2">Ежедневно с 9:00 до 21:00</p>
                    </div>
                </div>
                <div class="header_number">
                    <p class="number_font">+7(800)800-80-80</p>
                    <p class="map_font2">Звонок бесплатный</p>
                </div> -->
            </div>
        </div>


        <div class="nav_box">
            <ul class="nav_ul">
                <li><a href="../about.php" class="nav_text">О КЛИНИКЕ</a></li>
                <li><a href="../doctors.php" class="nav_text">ВРАЧИ</a></li>
                <li><a href="../services.php" class="nav_text">УСЛУГИ И ЦЕНЫ</a></li>
                <li><a href="../account.php" class="nav_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
        
    </header>
    <main>
        <div class="admin-container">
            <div class="nav-admin">
                <ul class="">
                    <li class="admin-li"><a href="admin-doctor.php" class="admin-li-a">Врачи</a></li>

                    <li class="admin-li"><a href="admin-service.php" class="admin-li-a">Услуги</a></li>

                    <li class="admin-li"><a href="admin-user.php" class="admin-li-a">Пользователи</a></li>

                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Записи</a></li>

                    <li class="admin-li"><a href="admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="create/admin-create-appointment.php" class="create-but">Добавить запись</a>
                <table class="admin-table">
                    <tr class="admin-tr">
                        <th class="admin-th">ID</th>
                        <th class="admin-th">Пользователь</th>
                        <th class="admin-th">Услуга</th>
                        <th class="admin-th">Доктор</th>
                        <th class="admin-th">Дата</th>
                        <th class="admin-th">Время</th>
                    </tr>

                    <?php
                        $appointments = mysqli_query($connect, query:"SELECT appointment.id_appointment, appointment.date, appointment.time, doctor.surname, doctor.name, doctor.patronymic, user.email, service.service FROM `appointment` JOIN doctor on appointment.id_doctor=doctor.id_doctor JOIN user ON appointment.id_user=user.id_user JOIN service ON appointment.id_service=service.id_service;");
                        $appointments = mysqli_fetch_all($appointments);
                        foreach ($appointments as $appointment) {
                            ?>
                                <tr class="admin-tr">
                                    <td class="admin-td"><?= $appointment[0] ?></td>
                                    <td class="admin-td"><?= $appointment[6] ?></td>
                                    <td class="admin-td"><?= $appointment[7] ?></td>
                                    <td class="admin-td"><?= $appointment[3] ?> <?= $appointment[4] ?> <?= $appointment[5] ?></td>
                                    <td class="admin-td"><?= $appointment[1] ?></td>
                                    <td class="admin-td"><?= $appointment[2] ?></td>
                                    <td><a href="update/admin-update-appointment.php?id=<?= $appointment[0] ?>"  class="admin-td1"><img src="../image/edit-02.png" alt="Изменить"></a></td>
                                    <td><a href="../php/delete/delete-appointment.php?id=<?= $appointment[0] ?>"  class="admin-td1"><img src="../image/trash-04.png" alt="Удалить"></a></td>
                                </tr>

                            <?php
                        }
                    ?>
                    
                </table>
 
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="foot_box">
                <ul class="ul_left">
                    <li><a href="../main.php"><img src="../image/logo.png" alt="LOGO"></a></li>
                    <li><a href="../about.php" class="fot_text foot_box1">О КЛИНИКЕ</a></li>
                    <li><a href="../doctors.php" class="fot_text">ВРАЧИ</a></li>
                    <li><a href="../services.php" class="fot_text">УСЛУГИ И ЦЕНЫ</a></li>
                    <li><a href="../account.php" class="fot_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
                </ul>

                <ul class="ul_right">
                    <li class="number_foot">+7(800)800-80-80</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>