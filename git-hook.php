<?php
//    $output = shell_exec("/usr/bin/git pull 2>&1");
    $output = shell_exec("/var/www/html/test/git-puller.sh 2>&1");
    echo "<pre>$output</pre>";
?>
