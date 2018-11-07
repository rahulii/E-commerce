<?php
	//Start the Session
	session_start();
	 require('connect.php');
	//3. If the form is submitted or not.
	//3.1 If the form is submitted
	if (isset($_POST['username']) and isset($_POST['password'])){
	//3.1.1 Assigning posted values to variables.
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = md5($_POST['password']);
	//3.1.2 Checking the values are existing in the database or not
		$query = "SELECT * FROM users WHERE username='$username' and password='$password'";

		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
	//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			$_SESSION['username'] = $username;
		}
		else{
	//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			echo "Invalid Login Credentials.";
		}
	}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
		header('Location: home.php');
		//echo $_SESSION['username'];
		//header('Location:'.$_SERVER['PHP_SELF']);
		//echo "<script>window.history.go(-1);</script>";
	}
	else{
		//3.2 When the user visits the page first time, simple login form will be displayed.
	}
?>
<html>
	<head>


		<script src="https://use.fontawesome.com/7bcf909bab.js"></script>


		<title>Login | Registration</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

        <link rel="stylesheet" href="styles.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style>
			html,body {
				margin:0;
				padding:0;
			}
			img{
				max-width: 100%;
				height: auto;
				width: auto\9; /* ie8 */
			}
			a{
				text-decoration:none;
			}
			ul {
				display:flex;
				list-style-type: none;
				margin: 0;
				padding: 10;
				background-color: #231f20;
				overflow: hidden;
				float: left;
				padding-bottom:10;
			}
			#ul2{
				display:flex;
				padding-left: 0;
				padding-right: 80px;
				float: right;
				overflow: hidden;
				!max-width: 330px;
			}
			#mlist{
				display:flex;
				float: center;
				padding-top: 12;
				padding-left: 10px;
			}
			li{
				float: center;
			}
			li a {
				display: block;
				color: #c0bfbf;
				text-align: center;
				padding: 5px 14px;
				text-decoration: none;
				font-family: Impact, Charcoal, sans-serif;
				font-size: 21px;
			}
			li a:hover {
				color: white;

			}
			ul li:hover ul{
				display: block;
			}
			ul ul{
				display: none;
				position: absolute;
				background-color: #231f20;

			}
			ul ul li {
				display: inline;
			}
			#logolist{
				padding-left:12%;
				padding-right:0%;
			}
			#nav{
				position: fixed;
				width: 100%;
				top: 0;
				background-color: #231f20;
				z-index: 999;
			}
			#searchinput{
				font-family: verdana;
				font-size: 12px;
				background-color: #231f20;
				border-bottom: 2px solid #1F9CBB;
				border-top: 2px solid #1F9CBB;
				border-left: 2px solid #1F9CBB;
				border-right: 2px solid #1F9CBB;
				height: 30px;
				width: 400px;
				padding-top: 0;
				padding-bottom:0;
				!padding-right: px;
				margin 0 20px 0 0;
				color: #1F9CBB;
			}

			#about{
				padding-top: 120px;
				padding-left: 70px;
				padding-right: 70px;
				max-width: 100%;
				padding-bottom:120px;
			}
			#title{
				!margin: 20px;
				padding-left: 25px;
				padding-right: 30px;
				font-family: verdana;
				font-size: 20px;
				color: #1F1F1F;
			}

			#detail{
				padding-top: 10px;
				padding-left: 25px;
				padding-right: 30px;
				!margin: 20px;
				font-family: verdana;
				font-size: 15px;
				color: #626262 ;

			}

			#footer{
				!width: 100%;
				!height: 100%;
			}
			#foot{
			background-color: #231f20;
			padding-left:100px;
			padding-top:70px;
			padding-bottom:79px;
			!height: 70%
			!width: 0;
			}
			#flogo{
				padding-top: 0px;
			}
			#fdetail{
				display: flex;
				!padding-left: 80px;
				!padding-right:80px;

			}
			#fitem{
				padding-top: 20px;
				display: inline;
				margin: 5px;
				padding-right: 105px;
			}
			#fitem h3{
				font-family: verdana;
				font-size: 13px;
				color: #1F9CBB;
			}
			#fitem a{
				font-family: verdana;
				font-size: 12px;
				color: white
			}
			#fitem p{
				margin: 2px;
			}
			#fitem i{
				font-size: 15px;
				color: #1F9CBB;
				padding-bottom:10px;
				padding-right: 5px;
			}
			#faline i{
				!font-size: 15px;
				!color: #1F9CBB;
				!padding-bottom:10px;
				padding-right: 20px;
			}
			#email{
				font-family: verdana;
				font-size: 15px;
				background-color: #231f20;
				border-bottom: 2px solid #1F9CBB;
				border-top: none;
				border-left: none;
				border-right: none;
				height: 30px;
				width: 150px;
				color: #1F9CBB;
			}
			#submit{
				font-family: verdana;
				font-size: 13px;
				background-color:#1F9CBB;
				border-bottom: none;
				border-top: none;
				border-left: none;
				border-right: none;
				height: 30px;
				width: 120px;
				color: #0A0A0A;
			}
			#fdetail2{
				display: flex;
				!padding-left: 80px;
				!padding-right:80px;

			}
			#fitem2{
				padding-top: 20px;
				display: inline;
				margin: 5px;
				padding-right: 90px;
			}
			#fitem2 h3{
				font-family: verdana;
				font-size: 13px;
				color: #1F9CBB;
			}
			#fitem2 p{
				font-family: verdana;
				font-size: 12px;
				color: white;
				!margin: 2px;
			}
		</style>



	</head>

	<body height="100%" width="100%">
		<section>
		<header>
			<nav id = "nav">
					<div>
						<ul>
							<li id="logolist"><a href="home.php">
							<img id = "logo" src="img/logo2.png" vspace = "0" hspace = "0" height="45" width="130" >
							</a></li>
						</ul>
					</div>
					<div class="menu">
					<ul id="ul1">
						<li id="mlist"><a href="home.php">HOME</a></li>
							<li id="mlist"><a href="aboutus.php">ABOUT</a></li>
							<li id="mlist"><a href="howitworks.php">HOW IT WORKS</a></li>
							<li id="mlist" class= "dropdown"><a href="shop.php">SHOP</a>
								<ul id = "drop-menu">
								<li><a href="hteepg1.php">Half Sleeve T-Shirt</a></li>
								<li><a href="fteepg1.php">Full Sleeve T-Shirt</a></li>
								<li><a href="pteepg1.php">Polo T-Shirt</a></li>
								</ul>
							</li>
						<!--<li id="mlist"><a href="men.php">MEN</a></li>
						<li id="mlist"><a href="women.php">WOMEN</a></li>
						<li id="mlist"><a href="acces.php">ACCESSORIES</a></li>-->
					</ul>
					<ul id= "ul2">
						<li id="mlist">
							<form id="searchContainer">
									<input id= "searchinput" placeholder=" Joggers, Superman T-Shirt, iPhone 6 Covers etc." type="text">
									<label for="searchInput" title="Search" rel="tooltip"></label>
							</form>
						</li>

						<?php
								if(isset($_SESSION['username'])){
									echo '<li id="mlist"><a href="logout.php">Hi! '.$_SESSION['username'].'</a>
											<ul id = "drop-menu">
												<li><a href="myaccount.php">My Account</a></li>
												<li><a href="logout.php">Logout</a></li>
											</ul>
										</li>';
								}
								else
								{
									echo '<li id="mlist"><a href="login.php">LOGIN</a></li>';
								}
						?>
						<!--<li id="mlist"><a href="">LOGIN</a></li>-->
						<li id="mlist"><a href="#cart.php">
						<img id = "cart" src="img/cart.png" vspace = "0" height="22" width="25"></a>
						</li>
					</ul>
					</div>
			</nav>
		</header>
	</section>
	<section>
		<div id="about">
			<div id="title">
				<h3>Login</h3>
			</div>
			<div id="detail">
			<form class="form-signin" method="POST">
				<h2 class="form-signin-heading">Please Login</h2>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">@</span>
					<input type="text" name="username" class="form-control" placeholder="Username" required>
				</div>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				<a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
			</form>
			</div>
		</div>
		<div id="footer">
			<footer id="foot">
				<div id="flogo">
					<a href="home.php"><img src="img/logo2.png" height="15%" width="15%"></a>
				</div>
				<div id="fdetail">
					<div id="fitem">
							<h3>CUSTOMER SERVICES</h3>
							<p><a href="#contact.php">Contact</a></p>
							<p><a href="#track.php">Track Order</a></p>
							<p><a href="#acces.php">Return Order</a></p>
							<p><a href="#women.php">Cancel Order</a></p>
							<p><a href="#acces.php">FAQ</a></p>
					</div>
					<div id="fitem">
							<h3>COMPANY</h3>
							<p><a href="aboutus.php">About Us</a></p>
							<p><a href="">Careers</a></p>
							<p><a href="">Terms and Conditions</a></p>
							<p><a href="">Privacy Policy</a></p>
							<p><a href="">Blog</a></p>
					</div>
					<div id="fitem">
							<h3>CONNECT WITH US</h3>
							<a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i> 2.3 M People Like This</a><br>
							<a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i> 120K Followers</a><br>
							<div id ="faline">
								<a href="https://www.twitter.com"><i  class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://www.googleplus.com"><i  class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="https://www.pinterest.com"><i  class="fa fa-pinterest" aria-hidden="true"></i></a>
								<a href="https://www.apple.com"><i  class="fa fa-apple" aria-hidden="true"></i></a>
								<a href="https://www.android.com"><i  class="fa fa-android" aria-hidden="true"></i></a>
							</div>
					</div>
					<div id="fitem">
							<h3>KEEP UP TO DATE</h3>
							<form> <input id="email" type="email" placeholder="Enter Email Id"> <input id="submit" type="submit" value="SUBSCRIBE"> </form>
					</div>
				</div>
				<br>
				<div id="fdetail2">
					<div id="fitem2">
						<p>15 Days return policy</p>
						<p>Cash on delivery</p>
						<p>Free Shipping above &nbsp &#8377 500</p>
					</div>
					<div id="fitem2">
						<h3>Download The App</h3>
						<a href="https://play.google.com"><img src="img/android.png" height="35%" width="35%"></a>
						<a href="https://appstore.com"><img src="img/ios.png" height="35%" width="35%"></a>
					</div>
					<div id="fitem2">
						<h3>100% SECURE PAYMENT</h3>
						<img src="img/payment.png" height="90%" width="90%">
					</div>
				</div>
		<footer>

		</div>
	</section>
	</body>
</html>
