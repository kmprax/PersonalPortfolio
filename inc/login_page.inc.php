<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Kimberly M. Praxel</title>

  <!-- Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Font Awesome CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<!-- Animate css -->
  <link href="assets/css/animate.css" rel="stylesheet">
  <!-- Magnific css -->
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
  <!-- Responsive CSS -->
  <link href="assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/images/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/favicon_144x144.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/favicon_114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/favicon_72x72.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">

</head>



<body>


	<!-- Home Section -->
	<section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
		<div class="intro">
			<div class="intro-sub">Kimberly M. Praxel</div>
			<h1>Web Developer<span> Portfolio Admin Site</span></h1>
<?php
	if (isset($errors) && !empty($errors))
	{
		echo "<h1>Error!</h1><p class='error'>The following errors occured<br />";
		foreach ($errors as $msg)
		{
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';
	}

	//Display the form
?>

        <form action="login.php" method="post">
			<div class="center">
				<div class="col-lg-4 col-sm-12">
					<label>Username:<span class="error">*</span></label>
					<input type="text" name="email" class="form-control" placeholder="username" value="<?php echo htmlentities($username); ?>" required/>

					<label>Password:<span class="error">*</span></label>
					<input type="password" class="form-control" name="pass" placeholder="password" value="" required/>
					<br>

					<input type="submit" name="submit" value="Submit" />
				</div>
				</div>
        </form>
    </div>
	</section>
	
	

	<!-- Javascript files -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.countTo.js"></script>
  <script src="assets/js/jquery.inview.min.js"></script> 
  <script src="assets/js/jquery.easypiechart.js"></script>
  <script src="assets/js/jquery.shuffle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
  <script src="assets/js/jquery.fitvids.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script src="assets/js/scripts.js"></script>
</body>
</html>

