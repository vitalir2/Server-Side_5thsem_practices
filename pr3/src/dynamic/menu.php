<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $db_link = new mysqli("192.168.1.20", "root", "password", "restaurant_db");
    $query = "select name, price from dishes";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
            var_dump($row);
        }

        $result->free();
    }
} catch(mysqli_sql_exception $e) {
    echo "MySQLi Error code: " . $e->getCode() . "<br />";
    echo "Exception message: " . $e->getMessage();
    exit;
}
$mysqli->close();
?>