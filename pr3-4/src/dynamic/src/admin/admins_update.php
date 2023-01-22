<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function encode_password($password)
{
    return '{SHA}' . base64_encode(sha1($password, TRUE));
}

function update_admin_password($login, $password) {
    $encoded_password = encode_password($password);

    $connection = getConnection();
    $statement = $connection->prepare("UPDATE authn SET password = ? WHERE login = ?");
    $statement->bind_param("ss", $encoded_password, $login);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

if (isset($_POST["login"]) && $_POST["login"] != "") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    if (update_admin_password($login, $password)) {
        echo "<p>Updated admin password $login<p/>";
    } else {
        echo "<p>Update failed<p/>";
    }
    echo "<a href='admins.php'>Return to users page</a>";
}

?>
