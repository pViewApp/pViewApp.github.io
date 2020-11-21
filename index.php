<?php 
require_once "frame.php";
require_once "db.php";
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%.jar' ORDER BY version DESC LIMIT 1");
$jarLinkEnding = null;
if ($row = $results->fetch_assoc())
	$jarLinkEnding = $row['downloadLink'];
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%-windows.zip' ORDER BY version DESC LIMIT 1");
$zipLinkEnding = null;
if ($row = $results->fetch_assoc())
	$zipLinkEnding = $row['downloadLink'];
$exeLinkEnding = null;
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%.exe' ORDER BY version DESC LIMIT 1");
if ($row = $results->fetch_assoc())
	$exeLinkEnding = $row['downloadLink'];
start("Home");
?>
<div class="jumbotron">
	<h1 class="display-4" style="font-size: 25pt;">pView helps optimize your investment portfolio.</h1>
	<p class="lead">
	</p>
	<hr class="my-4">
	<div class="btn-group" role="group">
		<a class="btn btn-primary btn-lg" style="font-size: 13.2pt;"
			onclick="window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/<?php echo $zipLinkEnding; ?>');"><i
				class="fab fa-windows"></i> Download for Windows</a><a class="btn btn-lg btn-secondary" style="font-size: 13.2pt;"
			href="/download.php" role="button">More
			Downloads <i class="fas fa-angle-double-right"></i></a>
	</div>

</div>

<h2 class="center-align">App Screenshot</h2>


<img class="center-align img-lg" style="width: 80%; max-width: 946px; margin-bottom: 40px;" src="images/pview.png" alt="Screenshot">

<br>
<br>

<h2 class="center-align">Comparison</h2>
<div class="container">





	<table>
		<tr>
			<th style="width: 200px;">Features</th>
			<th>pView</th>
			<th>Broker</th>
			<th>3rd Party</th>
		</tr>
		<tr>
			<td>Free</td>
			<td><i class="fa fa-check"></td>
			<td><i class="fa fa-check"></td>
			<td><i class="fa fa-times"></td>
		</tr>
		<tr>
			<td>Multiple account reporting</td>
			<td><i class="fa fa-check"></i></td>
			<td><i class="fa fa-times"></i></td>
			<td><i class="fa fa-check"></i></td>
		</tr>
		<tr>
			<td>Real time quote</td>
			<td><i class="fa fa-check"></i></td>
			<td><i class="fa fa-times"></i></td>
			<td><i class="fa fa-times"></i></td>
		</tr>
	</table>
</div>
</div>
<?php
footer();
?>