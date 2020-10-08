<!doctype html>
<html>
<head>
	<title>Eggcellent</title>
</head>
<body>
	<h1>All Entries</h1>
	<table border=1>
		<tr>
			<th>title</th>
			<th>ingredients</th>
			<th>directions</th>
			<th>category</th>
		</tr>

		<?php 
			$cnt = mysqli_connect('localhost', 'root', 'root', 'eggcellent');
			$qry = "select * from eggcellent";
			$results = mysqli_query($cnt, $qry);
			//print_r($results);

			foreach($results as $v){
				echo'
					<tr>
						<td>'.$v['title'].'</td>
						<td>'.$v['ingredients'].'</td>
						<td>'.$v['directions'].'</td>
						<td>'.$v['cat'].'</td>
					</tr>
				';
			};
			mysqli_close($cnt);
		?>

	</table>
</body>
</html>