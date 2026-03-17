<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<div class="lang en">
			<h1 class="headline">Welcome</h1>

			<p>OpenZooMuseum.org (OZM) is a website for sharing and visualizing occurrence records of animals. It runs on Symbiota, software originally designed for sharing specimen information that has been adapted so that it can also share records documented 
			by image, audio, or video recordings. Like all Symbiota networks, OZM allows:</p>
			<ol>
				<li>Web-based data entry or upload of data from an institutional database.</li>
				<li>Downloading entire datasets in two clicks.</li>
				<li>Mapping of georeferenced records in two clicks.</li>
				<li>Uploading of high-resolution images.</li>
				<li>Generation of taxon profile pages.</li>
				<li>Creation of species lists for a locality or region.</li>
				<li>Creation of identification keys.</li>
				<li>Generation of "flash card quizzes" that can be used in teaching students and training field crews.</li>
			</ol>
			<p>For any example of what a Symbiota portal can offer, go here. Any recognized museum collection may become a contributor to OZM. Write to the network manager for more information. There is no charge for joining OZM, nor for using the information it serves.</p>

		</div>
</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
