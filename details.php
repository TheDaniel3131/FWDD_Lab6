<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>
    <h1>Contact Details</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $postcode = $_POST["postcode"];
        $telephone = $_POST["telephone"];

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Postal Code:</strong> $postcode</p>";
        echo "<p><strong>Telephone Number:</strong> $telephone</p>";
    }
    ?>
</body>
</html>
