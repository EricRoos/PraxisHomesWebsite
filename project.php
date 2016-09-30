<?php
	include('vendor/autoload.php');
	use \Michelf\MarkdownExtra;
	include('data/projects_data.php');
	include('utils/read_markdown.php');

	$project_id = $_GET["id"];
	$project = $projects[$project_id];
	$parser = new \cebe\markdown\MarkdownExtra();

	$description = "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eget aliquam risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut iaculis justo eu faucibus fermentum. Nunc non i    psum eget nisi semper viverra. Curabitur non lorem commodo, interdum quam vitae, elementum sapien. Vivamus vitae libero a dolor maximus varius eget pulvinar elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent bl    andit tristique lorem in venenatis. Suspendisse et ligula quis erat porttitor dictum. Donec non finibus urna, sit amet commodo turpis. Nullam pulvinar sodales sapien sed ullamcorper. Pellentesque eget bibendum erat. Lorem ipsum dolor sit amet, consectetur adipiscing     elit. Quisque cursus pulvinar pellentesque. Aliquam vitae lacinia arcu, non scelerisque quam."
?>
<html>
	<head>
		<meta property='og:image' content='<?php echo $project["img_url"] ?>'/>	
		<meta property='og:title' content='<?php echo $project["title"]." | Praxis Homes Project" ?>' />
		<meta property='og:url' content='<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'/>
		<meta property='og:description' content='<?php echo $description; ?>'/>
		<title>Praxis Homes</title>
		<?php include('partials/_base_header.php'); ?>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "475bdd98-83fc-4b0a-9c43-8558f159959b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

	</head>
	<body>
		<?php include('partials/_topbar.php'); ?>
		<div class='project row'>
			<a href='/portfolio'>Back</a>
			<div>
				<span class='stbutton st_facebook_hcount' displayText='Facebook'></span>
				<span class='stbutton st_twitter_hcount' displayText='Tweet'></span>
			</div>
			<h1><?php echo $project["title"]; ?></h1>
			<img src='<?php echo $project["img_url"] ?>' />
			<p>
				<?php echo $description; ?>
			</p>
		</div>
		<script type='text/javascript' src='/vendor/foundation/js/vendor/jquery.js'></script>
		<script type='text/javascript' src='/vendor/foundation/js/vendor/what-input.js'></script>
		<script type='text/javascript' src='/vendor/foundation/js/vendor/foundation.js'></script>
	  <script>
			$(document).foundation();
		</script>
	</body>
</html>
