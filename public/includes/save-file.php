<?php
require __DIR__ . '/../../vendor/autoload.php';

//var_dump($_POST);
if (isset($_POST['downloaded_file'])) {
    if ($_FILES["fileToUpload"]["size"] > 3 * 1024 * 1024) {
        echo "Извините, ваш файл слишком велик";
    }
    $file = $_FILES['fileToUpload'];
    var_dump($file);
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
}



//    $folder = new Folder();

//    $sql = 'INSERT INTO Files (filename, filepath, filemime, filesize, timestamp)
//        VALUES ("'. $_FILES['filename']['name'] . '",
//        "files/' . $_FILES['filename']['name'] . '",
//        "'. $_FILES['filename']['type'] .'",
//        '. $_FILES['filename']['size'] .',
//        '. time() . ')';
//    }
