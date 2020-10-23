<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function jsDump($var) {
    echo "<script>console.log(" . json_encode($var) . ")</script>";
}

function jPath($str) {
    return realpath(getcwd() . "/../" . $str);
}

$pages = json_decode(file_get_contents(jPath("config/pages.json")));
$req = $_SERVER["REQUEST_URI"];
if (strlen($req) > 1) {
    $req = preg_replace("/^\//", "", $req);
}
if (isset($pages->$req)) {
    $page = $pages->$req;
    $title = $page->title;
    $doc = isset($page->doc) ? $page->doc : $req;
    $document = jPath("views/$doc.php");
} else {
    $title = 404;
    $document = jPath("views/404.php");
}
include jPath("views/layout.php");
