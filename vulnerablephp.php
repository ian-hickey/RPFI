<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="pdf/sample.php" download>Safe PHP Download</a>

<div>
    <?php
		$name = "<?php echo 1+1; ?>"; // some value you can control from the database
		if (!empty($name)) {
			echo "Welcome, $name";
		}
    ?>
</div>
</body>
</html>
