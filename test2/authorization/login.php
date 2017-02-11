<?php 
    session_start();
    require_once '../funcs.php';
    
    if (isset($_POST['username']) && isset($_POST['password'])) { 
    $username = $_POST['username'];
    $query = "SELECT password FROM users WHERE username='$username'";
    $result = $connection->query($query);
    if(!empty($result)){
        $row = $result->fetch_assoc();
        if($row['password'] == $_POST['password']) {
            if(isset($_POST['remember'])) {
                setcookie('username', $_POST['username'], time() + 60 * 60 * 60 * 24 * 7);
            }
            $_SESSION['username'] = $username;
            header("location: profile.php");
        } else {
            echo 'Вы ввели неверный логин или пароль!';
        } 
    } else {
        echo 'Вы ввели неверный логин или пароль';
    }
}
?> 