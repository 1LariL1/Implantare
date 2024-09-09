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

                    <li class="admin-li"><a href="admin-service.php" class="admin-li-a">Услуги</a></li>

                    <li class="admin-li"><a href="#" class="admin-li-a admin-li-a-active">Пользователи</a></li>

                    <li class="admin-li"><a href="admin-appointment.php" class="admin-li-a">Записи</a></li>

                    <li class="admin-li"><a href="admin-message.php" class="admin-li-a">Заявки на запись</a></li>
                </ul>
            </div>
            <div class="container">
                <a href="create/admin-create-user.php" class="create-but">Добавить запись</a>
                <table class="admin-table">
                    <tr class="admin-tr">
                        <th class="admin-th">ID</th>
                        <th class="admin-th">ФИО</th>
                        <th class="admin-th">Почта</th>
                        <th class="admin-th">Телефон</th>
                        <th class="admin-th">Код доступа</th>
                    </tr>

                    <?php
                        $users = mysqli_query($connect, query:"SELECT * FROM `user`");
                        $users = mysqli_fetch_all($users);
                        foreach ($users as $user) {
                            ?>
                                <tr class="admin-tr">
                                    <td class="admin-td"><?= $user[0] ?></td>
                                    <td class="admin-td"><?= $user[1] ?></td>
                                    <td class="admin-td"><?= $user[2] ?></td>
                                    <td class="admin-td"><?= $user[3] ?></td>
                                    <td class="admin-td"><?= $user[5] ?></td>
                                    <td><a href="update/admin-update-user.php?id=<?= $user[0] ?>"  class="admin-td1"><img src="../image/edit-02.png" alt="Изменить"></a></td>
                                    <td><a href="../php/delete/delete-user.php?id=<?= $user[0] ?>"  class="admin-td1"><img src="../image/trash-04.png" alt="Удалить"></a></td>
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