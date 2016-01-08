<title>CodeHive: Welcome to The Hive</title>
<style type="text/css">
body{
	margin: 0 auto;
	clear: both;
	font-family: 'Open Sans', 'sans-serif';
}
header{
	min-height: 55px;
	background-color: #383838;
}
img{
	margin-left: 30px;
}
#navigation{
	float:right;
	margin-right: 20px;
}
nav ul{
	list-style-type: none;
}
nav ul li {
	display: inline;
	margin: 10px;
}
.top-btn{
	margin-top: 10px !important;
}
.body-sec{
	min-height:629px;
	margin: 0 auto;
}
.intro{
	background-image: url('<?php echo base_url();?>assets/images/background_1.jpg');
	background-repeat: no-repeat;
	background-position: center;
}
.intro-para{
	text-align: center;
}
.title{
	font-size: 40px;
	font-weight: bold;
	padding-top: 200px;
	color:  #383838;
}
.title-2{
	font-size: 30px;
	padding-top: 40px;
}
.phrase{
	color:  #383838;
	font-size: 20px;
}
.learn-btn{
	font-size: 18px;
	width: 200px;
}
.art-icon{
	border-radius: 60px;
	margin: 10px;
}
.services{
	border-bottom: 1px solid #3399CC;
	background-color: white; /*Change this to a light shade of gray @Arnold*/
	min-height: 450px !important;
	text-align: center;
}
.testimony{
	min-height: 450px !important;
	margin: 30px;
	text-align: center;
}
.testimonial{
	margin: 6px;
}
h2{
	color:#33CC00;
}
footer{
	min-height: 50px;
	background-color: #383838;
	clear: 
}
.links{
	margin-top: 20px;
}
footer article{
	padding-top: 20px;
	padding-bottom: 20px;
}
footer article ul{
	margin:0 auto;
	list-style-type: none;
}
footer article h4{
	color: white;
}
</style>
</head>
<body>
	<!-- Login Modal-->
	<div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	      <div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	            <h3 class="modal-title">Login</h3>
	            </div>
	            <div class="modal-body">
	            <form method="post" action="user/login">
	            	<div class="form-group">
	            		<label for="username">Username</label>
	            		<input class="form-control" placeholder="Username" name="username" required/>
	            	</div>
	            	<div class="form-group">
	            		<label for="password">Password</label>
	            		<input class="form-control" placeholder="Password" name="password" type="password" required/>
	            	</div>
	            	<div class="modal-footer">
	            		<input type="submit" value="Submit" class="btn btn-primary btn-lg"/>
		            </div>
	            </form>
	        </div>
	      </div>           
	    </div>
    </div>
    <!-- End Login Modal-->
    <!-- Registration Modal -->
    <div class="modal fade" id="registrationModal" tabindex="2" role="dialog" aria-labelledby="registrationLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Sign Up</h3>
            </div>
            <div class="modal-body">
            <form method="post" action="user/sign_up">
            	<div class="form-group">
            		<input class="form-control" placeholder="First Name" name="fistname" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Last Name" name="lastname" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Email Address" name="emailaddress" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Password" name="password" type="password" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Confirm Password" name="confirmpassword" type="password" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Phone Number" name="phonenumber" required/>
            	</div>
            	<div class="form-group">
            		<input class="form-control" placeholder="Phone Number" name="dateofbrith"type="date" required/>
            	</div>
            	<div class="modal-footer">
            		<input type="submit" class="btn btn-primary btn-lg" value="Submit"/>
	            </div>
            </form>
        </div>
      </div>           
    </div>
    </div>
    <!-- End of Registration Modal-->
	<header>
		<a href="#"><img src="<?php echo base_url()?>assets/images/codehive_logo.png" height="50" width="50"></a>
		<nav id="navigation" class="navbar">
			<ul>
				<li><a data-toggle="modal" href="#loginModal" class="top-btn btn btn-primary">Login</a></li>
				<li><a data-toggle="modal" href="#registrationModal" class="top-btn btn btn-primary">Sign Up</a></li>
			</ul>
		</nav>
	</header>
	<section class="intro body-sec">
		<article class="intro-para">
			<p class="title">Welcome to CodeHive</p>
			<p class="phrase">The <span style="color:#3399CC;">learning</span>, <span style="color:orange">mentorship</span> and <span style="color:#33CC00;">outsourcing</span> network for tech enthusiasts</p>
			<a href="<?php echo base_url()?>home/learn_more" class="learn-btn btn btn-warning">Learn More</a>
		</article>
	</section>
	<section id="services" class="services body-sec">
		<article class="mentorship" style="width:33%; height:450px; float:left; border-right:1px solid #3399cc;">
			<p class="title-2" style="color:#3399CC; ">Learn</p>
			<img class="art-icon" src="<?php echo base_url()?>assets/images/background_1.jpg" width="120px" height="120px"/>
			<p style="margin:20px;">Run through the user profiles of our highly talented network and hit them up and learn
			different stuff from them.</p>
			<a href="<?php echo base_url();?>home/learn" class="btn btn-primary">More..</a>
		</article>
		<article class="learn" style="width:34%; height:450px; float:left; border-right:1px solid orange;">
			<p class="title-2" style="color:orange">Mentor</p>
			<img class="art-icon" src="<?php echo base_url()?>assets/images/background_1.jpg" width="120px" height="120px"/>
			<p style="margin:20px;">Sign up as a mentor or to be mentored and help each other through the journey of 
			learning and using new technologies</p>
			<a href="<?php echo base_url(); ?>home/mentor" class="btn btn-warning">More...</a>
		</article>
		<article class="outsource" style="width:33%; height:450px; float:left;">
			<p class="title-2" style="color:#33CC00;">Outsource</p>
			<img class="art-icon" src="<?php echo base_url()?>assets/images/background_1.jpg" width="120px" height="120px"/>
			<p style="margin:20px;">Got a project? Sign up and get to view the different skills of our wide array
			of users and 'buzz' those you think might deliver.</p>
			<a href="<?php echo base_url(); ?>home/outsource" class="btn btn-success">More...</a>
		</article>
	</section>
	<section class="testimony body-sec">
		<h3 style="text-align:left !important;">What are people saying about CodeHive...</h3>
		<article id="testimonial1" class="testimonial" style="width:24%; float:left;">
			<img class="art-icon" src="<?php echo base_url()?>assets/images/default_user.jpg" width="120px" height="120px">
			<h4><a href="#">@user1</a></h4>
			<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
			industry's standard dummy text ever since the 1500s, when an unknown printer took
			 a galley of type and scrambled it to make a type specimen book</p>
		</article>
		<article id="testimonial1" class="testimonial" style="width:24%; float:left;">
			<img class="art-icon" src="<?php echo base_url()?>assets/images/default_user.jpg" width="120px" height="120px">
			<h4><a href="#">@user2</a></h4>
			<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
			industry's standard dummy text ever since the 1500s, when an unknown printer took
			 a galley of type and scrambled it to make a type specimen book</p>
		</article>
		<article id="testimonial1" class="testimonial" style="width:24%; float:left;">
			<img class="art-icon" src="<?php echo base_url()?>assets/images/default_user.jpg" width="120px" height="120px">
			<h4><a href="#">@user3</a></h4>
			<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
			industry's standard dummy text ever since the 1500s, when an unknown printer took
			 a galley of type and scrambled it to make a type specimen book</p>
		</article>
		<article id="testimonial1" class="testimonial" style="width:24%; float:left;">
			<img class="art-icon" src="<?php echo base_url()?>assets/images/default_user.jpg" width="120px" height="120px">
			<h4><a href="#">@user4</a></h4>
			<p style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
			industry's standard dummy text ever since the 1500s, when an unknown printer took
			 a galley of type and scrambled it to make a type specimen book</p>
		</article>
	</section>
	<!-- <footer>
		<section style="">
			<article class="links">
				<ul>
				<h4>More Links</h4>
					<li><a href="#">Hall of Fame</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">How it Works</a></li>
				</ul>
			</article>
		</section>
	</footer> -->
	<script type="text/javascript">
	</script>
</body>
</html>