<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h2>Set Your Name in Cookie</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        setcookie("username", $name, time() + 3600);  // Set cookie for 1 hour
        echo "<h3>Hello, $name! Your name has been saved in a cookie.</h3>";
    }

    if (isset($_COOKIE["username"])) {
        echo "<h3>Welcome back, " . $_COOKIE["username"] . "!</h3>";
    }
    ?>

    <form method="POST" action="">
        Name: <input type="text" name="name" required>
        <input type="submit" value="Set Name">
    </form>
</body>
</html>
