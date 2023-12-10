<?php
// Фейковый массив пользователей
$fakeUsers = [
    ['Ivan', 'Ivanov'],
    ['Arkadiy', 'Bulkin']
];

// Получаем данные из формы
$firstName = $_POST['name']['first'];
$lastName = $_POST['name']['last'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Проверка существования пользователя с таким именем и фамилией
if (in_array([$firstName, $lastName], $fakeUsers)) {
    die("Ошибка: Пользователь с таким именем и фамилией уже существует.");
}

// Проверка электронной почты на валидность
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Ошибка: Невалидный формат электронной почты.");
}

// Проверка совпадения паролей
if ($password !== $confirmPassword) {
    die("Ошибка: Пароли не совпадают.");
}

// Если все проверки прошли успешно, выводим сообщение об успешном создании пользователя
echo "Пользователь успешно создан!<br>";
echo "Имя: $firstName<br>";
echo "Фамилия: $lastName<br>";
echo "Email: $email<br>";
?>
