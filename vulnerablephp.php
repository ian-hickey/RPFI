<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="php/sample.php" download>Safe PHP Download</a>

<div>
<noscript>
<?php
    $name = "Badguy!";
    if (!empty($name)) {
        echo "Welcome, $name";
    }
?>
</noscript>
</div>
</body>
</html>
