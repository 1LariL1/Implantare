<?php
require_once 'connect.php';
// Параметры Google reCAPTCHA
$secretKey = '6LdCyhgoAAAAADog9nbArYiUQ86mp6-EQWQ8yggA';

// Проверка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получение данных формы
  $email = $_POST['email'];
  $password = $_POST['password'];
  $recaptchaResponse = $_POST['g-recaptcha-response'];

  // Валидация reCAPTCHA
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = [
    'secret' => $secretKey,
    'response' => $recaptchaResponse
  ];

  $options = [
    'http' => [
      'header' => "Content-type: application/x-www-form-urlencoded\r\n",
      'method' => 'POST',
      'content' => http_build_query($data)
    ]
  ];

  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  $response = json_decode($result);

  // Проверка результата reCAPTCHA
  if ($response->success) {
    // Выполнение регистрации пользователя
    if (!empty($email) && !empty($password)) {    
      
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      mysqli_query($connect, "INSERT INTO `user` (`id_user`, `fio`, `email`, `telephone`, `password`) VALUES (NULL, '', '$email', '', '$hashedPassword')");
    }


    // Отправка ответа после успешной регистрации
    header('Location: success.html');
  } else {
    // Ответ, если проверка reCAPTCHA не пройдена
    header('Location: failed.html');
  }
}
?>