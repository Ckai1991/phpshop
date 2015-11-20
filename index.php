<?php
include "my.conf";
//require("MVC/C/_BaseControl.c");

$get_control = isset($_GET["control"])?trim($_GET["control"]):"index";
$get_action = isset($_GET["action"])?trim($_GET["action"]):"index";

if(file_exists("MVC/C/".$get_control.".c")){
	require("MVC/C/".$get_control.".c");
	
	$control = new $get_control();
	if(method_exists($control, $get_action)){
		$control->$get_action();
		$control->run();
	}
}

/*
include "lib/db/NotORM.php";
include "MVC/V/v1/head.tpl";
include "MVC/V/v1/footer.tpl";*/

/*echo "你好\n";

$pdo = new PDO(DB_DSN,DB_USERName,DB_USERPass);
$pdo->exec("set names utf8");
$db = new NotORM($pdo);

foreach($db->shop_news() as $news){
	echo $news["news_title"]."_".$news["news_intr"]."</br>";
}*/



?>