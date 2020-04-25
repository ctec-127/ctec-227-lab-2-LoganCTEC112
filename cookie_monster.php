<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Monster</title>
</head>
<body>
    <?php
            setcookie("username", "BettyW", time() - 7200);
            setcookie("firstname", "Betty", time() - 7200);
            setcookie("lastname", "White", time() - 7200);
            setcookie("cookie[institution]", "Clark", time() -7200);
            setcookie("cookie[city]", "Vancouver", time() - 7200);
            setcookie("cookie[state]", "WA", time() - 7200);
    ?>
    <h1>Your cookies have been EATEN!</h1>
    <img src="https://cdn.pixabay.com/photo/2016/01/10/18/59/cookie-monster-1132275_960_720.jpg" alt="cookie monster" width=250>
</body>
</html>