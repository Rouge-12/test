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
?>