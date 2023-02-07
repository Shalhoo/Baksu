	`<!DOCTYPE html>
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
 			echo '<p class="card_reg" 
 						style="text-align: center;
  						color: #03F62A;
  						margin-top: 100px;">',
  					'Для оформления заказа необходимо авторизироваться',
  				  '</p>', 
 				  '<div class="card_reg_button" 
 				  		style="text-align: center;">', 
 					'<a href="login.php">',
    				'<input type="submit" value="Войти " class="card_reg_signin" style="margin-top: 20px;">', 
    				'</a>', 
    				'<a href="register.php">',
    				'<input name="register" type="submit" value="Регистрация" class="card_reg_signin" >', 
    				'</a>',
    			   '</div>';
		?>
	<div style="display: flex;  												flex-wrap: wrap;
  				justify-content: center;
  				align-items: center; 
  				color: white;">
		<?php
			ksort($_COOKIE);
			$sum=0;
			foreach ($_COOKIE as $product =>  $item) {
		   		if ($product == "PHPSESSID")
		        continue;
		    	$arr = json_decode($item, true);
		    	$price = $arr["price"] * $arr["count"];
		    	$sum += $price;
		    	echo "<form action='cook.php' method='post' id='form'>
						<div class='good1' id = 'form1'>
		                	<img class='item' src='img/$product.png' alt='item'>
		                	<p class='items_name'>
		                    	$arr[name]
		                    </p>
		                    <p class='items_price'>
		                    	$arr[price]  RUB
		                    </p>
		                	<p class='items_count'>
		                   	 	Number of pieces: $arr[count]
		                    </p>
		                    <input type='submit' value='Добавить'  class='items_add' name='add'><br>
		                    <input type='submit' value='Удалить' class='items_add' name='delete'>
		                    <input type='hidden' value='$item' name='$product'>
						</div>
					  </form>";
		    };
		    
			echo "<p class='card_reg' 
 						style='text-align: center;
  						color: #03F62A;
  						margin-top: 160px;'> Total: $sum RUB </p>";
		?>	
	</div>

	<footer>
	</footer>
</body>
</html>