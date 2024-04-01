<!-- Post hanya dapat digunakan pada form HTML -->
<?php
// Redirect
if(isset($_POST["submit"])){
    if($_POST["username"] == "Vissi" && $_POST["password"] == "123"){
        header("Location: LatihanPost2.php");
        exit;
    }else{
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <form action="LatihanPost2.php" method="POST">
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Sign in</button>
            </li>
        </form>
    </ul>
    <?php if(isset($error)): ?>
        <h3>Make sure you inserted the username and password correctly</h3>
    <?php endif; ?>
</body>
</html>