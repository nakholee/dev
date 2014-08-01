<?php
    $output = shell_exec("sudo -u ec2-user /usr/bin/git pull 2>&1");
    echo "<pre>$output</pre>";
?>
