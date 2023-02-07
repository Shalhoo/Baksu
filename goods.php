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
		<div class="menu" style="margin-bottom: 60px;">
			<div class="menu_logoBar">
				<img src="img/logo 1.png" alt="" class="menu_logo">
				<a href="goods.php">Baksu Online-Shop</a>
			</div>
			<div class="menu_basket">
				<a href="card.php"><img src="img/a car.svg" alt="" class="menu_acar"></a>
			</div>
			<div class="menu_login">
				<a href="login.php"><img src="img/login.png" alt="" class="menu_logpng"></a>
			</div>
		</div>
	</header>

	<?php 
		$products_cook = array(
			"1" => array("name"=>'Патчи', "price" => 620),
            "2" => array("name"=>'Шампунь', "price" => 410),
            "3" => array("name"=>'Капсулы какие-то', "price" => 540),
            "4" => array("name"=>'Че-то в упаковке', "price" => 610),
            "5" => array("name"=>'Шампунь-2', "price" => 420));
	?>

	<?php  
		foreach ($products_cook as $product => $item) : 
		$value = json_encode($item);
	?>
	<div class='items_line' style='display: flex;  										flex-wrap: wrap;
  							justify-content: center;
  							align-items: center;'>
    <?php
		echo  "<form  method='post' action ='add_cook.php'>
					<div class='items 1-$product itemBox'>
		                <div class='items_rectangle'>
		                    <img class='item' src='img/$product.png' alt='goods'>
		                </div>
		                <form>
		                    <p class='items_inBasket'>
			                    <p class='items_name'>
			                        $item[name]
			                    </p>
			                    <p class='items_price' style='color:white; font-size:14px;'>
									$item[price]  RUB
			                    </p>
                                <input type='text' name = '$product' value='$value' hidden>
			                    <input type='submit' value='В корзину' class='items_add' id='product'>
			                </p>
		                </form>	
	    			</div>
    			</form>";
		endforeach;
	?>
</div>
</body>
</html>
