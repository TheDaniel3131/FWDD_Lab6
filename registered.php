<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
</head>
<body>
    <?php
    function calculateAge($dob) {
        $birthdate = new DateTime($dob);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthdate)->y;
        return $age;
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $name = $_POST["name"];
    $email_promotions = $_POST["email_promotions"];

    $errors = array();

    if (strlen($username) > 15 || !preg_match('/^[A-Za-z0-9]+$/', $username)) {
        $errors[] = "Username must be up to 15 characters and contain only letters and numbers.";
    }

    if (strlen($password) < 4 || $password != $confirm_password) {
        $errors[] = "Password must be at least 4 characters long and match the confirmation.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($dob)) {
        $errors[] = "Date of Birth is required.";
    }

    if (strlen($name) > 50) {
        $errors[] = "Name must be up to 50 characters.";
    }

    if (count($errors) > 0) {
        echo "<h1>Registration Failed</h1>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        $age = calculateAge($dob);

        if ($age >= 18) {
            echo "<h1>Thank you for registering</h1>";
        } else {
            echo "<h1>Sorry, you can't use our website</h1>";
        }
    }
    ?>
</body>
</html>
