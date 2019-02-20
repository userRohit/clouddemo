<!DOCTYPE html>
<html>
<head>
	<title>my Form</title>
</head>
<body>
	<?php 
	if(@$_GET['msg'] == '1'){
	
	?>

		<h1>thanks for registeration</h1>
	<?php

	}

	?>
	<form action="action.php" method="get">
		<table>
			<tr>
				<td>
					First Name
				</td>
				<td>
					<input type="text" name="firstname">
				</td>
			</tr>

			<tr>
				<td>
					Last Name
				</td>
				<td>
					<input type="text" name="lastname">
				</td>
			</tr>

			<tr>
				<td>
					UserName @
				</td>
				<td>
					<input type="text" name="user">
				</td>
			</tr>

			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="pass">
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="Register">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>