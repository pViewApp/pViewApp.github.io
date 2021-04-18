var pages = {
    "Home" : "/",
    "Downloads" : "/downloads.html"
}

function getHeader(page) {


    
    var navItems = ""

    for (const pageName in pages) {
        if (pageName == page) {
            navItems += `
            <li class="nav-item">
            <a class="nav-link active" href="${pages[pageName]}">${pageName}</a>
            </li>
            `
        } else {
            navItems += `
            <li class="nav-item">
            <a class="nav-link" href="${pages[pageName]}">${pageName}</a>
            </li>
            `
        }
    }


    var header = `
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="topnav" style="user-select: none; width: 100%;">
        <a class="navbar-brand" href="/">
            <img src="/favicon.ico" id="brandImage" width="30" height="30" class="d-inline-block align-top" alt="">
            pView
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">${navItems}
            </ul>
    </div>
        </div>
    </nav>
    `



    return header

}

function getHead(page) {
    return `
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#007bff">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>pView | ${page}
        </title>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-6LYME6PS7B"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());
            
              gtag('config', 'G-6LYME6PS7B');
            </script>
        <link type="text/css" rel="stylesheet" href="/fa/css/all.min.css">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <link type="text/css" rel="stylesheet" href="/all.css">
        <meta charset="UTF-8">
    `
}

function getFooter() {
    return `
    <footer class="mt-auto container-fluid footer dark bg-primary" style="width: 100%;">
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
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/downloads.html">Downloads</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <ul class="list-unstyled">
                    <li>
                        <a href="https://github.com/pViewApp/bugs/issues/new/choose">Report Bugs</a>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <b>pViewApp@gmail.com</b>
                    </li>  
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
    `
}