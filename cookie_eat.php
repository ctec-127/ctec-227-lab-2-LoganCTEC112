<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Eat</title>
</head>
<body>
    <?php
        echo $_COOKIE['username'] . "<br>";
        echo $_COOKIE['firstname'] . "<br>";
        echo $_COOKIE['lastname'] . "<br>";
        if (isset($_COOKIE["cookie"])) {
            foreach ($_COOKIE["cookie"] as $key=>$val) {
                echo $key . ' is ' . $val . "<br>\n";
            }
        }
    ?>
</body>
</html>