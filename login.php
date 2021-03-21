<?php
session_start();
if( isset($_POST["account"]) && isset($_POST[pw])) {
  unset($_SESSION["account"]); //logout correct user
  if( $_POST['pw'] =='umsi') {
    $_SESSION["account"] = $_POST["account"];
    $_SESSION["success"] = "logged in.";
    header( 'Location: app.php' ) ;
    return;
  } else {
    $_SESSION["error"] = "Incorrect password.";
    header( 'Location: login.php') ;
    return;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>login</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="registration.php">registration</a></li>
					<li><a href="subject.html">subjects</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="teachers.html">teacher</a></li>
						<li><a href="login.php">login</a></li>
					</ul>
						

				</ul>
			</div>
<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">login</h3>
						<p>
						you can login here.
						</p>
            <?php
            if( isset($_SESSION["error"])) {
              echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
              unset($_SESSION["error"]);
            }
            if( isset($_SESSION["success"])) {
              echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
              unset($_SESSION["success"]);
            }
            ?>
						<form action="subject.html" class="form-light mt-20" method="get" role="form">
							<div class="form-group">
					
								<label>username</label>
								<input type="text" class="form-control" placeholder="uersname required">
							</div>
							<div class="form-group">
								<label>password</label>
								<input type="text" class="form-control" name="pw" placeholder="password required">
							</div>
							
							<button type="login" class="btn btn-two">login</button><p><br/></p>
              <a href="app.php">cancel</a>
						
            <p>
            Not yet amember?	<li><a href="registration.php">register</a></li>sign up</a>
            </p>

						</form>
					</div>
					<footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          subject Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                information Technology 
              </a>
            </li>
            <li><a href="#">
                math
              </a>
            </li>
            <li><a href="#">
                art and craft
              </a>
            </li>
            <li><a href="#">
               letricture Language
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Products Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Individual Plans  </a>
            </li>
            <li><a href="#">
                interprenurshipp
              </a>
            </li>
            <li><a href="#">
                good advice
              </a>
            </li>
            <li><a href="#">
                Academic
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All subjects per class
              </a>
            </li>
            <li> <a href="#">
                All teachers
              </a>
            </li>
            <li><a href="#">
                All students
              </a>
            </li>
            <li>
              <a href="#">
                All staff
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>you can contacts on the address below we welcome everyone</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> lungujja lubaga - kampala uganda<br>
            <i class="fa fa-phone"></i>+256 754 282953 <br>
             <i class="fa fa-envelope-o"></i> nakitinah05@gmail.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			

			<div class="clear"></div>

	
			<!--CLEAR FLOATS-->
		</div>
			<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="registration.php">registration</a> |
								<a href="subject.html">subjects</a> |
								<a href="contact.php">contact</a> |
								<a href="teachers.html">teachers</a> |
								<a href="login.php">login</a> |

						
							</p>
						</div>
					</div>

		

					<div class="col-md-6 panel">
						<div class="panel-body">
							
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>



			
		</body>
		</html>