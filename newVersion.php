<?php

require_once "db.php";
if ($_GET['secret'] == 'ShearSheP22') {
    if (strpos($_GET['version'], "beta") == false && strpos($_GET['version'], "alpha") == false) {
        $stmt = $conn->prepare('INSERT INTO versions(version, displayText, downloadLink) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $_GET['version'], $_GET['displayText'], $_GET['downloadLink']);
        $stmt->execute();
    }
} else {
    http_response_code(403);
}