<?php
//добавляем новый коментарий в базу(comments.txе)
function addComment(){
	file_put_contents("comments.txt", "\n{$_POST['user']};{$_POST['comments']}", FILE_APPEND);
}
function viewComment(){
$filestr=file_get_contents('comments.txt');

$arrayStr=explode("\n", $filestr);
//хочу быть уверенной что массив пустой
$comments=array();
for ($i=0; $i <count($arrayStr) ; $i++) { 
	//внимание в лист пишем наш массив и сами называе ключ
	// list($comments['user'][], $comments['comment'][])=explode(";",$arrayStr[$i]);
	list($comments["user"][],$comments["comment"][])= explode(";",$arrayStr[$i]);
}
return $comments;
}