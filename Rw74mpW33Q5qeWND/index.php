<?php
$output = "<pre>".shell_exec("cd /public/societies/ciccs/public_html && git pull origin master > /dev/stdout 2>&1")."</pre>";
//echo $output;
?>
