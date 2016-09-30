<?php
  include('vendor/autoload.php');
  use \Michelf\MarkdownExtra;
  include('data/projects_data.php');
  include('utils/read_markdown.php');

  $project_id = $_GET["id"];
  $project = $projects[$project_id];
  $parser = new \cebe\markdown\MarkdownExtra();
  $md_file = $project["slug"]."-project.md";
  $description_html = getHtmlFromMarkdown($md_file);

  $description = strip_tags($description_html,"<br>");
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
        <?php echo $description_html ?>
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
