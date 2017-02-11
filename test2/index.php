<?php
    require_once 'funcs.php';
    session_start();
    if (isset($_COOKIE['username'])) {
        header("location: authorization/profile.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Main page</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <a id="log" href="#">Вход</a>
            <a id="reg" href="#">Регистрация</a>
        </header>
        <div class="main">
            <div class="main-index">
                <h1>Lorem Ipsum</h1>
                <div class="news">
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        aliquam at odio ut dapibus. Vivamus id tempor tellus. Morbi 
                        quis ornare ipsum, in aliquam elit. Nunc placerat commodo 
                        sem sit amet elementum. Quisque dui turpis, aliquet nec 
                        pretium eu, volutpat auctor magna. Praesent facilisis velit 
                        vel consectetur vehicula. Mauris quis urna non justo dictum 
                        ultrices vel eu urna. Curabitur auctor malesuada augue. 
                        Nulla vel placerat turpis. Duis a metus id lacus placerat 
                        ultricies. Aliquam imperdiet libero non est hendrerit, id 
                        accumsan risus eleifend. Praesent maximus dictum gravida. 
                        Donec tempor id ex et tempor. Aenean feugiat mi in tempor 
                        dictum. Cras felis ipsum, molestie at nisl at, ullamcorper 
                        ornare magna. Curabitur a nisl purus.</p>
                    <p>In odio leo, efficitur in felis a, tincidunt scelerisque 
                        odio. Vivamus rhoncus orci ex, et rutrum dolor pellentesque 
                        vel. Donec ipsum nulla, consequat id commodo a, ultricies 
                        eget ipsum. Etiam fermentum neque mauris, at interdum nisi 
                        venenatis vel. Vivamus rhoncus vel est ac porta. Cras 
                        venenatis arcu felis, pharetra dapibus odio porta id. 
                        Curabitur id quam sed libero ultricies dignissim. Vivamus 
                        vestibulum dictum diam, at pharetra nisi cursus nec.</p>
                </div>
                <div class="news">
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        aliquam at odio ut dapibus. Vivamus id tempor tellus. Morbi 
                        quis ornare ipsum, in aliquam elit. Nunc placerat commodo 
                        sem sit amet elementum. Quisque dui turpis, aliquet nec 
                        pretium eu, volutpat auctor magna. Praesent facilisis velit 
                        vel consectetur vehicula. Mauris quis urna non justo dictum 
                        ultrices vel eu urna. Curabitur auctor malesuada augue. 
                        Nulla vel placerat turpis. Duis a metus id lacus placerat 
                        ultricies. Aliquam imperdiet libero non est hendrerit, id 
                        accumsan risus eleifend. Praesent maximus dictum gravida. 
                        Donec tempor id ex et tempor. Aenean feugiat mi in tempor 
                        dictum. Cras felis ipsum, molestie at nisl at, ullamcorper 
                        ornare magna. Curabitur a nisl purus.</p>
                    <p>In odio leo, efficitur in felis a, tincidunt scelerisque 
                        odio. Vivamus rhoncus orci ex, et rutrum dolor pellentesque 
                        vel. Donec ipsum nulla, consequat id commodo a, ultricies 
                        eget ipsum. Etiam fermentum neque mauris, at interdum nisi 
                        venenatis vel. Vivamus rhoncus vel est ac porta. Cras 
                        venenatis arcu felis, pharetra dapibus odio porta id. 
                        Curabitur id quam sed libero ultricies dignissim. Vivamus 
                        vestibulum dictum diam, at pharetra nisi cursus nec.</p>
                </div>
                <div class="news">
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        aliquam at odio ut dapibus. Vivamus id tempor tellus. Morbi 
                        quis ornare ipsum, in aliquam elit. Nunc placerat commodo 
                        sem sit amet elementum. Quisque dui turpis, aliquet nec 
                        pretium eu, volutpat auctor magna. Praesent facilisis velit 
                        vel consectetur vehicula. Mauris quis urna non justo dictum 
                        ultrices vel eu urna. Curabitur auctor malesuada augue. 
                        Nulla vel placerat turpis. Duis a metus id lacus placerat 
                        ultricies. Aliquam imperdiet libero non est hendrerit, id 
                        accumsan risus eleifend. Praesent maximus dictum gravida. 
                        Donec tempor id ex et tempor. Aenean feugiat mi in tempor 
                        dictum. Cras felis ipsum, molestie at nisl at, ullamcorper 
                        ornare magna. Curabitur a nisl purus.</p>
                    <p>In odio leo, efficitur in felis a, tincidunt scelerisque 
                        odio. Vivamus rhoncus orci ex, et rutrum dolor pellentesque 
                        vel. Donec ipsum nulla, consequat id commodo a, ultricies 
                        eget ipsum. Etiam fermentum neque mauris, at interdum nisi 
                        venenatis vel. Vivamus rhoncus vel est ac porta. Cras 
                        venenatis arcu felis, pharetra dapibus odio porta id. 
                        Curabitur id quam sed libero ultricies dignissim. Vivamus 
                        vestibulum dictum diam, at pharetra nisi cursus nec.</p>
                </div>
            </div>
        </div>
        <div class="form login">
            <header>
                <span>Вход</span>
            </header>
            <form action="authorization/login.php" method="post">
                <input name="username" type="text" required="required"
                      placeholder="Введите логин">
                <input name="password" type="password" required="required"
                      placeholder="Введите пароль">
                <input type="submit" value="Войти">
                <label id="flag"><input type="checkbox" name="remember">Запомнить?</label>
            </form>
        </div>
        <div class="form registration">
            <header>
                <span>Регистрация</span>
            </header>
            <form action="authorization/registration.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder="Логин">
                <input type="password" name="password" placeholder="Пароль">
                <input type="text" name="fname" placeholder="Имя">
                <input type="text" name="sname" placeholder="Фамилия">
                <input type="text" name="city" placeholder="Город">
                <input type="text" name="telephone" placeholder="Телефон">
                <input type="text" name="birthdate" placeholder="День рождения">
                
                <label for="inp-file">Загрузить изображение</label>
                <input id="inp-file" type="file" accept="image/*" name="img">
                
                <input type="submit" value="Зарегистрироваться">
            </form>
        </div>
        <div class="footer">
            <div>
                <small>&copy;Все права защищны, Епанчинцев Никита</small><br>
                <small>2017</small>
            </div>
        </div>
    </body>
</html>


