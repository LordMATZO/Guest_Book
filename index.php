
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
	<div>
		<h1 style="text-align: center">Гостевая книга</h1>
		<div style="width:500px;height:250px;overflow:auto" id="wrapper">
			<?PHP
				include("systems/mdfctn.php");
			?>	
		</div>
		<div id="form" style="width:500px;margin: auto;">
				<form action="systems/adder.php" method="POST">
					<p><input class="form-control" name="nm" placeholder="Ваше имя"></p>
					<p><textarea class="form-control" name="rvw" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
		</div>
		</div>
			
		
	</body>
</html>

