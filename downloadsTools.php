<?php
function printDownloadRow($fileName, $displayName) {
    echo "
    <div class=\"container row\">
         <div class=\"col-sm\">$displayName</div>
         <div class=\"col-sm\"><a class=\"btn btn-primary\" href=\"#\"
               onclick=\"window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/$fileName');\"><i
                  class=\"fas fa-download\"></i> Download</a></div>
    </div>
    ";
}
