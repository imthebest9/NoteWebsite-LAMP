<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notey, Save your notes here!</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php include "Header.html";?>
    <div class="writenotes" >
        <form method="post">
            <label for="notes">Enter notes: </label><br>
            <textarea class="notes" id="notes" name="notes" cols="30" rows="10" required></textarea><br>
            <input type="submit" id="submit" name="submit" value="SUBMIT"><br>
        </form>
        <?php
        if(isset($_POST["notes"])) {
            $data = $_POST["notes"];
            $dateposted = date("Y-m-d H:i:s");
            $filename = "data.txt";
            chmod($filename, 0777);
            $fp = fopen($filename, 'a');
            if ($fp == false) {
                echo("Error in opening new file");
                exit();
            }
            $dataNewLine = $dateposted . "\n" . $data . "\n\n";
            fwrite($fp, $dataNewLine);
            fclose($fp);
        }
        ?>
    </div>
<?php include "Footer.html";?>
</body>
</html>
