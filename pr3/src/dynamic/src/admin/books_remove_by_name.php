<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function remove_book($name) {
    $connection = getConnection();
    $statement = $connection->prepare("DELETE FROM books WHERE name = ?");
    $statement->bind_param("s", $name);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

if (isset($_POST["name"]) && $_POST["name"] != "") {
    $name = $_POST["name"];
    if (remove_book($name)) {
        echo "<p>Removed book $name<p/>";
    } else {
        echo "<p>Book removal failed<p/>";
    }
    echo "<a href='books.php'>Return to books page</a>";
}

?>
