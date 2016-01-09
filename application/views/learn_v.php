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
		color:#3399cc;
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
	            <form method="post" action="<?php echo base_url();?>user/login">
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
            <form method="post" action="<?php echo base_url();?>user/sign_up">
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
	<section id="body-sec">
		<h1>Learn</h1>
		<p>Here at CodeHive, we are a little bit obsessed with the universality of technology. Information Technology is a very unique 
		field. The technologies used in IT all over the world are shared; right from 
		programming languages, networking technologies, databases etc. E-Courseware and e-learning platforms 
		have greatly increased over the last few years and have greatly improved the skill levels of the tech 
		workforce all over the world. The awesome guys over at <a target="_blank" href="http://www.pluralsight.com">PluralSight</a>, <a target="_blank" href="
		http://www.lynda.com">Lynda</a>, <a target="_blank" href="http://www.cbtnuggets.com">CBTNuggets</a>, <a target="_blank" href="http://www.infiniteskills.com">InfiniteSkills</a>, <a target="_blank" href="http://www.udemy.com">Udemy</a> just to name a few
		have taken their time to make it easier for aspiring IT specialists to learn new technologies at a great 
		price.</p>
		<p>We want to take the learning a little step further. You may be working on a project and you are 
		having a hard time debugging a particular piece of code or maybe trying to learn a new technology. Post your
		portion of code to your hive and invite different professionals from different parts of the world to
		have a look at it and help you get back to the zone again.</p>
	</section>
</body>
</html>