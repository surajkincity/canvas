<?php

if (1 == 1)
{
$myfile = fopen("leads.txt", "a+") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
}
?>
