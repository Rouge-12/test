<?php
/* Страница не доделанна
 * Нигде не используется
 * Первоначальный замысел: сделать возможность редактировать данные
 * Остановился потому, что не знаю как сделать множественный запрос
 * на обовление полей в БД
 * Вместо этого временно сделал вместо этого кнопку замены картинки в профиле
 */
require_once '../../funcs.php';
session_start();

$username = $_SESSION['username'];
$query = "SELECT * FROM userInfo WHERE username='$username'";
$result = $connection->query($query);
if($result) {
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $sname = $row['sname'];
    $city = $row['city'];
    $phone = $row['telephone'];
    $birthdate = $row['birthdate'];
?>
    <!doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Settings</title>
            <link rel="stylesheet" href="../../styles/style.css">
        </head>
        <body>
            <header></header>
            <form action="settings.php" method="post" enctype="multipart/form-data" class="settings">
                <input type="text" name="fname" value="<?php echo "$fname";?>">
                <input type="text" name="sname" value="<?php echo "$sname";?>">
                <input type="text" name="city" value="<?php echo "$city";?>">
                <input type="text" name="phone" value="<?php echo "$phone";?>">
                <input type="text" name="birthdate" value="<?php echo "$birthdate";?>">
                
                <label for="inp-file" class="settings">Сменить изображение</label>
                <input type="file" id="inp-file" accept="image/*" name="img">

                <input type="submit">
            </form>
            <footer>
                <div>
                    <small>&copy;Все права защищны, Епанчинцев Никита</small><br>
                    <small>2017</small>
                </div>
            </footer>
        </body>
    </html>
<?php } else {
     echo "Произошла ошибка";
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $query = "UPDATE userInfo";
}
?>
