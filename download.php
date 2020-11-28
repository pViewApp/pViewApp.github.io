<?php 
require_once "frame.php";
require_once "downloadsTools.php";
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%.jar' ORDER BY version DESC LIMIT 1");
$jarLinkEnding = null;
if ($row = $results->fetch_assoc()) {
	$jarLinkEnding = $row['downloadLink'];
	$latestJarDate = $row['releaseDate'];
	$latestZipDate = $row['releaseDate'];
	$latestInstallerDate = $row['releaseDate'];
	$latestJarVersion = $row['version'];
	$latestInstallerVersion = $row['version'];
	$latestZipVersion = $row['version'];
}
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%-windows.zip' ORDER BY version DESC LIMIT 1");
$zipLinkEnding = null;
if ($row = $results->fetch_assoc())
	$zipLinkEnding = $row['downloadLink'];
$exeLinkEnding = null;
$results = $conn->query("SELECT * FROM versions WHERE downloadLink LIKE '%.exe' OR downloadLink LIKE '%.msi' ORDER BY version DESC LIMIT 1");
if ($row = $results->fetch_assoc())
	$exeLinkEnding = $row['downloadLink'];
start("Downloads");
?>
<a class="btn btn-primary btn-lg" href="#topnav" id="scrollBtn" style="display: none;" title="Scroll to top"><i
		class="fas fa-chevron-up"></i></a>

<script>
	//Get the button
	var mybutton = document.getElementById("scrollBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}
</script>
<div class="container">

	<br>

	<h2>Download pView: </h2>
	<p>Jar files require the latest <a target="_blank" href="https://adoptopenjdk.net/">Java 11</a> or higher.</p>
</div>
<div class="container">
	<hr class="my-4">
</div>
<div class="container center-align">
	<div class="row">
		<div class="card col-sm downloadCard">
		<div class="card-body">
				<img class="card-img-top" style="height: 120px; width: 80px" src="/fa/svgs/brands/java.svg" alt="java">
				<h5 class="card-title">Jar <span class="badge badge-secondary">For Power Users</span></h5>
				<p class="card-text">Light-weight bundle for those who have Java.</p>
				<p class="card-text">Released: <?php echo $latestJarDate; ?>.</p>
				<p class="card-text">Version: <?php echo $latestJarVersion; ?></p>
				<a class="btn btn-primary"
					onclick="window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/<?php echo $jarLinkEnding; ?>')"><i
						class="fas fa-download"></i> Download</a>
			</div>
		</div>
		<div class="card col-sm downloadCard recommended">
			<div class="card-body">
				<img class="card-img-top" style="height: 120px; width: 80px" src="/fa/svgs/solid/file-archive.svg"
					alt="zip">
				<h5 class="card-title">Zip <span class="badge badge-secondary">Recommended</span></h5>
				<p class="card-text">Works on PC.</p>
				<p class="card-text">Released: <?php echo $latestZipDate; ?>.</p>
				<p class="card-text">Version: <?php echo $latestZipVersion; ?></p>
				<a class="btn btn-primary"
					onclick="window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/<?php echo $zipLinkEnding; ?>')"><i
						class="fas fa-download"></i> Download</a>
			</div>
		</div>
		<div class="card col-sm downloadCard">
			<div class="card-body">
				<img class="card-img-top" style="height: 120px; width: 80px" src="/fa/svgs/brands/windows.svg"
					alt="installer">
				<h5 class="card-title">Installer <span class="badge badge-secondary">Experimental</span></h5>
				<p class="card-text">The classical installation expierience.</p>
				<p class="card-text">Released: <?php echo $latestInstallerDate; ?>.</p>
				<p class="card-text">Version: <?php echo $latestInstallerVersion; ?></p>
				<a class="btn btn-primary"
					onclick="window.location.assign('https://bitbucket.org/pview/pview-downloads/downloads/<?php echo $exeLinkEnding; ?>')"><i
						class="fas fa-download"></i> Download</a>
			</div>
		</div>
	</div>
	<div class="container">
		<?php printDownloadRows();?>
	</div>
</div>
<?php
footer();
?>