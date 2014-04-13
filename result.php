<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gene Search Result - GBM-Atlas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

    <!-- Neurosynth -->
    <script src="js/panzoom.js" type="text/javascript"></script>
    <script src="js/xtk.js" type="text/javascript"></script>
    <script src="js/rainbow.js" type="text/javascript"></script>
    <script src="js/sylvester.js" type="text/javascript"></script>
    <script src="js/amplify.min.js" type="text/javascript"></script>
    <script src="js/viewer.js" type="text/javascript"></script>
    <!--<script src="js/app.js" type="text/javascript"></script>-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="about.html">About</a></li>
                    <li><a href="publications.html">Publications</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Gene Search</h1>
                    <p>Explore gene expression for a gene probe</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                       <a href="gsearch.php"><button class="btn btn-transparent btn-lg"><i class="icon-search icon-transparent"></i>Genes</button></a>
                       <a href="asearch.php"><button class="btn btn-transparent btn-lg"><i class="icon-signal icon-transparent"></i>Anatomical</button></a>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->
<section id="services">
<div class="container">
        <div class="row">
	  <div class="col-sm-6">
	    <div class="dropdown">
		<form action='result.php' method='get'>
			<p><label>Gene Search:</label><input type='text' name='gene' id='gene' value='' class='auto'>
			<button type="submit" class="btn btn-success">Submit</button></p>
		</form>

	<!-- Check for gene ID in the browser -->
	<?php

	if (isset($_GET['gene'])){

		$geneID = $_GET['gene'];

		// Print header for the gene
		echo "<h2>$geneID</h2>";

		// Shiny Plot  
		printf( '<iframe src="https://stanford.shinyapps.io/gbmatlas/?gene=%s" width="1200px" height="800px" display="none", frameBorder="0"></iframe>', $geneID);
	}

	?>

</div><!-- dropdown-->
</div><!--column-->
</section>
</div>
      
<section id="bottom" class="wet-asphalt">
         </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" title="Stanford University">Stanford University</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</body>
</html>
