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
                <div class="sidebar-header">
            <h2><a class="center-align" style="margin-right: 20px;"href="./index.php">Manual</a></h2>
        </div>
        <input style="height: 51px;" type="text" class="searchbox" id="navLinksSearch" 
                onfocus="this.select()" onkeyup="searchLinks()" placeholder="Search..." aria-label="Search for..."
                autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false"
                aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">

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