<?php
error_reporting(-1);
header("Content-Type: text/html; charset='utf-8'");
include 'model.php';

//если данные в форме существуют и они не пустые
if (isset($_POST['user'],$_POST['comments']) && !empty($_POST['user']) && !empty($_POST['comments'])){
	addComment();
}
$arrayUserCom=viewComment();
for ($i=0; $i <count($arrayUserCom['user']) ; $i++) { 
	echo "Пользователь: ".$arrayUserCom['user'][$i]." Сказал: ".$arrayUserCom['comment'][$i]."<br>";
	echo "<hr>";
}
include 'view.php';
?>