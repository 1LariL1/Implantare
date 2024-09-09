<?php

    require_once '../../php/config/connect.php';

    $id_user = $_GET['id'];
    $user = mysqli_query($connect, query:"SELECT * FROM `user` WHERE `id_user` = '$id_user'");
    $user = mysqli_fetch_assoc($user);
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

                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Пользователи</a></li>

                    <li class="admin-li"><a href="../admin-appointment.php" class="admin-li-a">Записи</a></li>

                    <li class="admin-li"><a href="../admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="../admin-user.php" class="back-admin">← Назад</a>
                <form action="../../php/update/update-user.php" method="post">
                    <input type="hidden" name="userId" value="<?= $user['id_user']?>">
                    <div class="admin-box">
                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>ФИО</label>
                            </div>
                            <input type="text" name="userFIO" class="admin-input" required value="<?= $user['fio']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Почта</label>
                            </div>
                            <input type="email" name="userEmail" class="admin-input" required value="<?= $user['email']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Телефон</label>
                            </div>
                            <input type="number" name="userTel" class="admin-input" required value="<?= $user['telephone']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Код доступа</label>
                            </div>
                            <input type="num" name="userAcess" class="admin-input" required value="<?= $user['access']?>">
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