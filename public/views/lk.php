<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/fonts.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Мое хранилище</title>
</head>
<body>
    <div class="main flex">
        <aside class="left-container">
            <div class="left-header flex">
                <img src="../images/folder.svg" alt="Логотип" class="logo">
                <h4 class="left-title reset">Мое хранилище</h4>
            </div>
        </aside>
        <main class="center-container flex">
            <div class="center-header flex">
                <h1 class="center-title reset">Мой диск</h1>
                <button class="create-drive">Создать папку</button>
            </div>
            <div class="folders">
                <div class="folder flex">
                    <img src="../images/folder.svg" alt="Папка" class="folder-image">
                    <h4 class="folder-title">Папка</h4>
                </div>
                <div class="folder flex">
                    <img src="../images/folder.svg" alt="Папка" class="folder-image">
                    <h4 class="folder-title">Папка</h4>
                </div>
                <div class="folder flex">
                    <img src="../images/folder.svg" alt="Папка" class="folder-image">
                    <h4 class="folder-title">Папка</h4>
                </div>
                <div class="folder flex">
                    <img src="../images/folder.svg" alt="Папка" class="folder-image">
                    <h4 class="folder-title">Папка</h4>
                </div>
                <div class="folder flex">
                    <img src="../images/folder.svg" alt="Папка" class="folder-image">
                    <h4 class="folder-title">Папка</h4>
                </div>
            </div>
        </main>
        <aside class="right-container flex">
            <h2>Мой профиль</h2>
            <h4>Привет, пользователь!</h4>
            <button class="create-drive">Выйти</button>
        </aside>
    </div>
</body>
</html>