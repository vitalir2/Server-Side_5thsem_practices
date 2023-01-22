<html lang="en">
  <head>
    <title>Admins administration</title>
  </head>
  <body>
  <div style="display: flex; flex-direction: column; gap: 1rem;">
      <div style="border: 1px solid crimson;">
          <p>All admins in system</p>
          <?php
          require "../users_connection.php";
          $connection = getConnection();
          if ($result = $connection->query("SELECT * FROM authn")) {
              while ($row = $result->fetch_array()) {
                  $login = $row["login"];
                  echo "<p>$login</p>";
              }
          }
          ?>
      </div>
      <div>
          <p>Create new admin</p>
          <form method="post" action="admins_insert.php">
              <label for="login">
                  Login <input name="login" type="text"/>
              </label>
              <label for="password">
                  Password <input name="password" type="password">
              </label>
              <button type="submit">Create</button>
          </form>
      </div>
      <div>
          <p>Update admin password</p>
          <form method="post" action="admins_update.php">
              <label for="login">
                  Login <input name="login" type="text">
              </label>
              <label for="password">
                  New password <input name="password" type="password">
              </label>
              <button type="submit">Update password</button>
          </form>
      </div>
      <div>
          <p>Remove admin</p>
          <form method="post" action="admins_remove.php">
              <label for="login">
                  Login <input name="login" type="text"/>
              </label>
              <button type="submit">Remove</button>
          </form>
      </div>
      <form method="post" action="logout.php">
          <button type="submit">Log out</button>
      </form>
  </div>
  </body>
</html>
