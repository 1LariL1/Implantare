<? require_once 'php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Implantare</title>
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
                <li><a href="account.php" class="nav_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
        
    </header>
    <main>
        <section id="Smile">
            <div class="container">
                <div class="smile_text">
                    <div class="text_smile">
                        <img src="image/big_logo.png" alt="BIG_LOGO">
                        <p class="smile_font1">МОСКОВСКАЯ СТОМАТОЛОГИЧЕСКАЯ <br>КЛИНИКА С 20-ЛЕТНЕЙ ПРАКТИКОЙ</p>
                        <p class="smile_font2">20 ЛЕТ В ПЕРЕДОВОЙ СТОМАТОЛОГИИ <br>ЛЕЧИМ ВО СНЕ БЕЗ БОЛИ И СТРЕССА<br>ВСЕ ОБСЛЕДОВАНИЯ ДЕЛАЕМ В КЛИНИКЕ</p>
                        <div class="smile_but">
                            <a href="account.php" class="smile_textbut">ЗАПИСАТЬСЯ НА ПРИЕМ</a>
                        </div>
                    </div>
                    <img src="image/smile.png" alt="Smile">
                </div>
    
            </div>
        </section>
        <section id="Doctor">
            <div class="container">
                <h1 class="text_doctor">НАШИ СПЕЦИАЛИСТЫ</h1>
    
                <div class="big_div">
                    <div class="doctors">            
                        <?php
                                $doctors = mysqli_query($connect, query:"SELECT doctor.surname, doctor.name, doctor.patronymic, doctor.specialization, doctor.work_experience, doctor.image FROM doctor WHERE doctor.id_doctor IN (1, 2, 3)");
                                $doctors = mysqli_fetch_all($doctors);
                                foreach ($doctors as $doctor) {
                            ?>
                        <div class="doc_box">
                            <img src="<?= $doctor[5] ?>" alt="DOC">
                            <p class="doc_name"><?= $doctor[0] ?> <?= $doctor[1] ?> <?= $doctor[2] ?></p>
                            <p class="doc_major"><?= $doctor[3] ?></p>
                            <p class="doc_years">СТАЖ РАБОТЫ: <?= $doctor[4] ?> ЛЕТ</p>
                            <div class="doc_button">
                                <a href="account.php" class="doc_but">ЗАПИСАТЬСЯ</a>
                            </div> 
                        </div>     
                        
                        <?php

                                }
                        ?>

                     </div>
                </div>
                <a href="doctors.php" class="text_all"><p>СМОТРЕТЬ ВСЕХ →</p></a>
            </div>
            
        </section>
        <section id="Plus">
            <div class="container">
                <h1 class="text_doctor">ПРЕИМУЩЕСТВА</h1>
                <div class="plus_plus">
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/1.png" alt="ONE">
                            <div class="plus_one">
                                <p class="plus_title">НОВЕЙШЕЕ ОБОРУДОВАНИЕ</p>
                                <p class="plus_text">В каждом кабинете - только современное<br>
                                стоматологическое оборудование от ведущих<br>мировых производителей </p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/2.png" alt="TWO">
                            <div class="plus_one">
                                <p class="plus_title">ИНДИВИНДУАЛЬНЫЙ ПОДХОД</p>
                                <p class="plus_text">Комлексно решаем стоматологические проблемы<br> 
                                    наших пациентов, всегда предлагаем<br> 
                                    оптимальные варианты лечения.</p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/3.png" alt="THREE">
                            <div class="plus_one">
                                <p class="plus_title">100% ДОВОЛЬНЫХ ПАЦИЕНТОВ</p>
                                <p class="plus_text">100% наших пациентов довольны проделанным<br> 
                                    лечением и наслаждаются своей улыбкой.</p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
    
                </div>
    
                <div class="plus_plus plus_plus1">
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/4.png" alt="FOUR">
                            <div class="plus_one">
                                <p class="plus_title">ЧЕСТНАЯ ЦЕНА</p>
                                <p class="plus_text">Не пересчитываем стоимость услуг после<br>
                                    разработки программы лечения. Все расходы за<br>
                                    неучтенные манипуляции готовы взять на себя.</p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/5.png" alt="FIVE">
                            <div class="plus_one">
                                <p class="plus_title">БЕЗОПАСНОСТЬ</p>
                                <p class="plus_text plus_text1">Используем сертифицированные<br>
                                    стоматологические материалы, безопасные <br>
                                    анестетики, соблюдаем стерильность по<br>
                                    умолчанию.</p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
                    <div class="plus_box">
                        <div class="plus_content">
                            <img src="image/6.png" alt="SIX">
                            <div class="plus_one">
                                <p class="plus_title">ГАРАНТИЯ КАЧЕСТВА</p>
                                <p class="plus_text">На все виды услуг мы предоставляем<br>
                                    расширенную гарантию.</p>
                            </div>
                                                 
                        </div>
    
    
                    </div>
    
                </div>
    
            </div>
        </section>
        <section id="Service">
            <div class="container">
                <h1 class="text_doctor">УСЛУГИ</h1>
                <div class="main_service">
                    <div class="service_box">
                        <div class="service_content">
                            <a href="services.php" class="serv_text">ЛЕЧЕНИЕ ЗУБОВ →</a><br>
                            <a href="services.php" class="serv_text">ПРОТЕЗИРОВАНИЕ →</a><br>
                            <a href="services.php" class="serv_text">ИМПЛАНТАЦИЯ ЗУБОВ →</a><br>
                            <a href="services.php" class="serv_text">УДАЛЕНИЕ ЗУБОВ →</a><br>
                            <a href="services.php" class="serv_text">ИСПРАВЛЕНИЕ ПРИКУСА →</a><br>
                            <a href="services.php" class="serv_text">ЭСТЕТИКА →</a><br>
                            <a href="services.php" class="serv_text">ДЕТСКАЯ СТОМАТОЛОГИЯ →</a><br>
                            <a href="services.php" class="serv_text">ЧИСТКА ЗУБОВ →</a><br>
                            <a href="services.php" class="serv_text">ДИАГНОСТИКА →</a>
                        </div>
    
                    </div>
                    <div class="text_service">
                        <p class="text_serv_main">Уже 20 лет клиника <span class="span_imp">IMPLANTARE</span> предоставляет услуги по уходу за зубами и улучшению зубного<br>
                             здоровья. Наша команда профессиональных стоматологов и гигиенистов стремится обеспечить<br>
                              каждого пациента индивидуальным подходом и качественными услугами. </p>
                        <p class="text_serv_main text_serv_main1">Получите бесплатную консультацию<br> 
                            по номеру</p>
                        <p class="numb_serv">+7(800)800-80-80</p>
                        <a href="account.php" class="link_serv">ЗАПИСАТЬСЯ НА ПРИЕМ →</a>
    
                    </div>
    
                </div>
    
            </div>
    
        </section>
        <section class="review">
            <div class="container">
                <h1 class="text_doctor">ОТЗЫВЫ</h1>
                <div class="review_box">
                    <div class="rev_one">
                        <div class="rev_content">
                            <p class="rev_name">Максим Г.</p>
                            <p class="rev_date">29.12.2023</p>
                            <p class="rev_text">Отличная клиника, приятные врачи. Удобное расположение. Рекомендую!</p>
    
                        </div>
    
                    </div>
    
                    <div class="rev_one">
                        <div class="rev_content">
                            <p class="rev_name">Геннадий Б.</p>
                            <p class="rev_date">25.12.2023</p>
                            <p class="rev_text">Отличная клиника! Все прошло быстро и безболезненно. Спасибо.</p>
    
                        </div>
    
                    </div>
    
                    <div class="rev_one">
                        <div class="rev_content">
                            <p class="rev_name">Алёна</p>
                            <p class="rev_date">20.12.2023</p>
                            <p class="rev_text">Хочу выразить благодарность Ивану Ивановичу! Был со мной на связи весь период заживления. Только положительные эмоции.</p>
    
                        </div>
    
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
                    <li><a href="doctors.php" class="fot_text">ВРАЧИ</a></li>
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