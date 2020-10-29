<?php 
require_once "frame.php";
require_once "downloadsTools.php";
start("Downloads");
?>
   <div class="container">

      <br>

      <h2>Download pView: </h2>
      <p>Jar files requires <a href="https://adoptopenjdk.net/">Java 11.0.7</a> or higher.</p>
   </div>
   <div class="container">
      <hr class="my-4">
   </div>


   <div class="container">
      <?php
         printDownloadRow("pview-0.2.2-windows.zip", "0.2.2 Windows Zip");
         printDownloadRow("pview-0.2.2.jar", "0.2.2 Windows Jar");
         printDownloadRow("pview_0.2.2.exe", "0.2.2 Windows Installer");
      ?>
      <div class="container row">
         <a class="btn btn-link" data-toggle="collapse" href="#older">Older Downloads <i
               class="fas fa-caret-down"></i></a>
      </div>
      <div class="collapse" id="older">
         <?php
            echo "No Older Downloads Available";
         ?>
      </div>
   </div>
   <?php
footer();
?>