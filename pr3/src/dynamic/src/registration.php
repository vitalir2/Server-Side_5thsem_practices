<html lang="en">
  <head>
    <title>Registration</title>
  </head>
  <body>
  <form>
      <label for="name"
  </form>
    <?php
    function encode_password($password) {
        return '{SHA}' . base64_encode(sha1($password, TRUE));
    }
     ?>
  </body>
</html>
