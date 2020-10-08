<?php

$n = $_POST['nm'];
$p = $_POST['em'];
$e = $_POST['pi'];

$cnt = mysqli_connect('localhost', 'root', 'root', 'eggcellentblog');
$qry = "insert into eggcellentblog(name, email, pitch) values ('$n', '$e', '$p')";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

header('location:thanks.html');

echo "<p>Pitch Idea Submitted</>";

?>