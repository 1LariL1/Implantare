<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Вход в личный кабинет</title>
</head>
<body>
    <header>       
    </header>
    <main>
        <section id="auth-reg">
            <div class="container">
                <div class="auth-form">
                    <div class="auth-reg-box">
                        <form method="POST" action="php/config/sign-in.php">
                            <div class="inputs-box">
                                <p class="auth-reg-title">АВТОРИЗАЦИЯ</p>
                                <p class="auth-label">Почта</p>
                                <input type="email" placeholder="user@mail.ru" class="auth-input" name="email" required>
                                <p class="auth-label">Пароль</p>
                                <input type="password" placeholder="*****" class="auth-input" name="password" required><br>
                                <input type="submit" value="Войти" class="auth-button"><br>
                                <button class="open-reg">У Вас нет еще аккаунта? Зарегистрироваться</button>
                            </div>
                        </form>
                        <img src="image/auth-photo.png" alt="Улыбка">
                    </div>
                </div>

                <div class="reg-form form-hide">
                    <div class="auth-reg-box">
                        <form  method="POST" action="php/config/sign-up.php">
                            <div class="inputs-box">
                                <p class="auth-reg-title">РЕГИСТРАЦИЯ</p>
                                <p class="reg-label">Почта</p>
                                <input type="email" placeholder="user@mail.ru" class="reg-input" name="email" required>
                                <p class="reg-label">Пароль</p>
                                <input type="password" placeholder="*****" class="reg-input" name="password" required><br>
                                <div class="g-recaptcha" data-sitekey="6LdCyhgoAAAAAIg8wR33unpKEqqwHDl1V46gJ73M" style="margin-top: 25px;" required></div>
                                <input type="submit" value="Создать аккаунт" class="reg-button"><br>
                                <button class="open-auth">Уже есть аккаунт? Войти</button>
                            </div>
                            
                        </form>
                        <img src="image/reg-photo.png" alt="Улыбка">
                    </div>
                </div>
    
            </div>
        </section>
    

    </main>
   

    <footer>
    </footer>
    <script src="js/auth-reg.js"></script>
</body>
</html>