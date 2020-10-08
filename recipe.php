<?php
//print_r($_POST);
$n = $_POST['title'];
$p = $_POST['ingredients'];
$e = $_POST['directions'];
$k = $_POST['category'];

$cnt = mysqli_connect('localhost', 'root', 'root', 'eggcellent');
$qry = "INSERT INTO `eggcellent` (`title`, `ingredients`, `directions`, `cat`) VALUES ('$n', '$p', '$e', '$k');";
//$qry = "insert into eggcellent(title, ingredients, directions, cat) values ('$n', '$p', '$e', $k)";
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  exit();
//}
mysqli_query($cnt, $qry);

mysqli_close($cnt);

header('location:thanks.html');

echo "<p>Recipe Submitted</>";

?>