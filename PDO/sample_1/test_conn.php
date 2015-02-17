<?php try {
	include '../pdo_connect.php';
} catch (Exception $e) {
	$error = $e->getMessage();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO Connection Testing Scxript</title>
</head>
<body>
	<h1>Connection with PDO</h1>
	<?php if ($db) {
		echo "<p>Connection succssful</p>";
	}elseif (isset($error)){
		echo "<p>$error</p>";
	} 
	?>



</body>
</html>