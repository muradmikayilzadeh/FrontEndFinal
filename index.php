<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="assets/vendor/bootstrap.css">
		<script src="assets/vendor/jquery.js"></script>
		<link rel="stylesheet" href="assets/vendor/fonts/line-icons.woff">
		<link rel="stylesheet" href="assets/vendor/css/font-awesome.css">
		<link rel="stylesheet" href="assets/vendor/css/font-lineicons.css">
		<script src="assets/vendor/bootstrap.js"></script>
		<link rel="stylesheet" href="assets/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<?php 
		include "admin/config.php";
	 ?>
		<div class="container-fluid">
			<div class="row">
				<section id="menu" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="row">
						<nav class="navbar navbar-default FirstNav">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed hidden-md hidden-lg" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<div class="MyLogo"></div>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="MyActive"><a href="#home">home <span class="sr-only">(current)</span></a></li>
									<li class="about"><a href="#forEveryStartup">about</a></li>
									<li class="features"><a href="#comp">features</a></li>
									<li class="prices"><a href="#price">prices</a></li>
									<li class="feedback"><a href="#feedback">feedback</a></li>
									<li class="team"><a href="#team">team</a></li>
									<li class="contact"><a href="#startup">contact</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle Extra"  role="button" aria-haspopup="true" aria-expanded="false">extra <span class="caret"></span></a>
										<ul class="dropdown-menu FirstUl">
											<!-- HOMEPAGES DROPDOWN -->
											<li class="dropdown HOME">
												<a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">homepages <span class="caret"></span></a>
												<ul class="dropdown-menu SecondUL">
													<li><a href="#">default</a></li>
													<li><a href="#">clikcthrough</a></li>
													<li><a href="#">colored</a></li>
													<li><a href="#">fast registration</a></li>
													<li><a href="#">promo</a></li>
													<li><a href="#">waiting list</a></li>
													<li><a href="#">video background</a></li>
													<li><a href="#">youtube embed</a></li>
													<li><a href="#">vimeo embed</a></li>
												</ul>
											</li>
											<!-- BLOG DROPDOWN -->
											<li class="dropdown BLOG">
												<a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">blog <span class="caret"></span></a>
												<ul class="dropdown-menu ThirdUl">
													<li><a href="#">list</a></li>
													<li><a href="#">post</a></li>
												</ul>
											</li>
											<!-- ECOMMERCE -->
											<li class="dropdown ECOMMERCE">
												<a href="#" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">ecommerge<span class="caret"></span></a>
												<ul class="dropdown-menu FourthUl">
													<li><a href="#">product grid</a></li>
													<li><a href="#">product list</a></li>
													<li><a href="#">product page</a></li>
													<li><a href="#">cart checkout</a></li>
													<li><a href="#">paymet confirmation</a></li>
												</ul>
											</li>
											<li><a href="#">registration</a></li>
											<li><a href="#">forms</a></li>
											<li><a href="#">shortcodes</a></li>
										</ul>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#">login</a></li>
									<li class="lastLi"><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
					</nav>
					</div>
				</section>
				<section id="header" class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center">
					<div class="row">
						<h1><?php $sql="SELECT value FROM header WHERE id=1";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
						<h5><?php $sql="SELECT value FROM header WHERE id=2";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h5>
						<button>
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						GET STARTED
						</button>
						<button>
						TAKE TOUR
						</button>
					</div>
				</section>
				<section id="logo" class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center">
					<div class="row">
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
					</div>
				</section>
				<section id="forEveryStartup" class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center">
					<div class="container">
						<div class="row col-md-12">
							<div class="tab firstTab active">FIRST TAB</div>
							<div class="tab secondTab">SECOND TAB</div>
							<div class="tab thirdTab">THIRD TAB</div>
						</div>
						<div class="row second">
							<div class="img col-md-6 col-xs-12 col-sm-12">
								<img src="assets/images/people.png" class="img img-responsive">
							</div>
							<div class="text col-md-6 col-xs-12 col-sm-12 text-center">
								<h1><?php $sql="SELECT value FROM header WHERE id=3";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
								<p><?php $sql="SELECT value FROM header WHERE id=4";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p><br>
								<p><?php $sql="SELECT value FROM header WHERE id=5";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
								<button>GET TEMPLATE</button>
								<button>SEE ELEMENTS</button>
							</div>
						</div>
						<div class="row third text-center">
							<h1 class="text-center">3 EASY STEPS</h1>
							<p class="text-center thirdP">Lorem ipsum dolor sit atmet sit dolor greand fdanrh s <br> dfs sit atmet sit dolor greand fdanrh sdfs</p>
								<div class="col-md-4 text-center">
									<i class="icon icon-shopping-04"></i>
									<p><b>PLACE ORDER</b></p>
									<p>Sit amet, consectetur adipiscing elit. <br> In hac divisione rem ipsam prorsus probo <br>elegantiam desidero.</p>
								</div>
								<div class="col-md-4 text-center">
									<i class="icon icon-seo-icons-03"></i>
									<p><b>OUR SYSTEM RUNS</b></p>
									<p>Sit amet, consectetur adipiscing elit. <br> In hac divisione rem ipsam prorsus probo <br>elegantiam desidero.</p>
								</div>
								<div class="col-md-4 text-center">
									<i class="icon icon-seo-icons-05"></i>
									<p><b>RECEIVE REPORT</b></p>
									<p>Sit amet, consectetur adipiscing elit. <br> In hac divisione rem ipsam prorsus probo <br>elegantiam desidero.</p>
								</div>
						</div>
					</div>
				</section>
				<section id="technology" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<div class="text col-md-6 col-xs-12 col-sm-12">
							<h1><?php $sql="SELECT value FROM header WHERE id=6";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></span></h1>
							<p><?php $sql="SELECT value FROM header WHERE id=7";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p><br>
							<p><?php $sql="SELECT value FROM header WHERE id=8";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						</div>
						<img src="assets/images/comp.png" class="col-md-6 col-xs-12 col-sm-12">
					</div>
				</section>
				<section id="helmet" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<img src="assets/images/helmet.png" class="col-md-6 col-xs-12 col-sm-12">
						<div class="text col-md-6 col-xs-12 col-sm-12">
							<h1 class="text-right"><?php $sql="SELECT value FROM header WHERE id=9";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
							<p class="text-right"><?php $sql="SELECT value FROM header WHERE id=10";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p><br>
							<p class="text-right"><?php $sql="SELECT value FROM header WHERE id=11";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						</div>
					</div>
				</section>
				<section id="comp" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<ul class="col-md-4">
							<li class="first active">
								<p><?php $sql="SELECT value FROM header WHERE id=12";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
								<p><?php $sql="SELECT value FROM header WHERE id=13";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							</li>
							<li class="second">
								<p><?php $sql="SELECT value FROM header WHERE id=14";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
								<p><?php $sql="SELECT value FROM header WHERE id=15";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							</li>
							<li class="third">
								<p><?php $sql="SELECT value FROM header WHERE id=16";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
								<p><?php $sql="SELECT value FROM header WHERE id=17";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							</li>
						</ul>
						<img src="assets/images/mac.png" class="col-md-8 col-xs-12 col-sm-12 mac">
						<img src="assets/images/tablet.png" class="col-md-8 col-xs-12 col-sm-12 tablet">
						<img src="assets/images/pc.png" class="col-md-8 col-xs-12 col-sm-12 pc">
					</div>
				</section>
				<section id="feature" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<div class="row setir first">
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-office-44"></i>
									<h4>FEATURE 1</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-shopping-18"></i>
									<h4>FEATURE 2</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-seo-icons-27"></i>
									<h4>FEATURE 3</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-office-24"></i>
									<h4>FEATURE 4</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
						</div>
						<div class="row setir second">
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-graphic-design-13"></i>
									<h4>FEATURE 5</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-arrows-37"></i>
									<h4>FEATURE 6</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-badges-votes-14 "></i>
									<h4>FEATURE 7</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
							<div class="feature col-md-3 col-xs-12 col-sm-12">
								<div class="row">
									<i class="icon icon-badges-votes-16"></i>
									<h4>FEATURE 8</h4>
									<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="updates" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<div class="text col-md-5 col-xs-12 col-sm-12">
							<div class="row text-center">
								<h1><?php $sql="SELECT value FROM header WHERE id=18";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
								<p><?php $sql="SELECT value FROM header WHERE id=19";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							</div>
						</div>
						<div class="inputs col-md-7 col-xs-12 col-sm-12">
							<div class="row">
								<input type="text" placeholder="Your name">
								<input type="text" class="email" placeholder="your@email.com">
								<button>SUBSCRIBE</button>
							</div>
						</div>
					</div>
				</section>
				<section id="price" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<h1 class="text-center"><?php $sql="SELECT value FROM header WHERE id=20";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
						<p class="text-center"><?php $sql="SELECT value FROM header WHERE id=21";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						
						<div class="price col-md-4 col-xs-12 col-sm-12">
							<div class="row">
								<div class="heading col-md-12 col-sm-12 col-xs-12"><?php $sql="SELECT value FROM header WHERE id=22";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></div>
								<div class="text-center cost">
									<span class="currency">$</span>
									<?php $sql="SELECT value FROM header WHERE id=23";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?>
									<span class="period"><?php $sql="SELECT value FROM header WHERE id=24";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></span>
								</div>
								<div class="details col-md-12 text-center">
									<div class="row">
										<ul>
											<li>Free Domain</li>
											<li><b>Unlimited</b> Websites</li>
											<li><b>Unlimited</b> Bandwidth</li>
											<li><b>Unlimited</b> Disk Space</li>
										</ul>
										<button class="grayBorder">GET STARTED</button>
									</div>
								</div>
							</div>
						</div>
						<div class="price col-md-4 col-xs-12 col-sm-12">
							<div class="row willBeBlue">
								<div class="heading col-md-12 col-sm-12 col-xs-12"><?php $sql="SELECT value FROM header WHERE id=25";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></div>
								<div class="blue text-center cost">
									<span class="currency">$</span>
									<?php $sql="SELECT value FROM header WHERE id=26";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?>
									<span class="period"><?php $sql="SELECT value FROM header WHERE id=27";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></span>
								</div>
								<div class="details col-md-12 text-center">
									<div class="row">
										<ul>
											<li>Free Domain</li>
											<li><b>Unlimited</b> Websites</li>
											<li><b>Unlimited</b> Bandwidth</li>
											<li><b>Unlimited</b> Disk Space</li>
										</ul>
										<button class="blueBorder">GET STARTED</button>
									</div>
								</div>
							</div>
						</div>
						<div class="price col-md-4 col-xs-12 col-sm-12">
							<div class="row willBeBlue">
								<div class="heading col-md-12 col-sm-12 col-xs-12"><?php $sql="SELECT value FROM header WHERE id=28";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></div>
								<div class="blue text-center cost">
									<span class="currency">$</span>
									<?php $sql="SELECT value FROM header WHERE id=29";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?>
									<span class="period"><?php $sql="SELECT value FROM header WHERE id=30";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></span>
								</div>
								<div class="details col-md-12 text-center">
									<div class="row">
										<ul>
											<li>Free Domain</li>
											<li><b>Unlimited</b> Websites</li>
											<li><b>Unlimited</b> Bandwidth</li>
											<li><b>Unlimited</b> Disk Space</li>
										</ul>
										<button class="blueBorder">GET STARTED</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="award" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container text-center">
						<h1><?php $sql="SELECT value FROM header WHERE id=31";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
						<p><?php $sql="SELECT value FROM header WHERE id=32";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
						<img src="assets/images/logo1.png">
					</div>
				</section>
				<section id="feedback" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container text-center">
						<div class="transparent">
							<h1><?php $sql="SELECT value FROM header WHERE id=33";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
							<p class="text1"><?php $sql="SELECT value FROM header WHERE id=34";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							<p class="text2"><?php $sql="SELECT value FROM header WHERE id=35";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							<p class="text3"><?php $sql="SELECT value FROM header WHERE id=36";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>

						</div>
						
					</div>
				</section>
				<section id="clients" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container text-center">
						<div class="clients">
							<div class="profile col-md-4 col-sm-12 col-xs-12 first">
								<div class="row">
									<img src="assets/images/profile-1.jpg" alt="">
									<p><b><span>AMY WARNER</span> <br> Investor at <span>Pear Inc.</span></b></p>
								</div>
							</div>
							<div class="profile col-md-4 col-sm-12 col-xs-12 second">
								<div class="row">
									<img src="assets/images/profile-2.jpg" alt="">
									<p><b><span>JOHN DOESOME</span> <br> Accountant at <span>Vell Inc.</span></b></p>
								</div>
							</div>
							<div class="profile col-md-4 col-sm-12 col-xs-12 third">
								<div class="row">
									<img src="assets/images/profile-1.jpg" alt="">
									<p><b><span>PETER MOOSOME</span> <br> VP Marketing at <span>Footbook</span></b></p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="team" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container text-center">
						<h1><?php $sql="SELECT value FROM header WHERE id=37";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h1>
						<p class="text"><?php $sql="SELECT value FROM header WHERE id=38";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p><br><br>
						<p class="text"><?php $sql="SELECT value FROM header WHERE id=39";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						<div class="row members col-md-12">
							<div class="col-md-3">
								<div class="row">
									<img src="assets/images/mike.jpg" alt="">
									<div class="text2 text-center">
										<p><?php $sql="SELECT value FROM header WHERE id=40";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?>
										<i class="fa fa-envelope"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-facebook"></i>
										<i class="fa fa-skype"></i>
										<i class="fa fa-linkedin"></i>
									</div>
									<p class="name"><b>MIKE BOLDER</b></p>
									<p class="profession">Developer</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<img src="assets/images/second.jpg" alt="">
									<div class="text2 text-center">
										<p><?php $sql="SELECT value FROM header WHERE id=41";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?>
										<i class="fa fa-skype"></i>
									</div>
									<p class="name"><b>MIKE BOLDER</b></p>
									<p class="profession">Developer</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<img src="assets/images/third.jpg" alt="">
									<div class="text2 text-center special">
										<p><?php $sql="SELECT value FROM header WHERE id=42";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
										<i class="fa fa-envelope"></i>
										<i class="fa fa-twitter"></i>
									</div>
									<p class="name"><b>MIKE BOLDER</b></p>
									<p class="profession">Developer</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<img src="assets/images/fourth.jpg" alt="">
									<div class="text2 text-center special2">
										<p><?php $sql="SELECT value FROM header WHERE id=43";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
										<i class="fa fa-envelope"></i>
										<i class="fa fa-twitter"></i>
										<i class="fa fa-facebook"></i>
										<i class="fa fa-skype"></i>
									</div>
									<p class="name"><b>MIKE BOLDER</b></p>
									<p class="profession">Developer</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="startup" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<i class="icon icon-seo-icons-24 pull-left col-sm-12 col-xs-12 col-md-1" aria-hidden="true"></i>
						<h2><?php $sql="SELECT value FROM header WHERE id=44";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></h2>
						<p><?php $sql="SELECT value FROM header WHERE id=45";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
						<button>GET THIS TEMPLATE</button>
					</div>
				</section>
				<section id="footer" class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
					<div class="container">
						<div class="col-md-5 footerDiv">
							<div class="row">
								<img src="assets/images/logo-white.png" alt="">
								<p><?php $sql="SELECT value FROM header WHERE id=46";$query=mysqli_query($conn,$sql);$row=mysqli_fetch_assoc($query); echo $row['value']?></p>
							</div>
						</div>
						<div class="col-md-4 network footerDiv">
							<div class="row text-center">
								<h4>SOCIAL NETWORK</h4>
								<i class="icon icon-socialmedia-08"></i>
								<i class="icon icon-socialmedia-09"></i>
								<i class="icon icon-socialmedia-16"></i>
								<i class="icon icon-socialmedia-04"></i><br class="hidden-xs">
								<i class="icon icon-socialmedia-07"></i>
								<i class="icon icon-socialmedia-16"></i>
								<i class="icon icon-socialmedia-09"></i>
								<i class="icon icon-socialmedia-08"></i>
							</div>
						</div>
						<div class="col-md-3 contact footerDiv">
							<div class="row text-left">
								<h4 class="text-center">OUR CONTACTS</h4>
								<i class="icon icon-chat-messages-14" aria-hidden="true"></i>
								<span>info@startup.ly</span><br>
								<i class="icon icon-seo-icons-34" aria-hidden="true"></i>
								<span>2901 Marmora road, Glassgow, </span>
								<span class="addressSecond">Seattle, WA 98122-1090</span><br>
								<i class="icon icon-seo-icons-17" aria-hidden="true"></i>
								<span>1 - 234-456-7980</span>
							</div>
						</div>
					</div>
					<h5 class="text-center">startup.ly 2014. All rights reserved.</h5>
				</section>
			</div>
		</div>
	</body>
</html>
<script>
	$(document).ready(function($) {
	$(document).on('click', 'a', function(event){
	event.preventDefault();
	$('html, body').animate({
	scrollTop: $( $.attr(this, 'href') ).offset().top
},500);
});
});
</script>
<script src="assets/js/script.js"></script>