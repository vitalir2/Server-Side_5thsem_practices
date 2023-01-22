<?php

require "../users_connection.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function update_book_name($old_name, $new_name) {
    $connection = getConnection();
    $statement = $connection->prepare("UPDATE books SET name = ? WHERE name = ?");
    $statement->bind_param("ss", $new_name, $old_name);
    $result = $statement->execute();
    $connection->close();
    return $result;
}

$old_name = $_POST["old_name"];
$new_name = $_POST["new_name"];
if (isset($old_name) && $old_name != "" && isset($new_name) && $new_name != "") {
    if (update_book_name($old_name, $new_name)) {
        echo "<p>Updated book $old_name set new name=$new_name<p/>";
    } else {
        echo "<p>Book removal failed<p/>";
    }
    echo "<a href='books.php'>Return to books page</a>";
}

?>
