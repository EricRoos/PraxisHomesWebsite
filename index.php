<?php
	include('vendor/parsedown/Parsedown.php');
	include('utils/read_markdown.php');
?>
<html>
	<head>
		<title>Praxis Homes</title>
		<?php include('partials/_base_header.php'); ?>
	</head>


	<body>
		<div class='praxis-top-bar'>
			<div class='left'>
				<h1>Praxis Homes</h1>
			</div>
			<div class='right show-for-small-only mobile-nav-right'>
				<ul class="dropdown menu" data-dropdown-menu>
					<li>
						<a href="#"><i class='fa fa-bars fa-fw'></i></a>
						<ul class="menu">
							<li><a class='dropdown-link' href='/blog'>blog</a></li>
							<li><a class='dropdown-link' href='/portfolio'>portfolio</a></li>
<li><a class="dropdown-link typeform-share link" href="https://eric422.typeform.com/to/xLUuoI" data-mode="1" target="_blank">contact me</a></li>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
						</ul>
					</li>
				</ul>
			</div>
			<div class='right hide-for-small-only'>
				<a href='/blog'>blog</a>
				<a href='/portfolio'>portfolio</a>
<a class="typeform-share link" href="https://eric422.typeform.com/to/xLUuoI" data-mode="1" target="_blank">contact me</a>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>

			</div>

		</div>
		<div class="parallax-background">
			<div class='front-image'>
				<div class="intro-text">
					<h1 class=''>PRAXIS HOMES</h1>
				</div>
				<div class='header-info'>
					<div class='left'>
						<h2>From Concept to Install</h2>
						<ul>
							<li><img src='/images/checkbox.png'/>Remodeling</li>	
							<li><img src='/images/checkbox.png'/>Interior Design</li>	
							<li><img src='/images/checkbox.png'/>Consultations</li>	
							<li><img src='/images/checkbox.png'/>And Much Much More</li>	
						</ul>
						<form>
							<label for='email'>For updates and newsletters:</label>
							<input name='email' style='text' />
							<input type='submit' class='submit-button'/>
						</form>

					</div>
					<div class='right'>
						<img src='/images/bg5.jpg' class='hide-for-small-only'/>
					</div>
				</div>
			</div>
		</div>

		<div class="parallax-content">
			<?php 
				//include('partials/_about.php'); 
				$Parsedown = new Parsedown();
				echo $Parsedown->text(getMarkDownContents("about.md"));	
			?>
		</div>
		<div class="reveal" id="exampleModal1" data-reveal>
<!-- change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://eric422.typeform.com/to/xluuoi" data-text="contact form" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getelementbyid,ce=d.createelement,gt=d.getelementsbytagname,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentnode.insertbefore(js,q)}})()</script>
<div style="font-family: sans-serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"><a href="https://www.typeform.com/examples/forms/contact-form-template/?utm_campaign=xluuoi&amp;utm_source=typeform.com-4352071-basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-contactform&amp;utm_term=en" style="color: #999" target="_blank">contact form</a>powered by typeform</div>
		</div>
		<div class="full reveal" id="exampleModalSmall" data-reveal>
<!-- change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://eric422.typeform.com/to/xluuoi" data-text="contact form" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getelementbyid,ce=d.createelement,gt=d.getelementsbytagname,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentnode.insertbefore(js,q)}})()</script>
<div style="font-family: sans-serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"><a href="https://www.typeform.com/examples/forms/contact-form-template/?utm_campaign=xluuoi&amp;utm_source=typeform.com-4352071-basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-contactform&amp;utm_term=en" style="color: #999" target="_blank">contact form</a>powered by typeform</div>
		</div>
		<script type='text/javascript' src='vendor/foundation/js/vendor/jquery.js'></script>
		<script type='text/javascript' src='vendor/foundation/js/vendor/what-input.js'></script>
		<script type='text/javascript' src='vendor/foundation/js/vendor/foundation.js'></script>
		 <script>
      $(document).foundation();
    </script>
	</body>
</html>
