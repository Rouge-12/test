<?php
session_start();
define(HOST, 'localhost');
define(USERNAME, 'root');
define(PASSWORD, '');
define(DATABASE, 'test');

$connection = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
if(!$connection) {
    echo 'Ошибка подключения к базе данных no.' . $connection->errno;
}

function profile_img($username, $path) {
    $extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['img']['tmp_name'], 
                $path. "//$username.$extension");
    return $extension;
}
?>