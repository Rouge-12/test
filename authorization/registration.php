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
                $query2 = "INSERT INTO userInfo VALUES('$username', '$fname', '$sname', '$city', '$telephone', '$birthdate')";
                $result2 = $connection->query($query2);
                
                if($result2) {
                $extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
                $filename = $_POST['username'];
                move_uploaded_file($_FILES['img']['tmp_name'], 
                        "profile_images\\". "$username.$extension");
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
