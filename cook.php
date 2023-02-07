<?php
    foreach($_POST as $product => $item){
        if (!empty($_COOKIE[$product])){
            $time_cookie = 3600;
            $arr = json_decode($_COOKIE[$product], true);
            if (array_search("Добавить",$_POST) == "add") {
                $arr["count"]++;
            }
            if (array_search("Удалить",$_POST) == "delete") {
                $arr["count"]--;
            }
            if( $arr["count"] <=0) {
                $time_cookie*=-1;
            }

        }
        setcookie($product, json_encode($arr), time()+$time_cookie);
         header("Location: card.php");
    }
?>
