<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація і регістрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ПІБ</label>
        <input type="text" name="full_name" placeholder="Введіть своє повне ім’я">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введите свій логін">
        <label>Пошта</label>
        <input type="email" name="email" placeholder="Введіть адрес електронної пошти">
        <label>Фото профіля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
        <button type="submit">Вхід</button>
        <p>
            У вас уже є аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>