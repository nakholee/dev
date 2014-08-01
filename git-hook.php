<?php
    $output = shell_exec("/usr/libexec/git-core/git pull");
    echo "<pre>$output</pre>";
?>
