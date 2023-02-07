<!-- <?php
//session_start();
//if (!$_SESSION['user']) {
   // header('Location: /');
//}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <title>Baksu Online-Shop</title>
</head>
<body>
    <header>
        <div class="menu">
            <div class="menu_logoBar">
                <img src="img/logo 1.png" alt="" class="menu_logo">
                <a href="goods.html">Baksu Online-Shop</a>
            </div>
            <div class="menu_basket">
                <a href="card.html"><img src="img/a car.svg" alt="" class="menu_acar"></a>
            </div>
        </div>
    </header>
    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;">

            <?= $_SESSION['user']['full_name'] ?>
                
            </h2>
        <a href="#">
            
            <?= $_SESSION['user']['email'] ?>
                
            </a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
</body>
</html>