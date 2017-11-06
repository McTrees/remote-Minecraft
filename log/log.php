<?php
    if($_GET['auth'] == "authcode"){
		echo nl2br(file_get_contents("/opt/msm/servers/IM/logs/latest.log"));
    }
?>
