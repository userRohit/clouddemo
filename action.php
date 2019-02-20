<?php 

include("dabase.php");

$fname = $_GET['firstname'];

$lname = $_GET['lastname'];

$user = $_GET['user'];

$pass = $_GET['pass'];

mysqli_query($conn, 'insert into my_table values("'.$fname.'", "'.$lname.'", "'.$user.'","'.$pass.'")');

header('location: formdb.php?msg=1');

?>