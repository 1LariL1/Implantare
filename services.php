<? require_once 'php/config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Услуги</title>
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
                <li><a href="#" class="nav_text nav_text_active">УСЛУГИ И ЦЕНЫ</a></li>
                <li><a href="account.php" class="nav_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
            </ul>

        </div>
        
    </header>
    <main>
        <section id="Smile">
            <div class="container">
                <h1 class="text_doctor2">УСЛУГИ И ЦЕНЫ</h1>
                <div class="services_box">
                    <button id="btn1" class="services_button services_button-first services_button-active"><p class="services_text">ЛЕЧЕНИЕ ЗУБОВ</p></button>
                    <button id="btn2" class="services_button"><p class="services_text">ПРОТЕЗИРОВАНИЕ</p></button>
                    <button id="btn3" class="services_button2"><p class="services_text">ИМПЛАНТАЦИЯ ЗУБОВ</p></button>
                    <button id="btn4" class="services_button"><p class="services_text">УДАЛЕНИЕ ЗУБОВ</p></button>
                    <button id="btn5" class="services_button2"><p class="services_text">ИСПРАВЛЕНИЕ ПРИКУСА</p></button>
                    <button id="btn6" class="services_button"><p class="services_text">ЭСТЕТИКА</p></button>
                    <button id="btn7" class="services_button2"><p class="services_text">ДЕТСКАЯ СТОМАТОЛОГИЯ</p></button>
                    <button id="btn8" class="services_button"><p class="services_text">ЧИСТКА ЗУБОВ</p></button>
                    <button id="btn9" class="services_button services_button-last"><p class="services_text">ДИАГНОСТИКА</p></button>
                </div>
                <div class="services-box1" id="div1">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/лечение зубов.png" alt="Лечение зубов"></div>
                            <p class="services-serv">Чаще всего причина стоматологических заболеваний — в инфицировании зубных тканей
                                патогенными бактериями. А главный провоцирующий фактор — это недостаточно качественная
                               гигиена полости рта.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 1");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box2 service_inactive" id="div2">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/протезирование.png" alt="ПРОТЕЗИРОВАНИЕ"></div>
                            <p class="services-serv">Каждый пациент при потере зубов желает восстановить их в короткие сроки и получить эстетичный
                                и функциональный результат.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 2");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box3 service_inactive" id="div3">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/имплантация зубов.png" alt="ИМПЛАНТАЦИЯ ЗУБОВ"></div>
                            <p class="services-serv">В стоматологии вам предложат комплексное лечение, результатом
                                которого будет восстановление эстетики зубных рядов и жевательной функции.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 3");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box4 service_inactive" id="div4">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/УДАЛЕНИЕ ЗУБОВ.png" alt="УДАЛЕНИЕ ЗУБОВ"></div>
                            <p class="services-serv">Выражение «вырвать зуб» в стоматологии «IMPLANTARE» никогда не применяют. Каждое удаление мы рассматриваем как потенциальную возможность установить имплант и вернуть цельность зубного ряда. ощущений. </p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 4");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box5 service_inactive" id="div5">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/ИСПРАВЛЕНИЕ ПРИКУСА.png" alt="ИСПРАВЛЕНИЕ ПРИКУСА"></div>
                            <p class="services-serv">Многие люди мирятся с неправильным прикусом, однако невозможно долгое время игнорировать проблемы, которые он провоцирует. Не нужно мириться с этими проблемами. Приезжайте в клинику «IMPLANTARE».</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 5");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box6 service_inactive" id="div6">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/ЭСТЕТИКА.png" alt="ЭСТЕТИКА"></div>
                            <p class="services-serv">Очаровательная улыбка с красивыми зубами — признак здоровья и жизненного успеха.
                                Стоматология «IMPLANTARE» предлагает в Москве целый комплекс эстетических услуг для
                                поддержания красоты вашей улыбки.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 6");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box7 service_inactive" id="div7">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/ДЕТСКАЯ СТОМАТОЛОГИЯ.png" alt="ДЕТСКАЯ СТОМАТОЛОГИЯ"></div>
                            <p class="services-serv">Персонал нашей клиники — не просто опытные врачи, но и прекрасные психологи, умеющие найти подход к маленьким пациентам. Максимальное внимание мы уделяем безболезненности манипуляций и комфорту для пациентов.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 7");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box8 service_inactive" id="div8">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/Чистка зубов.png" alt="ЧИСТКА ЗУБОВ"></div>
                            <p class="services-serv">Ухоженные зубы — это красивая улыбка, свежее дыхание, здоровые десны, отсутствие проблем с кариесом. Именно такой эффект дает качественная домашняя гигиена полости рта в сочетании с профессиональной чисткой зубов в стоматологии. </p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 8");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <div class="services-box9 service_inactive" id="div9">
                    <div class="services-wrap">
                        <div class="services-desc">
                            <div class="services-pic"><img src="image/ДИАГНОСТИКА.png" alt="ДИАГНОСТИКА"></div>
                            <p class="services-serv">Любое лечение врачи проводят после тщательного определения проблемы. Новейшая аппаратура позволяет нам получить объективные и точные сведения о состоянии зубочелюстной системы.</p>
                        </div>
                        <div class="services-table">
                            <table>

                                <?php
                                    $services = mysqli_query($connect, query:"SELECT * FROM `service` WHERE `id_type_service` = 9");
                                    $services = mysqli_fetch_all($services);
                                    foreach ($services as $service) {
                                    ?>
                                    <tr class="serv-tr">
                                         <td class="serv-name"><?= $service[2] ?></td>
                                        <td class="serv-cost"><?= $service[3] ?>₽</td>
                                    </tr>

                                <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
    
                <a href="account.php" class="services-order">ЗАПИСАТЬСЯ НА ПРИЕМ</a>
            </div>
        </section>
    </main>

    <footer>=
        <div class="container">
            <div class="foot_box">
                <ul class="ul_left">
                    <li><a href="main.php"><img src="image/logo.png" alt="LOGO"></a></li>
                    <li><a href="about.php" class="fot_text foot_box1">О КЛИНИКЕ</a></li>
                    <li><a href="doctors.php" class="fot_text">ВРАЧИ</a></li>
                    <li><a href="#" class="fot_text fot_text_active">УСЛУГИ И ЦЕНЫ</a></li>
                    <li><a href="account.php" class="fot_text">ЛИЧНЫЙ КАБИНЕТ</a></li>
                </ul>

                <ul class="ul_right">
                    <li class="number_foot">+7(800)800-80-80</li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>