<?php
    $connection = mysql_connect("localhost", "root", "");
    if(!$connection)
    {
        die("Database Connection Failed: " . mysql_error());
    }
    
    $db_select = mysql_select_db("tutorials", $connection);
    if(!$db_select)
    {
        die("Database Select Failed!" . mysql_error());
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
	<header>
    
    
		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
				

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				

			</div>
		</nav>
		<!-- /Nav -->

		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#"></a></li>
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->


	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section md-padding">
    
    	<!-- Background Image 
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			
            <div class="overlay"></div>
            
		</div>
		 /Background Image -->


		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-9">
					<div class="blog">
                   
                        
                    <p id="demo"></p>
   <iframe width="700" height="400" id="Video" ></iframe>
 
 <!-- Video Condition -->
<script>
    function setVideo($title, $source) {
        document.getElementById("demo").innerHTML = $title;
        document.getElementById("Video").src = $source;
    }
</script>
<!-- /Video Condition -->
                 
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<aside id="aside" class="col-md-3">



 
				
					<!-- Category of Videos -->
					<div class="widget">
						<h3 class="title">Welcome</h3>
						<div class="widget-category">
                                                <?php
    $result = mysql_query("SELECT title,filename,time, course_id FROM video where course_id='". $_GET['courseid']."'");
     while($row = mysql_fetch_array($result))
     {
        $title = $row["title"];
        $filename = $row["filename"];
        $time= $row["time"];
        //$courseid= $row["course_id"];
?>		
   
							<a href="#" onclick="setVideo('<?php echo $title; ?>', '<?php echo $filename; ?>')"><?php echo $title; ?> <span><?php echo $time; ?> </span></a>
                             <?php }?>
					 
						</div>
					</div>
					<!-- /Category -->


				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					

					

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>