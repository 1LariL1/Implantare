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

                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Услуги</a></li>

                    <li class="admin-li"><a href="admin-user.php" class="admin-li-a">Пользователи</a></li>

                    <li class="admin-li"><a href="admin-appointment.php" class="admin-li-a">Записи</a></li>

                    <li class="admin-li"><a href="admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
               <div class="admin-service-box">
                    <div>
                        <p class="admin-service-title">Тип услуги</p>
                        <a href="create/admin-create-type_service.php" class="create-but">Добавить запись</a>
                        <table class="admin-table">
                            <tr class="admin-tr">
                                <th class="admin-th">ID</th>
                                <th class="admin-th">Тип услуги</th>
                            </tr>

                            <?php
                                $types = mysqli_query($connect, query:"SELECT * FROM `type_service`");
                                $types = mysqli_fetch_all($types);
                                foreach ($types as $type) {
                                    ?>
                                        <tr class="admin-tr">
                                            <td class="admin-td"><?= $type[0] ?></td>
                                            <td class="admin-td"><?= $type[1] ?></td>
                                            <td><a href="update/admin-update-type_service.php?id=<?= $type[0] ?>"  class="admin-td1"><img src="../image/edit-02.png" alt="Изменить"></a></td>
                                            <td><a href="../php/delete/delete-type_service.php?id=<?= $type[0] ?>"  class="admin-td1"><img src="../image/trash-04.png" alt="Удалить"></a></td>
                                        </tr>

                                    <?php
                                }
                            ?>
                            
                        </table>
                    </div>
                    <div>
                        <p class="admin-service-title">Услуга</p>
                        <a href="create/admin-create-service.php" class="create-but">Добавить запись</a>
                        <table class="admin-table">
                            <tr class="admin-tr">
                                <th class="admin-th">ID</th>
                                <th class="admin-th">Тип услуги</th>
                                <th class="admin-th">Услуга</th>
                                <th class="admin-th">Цена</th>
                            </tr>

                            <?php
                                $services = mysqli_query($connect, query:"SELECT service.id_service, type_service.type, service.service, service.price FROM `service` JOIN type_service ON service.id_type_service=type_service.id_type_service");
                                $services = mysqli_fetch_all($services);
                                foreach ($services as $service) {
                                    ?>
                                        <tr class="admin-tr">
                                            <td class="admin-td"><?= $service[0] ?></td>
                                            <td class="admin-td"><?= $service[1] ?></td>
                                            <td class="admin-td"><?= $service[2] ?></td>
                                            <td class="admin-td"><?= $service[3] ?></td>
                                            <td><a href="update/admin-update-service.php?id=<?= $service[0] ?>"  class="admin-td1"><img src="../image/edit-02.png" alt="Изменить"></a></td>
                                            <td><a href="../php/delete/delete-service.php?id=<?= $service[0] ?>"  class="admin-td1"><img src="../image/trash-04.png" alt="Удалить"></a></td>
                                        </tr>

                                    <?php
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>                
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