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
    //if(!isset($_GET['courseid'])){
    //  header('Location: index.php?ms=courseidnotvalid');
    //}
   
    $courseid=   $_GET['courseid'];
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
            

<?php
$result = mysql_query("SELECT id,title,image  FROM course");
while($row = mysql_fetch_array($result))
{   
    $course_id = $row["id"];
    $course_title = $row["title"];
    $course_image = $row["image"];
 ?>

			<div class="row" style="display: inline-block; margin-left: 25px;"> 
            
                    <!--<a href="video.php?courseid=1"><h6 id="title">sample title</h6><img id="screenshot" class="img-rounded" alt="android studio training" width="360"/></a> &nbsp;
                    <a href="video.php?courseid=2"><h6 id="title">sample title</h6><img id="screenshot" class="img-rounded" alt="php training" width="380"/></a> &nbsp; &nbsp;
                    <a href="video.php?courseid=4"><h6 id="title">sample title</h6><img id="screenshot" class="img-rounded" alt="android studio training" width="360"/></a> &nbsp; &nbsp;-->
                    
                    <a href="video.php?courseid=<?php echo $course_id ?>"><p><?php echo $course_title; ?></p><img src="<?php echo $course_image; ?>" class="img-rounded" alt="php training" width="350"/></a>
                    
                 
                 
 			<!-- /Row -->
    
    		</div>   <?php }?>
		<!-- /Container -->
	       </div>
<script>
    function setImage($title, $source) {
        document.getElementById("title").innerHTML = $title;
        document.getElementById("screenshot").src = $source;
    }
</script>

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>