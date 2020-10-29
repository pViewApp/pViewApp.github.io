<?php
///
///
///

$pages = array("Home", "About", "Downloads");
$hrefs = array("/", "/about.php", "/download.php");

///
///
///


function getPages() {
    return $GLOBALS["pages"];
}
function getUrls() {
    return $GLOBALS["hrefs"];
}