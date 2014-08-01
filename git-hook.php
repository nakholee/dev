<?php #!/usr/bin/env /usr/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);

try {
    $output = shell_exec("/var/www/html/test/git-puller.sh");
    echo "<pre>$output</pre>";
}
catch(Exception $e) {
    //log the error
    file_put_contents('/var/www/html/test/logs/github.txt', $e . ' ' . $output, FILE_APPEND);
    exit(0);
}
?>
