<!-- <?php
//session_start();

//if ($_SESSION['user']) {
   // header('Location: profile.php');
//}

?> -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <header>
        <div class="menu">
            <div class="menu_logoBar">
                <img src="img/logo 1.png" alt="" class="menu_logo">
                <a href="goods.html">Авторизация и регистрация</a>
            </div>
        </div>
    </header>
    <form action="vendor/signin.php" method="post" class="logIn">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Логин" class="logIn_input">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль" class="logIn_input">
        <div class="logIn_enter">
            <button type="submit" class="logIn_enterButton">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="register.html">зарегистрируйтесь</a>
            </p>
        </div>
        <!-- <?php
           // if ($_SESSION['message']) {
              //  echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
          //  }
           // unset($_SESSION['message']);
        ?> -->
    </form>

</body>
</html>
