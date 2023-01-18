<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "<br>");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://satyabss: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@github.com/satyabss/3.git main") . "</pre>");
?> 