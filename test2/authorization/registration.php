<?php
session_start();
require_once '../funcs.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $query = "SELECT username FROM users WHERE username='$username'";
    $result = $connection->query($query);
    if($result) {
        $row = $result->fetch_assoc();
        if(empty($row)) {
            $password = $_POST['password'];
            $query1 = "INSERT INTO users VALUES('$username', '$password', NULL)";
            $result1 = $connection->query($query1);
            if($result1) {
                $fname = $_POST['fname'];
                $sname = $_POST['sname'];
                $city = $_POST['city'];
                $telephone = $_POST['telephone'];
                $birthdate = $_POST['birthdate'];
                $query2 = "INSERT INTO userInfo VALUES('$username', '$fname', '$sname', '$city', '$telephone', '$birthdate', NULL)";
                $result2 = $connection->query($query2);
                
                if($result2) {
                $extension = profile_img($username, "profile_images");
                $query3 = "UPDATE userInfo SET profile_image='$username.$extension' WHERE username='$username'";
                $result3 = $connection->query($query3);
                if(!$result3) {
                    echo "Ошибка при добавлении пути в БД";
                }
                $_SESSION['username'] = $_POST['username'];
                header("location:profile.php");
                } else {
                    echo "Ошибка загрузки изображения.";
                }
            } else {
                echo "Ошибка регистрации";
            }    
        } else {
            echo "Пользователь с таким логином уже существует!";
        }
    } else {
        echo "Ошибка запроса к базе данных";
    }
} else {
    header("location:../index.php");
}
?>
