<?php
  include('utils/read_markdown.php');
  include('vendor/autoload.php');
  use \Michelf\MarkdownExtra;
  $parser = new \cebe\markdown\MarkdownExtra();

  include('data/projects_data.php');
?>
<html>
  <head>
    <title>Praxis Homes - The Trusted Source in Dallas Home Remodleing</title>
    <?php include('partials/_base_header.php'); ?>
  </head>
  <body>
    <?php include('partials/_topbar.php'); ?>
    <div class='row small-up-1 medium-up-3'>
      <?php foreach($projects as $project){  ?>
        <div class='portfolio-item column'>
          <div class='image'>
            <img src='<?php echo $project["img_url"] ?>' />
          </div>
          <div class='title'>
            <a href='/projects/<?php echo $project['slug'] ?>'>
            <h3><?php echo $project["title"]; ?></h3>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
    <script type='text/javascript' src='/vendor/foundation/js/vendor/jquery.js'></script>
    <script type='text/javascript' src='/vendor/foundation/js/vendor/what-input.js'></script>
    <script type='text/javascript' src='/vendor/foundation/js/vendor/foundation.js'></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
