<?php
    $txt = $_GET['variableName'];

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, 'steven\n');
    fwrite($myfile, $txt);
    fclose($myfile);

    echo '\nhelloworld';
?>
