<?php
    session_start();

    echo 'logging you out please wait...';
    session_destroy();
    header("Location: /Baby%20Choice/index.php?logoutsuccess=true")
?>