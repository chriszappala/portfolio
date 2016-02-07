<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chris Zappala | Designer</title>
    <meta name="robots" content="noindex">
       <!-- piechart -->
	<link rel="stylesheet" href="css/chartstyle.css"/>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
<link rel="stylesheet" href="webfontkit/stylesheet.css" type="text/css" charset="utf-8" />
 <script src="email/validation.js" type="text/javascript"></script>
</head>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://chriszappala.com/">Chris Zappala</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="/about.html">About</a>
                    </li>
                    <li><a href="/work.html">Work</a>
                    </li>
                    <li class="selectcur1"><a href="/contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                 
                    <div class="clearfix"></div>
                    <h3>There was an error. Please try again.</h3>
                      </div>
            </div>
 </div>
        </div>
        
                 
                                               
    
                           

    
  
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="http://chriszappala.com/">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="/about.html">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="/work.html">Work</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="/contact.html">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Chris Zappala 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="dist/jquery.easypiechart.min.js"></script>
	<script>
	$(function() {
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.chart').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});
	</script>
</body>

</html>


</body>
</html>