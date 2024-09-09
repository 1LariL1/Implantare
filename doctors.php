<? require_once 'php/config/connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Стоматологи</title>
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
                <li><a href="#" class="nav_text nav_text_active">ВРАЧИ</a></li>
                <li><a href="services.php" class="nav_text">УСЛУГИ И ЦЕНЫ</a></li>
                <li><a href="account.php" class="nav_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
    </header>  
    <main>
        <section id="klinika">
            <div class="container">
                <h1 class="text_doctor">СТОМАТОЛОГИ</h1>


                <div class="big_div">
            <?php
                    $doctors = mysqli_query($connect, "SELECT doctor.surname, doctor.name, doctor.patronymic, doctor.specialization, doctor.work_experience, doctor.image FROM doctor");
                    $doctors = mysqli_fetch_all($doctors);

                    $doctors_chunks = array_chunk($doctors, 3); // Разбиваем массив $doctors на подмассивы по 3 элемента

                    foreach ($doctors_chunks as $doctors_chunk) {
                ?>
                    <div class="doctors">
                        <?php
                            foreach ($doctors_chunk as $doctor) {
                        ?>
                            <div class="doc_box">
                                <img src="<?= $doctor[5] ?>" alt="DOC">
                                <p class="doc_name"><?= $doctor[0] ?> <?= $doctor[1] ?> <?= $doctor[2] ?></p>
                                <p class="doc_major"><?= $doctor[3] ?></p>
                                <p class="doc_years">СТАЖ РАБОТЫ: <?= $doctor[4] ?></p>
                                <div class="doc_button">
                                    <a href="account.php" class="doc_but">ЗАПИСАТЬСЯ</a>
                                </div> 
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
        </section>

        <section id="free">
            <div class="container">
                <div class="free_box" style="margin-top: 100px;">
                    <h1 class="text_free">ЗАПИШИТЕСЬ НА БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ</h1>
                    <p class="text_o_klinike text_o_klinike2">
                        Наши специалисты проведут полную диагностику ротовой полости и составят подробный план лечения.
                    </p>

                </div>

            </div>

        </section>

        <section id="Zapis">
            <div class="container">
                <div class="zayav_box_all">
                    <div class="zayav_box">

                        <h1 class="text_free1">ЗАРЕГИСТИРУЙТЕСЬ<br>
                            И ОТПРАВЬТЕ ЗАЯВКУ ЧЕРЕЗ ЛИЧНЫЙ КАБИНЕТ</h1>
                        
                        <p class="zayav_text">Это удобно, вы сможете:</p>
        
                        <p class="zayav_text1"><img src="image/done.png" alt="done" style="padding-right: 10px;"> Просматривать записи ко врачам</p><br>
                        <p class="zayav_text1"><img src="image/done.png" alt="done" style="padding-right: 10px;"> Оставлять заявки на запись ко врачу</p><br>
                        <p class="zayav_text1"><img src="image/done.png" alt="done" style="padding-right: 10px;"> Отменять записи</p><br>
        
                    </div>
        
                    <div class="image_1">
        
                        <img src="image/health.png" alt="done">
        
                    </div>
        
                </div>
            </div>

                
            

        </section>
    </main>

    <footer>
        <div class="container">
            <div class="foot_box">
                <ul class="ul_left">
                    <li><a href="main.php"><img src="image/logo.png" alt="LOGO"></a></li>
                    <li><a href="about.php" class="fot_text foot_box1">О КЛИНИКЕ</a></li>
                    <li><a href="#" class="fot_text  fot_text_active">ВРАЧИ</a></li>
                    <li><a href="services.php" class="fot_text">УСЛУГИ И ЦЕНЫ</a></li>
                    <li><a href="account.php" class="fot_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
                </ul>

                <ul class="ul_right">
                    <li class="number_foot">+7(800)800-80-80</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>