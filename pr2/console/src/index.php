<html lang="en">
<head>
    <title>Hello console page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <form action="index.php" method="post">
        <input name="inp" />
        <input type="submit" name="submit" value="submit" />
    </form>
    <?php
    $whitelist = array("ls", "cat", "echo", "whoami", "head", "tail");
    $command = $_POST['inp'];

    echo $command, "<br></br>";
    $command_name = strtok($command, " ");
    if ($command_name !== false && in_array($command_name, $whitelist)) {
      echo shell_exec($command);
    } else if ($command != "") {
      echo "Not permitted command";
    }
    ?>
</body>
</html>

