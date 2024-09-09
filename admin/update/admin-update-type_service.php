<?php

    require_once '../../php/config/connect.php';

    $id_type_service= $_GET['id'];
    $type = mysqli_query($connect, query:"SELECT * FROM `type_service` WHERE `id_type_service` = '$id_type_service'");
    $type = mysqli_fetch_assoc($type);
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

                    <li class="admin-li"><a href="#" class="admin-li-a  admin-li-a-active">Услуги</a></li>

                    <li class="admin-li"><a href="../admin-user.php" class="admin-li-a">Пользователи</a></li>

                    <li class="admin-li"><a href="../admin-appointment.php" class="admin-li-a">Записи</a></li>

                    <li class="admin-li"><a href="../admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="../admin-service.php" class="back-admin">← Назад</a>
                <form action="../../php/update/update-type_service.php" method="post">
                    <input type="hidden" name="type_serviceId" value="<?= $type['id_type_service']?>">
                    <div class="admin-box">
                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Тип услуги</label>
                            </div>
                            <input type="text" name="typeService" class="admin-input" required value="<?= $type['type']?>">
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