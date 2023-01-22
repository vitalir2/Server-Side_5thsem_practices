<html lang="en">
<head>
    <title>Books administration</title>
</head>
<body>
<div style="display: flex; flex-direction: column; gap: 1rem;">
    <div style="border: 1px solid crimson;">
        <p>All books in system:</p>
        <?php
        require "../users_connection.php";
        $connection = getConnection();
        if ($result = $connection->query("SELECT name FROM books")) {
            while ($row = $result->fetch_array()) {
                $login = $row["name"];
                echo "<p>$login</p>";
            }
        }
        ?>
    </div>
    <div>
        <p>Add new book</p>
        <form method="post" action="books_insert.php">
            <label for="name">
                Name <input name="name" type="text"/>
            </label>
            <button type="submit">Add</button>
        </form>
    </div>
    <div>
        <p>Update book name</p>
        <form method="post" action="books_update_name.php">
            <label for="old_name">
                Old name <input name="old_name" type="text">
            </label>
            <label for="new_name">
                New name <input name="new_name" type="text">
            </label>
            <button type="submit">Update</button>
        </form>
    </div>
    <div>
        <p>Remove book by name</p>
        <form method="post" action="books_remove_by_name.php">
            <label for="name">
                Name <input name="name" type="text"/>
            </label>
            <button type="submit">Remove</button>
        </form>
    </div>
</div>
</body>
</html>
