<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>TechDeira - Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/preview.css" rel="stylesheet" />
<link href="css/datepicker.css" rel="stylesheet" />
<link href="../assets/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet" />
<script src="js/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300'
	rel='stylesheet' type='text/css'>
<style type="text/css">
.social-icons div {
	display: inline;
}

#customBtn {
	display: inline-block;
	width: auto;
	border-radius: 5px;
	color: #dd4b39;
	white-space: nowrap;
}

#customBtn:hover {
	color: #e74b37;
	cursor: pointer;
	cursor: hand;
}

span.label {
	font-weight: bold;
}

span.icon {
	background: url('/+/images/branding/btn_red_32.png') transparent 5px 50%
		no-repeat;
	display: inline-block;
	vertical-align: middle;
	width: 35px;
	height: 35px;
	border-right: #bb3f30 1px solid;
}

span.buttonText {
	display: inline-block;
	vertical-align: middle;
	padding-left: 35px;
	padding-right: 35px;
	font-size: 14px;
	font-weight: bold;
	/* Use the Roboto font that is loaded in the <head> */
	font-family: 'Roboto', arial, sans-serif;
}
</style>
</head>
<body class="eternity-form" scroll="no">

	<section class="colorBg1 colorBg" id="login" data-panel="first">

		<div class=" container">

			<div class="login-form-section">
				<div class="login-content " data-animation="bounceIn">
                    <?php if(isset($_GET['confirm']) && $_GET['confirm']=='success') { ?><div
						class="alert alert-success">
						<strong>SUCCESS: </strong> Email Confirmation Successful
					</div> <?php } ?>
						  <!-- Edited by Ali Sajjad Hosaini -->
					<?php if(isset($_GET['check_user']) && $_GET['check_user']=='alreadyexists') { ?><div
						class="alert alert-danger">
						<strong>FAILURE: </strong> You are already Registered.
					</div> <?php } ?>
					<?php if(isset($_GET['check_user']) && $_GET['check_user']=='no_confirm') { ?><div
						class="alert alert-danger">
						<strong>FAILURE: </strong> Please confirm your Email address.
					</div> <?php } ?>
                    <?php if(isset($_GET['register']) && $_GET['register']=='success') { ?><div
						class="alert alert-success">
						<strong>SUCCESS: </strong> Registered Successfully. <br> Please Check
						your email to complete registration.
					</div> <?php } ?>                    
                    <?php if(isset($_GET['register']) && $_GET['register']=='fail') { ?><div
						class="alert alert-danger">
						<strong>FAILURE: </strong> Error Occured
					</div> <?php } ?>
                    <?php if(isset($_GET['reset']) && $_GET['reset']=='success') { ?><div
						class="alert alert-success">
						<strong>SUCCESS: </strong> Password Reset Successful. <br>A new
						password has been sent to your email.
					</div> <?php } ?>
                    <?php if(isset($_GET['log_err']) && $_GET['log_err']=='true') { ?><div
						class="alert alert-danger">
						<strong>FAILED: </strong> Not Logged In <br>Wrong Email/Password
						combination<br> or check your role please.
					</div> <?php } ?>
                    <form id="loginForm" method="POST" action="../execute/login.php">

						<div class="section-title">
							<h3>Login</h3>
							<span style="position: relative; bottom: 32px;"
								class="pull-right"><a href="../index.php"><i
									class="icon-arrow-left"></i> &nbsp;Homepage</a></span>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-user icon-color"></i></span>
								<input type="text" required="required"
									class="form-control email" name="emailid"
									placeholder="Email Id" />
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-key icon-color"></i></span>
								<input type="password" required="required" class="form-control"
									name="password" placeholder="Password" />
							</div>
						</div>
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i class="icon-user-3 icon-color"></i></span>
								<select required="required" class="form-control" name="loginAs" required="required">
									<option value="" selected> Select Role</option>
									<option value="instructor"> Instructor</option>
									<option value="member"> Member</option>
									</select>
							</div>
						</div>
						<div class="login-form-action clearfix">
							<button type="submit" class="btn btn-success btn-block green-btn">
								Login &nbsp; <i class="icon-chevron-right"></i>
							</button>
							<!--  <br>Or Sign-in with: &nbsp; <span class="pull-right social-icons"><div
									id="gSignInWrapper">
									<span class="label">Sign in with:</span>
									<div id="customBtn" class="customGPlusSignIn">
										<i class="icon-google-plus-sign icon-2x"></i>
									</div>
								</div></span> -->
						</div>
					</form>
				</div>
				<div class="login-form-links link1 " data-animation="fadeInLeftBig"
					data-animation-delay=".2s">
					<h4 class="blue">Don't have an Account?</h4>
					<span>Register as an </span> <a
						href="login.php?role=instructor#register" class="blue">Instructor</a>
					<span>or as a </span> <a href="login.php?role=member#register"
						class="blue">Member</a>
				</div>
				<div class="login-form-links link2 " data-animation="fadeInRightBig"
					data-animation-delay=".4s">
					<h4 class="green">Forget your Password?</h4>
					<span>Dont worry</span> <a href="login.php#forgot_password"
						class="green">Click Here</a> <span>to Get New One</span>
				</div>
			</div>



		</div>
	</section>
    <?php if(isset($_GET['role'])){ ?>
    <section class="colorBg2 colorBg" id="register" data-panel="second">
		<div class=" container">
			<br /> <br />
			<!-- #region Registration Form -->
			<div class="registration-form-section">
				<form id="registerForm"
					action="../execute/register.php?role=<?php echo $_GET['role'];?>"
					method="post">
					<div class="section-title reg-header " data-animation="fadeInDown">
						<h3>Get your Account Here</h3>

					</div>
					<div class="clearfix">
						<div class="col-sm-6 registration-left-section  "
							data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-user icon-color"></i></span> <input type="text"
											class="form-control name required" placeholder="FirstName"
											name="firstname" required="required" />
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-user icon-color"></i></span> <input type="text"
											class="form-control name required" name="lastname"
											placeholder="LastName" required="required" />
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-calendar icon-color"></i></span> <input
											type="text" name="dob" placeholder="Date of Birth"
											class="form-control dp1 required" readonly>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 registration-right-section "
							data-animation="fadeInUp">
							<div class="reg-content">
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-user icon-color"></i></span> <input type="email"
											class="form-control email" name="emailid"
											placeholder="Email Id" required="required" />
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-key icon-color"></i></span> <input
											type="password" class="form-control password" name="password"
											placeholder="Password" required="required" />
									</div>
								</div>
								<div class="textbox-wrap">
									<div class="input-group">
										<span class="input-group-addon "><i
											class="icon-key icon-color"></i></span> <input
											type="password" class="form-control password"
											name="cpassword" placeholder="Confirm-Password"
											required="required" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="registration-form-action clearfix "
						data-animation="fadeInUp" data-animation-delay=".15s">
						<a href="login.php#login"
							class="btn btn-success pull-left blue-btn "> <i
							class="icon-chevron-left"></i>&nbsp; &nbsp;Back To Login
						</a>
						<button type="submit" name="register"
							class="btn btn-success pull-right green-btn ">
							Register Now &nbsp; <i class="icon-chevron-right"></i>
						</button>

					</div>
				</form>
			</div>
		</div>
	</section>
	
	
	
	
    <?php } ?>
    <section class="colorBg3 colorBg" id="forgot_password"
		data-panel="third">
		<div class=" container">
			<br /> <br /> <br />

			<div class="forgot-password-section" data-animation="bounceInLeft">
				<div class="section-title">
					<h3>Forget Password</h3>
				</div>
				<div class="forgot-content">
					<form id="forgotForm" method="POST" action="../execute/forgot.php">
						<div class="textbox-wrap">
							<div class="input-group">
								<span class="input-group-addon "><i
									class="icon-envelope icon-color"></i></span> <input
									type="email" class="form-control email" name="emailid"
									placeholder="Email Id" required="required" />
									</div>
									</div>
									<div class="textbox-wrap">
									<div class="input-group">
									<span class="input-group-addon "><i
									class="icon-user icon-color"></i></span><select
									 class="form-control" name="role"
									required="required" >
									 <option value="" >Select Role</option>
									 <option value="instructor">Instructor</option>
									 <option value="member">Member</option>
									 </select>
							</div>
						</div>
						<div class="forget-form-action clearfix">
							<a class="btn btn-success pull-left blue-btn"
								href="login.php#login"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back
							</a>
							<button type="submit"
								class="btn btn-success pull-right green-btn">
								Submit &nbsp;&nbsp; <i class="icon-chevron-right"></i>
							</button>
						</div>
					</form>
				</div>
			</div>


		</div>
	</section>

	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/respond.src.js"></script>
	<script src="js/jquery.icheck.js"></script>
	<script src="js/placeholders.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.panelSnap.js"></script>
	<script src="../assets/js/library/bootstrap-datepicker.js"></script>
	<script
		src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript">
        $(function () {
            $("input").iCheck({
                checkboxClass: 'icheckbox_square-blue',
                increaseArea: '20%' // optional
            });
            $(".dark input").iCheck({
                checkboxClass: 'icheckbox_polaris',
                increaseArea: '20%' // optional
            });
            $(".form-control").focus(function () {
                $(this).closest(".textbox-wrap").addClass("focused");
            }).blur(function () {
                $(this).closest(".textbox-wrap").removeClass("focused");
            });

            //On Scroll Animations


            if ($(window).width() >= 968 && !Modernizr.touch && Modernizr.cssanimations) {

                $("body").addClass("scroll-animations-activated");
                $('[data-animation-delay]').each(function () {
                    var animationDelay = $(this).data("animation-delay");
                    $(this).css({
                        "-webkit-animation-delay": animationDelay,
                        "-moz-animation-delay": animationDelay,
                        "-o-animation-delay": animationDelay,
                        "-ms-animation-delay": animationDelay,
                        "animation-delay": animationDelay
                    });

                });
                $('[data-animation]').waypoint(function (direction) {
                    if (direction == "down") {
                        $(this).addClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: '90%'
                }).waypoint(function (direction) {
                    if (direction == "up") {
                        $(this).removeClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: $(window).height() + 1
                });
            }

            //End On Scroll Animations


            $(".main-nav a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                $(".main-nav a[href]").removeClass("active");
                $(this).addClass("active");
            });
			
            if ($(window).width() > 1000 && !Modernizr.touch) {
                var options = {
                    $menu: ".main-nav",
                    menuSelector: 'a',
                    panelSelector: 'section',
                    namespace: '.panelSnap',
                    onSnapStart: function () { },
                    onSnapFinish: function ($target) {
                        $target.find('input:first').focus();
                    },
                    directionThreshold: 50,
                    slideSpeed: 200
                };
                $('body').panelSnap(options);

            }

            $(".colorBg a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                return false;
            });
        		$('.dp1').datepicker({
        			  format: 'dd-MM-yyyy',
        			  startView: 2
        		});
           
        		var $validator = $("#registerForm").validate({
        			  rules: {
        			    emailid: {
        			      required: true,
        			      email: true,
        			      minlength: 8,
        			    },
        			    password:{
        					required: true,
        					minlength: 6,
        					maxlength:40
        				    },
        				    cpassword:{
        						required: true,
        						equalTo: ".password",
        					    },
        			    	    
        			  }
        			});
                var $validator = $("#loginForm").validate({
                      rules: {
                        emailid: {
                          required: true,
                          email: true,
                          minlength: 8,
                        },
                        password:{
                            required: true,
                            minlength: 6,
                            maxlength:40
                        },
                                
                      }
                });
                var $validator = $("#forgotForm").validate({
                      rules: {
                        emailid: {
                          required: true,
                          email: true,
                          minlength: 8,
                        },
                                
                      }
                });

        });
    </script>

	<script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();

  function render() {
    gapi.signin.render('customBtn', {
      //'callback': 'signinCallback',
      'clientid': '849998433321-45gc17nhjg49cakuoa6cvjqet0o1g47n.apps.googleusercontent.com',
      'cookiepolicy': 'single_host_origin',
      'requestvisibleactions': 'http://schemas.google.com/AddActivity',
      'scope': 'https://www.googleapis.com/auth/plus.login'
    });
  }
  </script>
</body>
</html>