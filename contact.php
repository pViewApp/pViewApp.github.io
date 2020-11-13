<?php 
require_once "frame.php";
require_once "db.php";
start("Contact");
?>
<html>

<head>

</head>

<body id="contactBody">

    <br>

    <div class="container">

        <br>

        <h2>Contact </h2>
    </div>
    <div class="container">
        <hr>
    </div>

        <div class="contact container">
            <form action="/action_page.php">
                <label for="emailFinput">Email</label>
                <input type="email" id="emailFinput" name="email" placeholder="justin.case@example.com" onfocus="this.select()">

                <br>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="button" value="Submit" class="btn btn-primary btn-lg" href="./submit.php">
            </form>
        </div>

</body>

</html>

<?php
footer();
?>