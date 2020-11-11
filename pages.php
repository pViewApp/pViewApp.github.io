<?php
///
///
///

$pages = array("Home", "About", "Downloads", "Manual");
$hrefs = array("/", "/about.php", "/download.php", "/manual");

///
///
///


function getPages() {
    return $GLOBALS["pages"];
}
function getUrls() {
    return $GLOBALS["hrefs"];
}