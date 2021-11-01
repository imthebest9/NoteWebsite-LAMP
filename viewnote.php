<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notey, Save your notes here!</title>
</head>
<body>
<?php include "Header.html";?>
<div class="displaynotes">
    <?php echo nl2br(file_get_contents("data.txt")); ?>
</div>
<?php include "Footer.html";?>
</body>
</html>
