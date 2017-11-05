<h1>testing 123</h1>
<p>Status: <?php echo exec("msm IM status"); ?></p>

<?php

if(isset($_GET["password"]) && $_GET["password"] == "flibbleq123")
{
    $out = exec("msm IM " . escapeshellarg($_GET["action"]));
}

?>

<form action="" method="get">
<input name="action" value="start" type="radio">Start</input><br>
<input name="action" value="stop" type="radio">Stop</input></br>
<input name="action" value="restart" type="radio">Restart</input><br>
<input name="action" value="worlds backup" type="radio">Backup</input><br>

<p>Password: </p><input name="password" type="password"></input>
<button>Submit</button>

</form>

<?php 
if (isset($out)) 
    echo "<p>Command output: " . $out . "</p>";
?>
