	<title>CodeHive: Mentor</title>
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
	footer ul li a{
		color: orange;
	}
	footer ul li a:hover{
		color: orange;
		text-decoration: underline;
	}
	footer article div span a{
		color: orange;
	}
	footer article div span a:hover{
		color: orange;
		text-decoration: underline;
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
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
		 the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
		 of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
		 but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised 
		 in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
		 with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dictum placerat enim in porttitor. 
		 Vestibulum aliquam metus et vestibulum imperdiet. Etiam malesuada risus eu mi mollis, sit amet
		 iaculis quam finibus. Etiam fermentum nunc id magna posuere consectetur. Cras varius in erat 
		 eget aliquet. Phasellus ut aliquet enim. Donec ac ex quis risus finibus lacinia. Quisque elementum 
		 varius ex, at scelerisque est rhoncus at. In hac habitasse platea dictumst. Pellentesque vestibulum 
		 nulla quis porta condimentum.</p>
	</section>
</body> 
</html>