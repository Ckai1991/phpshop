<?php
include "my.conf";
include "lib/db/NotORM.php";

echo "你好\n";

$pdo = new PDO(DB_DSN,DB_USERName,DB_USERPass);
$pdo->exec("set names utf8");
$db = new NotORM($pdo);

foreach($db->shop_news() as $news){
	echo $news["news_title"]."_".$news["news_intr"]."</br>";
}

?>