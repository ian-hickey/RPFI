<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="pdf/sample.php" download>Safe PHP Download</a>

<div>
<noscript>
<?php
	$fullName = "echo 1+1;"; // This would come from your database
	$name = eval("return " . $fullName);
	if (!empty($name)) {
		echo "Welcome, $name";
	}
?>
</noscript>
</div>
</body>
</html>
