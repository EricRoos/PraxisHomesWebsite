<?php
	include('utils/read_markdown.php');
	include('vendor/autoload.php');
	use \Michelf\MarkdownExtra;
	$parser = new \cebe\markdown\MarkdownExtra();
?>
<html>
	<head>
		<title>Praxis Homes</title>
		<?php include('partials/_base_header.php'); ?>
	</head>
	<body>
		<?php include('partials/_topbar.php'); ?>
		<div class='about-me'>
			<?php echo getHtmlFromMarkdown("about.md"); ?>
		</div>
	</body>
</html>
