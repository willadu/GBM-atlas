<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Brain Map - GBM-Atlas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
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

<script>
$(window).load(function(){
  $('#dvLoading').fadeOut(2000);
});
</script>


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

    <!-- Here is the preloader-->
    <section id="title" class="orange">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Brain Map</h1>
                    <p>Visualize gene expression for a gene probe</p>
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

	options = { panzoomEnabled: false }
	viewer = new Viewer('#layer_list', '.layer_settings', true, options);
	viewer.addView('#view_axial', Viewer.AXIAL);
	viewer.addView('#view_coronal', Viewer.CORONAL);
	viewer.addView('#view_sagittal', Viewer.SAGITTAL);
	//viewer.addSlider('opacity', '.slider#opacity', 'horizontal', 0, 1, 1, 0.05);
	//viewer.addSlider('pos-threshold', '.slider#pos-threshold', 'horizontal', 0, 1, 0, 0.01);
	//viewer.addSlider('neg-threshold', '.slider#neg-threshold', 'horizontal', 0, 1, 0, 0.01);
	viewer.addSlider("nav-xaxis", ".slider#nav-xaxis", "horizontal", 0, 1, 0.5, 0.01, Viewer.XAXIS);
	viewer.addSlider("nav-yaxis", ".slider#nav-yaxis", "vertical", 0, 1, 0.5, 0.01, Viewer.YAXIS);
	viewer.addSlider("nav-zaxis", ".slider#nav-zaxis", "vertical", 0, 1, 0.5, 0.01, Viewer.ZAXIS);

	viewer.addColorSelect('#select_color');
	viewer.addSignSelect('#select_sign')
	viewer.addDataField('voxelValue', '#data_current_value')
	viewer.addDataField('currentCoords', '#data_current_coords')
	viewer.addTextField('image-intent', '#image_intent')
	viewer.clear()   // Paint canvas background while images load	

        // This will get variables from URL
	function getUrlVars() {
	    var vars = {};
	    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	    });
	    return vars;
	}

	//Get probe from URL	
	var probe = getUrlVars()["probe"];
	var gene = getUrlVars()["gene"];
 
        //Do we have images?
	function getProbes( gene, probe )
	{
	     var result = null;
	     var scriptUrl = "probe.php?probe=" + probe + "&gene=" + gene;
	     $.ajax({
		url: scriptUrl,
		type: 'get',
		dataType: 'json',
		async: false,
		success: function(data) {
		    result = data;
		} 
	     });
	     return result;
	}
	images = getProbes(gene,probe);
	//alert(JSON.stringify(images));
        viewer.loadImages(images);

});
</script>
	<?php

	if (isset($_GET['gene'])){
   	   if (isset($_GET['probe'])){
		$geneID = $_GET['gene'];
		$probeID = $_GET['probe'];
		// Print header for the gene
		echo "<h2>$geneID : $probeID</h2>";
		}
	}
	?>

	<!-- Imaging Data -->
	<div class="row">
	      <div class="viewer" style="padding-left: 20px">
		<div class="row">
		    <div class="col-md-4">
			    <div class="view" id="view_coronal" style="width:270px">
			    <canvas height="264" id="cor_canvas" width="220"> </canvas>
			    <div class="slider nav-slider-vertical" id="nav-zaxis"></div>
			    </div>
		    </div>
		    <div class="col-md-4">
			    <div class='view' id='view_axial' style="width:270px">
			    <canvas height='264' id='axial_canvas' width='220'></canvas>
		            <div class="slider nav-slider-vertical" id="nav-zaxis"></div>
                            </div>
		    </div>
		    <div class="col-md-4">
			    <div class='view' id='view_sagittal' style="width:270px">
			    <canvas height='264' id='sag_canvas' width='290'></canvas>
		            <div class="slider nav-slider-horizontal" id="nav-zaxis"></div>
		            </div>
                    </div>
                </div> <!-- End rows with viewer-->  
		
		<div class="row"> <!-- Row with layers-->
			<div id="layer_panel">
				<div id="layer_list_panel">
					<div>Layers</div>
					<div id="layer_visible_list"></div>
					<ul id="layer_list" class="layer_settings">
					</ul>
			 		<!--<select name="layer_list" id="layer_list" class="layer_settings" size=5></select>-->
			         </div>
				<div id="layer_settings_panel">
				Color palette:<select id="select_color" class="layer_settings"></select>
				Positive/Negative:<select id="select_sign" class="layer_settings"></select>
				<!--Opacity:<div class='slider layer_settings' id='opacity'></div>
				Pos. threshold:<div class='slider layer_settings' id='pos-threshold'></div>
				Neg. threshold: <div class='slider layer_settings' id='neg-threshold'></div>-->
				</div>
                        </div>
			</div>
		    </div>
		</div>
	    </div>
	</div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>	

    <div id="dvLoading"></div>
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
