<?php 
require_once "../frame.php";
require_once "../db.php";
start("Manual");
?>

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
                <input type="text" id="navLinksSearch" onfocus="this.select()" onkeyup="searchLinks()" placeholder="Search.." title="Search...">

                <ul class="list-unstyled components" id="navLinks">

                    <li>
                        <a href="./index.php">Add New File</a>
                    </li>
                    <li>
                        <a href="./accountnew.php">Add Account</a>
                    </li>
                    <li>
                        <a href="#">Add Transaction</a>
                    </li>
                    <li>
                        <a href="#">Edit Transaction</a>
                    </li>
                </ul>
            </nav>


            <!-- Page Content  -->
            <div id="content">
                <h2 class="center-align"> Creating a new pView transaction</h2>

                <br>
                <br>

                <p> Steps: </p>

                <ul>
                    <li>1. Fill in the textboxes on the bottom of your screen with the proper data.</li>
                    <img src="/images/texttrans.png" alt="transaction.png">
                    <li>2. Press ENTER</li>
                    <img src="/images/transdone.png" alt="Entered Transaction">
                </ul>
            </div>
        </div>

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

        <?php
footer();
?>