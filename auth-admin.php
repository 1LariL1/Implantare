<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Вход в административную панель</title>
</head>
<body>
    <header>       
    </header>
    <main>
        <section id="auth-reg">
            <div class="container">
                <div class="auth-form">
                    <div class="auth-reg-box">
                        <form method="POST" action="php/config/sign-in-admin.php">
                            <div class="inputs-box">
                                <p class="auth-reg-title" style="font-size: 30px; margin-bottom:40px;">ВХОД В АДМИНИСТРАТИВНУЮ ПАНЕЛЬ</p>
                                <p class="auth-label">Почта</p>
                                <input type="email" placeholder="user@mail.ru" class="auth-input" name="email" required>
                                <p class="auth-label">Пароль</p>
                                <input type="password" placeholder="*****" class="auth-input" name="password" required><br>
                                <input type="submit" value="Войти" class="auth-button"><br>
                            </div>
                        </form>
                        <img src="image/auth-photo.png" alt="Улыбка">
                    </div>
                </div>
    
            </div>
        </section>
    

    </main>
   

    <footer>
    </footer>
</body>
</html>