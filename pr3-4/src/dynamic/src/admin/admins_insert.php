<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function encode_password($password)
{
    return '{SHA}' . base64_encode(sha1($password, TRUE));
}

function insert_user($login, $password) {
    $encoded_password = encode_password($password);

    $connection = getConnection();
    $statement = $connection->prepare("INSERT INTO authn(login, password) VALUES (?, ?)");
    $statement->bind_param("ss", $login, $encoded_password);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

if (isset($_POST["login"]) && $_POST["login"] != "") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    if (insert_user($login, $password)) {
        echo "<p>Created admin $login<p/>";
    } else {
        echo "<p>Admin creation failed<p/>";
    }
    echo "<a href='admins.php'>Return to users page</a>";
}

?>
