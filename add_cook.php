<?php
    foreach ($_POST as $product => $item){
        $arr = json_decode($item, true);
        $arr['count'] = 1;
        if (!empty($_COOKIE[$product])){
            $arr = json_decode($_COOKIE[$product], true);
            $arr['count']++;
        }
        setcookie($product, json_encode($arr),time()+3600);
    }

    header ("Location: goods.php");
?>
