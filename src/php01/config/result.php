<?php
$name = htmlspecialchars($_GET["name"],ENT_QUOTES);
$item = htmlspecialchars($_GET["item"],ENT_QUOTES);
$count = htmlspecialchars($_GET["count"],ENT_QUOTES);

echo "私の名前は、" . $name . "<br/>";
echo "ご希望の商品は" . $item . "セット" . "<br/>";
echo "注文数は" . $count . "<br/>";