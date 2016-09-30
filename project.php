<?php
	include('vendor/autoload.php');
	use \Michelf\MarkdownExtra;
	include('data/projects_data.php');
	include('utils/read_markdown.php');

	$project_id = $_GET["id"];
	$project = $projects[$project_id];
	$parser = new \cebe\markdown\MarkdownExtra();

?>
<html>
	<head>
		<title>Praxis Homes</title>
		<?php include('partials/_base_header.php'); ?>
	</head>
	<body>
		<?php include('partials/_topbar.php'); ?>
		<div class='project row'>
			<a href='/portfolio'>Back</a>
			<h1><?php echo $project["title"]; ?></h1>
			<img src='<?php echo $project["img_url"] ?>' />
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia rutrum diam ut pellentesque. Donec condimentum placerat massa, ut porttitor nunc sodales elementum. Nullam accumsan auctor congue. Cras blandit malesuada lacus sed elementum. Integer ac tellus et erat egestas sodales non in lacus. Vivamus egestas ornare ornare. Vestibulum efficitur, sem at interdum scelerisque, mauris enim posuere ex, ut efficitur tortor ligula eget dui. Maecenas scelerisque non nisi sed fringilla. Aliquam non velit leo. Proin vel tortor non magna gravida faucibus. Etiam viverra elit nec neque blandit, a ultrices mi commodo. Duis sit amet lorem et nibh vulputate iaculis. Maecenas venenatis tellus placerat bibendum mollis. Aliquam id ex at velit posuere maximus ac sit amet orci.
</p>

<p>
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eget aliquam risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut iaculis justo eu faucibus fermentum. Nunc non ipsum eget nisi semper viverra. Curabitur non lorem commodo, interdum quam vitae, elementum sapien. Vivamus vitae libero a dolor maximus varius eget pulvinar elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent blandit tristique lorem in venenatis. Suspendisse et ligula quis erat porttitor dictum. Donec non finibus urna, sit amet commodo turpis. Nullam pulvinar sodales sapien sed ullamcorper. Pellentesque eget bibendum erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus pulvinar pellentesque. Aliquam vitae lacinia arcu, non scelerisque quam.
</p>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia rutrum diam ut pellentesque. Donec condimentum placerat massa, ut porttitor nunc sodales elementum. Nullam accumsan auctor congue. Cras blandit malesuada lacus sed elementum. Integer ac tellus et erat egestas sodales non in lacus. Vivamus egestas ornare ornare. Vestibulum efficitur, sem at interdum scelerisque, mauris enim posuere ex, ut efficitur tortor ligula eget dui. Maecenas scelerisque non nisi sed fringilla. Aliquam non velit leo. Proin vel tortor non magna gravida faucibus. Etiam viverra elit nec neque blandit, a ultrices mi commodo. Duis sit amet lorem et nibh vulputate iaculis. Maecenas venenatis tellus placerat bibendum mollis. Aliquam id ex at velit posuere maximus ac sit amet orci.
</p>

<p>
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eget aliquam risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut iaculis justo eu faucibus fermentum. Nunc non ipsum eget nisi semper viverra. Curabitur non lorem commodo, interdum quam vitae, elementum sapien. Vivamus vitae libero a dolor maximus varius eget pulvinar elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent blandit tristique lorem in venenatis. Suspendisse et ligula quis erat porttitor dictum. Donec non finibus urna, sit amet commodo turpis. Nullam pulvinar sodales sapien sed ullamcorper. Pellentesque eget bibendum erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus pulvinar pellentesque. Aliquam vitae lacinia arcu, non scelerisque quam.
</p>
		</div>
	</body>
</html>
