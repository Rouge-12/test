<?php 
session_start();
require_once '../funcs.php';

if(isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    isset($_SESSION['username']) ? $username = $_SESSION['username'] :
        $username = $_COOKIE['username'];
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $extension = profile_img($username, "profile_images");
        $query = "UPDATE userInfo SET profile_image='$username.$extension' WHERE username='$username'";
        $result = $connection->query($query);
        if(!$result) {
            echo "Ошибка!";
        }
    } 
    
    $query = "SELECT * FROM userInfo WHERE username='$username'";
    $result = $connection->query($query);
    if($result) {
        $row = $result->fetch_assoc();
        $fname = $row['fname'];
        $sname = $row['sname'];
        $city = $row['city'];
        $phone = $row['telephone'];
        $birthdate = $row['birthdate'];
        $image = $row['profile_image'];
    } else {
        $name = "ERROR";
    }
?>
<!--    TODO: 
    сделать странички для музыки, фоток и пофиксить редактирование
    не забыть про textarea, красиво оформить .prof-info
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "$fname";?></title>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../js/script.js"></script>
    </head>
    <body>
        <header>
            <a href="#">Музыка</a>
            <a href="#">Фотографии</a>
            <a href="logout.php">Выход</a>
        </header>
        <section class="main">
            <div class="prof">
                <div class="prof-pic">
                    <?php echo "<img width='250' height='300' src='profile_images/$image' alt=''>";?>
                    <form action="profile.php" method="POST" enctype="multipart/form-data">
                        <label for="pic-upload">Изменить</label>
                        <input name="img" type="file" id="pic-upload">
                    </form>
                </div>
                <div class="prof-info">
                    <h2><?php echo "$fname $sname";?></h2>
                    <ul>
                        <?php echo <<<_END
                        <li>День рождения:  $birthdate</li>
                        <li>Город:          $city</li>
                        <li>Телефон:        $phone</li>
_END;
                        ?>
                    </ul>
                    <div class="content">
                        <textarea cols="60" rows="5">
                            
                        </textarea>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div>
                <small>&copy;Все права защищны, Епанчинцев Никита</small><br>
                <small>2017</small>
            </div>
        </footer>
    </body>
</html>
            
<?php   
} else {
header("location: ../index.php");
}
?>




