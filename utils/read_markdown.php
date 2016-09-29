<?php
	use \Michelf\MarkdownExtra;

	function getMarkdownContents($file){
		return file_get_contents("markdowns/".$file);
	}

	function getHtmlFromMarkdown($file){
		return MarkdownExtra::defaultTransform(getMarkdownContents($file));
	}
?>
