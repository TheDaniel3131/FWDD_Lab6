<?php
$title = "Contact Details";
$name = "John";
$email = "john@gmail.apu.edu.my";
$address[0] = "12, Jalan 3/44";
$address[1] = "Taman Lima";
$address[2] = "Kuala Lumpur";
$postcode = "60000";
$telephone = "03899610000";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
    <h1>Contact Page</h1>
    <ul>
        <li>Name: <?php echo $name?></li>
        <li>Email: <?php echo $email?></li>
        <li>Address: 
            <ul>
                <?php
                foreach ($address as $line){
                    echo "<li>$line</li>";
                }
                ?>
            </ul>
        </li>
        <li>Postcode: <?php echo $postcode?></li>
        <li>Telephone: <?php echo $telephone?></li>
    </ul>
</body>
</html>
