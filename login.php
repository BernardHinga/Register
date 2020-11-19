<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log In page</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body style="background: url(img/watch.jpg); background-size:cover;">
    <div id="login_form">
        <h2>Log In</h2>
        <form action="assets/login.inc.php" method="POST">
            <label for="email">E-Mail</label>
            <input type="email" name="email" class="input"><br/>
            <label for="password">Passsword</label>
            <input type="password" name="password" class="input"><br/>
            <button type="submit" name="login" class="submit">LogIn</button>
        </form>
    </div>

</body>

</html>