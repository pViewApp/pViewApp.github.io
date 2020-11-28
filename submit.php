<?php


require_once "frame.php";
require_once "db.php";
if (!array_key_exists('message', $_POST) || !array_key_exists('email', $_POST) || (gettype($_POST['message']) != 'string') || (gettype($_POST['email']) != 'string')) {
    
    header('Location: /');
    http_response_code(301);
    exit;
        
}
start("Contact");
$query = $conn->prepare("INSERT INTO contact(Email, Text, emailConsent)
VALUES (?, ?, ?)");
$query->bind_param('ssi', $_POST['email'], $_POST['message'], intval(isset($_POST['emailConsent'])));
$query->execute();
?>
<div class="container">

<br>

<h2 class="center-align">Contact </h2>
</div>
<div class="container">
<hr>


<h2 class="center-align"><strong>Your form has been submitted!</strong></h2>
<br>
<br>
<br>

<h5 class="center-align">Return to <a class=""href="/index.php">home page</a>.</h5>


</div>
<?php
footer();
?>