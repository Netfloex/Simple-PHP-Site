<?php
require "lessc.inc.php";
$less = new lessc;
try {
    $less->checkedCompile(jPath($paths->stylesInput), jPath($paths->stylesOutput));
} catch (\Throwable $th) {
    echo "Error during less > css conversion" . $th;
}
