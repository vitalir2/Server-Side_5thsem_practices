<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function insert_book($name) {
    $connection = getConnection();
    $statement = $connection->prepare("INSERT INTO books(name) VALUES (?)");
    $statement->bind_param("s", $name);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

if (isset($_POST["name"]) && $_POST["name"] != "") {
    $name = $_POST["name"];
    if (insert_book($name)) {
        echo "<p>Created book $name<p/>";
    } else {
        echo "<p>Book creation failed<p/>";
    }
    echo "<a href='books.php'>Return to books page</a>";
}

?>
