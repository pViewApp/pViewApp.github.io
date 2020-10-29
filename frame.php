<?php
require_once "pages.php";
function start($activePage) {
    $navItems = "";
    for ($i = 0; $i < count(getPages()); $i++) {
        if ($activePage === getPages()[$i]) {
            $navItems .= '
            <li class="nav-item">
            <a class="nav-link active" href="'.getUrls()[$i].'">'.getPages()[$i].'</a>
            </li>
            ';
        }
        else {
            $navItems .= '
            <li class="nav-item">
            <a class="nav-link" href="'.getUrls()[$i].'">'.getPages()[$i].'</a>
            </li>
            '; 
        }
    }
    $start = <<<'END'
    <!DOCTYPE html>
    <html>
    <head>
    <title>pView | 
    END;
    $start .= $activePage;
    $start .= <<<'END'
    </title>
    <link type="text/css" rel="stylesheet" href="/fa/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link type="text/css" rel="stylesheet" href="/all.css">
    <meta charset="UTF-8">
    </head>
    <body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">
            <img src="/pview.png" width="30" height="30" class="d-inline-block align-top" alt="">
            pView
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
    END;
            $start .= $navItems;
            $start .= '
            </ul>
        </div>
    </nav>
    ';
    echo $start;
}
function footer() {
    $footer = <<<'END'
    <footer class="mt-auto container-fluid footer dark bg-primary">
    <div class="container-fluid text-center text-md-left">

       <!-- Grid row -->
       <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">

             <!-- Content -->
             <h5 class="text-uppercase">Manage your portfolio seamlessly.</h5>
             <p>pView is the all-in-one solution for managing your portfolio over time and on multiple accounts.</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

             <ul class="list-unstyled">
                <li>
                   <a href="about.php">About</a>
                </li>
                <li>
                   <a href="#">Download</a>
                </li>
                <li>
                   <a href="index.php">Home</a>
                </li>
                <!--      <li>
                         <a href="#!">Link 4</a>
                       </li>-->
             </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

             <ul class="list-unstyled">
                <li>
                   <a href="mailto:read0wang@live.com">Contact</a>
                </li>
                <li>
                   <a href="https://bitbucket.org/pview/pview-app/">Report Bugs</a>
                </li>
                <!--                   <li>
                         <a href="#!">Link 3</a>
                       </li>
                       <li>
                         <a href="#!">Link 4</a>
                       </li> -->
             </ul>

          </div>
          <!-- Grid column -->

       </div>
       <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">©pView, 2020. All rights reserved.
    </div>
    <!-- Copyright -->

 </footer>
 </body>
 </html>
END;
 echo $footer;
}