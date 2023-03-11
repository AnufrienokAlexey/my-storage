<?php
session_start();
//var_dump($_SESSION['user']);
//var_dump($_SESSION['user_folders']);
//require __DIR__ . '/../includes/all-folders.php';
?>

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
<!--                <button class="create-drive">Создать папку</button>-->
                <a href="../includes/add-folder.php" class="create-drive">Создать папку</a>
            </div>
            <div class="folders">
                <?php
                if (isset($_SESSION['user_folders'])) {
                    foreach ($_SESSION['user_folders'] as $user_folder) { ?>
                        <div class="folder flex">
                            <img src="../images/folder.svg" alt="Папка" class="folder-image">
                            <h4 class="folder-title"><?=$user_folder['folder_name'];?></h4>
                            <form action="../includes/delete-folder.php" method="post">
                                <input type="hidden" name="id" value="<?=$user_folder['id'];?>">
                                <input type="submit" value="Удалить папку">
                            </form>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Launch static backdrop modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

<!--                            <a href="../includes/delete-folder.php">Удалить папку</a>-->
                        </div>
                    <?php }
                } ?>
            </div>
        </main>
        <aside class="right-container flex">
            <h2>Мой профиль</h2>
            <h4>Привет, <?=$_SESSION['user'][0]['full_name'];?>!</h4>
            <a href="../includes/logout.php">Выйти</a>
        </aside>
    </div>
</body>
</html>