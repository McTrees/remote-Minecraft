<?php
if ($_POST["password"] == "password") {
    $auth_string = "your-random-string-here";
    setcookie("token", $auth_string); // 86400 = 1 day
    echo "Auth Token Set, Redirecting...";
    header('Location: http://ben.mctrees.net/msmcss.html');
} else {
    echo "Incorrect password!";
    header('Location: http://ben.mctrees.net/msmcss.html?e=Incorrect Password!');
}
?>
