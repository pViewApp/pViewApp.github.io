<?php

require_once "db.php";
if ($_GET['secret'] == '60f4be0abf96e6c9ef812136eeac5ff7eb6bfeda354284f97818edf122dcc965') {
    if (strpos($_GET['version'], "beta") == false && strpos($_GET['version'], "alpha") == false) {
        $stmt = $conn->prepare('INSERT INTO versions(version, displayText, downloadLink) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $_GET['version'], $_GET['displayText'], $_GET['downloadLink']);
        $stmt->execute();
    }
} else {
    http_response_code(403);
}
