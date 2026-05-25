<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM login</title>
</head>

<body>
    <p>Form Login</p>

    <?php
    if (array_key_exists('username', $_POST)) {
        $username = trim($_POST['username']);
        if (empty($username))
            echo "<span style='color:red'>Username belum diisi</span><br>";
    }
    if (array_key_exists('password', $_POST)) {
        $password = trim($_POST['password']);
        if (empty($password))
            echo "<span style='color:red'>Password belum diisi</span><br>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="username" size="30"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="OK"></td>
            </tr>
        </table>
    </form>
    Selamat datang <?php echo $_POST['username']; ?> <br>
</body>

</html>