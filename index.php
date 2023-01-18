<!DOCTYPE html>
<?php
	preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
	if(count($matches)<2){
		preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
	}

	if (count($matches) > 1 && $matches[1] <= 4){
		header('Location: http://www.cerat.sp.caixa/website/premiacao/redirecionar.php'); die();
	}
?>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Premiação</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- ======= Theme skin ======== -->
<link href="skins/default.css" rel="stylesheet" />

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
		<div class="navbar navbar-default navbar-static-top">
			<div class="col-lg-12">
				<img src="img/slides/4.jpg" class="img-responsive" alt="Pesquisa Halloween">
			</div>
			<div class="container">
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="index.html"><span>H</span>alloween</a>-->
				</div>
				<div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <!--  <li class="active"><a href="portfoliovm.html">Portfolio</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">		
					<div class="row">
						<section id="projects">
							<ul id="thumbs" class="portfolio">
							<!-- Item Project and Filter Name -->
							<li class="item-thumbs col-lg-6 design" data-id="id-0" data-type="web">
								<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Abobrão" href="img/works/1.jpg">
									<span class="overlay-img"></span>
									<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img class="overlay-img-thumb" src="img/works/1.jpg" alt="Seja feliz sempre aroveite todo tema."/>
							</li>
							<!-- End Item Project -->
							
							<!-- Item Project and Filter Name -->
							<li class="item-thumbs col-lg-6 design" data-id="id-1" data-type="icon">
							<!-- Fancybox - Gallery Enabled - Title - Full Image -->
								<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Photo 2" href="img/works/2.jpg">
								<span class="overlay-img"></span>
								<span class="overlay-img-thumb font-icon-plus"></span>
								</a>
								<!-- Thumb Image and Description -->
								<img src="img/works/2.jpg" alt="Somos todos e mais um.">
							</li>
							<!-- End Item Project -->
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

</body>
</html>