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
    
$start = <<<"END"
    <!DOCTYPE html>
    <html>
    <head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#007bff">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pView | $activePage
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="topnav">
        <a class="navbar-brand" href="/">
            <img src="/favicon.ico" id="brandImage" width="30" height="30" class="d-inline-block align-top" alt="">
            pView
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">$navItems
            </ul>
</div>
        </div>
    </nav>
END;
    echo $start;
}
function footer() {
    $footer = '
        <footer class="mt-auto container-fluid footer dark bg-primary" style="width="100%">
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">Do you know about your investment portfolio?</h5>
                        <p>Even more, across multiple accounts, over a period of time. pView can do that.
                        </p>

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
                                <a href="download.php">Download</a>
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
                                <a href="https://bitbucket.org/pview/pview-app/">Report Bugs</a>
                            </li>
                            <li>
                            <a href="/manual/index.php">Manual</a>
                        </li>
                        <!--   
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
            <div class="footer-copyright text-center py-3"><i class="far fa-copyright"></i> pView, 2020. All rights reserved.
            </div>
            <!-- Copyright -->

        </footer>
        </body>

        </html>';
    echo $footer;
}
function sidenav() {
    $sidenav = <<< "END"
    <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <button type="button" id="sidebarCollapse" class="btn">
            <i class="fas fa-align-left"></i>
            <i class="far fa-times-circle"></i>
        </button>
        <div class="sidebar-header" id=sidebar>
            <h3>Manual</h3>
        </div>
        <div>
            <input style="height: 51px;" type="text" class="form-control ds-input" id="navLinksSearch"
                onfocus="this.select()" onkeyup="searchLinks()" placeholder="Search..." aria-label="Search for..."
                autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false"
                aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
        </div>


        <ul class="list-unstyled components" id="navLinks">

            <li>
                <a href="#">Add New File</a>
            </li>
            <li>
                <a href="/manual/accountnew.php">Add Account</a>
            </li>
            <li>
                <a href="./transactionnew.php">Add Transaction</a>
            </li>
            <li>
                <a href="#">Edit Transaction</a>
            </li>
        </ul>
    </nav>


    <!-- Page Content  -->

</div>
</body>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

<script>
    function searchLinks() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("navLinksSearch");
        filter = input.value.toUpperCase();
        ul = document.getElementById("navLinks");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>
END;
echo $sidenav;
}