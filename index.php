
<?php 
require_once "frame.php";
start("Home");
?>
	<div class="jumbotron">
		<h1 class="display-4">Manage your portfolio seamlessly.</h1>
		<p class="lead">pView is the all-in-one solution for managing your portfolio over time and on multiple accounts.
		</p>
		<hr class="my-4">
		<div class="btn-group" role="group">
			<a class="btn btn-primary btn-lg" href="#"
				onclick="window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/pview-0.2.2.jar');"><i
					class="fab fa-windows"></i> Download for Windows</a><a class="btn btn-lg btn-secondary"
				href="/download.php" role="button">More
				Downloads <i class="fas fa-angle-double-right"></i></a>
		</div>
	</div>
<?php
footer();

?>