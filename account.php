<? require_once 'php/config/connect.php';
?>
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: auth-reg.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <header>
        
        <div class="container">
            <div class="header_box">
                <a href="main.php"><img src="image/logo.png" alt="Logotip"></a>
                <div class="header_wrap">
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
                </div>
            </div>
        </div>
        <div class="nav_box">
            <ul class="nav_ul">
                <li><a href="about.php" class="nav_text">О КЛИНИКЕ</a></li>
                <li><a href="doctors.php" class="nav_text">ВРАЧИ</a></li>
                <li><a href="services.php" class="nav_text">УСЛУГИ И ЦЕНЫ</a></li>
                <li><a href="#" class="nav_text nav_text_active">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
        
    </header>
    
    <main>
        <section id="info-orders">
            <div class="container"> 
                <div class="delete-app hide-app">
                    <div class="appointment">
                        <p class="delete-p">Вы уверены, что хотите отменить запись?</p>
                        <div class="delete-buts">
                            <a href="" class="delete-yes">ДА</a>
                            <button class="delete-no">НЕТ</button>
                        </div>
                    </div>
                </div>
                <div class="title-exit">
                    <h1 class="text_doctor2">Добро пожаловать, <?= $_SESSION['user']['email'] ?>!</h1>
                    <a href="php/config/logout.php" class="account-exit">Выйти из аккаунта</a>
                </div>  
                <div class="info-orders-wrap">
                    <div class="info">
                        <div class="info-edit">
                            <p class="account-title">Личные данные</p>
                            <button class="account-but-edit"><img src="image/edit.png" alt="Изменить"></button>
                        </div>
                        <p class="info-name"><?= $_SESSION['user']['fio'] ?></p>
                        <p class="info-mail-phone"><?= $_SESSION['user']['email'] ?></p>
                        <p class="info-mail-phone"><?= $_SESSION['user']['telephone'] ?></p>
                    </div>
                    <div class="info info-box-edit info-hide">
                        <div class="info-edit">
                            <p class="account-title">Изменить данные</p>
                            <button class="account-but-close"><img src="image/x-close.png" alt="Закрыть"></button>
                        </div>
                        <form method="post" action="php/update/account-user-update.php" id="updateForm">
                            <input type="hidden" name="userIdEdit" value="<?= $_SESSION['user']['id_user'] ?>">
                            <p class="info-mail-phone">ФИО</p>
                            <input class="edit-input" type="text" name="editFIO" value="<?= $_SESSION['user']['fio'] ?>">
                            <p class="info-mail-phone">Почта</p>
                            <input class="edit-input" type="email" name="editEmail" value="<?= $_SESSION['user']['email'] ?>">
                            <p class="info-mail-phone">Телефон</p>
                            <input class="edit-input" type="number" name="editTel" value="<?= $_SESSION['user']['telephone'] ?>">
                            <p class="info-mail-phone">Введите пароль</p>
                            <input class="edit-input" type="text" name="editOldPass" required id="editOldPass">
                            <p class="info-mail-phone">Введите новый пароль</p>
                            <input class="edit-input" type="text" name="editNewPass">
                            <input type="submit" value="Сохранить" class="edit-save" id="submitBtn">
                        </form>
                    </div>
                    <div class="orders">
                        <p class="account-title" style="margin-bottom: 20px;">Запись ко врачу</p>
                        <!-- <table>
                            <tr>
                                <th class="orders-name" style="padding-left: 0px;">Услуга</th>
                                <th class="orders-name">Врач</th>
                                <th class="orders-name">Дата приема</th>
                                <th class="orders-name">Время приема</th>
                                <th class="orders-name orders-name1">Цена</th>
                            </tr>
                            <tr>
                                <td class="orders-atr" style="padding-left: 0px;">Пломба под ключ</td>
                                <td class="orders-atr">Иванов Иван</td>
                                <td class="orders-atr">01.01.2024</td>
                                <td class="orders-atr">17:30</td>
                                <td class="orders-atr">5900 ₽</td>
                                <td class="orders-atr-button"><button class="orders-atr-but">Отменить запись</button></td>
                            </tr>     
                            <tr>
                                <td class="orders-atr" style="padding-left: 0px;">Пломба под ключ</td>
                                <td class="orders-atr">Иванов Иван</td>
                                <td class="orders-atr">01.01.2024</td>
                                <td class="orders-atr">20:00</td>
                                <td class="orders-atr">5900 ₽</td>
                                <td class="orders-atr-button"><button class="orders-atr-but">Отменить запись</button></td>
                            </tr> 

                        </table> -->
                        <table>
                            <tr>
                                <th class="orders-name"  style="padding-left: 0px;">Услуга</th>
                                <th class="orders-name">Врач</th>
                                <th class="orders-name">Дата приема</th>
                                <th class="orders-name">Время приема</th>
                                <th class="orders-name orders-name1">Цена</th>
                            </tr>

                            <?php
                                $appointments = mysqli_query($connect, query:"SELECT service.service, doctor.name, doctor.surname, appointment.date, appointment.time, service.price, appointment.id_appointment FROM `appointment`
                                JOIN service ON appointment.id_service=service.id_service
                                JOIN doctor ON appointment.id_doctor=doctor.id_doctor WHERE id_user = '" . $_SESSION['user']['id_user'] . "'");
                                $appointments = mysqli_fetch_all($appointments);
                                foreach ($appointments as $appointment) {
                                    ?>
                                        <tr class="admin__tr">
                                            <td class="orders-atr" style="padding-left: 0px;"><?= $appointment[0] ?></td>
                                            <td class="orders-atr"><?= $appointment[1] ?> <?= $appointment[2] ?></td>
                                            <td class="orders-atr"><?= $appointment[3] ?></td>
                                            <td class="orders-atr"><?= $appointment[4] ?></td>
                                            <td class="orders-atr"><?= $appointment[5] ?>₽</td>
                                            <td class="orders-atr-button"><button class="orders-atr-but" id="<?= $appointment[6] ?>">Отменить запись</button></td>
                                        </tr>

                                    <?php
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section id="make-order">
            <div class="container">
                <h1 class="text_doctor">ЗАПИСАТЬСЯ НА ПРИЕМ</h1>
                <form action="/php/create/create-message.php" method="post">
                    <div class="make-order-box">
                        <div class="make-order-wrap">
                            <input type="hidden" name="userId" value="<?= $_SESSION['user']['id_user'] ?>">
                            <p class="orders-label">Выберите услугу</p>
                            <select name="messageService" id="" class="orders-input" style="margin-bottom: 16px;" required>
                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service`");
                                    $services = mysqli_fetch_all($services);
                                    {
                                    ?>
                                    <option class="orders-option" value="">Выберите услугу</option>
                                        <?php
                                        foreach ($services as $service) {
                                        echo "<option class=\"orders-option\" value='" . $service[0] . "'>" . $service[2] . "</option>";
                                    }
                                    ?>
                                    <?php
                                    }
                                ?>
                            </select><br>
                            <p class="orders-label">Выберите желаемую дату</p>
                            <input type="date" class="orders-input" style="width: 308px; padding: 8px 45px 10px 20px;" required name="messageDate">
                        </div>
                        <div>
                            <p class="orders-label">Ваш комментатрий</p>
                            <textarea name="messageComment" class="make-order-comment" placeholder="4 пломбы" required></textarea>
                        </div>

                        <div>
                            <input type="submit" class="make-order-but" placeholder="ОТПРАВИТЬ">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>


    <footer>
        <div class="container">
            <div class="foot_box">
                <ul class="ul_left">
                    <li><a href="main.php"><img src="image/logo.png" alt="LOGO"></a></li>
                    <li><a href="about.php" class="fot_text foot_box1">О КЛИНИКЕ</a></li>
                    <li><a href="doctors.php" class="fot_text">ВРАЧИ</a></li>
                    <li><a href="services.php" class="fot_text">УСЛУГИ И ЦЕНЫ</a></li>
                    <li><a href="#" class="fot_text fot_text_active">ЛИЧНЫЙ КАБИНЕТ</a></li>
                </ul>

                <ul class="ul_right">
                    <li class="number_foot">+7(800)800-80-80</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/account-edit.js"></script>
    <script src="js/delete-app.js"></script>
</body>
</html>