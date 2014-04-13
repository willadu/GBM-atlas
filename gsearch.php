<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gene Search - GBM-Atlas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
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
                    <li><a href="about.html">About</a></li>
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

		<script type="text/javascript">
		$(document).ready(function() {
			//autocomplete
			$(".auto").autocomplete({
				source: "search.php",
				minLength: 1,
				messages: {
					noResults: '',
					results: function() {}
		    		}
			});				
		});
		</script>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>	
	    </div>	
		</div>  
       <div class="col-sm-6">
<!--- HOW TO SECTION -->
				<h3>What is the gene search?</h3>
				    <p>Gene search will allow you to investigate the relationship between gene probe expression, glioblastoma survival, and demographics.</p>
				<h3>How do I search?</h3>
                                    <p>Start typing in the name of a probe, and the search box will autocomplete, then click "Search." On the next page, the database is queried to populate an interactive application that will allow you to explore custom filtering of the data.  You must "select probes" to see the plot, and choose either "survival" or "expression." There are many optional demographic and tumor features in the left panel, each of which can be activated by clicking the check box.  To view the brain expression maps, click the orange button "Brain Maps" under the plots</p>
				   
<!-- END HOW TO SECTION -->



       </div>
            </div>
        </div>
</section>        

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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
