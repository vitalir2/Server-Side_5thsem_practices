<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $db_connection = new mysqli("db", "root", "root", "library_db");
    $query = "select name from books";
    if ($result = $db_connection->query($query)) {
        while ($row = $result->fetch_array()) {
            $book_name = $row["name"];
            echo "<p>$book_name</p>";
        }

        $result->free();
    }
} catch(mysqli_sql_exception $e) {
    echo "MySQLi Error code: " . $e->getCode() . "<br />";
    echo "Exception message: " . $e->getMessage();
    exit;
}
$db_connection->close();
