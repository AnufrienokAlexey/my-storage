<?php
session_start();
?>

<!doctype html>exirt
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/fonts.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/styles.css">
	<title>Мое хранилище - Авторизация</title>
</head>
<body>
	<main class="sign-in flex">
		<form action="lk.php" method="post" class="form-control form_sign-in">
            <h3>Авторизация</h3>
			<div class="mb-3">
				<label for="login" class="form-label">Логин</label>
				<input class="form-control" type="text" name="login" id="login" placeholder="Введите свой логин" required>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Пароль</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Введите свой пароль" required>
			</div>
            <div class="flex sign-in_bottom">
                <button class="btn btn-primary" type="submit">Авторизоваться</button>
                <a href="register.php">Зарегистрироваться</a>
            </div>
		</form>
        <?php
            if (isset($_SESSION['success_register'])) {
                echo '<p class="sign-in_title">' . $_SESSION['success_register'] . '</p>';
                unset($_SESSION['success_register']);
             }
        ?>
	</main>
</body>
</html>
