<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>Enter Your Details</h2>

    <?php

    $name = $email = "";
    $nameError = $emailError = "";
    $isFormSubmitted = false;


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }


        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }


        if (empty($nameError) && empty($emailError)) {
            $isFormSubmitted = true;
            echo "<h3>Form Submitted Successfully</h3>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
        }
    }


    if (isset($_POST['reset'])) {
        $isFormSubmitted = false;
        $name = $email = "";
    }
    ?>


    <?php if (!$isFormSubmitted): ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameError; ?></span>
        <br><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailError; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php else: ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="reset" value="Back to Form">
    </form>
    <?php endif; ?>
</body>
</html>
