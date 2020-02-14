<?php

$name = 'someName';
$value = 1;
$expiration = time() + (60*60*24*7);
// seconds, minutes in hr, hrs in day, days in week. so on

setcookie($name, $value, $expiration);



?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>cookies</h1>
<?php

    if(isset($_COOKIE['someName'])){
        $user = $_COOKIE['someName'];
        echo $user;

    } else {
        $user = '';
    }
?>
    
<script type="text/javascript" src="script.js"></script>
</body>
</html>