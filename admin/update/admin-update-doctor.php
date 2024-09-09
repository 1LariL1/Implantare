<?php

    require_once '../../php/config/connect.php';

    $id_doctor= $_GET['id'];
    $doctor = mysqli_query($connect, query:"SELECT * FROM `doctor` WHERE `id_doctor` = '$id_doctor'");
    $doctor = mysqli_fetch_assoc($doctor);
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
                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Врачи</a></li>

                    <li class="admin-li"><a href="../admin-service.php" class="admin-li-a">Услуги</a></li>

                    <li class="admin-li"><a href="../admin-user.php" class="admin-li-a">Пользователи</a></li>

                    <li class="admin-li"><a href="../admin-appointment.php" class="admin-li-a">Записи</a></li>

                    <li class="admin-li"><a href="../admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="../admin-doctor.php" class="back-admin">← Назад</a>
                <form action="../../php/update/update-doctor.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="docID" value="<?= $doctor['id_doctor']?>">
                    <div class="admin-box">
                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Имя</label>
                            </div>
                            <input type="text" name="docName" class="admin-input" required value="<?= $doctor['name']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Фамилия</label>
                            </div>
                            <input type="text" name="docSurname" class="admin-input" required value="<?= $doctor['surname']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Отчество</label>
                            </div>
                            <input type="text" name="docPatronymic" class="admin-input" required value="<?= $doctor['patronymic']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Стаж работы</label>
                            </div>
                            <input type="text" name="docWE" class="admin-input" required value="<?= $doctor['work_experience']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Специализация</label>
                            </div>
                            <input type="text" name="docSpec" class="admin-input" required value="<?= $doctor['specialization']?>">
                        </div>

                        <div class="admin-wrap">
                            <div class="admin-label">
                                <label>Телефон</label>
                            </div>
                            <input type="number" name="docTel" class="admin-input" value="<?= $doctor['telephone']?>" required>
                        </div>
                    </div>
                    <div class="admin-wrap" style="margin-top: 20px; width: 314px;">
                            <div class="admin-label">
                                <label>Фотография</label>
                            </div>
                            <label for="files" style="cursor: pointer; display: flex; align-items: center; width: 288px;" class="admin-input" required>
                                <img src="../../<?= $doctor['image']?>" alt="Загрузить файл">
                                
                            </label>
                            <div id="file-name" style="margin-top: 20px; font-family: 'Oswald_light'; font-size: 17px;"></div>
                            <input type="file" name="docImage"  id="files" style="display: none;">
                    </div>
                    <script>
                        document.getElementById('files').addEventListener('change', function() {
                            var fileName = this.files[0].name;
                            document.getElementById('file-name').innerText = "Загружен файл: " + fileName;
                        });
                    </script>
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