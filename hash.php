<?php
// Process the form.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate username.
    if (empty($_POST['username'])) {
        echo 'Please enter your username';
    } else {
        $username = $_POST['username'];

        // Validate password.
        if (empty($_POST['password'])) {
            echo 'Please enter your password';
        } else {
            $password = $_POST['password'];

            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            echo '<b>Username:</b> '. $username . '<br/>';
            echo '<b>Password:</b> '. $password . '<br/>';
            echo '<b>Hashed Password:</b> '. $hash_password;

        }   
    }
    
}
?>
<pre>
    <?= var_dump($_POST) ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hashing</title>
</head>
<body>
    
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="username" placeholder="Username" />
        <input type="password" name="password" placeholder="Password" />

        <input type="submit" value="Login" />
    </form>
</body>
</html>