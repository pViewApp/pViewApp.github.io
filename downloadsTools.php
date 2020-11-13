<?php

require_once "db.php";
function printDownloadRow($date, $version, $fileName, $displayName) {
    echo "
    <div class=\"container row\">
    <div class=\"col-sm\">$date</div>
        <div class=\"col-sm\">$version</div>
         <div class=\"col-sm\">$displayName</div>
         <div class=\"col-sm\"><a class=\"btn btn-primary\" href=\"#\"
               onclick=\"window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/$fileName');\"><i
                  class=\"fas fa-download\"></i> Download</a></div>
    </div>
    ";
}
function printDownloadRows() {
    global $conn;
    $count = 0;
    $results = $conn->query("SELECT * FROM versions ORDER BY version DESC");
    echo '
    <div class="container row">
    <a class="btn btn-link" data-toggle="collapse" href="#older">Older Downloads <i
            class="fas fa-caret-down"></i></a>
    </div>
<div class="collapse" id="older">';

    while ($row = $results->fetch_assoc()) {
        if($count > 3)
        {
            printDownloadRow($row['releaseDate'], $row['version'], $row['downloadLink'], $row['displayText']);
            echo'<hr class="my-4"/>';
        }
        $count++;
    
    }
    echo '
    </div>';
}
?>
