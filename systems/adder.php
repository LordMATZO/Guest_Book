<?php
	if(isset($_POST['nm'])) $name = htmlentities($_POST['nm']);
	if(isset($_POST['rvw'])) $review = htmlentities($_POST['rvw']);
	$dtm = date("Y-m-d H:i:s");
	$link = mysqli_connect("localhost", "root", "");
	$sql = "INSERT INTO rewbook.rewiews values(\"$dtm\",\"$name\",\"$review\")";
	if ($link == false){
		print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
	}
	$result = mysqli_query($link, $sql);
	if ($result == false) {
		print("Произошла ошибка при выполнении запроса/n" . $sql);
	}
	mysqli_close($link);
	header('Location: http://localhost/');
?>