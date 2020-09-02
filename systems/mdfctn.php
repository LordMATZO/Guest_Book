<?php
	$link = mysqli_connect("localhost", "root", "");
	$sql = "SELECT dati,name,rew FROM rewbook.rewiews";
	$result = mysqli_query($link, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$datetime = $row["dati"];
			$name = $row["name"];
			$review = $row["rew"];
			echo "<link rel=\"stylesheet\" href=\"css/bootstrap/css/bootstrap.css\">
			<link rel=\"stylesheet\" href=\"css/styles.css\">
			<div class=\"note\">
					<p>
						<span class=\"date\">$datetime</span>
						<span class=\"name\">$name</span>
					</p>
					<p>
						$review
					</p>
			</div>";
		}			
	}
	mysqli_close($link);
?>