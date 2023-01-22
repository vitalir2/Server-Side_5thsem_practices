<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function remove_admin($login) {
    $connection = getConnection();
    $statement = $connection->prepare("DELETE FROM authn WHERE login = ?");
    $statement->bind_param("s", $login);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

if (isset($_POST["login"]) && $_POST["login"] != "") {
    $login = $_POST["login"];
    if (remove_admin($login)) {
        echo "<p>Removed admin $login<p/>";
    } else {
        echo "<p>Removal failed<p/>";
    }
    echo "<a href='admins.php'>Return to users page</a>";
}

?>
