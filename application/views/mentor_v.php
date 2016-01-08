	<title>CodeHive: Learn</title>
	<style type="text/css">
	#body-sec{
		padding-top: 40px;
		height:600px;
		width:900px;
		margin: 0 auto;
	}
	#body-sec p{
		font-size: 20px;
		padding-top: 20px;
	}
	h1{
		color:orange;
		font-size: 40px;
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
	            		<input type="submit" value="Submit" class="btn btn-warning btn-lg"/>
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
            		<input type="submit" class="btn btn-warning btn-lg" value="Submit"/>
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
				<li><a data-toggle="modal" href="#loginModal" class="top-btn btn btn-warning">Login</a></li>
				<li><a data-toggle="modal" href="#registrationModal" class="top-btn btn btn-warning">Sign Up</a></li>
			</ul>
		</nav>
	</header>
	<section id="body-sec">
		<h1>Mentor</h1>
	</section>
</body> 
</html>