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
        <h2>Contact </h2>
    </div>
    <div class="container">
        <hr>
    </div>
    <div class="contact container">
        <form action="/submit.php" method="post" id="form">
            <label for="emailFinput">Email</label>
            <input type="email" id="emailFinput" maxlength="100" name="email" placeholder="example@example.com" title="Email"
                onfocus="this.select()" required>

            <br>
            <label for="message">Description</label>
            <textarea id="message" name="message" placeholder="Write something..." maxlength="4000" style="height:200px" title="This text will be sent to pView."
                required></textarea>

            <br>
            <br>
            <input type="checkbox" name="emailConsent" id="emailConsent" value="cb" checked><label for="emailConsent"
                class="cb-label"> I agree to be emailed a response from pView.</label>

            <br>
            <br>

            <input type="submit" value="Submit" form="form" class="btn btn-primary btn-lg" href="./submit.php">

        </form>
    </div>

</body>

</html>

<?php
footer();
?>