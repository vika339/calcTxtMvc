<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- <p>Коментарии:</p> -->
<!-- <p class="comments"></p> -->
<form action="controller.php" method="POST">
	<label for="">Введите имя: <br>
	<input type="text" name="user">
	</label><br><br>
	<label for="">Введите коментарий: <br>
	<textarea name="comments" id="" cols="21" rows="12"></textarea>
	<br><br>
	</label>
	<input type="submit" value="Оставить коментарий">
	<input type="reset" value="Сброс">
</form>
	
</body>
</html>