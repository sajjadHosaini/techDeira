<?php 
include 'header.php';
?>
	<h1 style="margin-top:80px;">Become a Member</h1>
	<h5>. Membership at TechDeira provides multiple benefits to the technologies users and developers and the community as whole. </h5>
	<div class="well blue">
                            <div class="well-header">
                                <h5>Member Registeration Form</h5>
                            </div>

                            <div class="well-content no-search">
                                <form id="commentForm" method="post" action="execute/member.php" class="form-horizontal">
				<div id="rootwizard">
					<ul>
					  	<li><a href="#tab1" data-toggle="tab" class="des">1. <span class="hidden-phone">Personal Infromation</span></a></li>
						<li><a href="#tab2" data-toggle="tab" class="des">2. <span class="hidden-phone">Social (Optional)</span></a></li>
						<li><a href="#tab3" data-toggle="tab" class="des">3. <span class="hidden-phone">Educational Background</span></a></li>
						<li><a href="#tab4" data-toggle="tab" class="des">4. <span class="hidden-phone">Organizational Affiliation</span></a></li>						
						<li><a href="#tab5" data-toggle="tab" class="des">5. <span class="hidden-phone">Experience/Core Capabilities</span></a></li>						
						<li><a href="#tab6" data-toggle="tab" class="des">6. <span class="hidden-phone">Finalize</span></a></li>
					</ul>
					
					<div class="tab-content">
					    <div class="tab-pane" id="tab1">
					    	<div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 15%;"></div>
							</div>
							<h3><small class="hidden-desktop">Step 1/6 </small>Personal Information</h3>
							<br>
							  <div class="control-group">
							    <label class="control-label" for="emailid">* Email ID</label>
							    <div class="controls">
							      <input type="text" id="emailid" name="emailfield" class="required email input-xlarge">
							      <span class="help-block">* This will be used as your USER-ID in TechDeira</span>
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="password">* Password</label>
							    <div class="controls">
							      <input type="password" id="passwordfield" name="passwordfield" class="required password input-xlarge">
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="cpassword">* Confirm Password</label>
							    <div class="controls">
							      <input type="password" id="cpasswordfield" name="cpasswordfield" class="required password input-xlarge">
							    </div>
							  </div>
							  <hr>
							  <div class="control-group">
							    <label class="control-label" for="email">Title</label>
							    <div class="controls">
							      <input type="radio" name="titlefield" class="title" value="Mr" checked> Mr. &nbsp; &nbsp; &nbsp; &nbsp;
							      <input type="radio" name="titlefield" class="title" value="Ms"> Ms. &nbsp; &nbsp; &nbsp; &nbsp;
							      <input type="radio" name="titlefield" class="title" vaule="Mrs"> Mrs. &nbsp; &nbsp; &nbsp; &nbsp;
							      <input type="radio" name="titlefield" class="title" value="Dr"> Dr. &nbsp; &nbsp; &nbsp; &nbsp;
							      <input type="radio" name="titlefield" class="title" value="Eng"> Eng.
							    </div>
							  </div>
					    	  <div class="control-group">
							    <label class="control-label" for="email">Name</label>
							    <div class="controls">
							      <p><input type="text" name="surnamefield" placeholder="Sur Name" class="input-xlarge"></p>
							      <p><input type="text" name="fnamefield" placeholder="* First Name" class="input-xlarge"></p>
							      <p><input type="text" name="lnamefield" placeholder="Last Name" class="input-xlarge"></p>
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="phonenumber">DoB</label>
							    <div class="controls">
							      <input type="text" name="dob" placeholder="Click to pick a date" class="input-xlarge dp1" readonly> 
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="email">Gender</label>
							    <div class="controls">
							      <input type="radio" name="gender" class="title" value="Male" checked> Male &nbsp; &nbsp; &nbsp; &nbsp;
							      <input type="radio" name="gender" class="title" value="Female"> Female &nbsp; &nbsp; &nbsp; &nbsp;
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="email">Contact</label>
							    <div class="controls">
							     <div class="input-prepend">
  									<span class="add-on">+93</span>
  									<input type="text" name="cphone" placeholder="* Phone (cell)" class="input-large">
								</div>
								<p></p>
							     <div class="input-prepend">
  									<span class="add-on">+93</span>
  									<input type="text" name="lphone" placeholder="Phone (line)" class="input-large">
								</div>
								<p></p>
							     <div class="input-prepend">
  									<span class="add-on">&nbsp;<i class="icon-envelope">&nbsp;</i></span>
  									<input type="text" name="emailadd" placeholder="Email address" class="input-large email required">
								</div>
							    </div>
							  </div>
							  <div class="control-group">
							    <label class="control-label" for="email">Mailing Address</label>
							    <div class="controls">
							      <p><input type="text" name="houseno" placeholder="House No.">&nbsp;&nbsp;<input type="text" name="streetno" placeholder="Street No"></p>
							      <p><input type="text" name="city" placeholder="City">&nbsp;&nbsp;<input type="text" name="zip" placeholder="Zip/Postal Code"></p>
							      <p><select name="countryid" class="input-medium required">
							      <option value="">Choose a country...</option>
							      <?php 
							      $query = mysql_query ("SELECT DISTINCT idCountry,countryName FROM countries limit 0,250");
							      while($row=mysql_fetch_array($query)){
							      ?>
							      <option value="<?php echo $row['idCountry']; ?>"><?php echo $row['countryName']; ?></option>
							      <?php }
							      ?>
							      </select>
							      <input type="text" name="province" placeholder="Province">
							      </p>
							    </div>
							  </div>
	<!-- TAB 2 ---------------------------------- SOCIAL------------------------------------------------- -->
					    </div>
					    <div class="tab-pane" id="tab2">
					    <div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 30%;"></div>
						</div>
						<h3><small class="hidden-desktop">Step 2/6 </small>Social (Optional)</h3>
						<br>
					    <div class="control-group">
							    <label class="control-label" for="url">Facebook</label>
							    <div class="controls">
							      <input type="text" name="facebook" placeholder="e.g. http://facebook.com/example" class="url input-xlarge">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Twitter</label>
							    <div class="controls">
							      <input type="text" name="twitter" placeholder="e.g. http://twitter.com/example" class="url input-xlarge">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Google+</label>
							    <div class="controls">
							      <input type="text" name="google" placeholder="e.g. http://plus.google.com/example" class="url input-xlarge">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">LinkedIn</label>
							    <div class="controls">
							      <input type="text" name="linkedin" placeholder="e.g. http://linkedin.com/example" class="url input-xlarge">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Blog</label>
							    <div class="controls">
							      <input type="text" name="blog" placeholder="e.g. http://example.com/myblog" class="url input-xlarge">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Skype</label>
							    <div class="controls">
							      <input type="text" name="skype" placeholder="Your Skype Name" class="input-xlarge">
							    </div>
						</div>
					    </div>
<!-- TAB 3 ---------------------------------- EDUCATION ------------------------------------------------- -->
					    
						<div class="tab-pane" id="tab3">
							<div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 45%;"></div>
						</div>
						<h3><small class="hidden-desktop">Step 3/6 </small>Educational Background</h3>
						<br>
					    <div class="control-group">
							    <label class="control-label" for="url">Degree Program</label>
							    <div class="controls">
							      <input type="text" name="degree" placeholder="e.g. Ph.D, Bachelor" class="input-xlarge required">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Date Completed</label>
							    <div class="controls">
							      <input type="text" name="degree-date" placeholder="Click to pick a date" class="input-xlarge required dp1" readonly> 
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Major</label>
							    <div class="controls">
							      <input type="text" name="degree-major" class="input-xlarge required">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Minor</label>
							   <div class="controls">
							      <input type="text" name="degree-minor" class="input-xlarge required">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Name of School/ University</label>
							    <div class="controls">
							      <input type="text" name="degree-school" placeholder="e.g. Kabul University" class="input-xlarge required">
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">Country</label>
							    <div class="controls">
									<select name="degree-country" class="input-xlarge required">
							      <option value="">Choose a country...</option>
							      <?php 
							      $query = mysql_query ("SELECT DISTINCT idCountry,countryName FROM countries limit 0,250");
							      while($row=mysql_fetch_array($query)){
							      ?>
							      <option value="<?php echo $row['idCountry']; ?>"><?php echo $row['countryName']; ?></option>
							      <?php }
							      ?>
							      </select>
							    </div>
						</div>	
					    </div>
					    
<!-- TAB 4---------------------------------- ORGANIZATION ------------------------------------------------- -->
					    
						<div class="tab-pane" id="tab4">
							<div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 60%;"></div>
						</div>
						<h3><small class="hidden-desktop">Step 4/6 </small>Organizational Affiliation</h3>
						<br>
					    <div class="control-group">
							    <label class="control-label" for="email">Title</label>
							    <div class="controls">
							      <p><input type="text" name="org-title" placeholder="Organization Title" class="input-xlarge"></p>
							    </div>
					    </div>
					    <div class="control-group">
							    <label class="control-label" for="email">Nature of Organization</label>
							    <div class="controls">
							      <select name="org-nature" class="input-xlarge">
							        <option value="">Choose a category...</option>
							      	<option value="Government">Government</option>
							      	<option value="Private Sector">Private Sector</option>
							      	<option value="Civil Society">Civil Society</option>
							      	<option value="Intergovernmental">Intergovernmental</option>
							      	<option value="Academia">Academia</option>
							      	<option value="other">Other</option>
							      </select>
							    </div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="email">Supervisor Information (optional)</label>
							    <div class="controls">
							      <p><input type="text" name="super-name" placeholder="Supervisor's Name" class="input-xlarge name"></p>
							      <p>
							      <div class="input-prepend">
  									<span class="add-on">+93</span>
  									<input type="text" name="super-phone" placeholder="Supervisor's Phone" class="input-large number">
								</div>
								</p>
							      <p><input type="text" name="super-email" placeholder="Supervisor's Email" class="input-xlarge email"></p>
							    </div>
							  </div>
						<div class="control-group">
							    <label class="control-label" for="email">Office Address</label>
							    <div class="controls">
							      <p><input type="text" name="ofc-houseno" placeholder="House No.">&nbsp;&nbsp;<input type="text" name="ofc-streetno" placeholder="Street No"></p>
							      <p><input type="text" name="ofc-city" placeholder="City">&nbsp;&nbsp;<input type="text" name="ofc-zip" placeholder="Zip/Postal Code"></p>
							      <p><select name="ofc-country" class="input-medium">
							      <option value="999" selected>Choose a country...</option>
							      <?php 
							      $query = mysql_query ("SELECT DISTINCT idCountry,countryName FROM countries limit 0,250");
							      while($row=mysql_fetch_array($query)){
							      ?>
							      <option value="<?php echo $row['idCountry']; ?>"><?php echo $row['countryName']; ?></option>
							      <?php }
							      ?>
							      </select>
							      <input type="text" name="ofc-province" placeholder="Province">
							      </p>
							    </div>
							  </div>
						<div class="control-group">
							    <label class="control-label" for="url">Professional Membership(s)</label>
							    <div class="controls" style="margin-top:6px;">
							    	<p>Afghan Computer Science Association Member? <input type="radio" name="csa" value="yes"> Yes | <input type="radio" name="csa" value="no" checked> No</p>
							    	<p>Member of Open Source Afghanistan? <input type="radio" name="os" value="yes"> Yes | <input type="radio" name="os" value="no" checked> No</p>
							    	<p>Member of TechWomen Afghanistan? <input type="radio" name="tw" value="yes"> Yes | <input type="radio" name="tw" value="no" checked> No</p>
							    	<p>Member of any other professional association/ network? (Please, specify)</p> 
							    	<p><input type="text" name="other-member" placeholder="Name"/> &nbsp; &nbsp; <input type="text" name="other-member-web" placeholder="Website" class="url"/>
							    </div>
						</div>
						<hr>
						
						
					    </div>
<!-- TAB 5---------------------------------- EXPERIENCE ------------------------------------------------- -->
					    
					    <div class="tab-pane" id="tab5">
					    <div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 75%;"></div>
						</div>
						<h3><small class="hidden-desktop">Step 5/6 </small>Experience and Core Capabilities</h3>
						<br>
					    <div class="control-group">
							    <label class="control-label" for="url">&nbsp;</label>
							    <div class="controls">
							      <p style="margin-bottom:0;"><strong>Professional Experience: </strong></p>
							      Please, list up to four positions and locations (most recent first.):<br>
								  <textarea rows="2" cols="100" name="positions"></textarea>						      
					    		</div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">&nbsp;</label>
							    <div class="controls">
							      <p style="margin-bottom:0;"><strong>IT Skills: </strong></p>
							      Please, write about your skills and experience in in IT, including Free/Open Source Software (if any)
							      <textarea rows="2" cols="100" name="itskills"></textarea>						      
					    		</div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">&nbsp;</label>
							    <div class="controls">
							      <p style="margin-bottom:0;"><strong>Work experience with national, regional or international associations or clubs: </strong></p>
							      Please, write the name of the association and explain your responsibilities.<br>
								  <textarea rows="2" cols="100" name="work-national"></textarea>						      
					    		</div>
						</div>
						<div class="control-group">
							    <label class="control-label" for="url">&nbsp;</label>
							    <div class="controls">
							      <p style="margin-bottom:0;"><strong>How do you plan to utilize the knowledge/experience you will gain through your membership at TechDeira? </strong></p>
								  <textarea rows="2" cols="100" name="knowledge-plan"></textarea>						      
					    		</div>
						</div>
					    </div>
					    
	
<!-- TAB 6---------------------------------- FINAL ------------------------------------------------- -->
					    
						<div class="tab-pane" id="tab6">
							<div id="bar" class="progress progress-striped active" style="margin-left:-12px;">
	  							<div class="bar" style="width: 100%;"></div>
						</div>
						<h3><small class="hidden-desktop">Step 6/6 </small>Congratulations!</h3>
						<h5>You have successfully filled our registration form, please click below to finish the process.</h5>
						<br>
							 <button type="submit" class="btn span2 dark_green btn-xlarge" style="margin-left:0;margin-bottom:-100px;"><strong>Finish & Register</strong></button>
					    </div>
						<ul class="pager wizard" style="margin-top:50px;">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>	
				</div>
				</form>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <script src="../assets/js/library/jquery.collapsible.min.js"></script>
    <script src="../assets/js/library/jquery.mCustomScrollbar.min.js"></script>
    <script src="../assets/js/library/jquery.mousewheel.min.js"></script>
    <script src="../assets/js/library/jquery.uniform.min.js"></script>
    <script src="../assets/js/flatpoint_core.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/jquery.bootstrap.wizard.js"></script>
	<script src="../assets/js/library/bootstrap-datepicker.js"></script>
	<script src="../assets/js/prettify.js"></script>
	<script>
	$(document).ready(function() {
		var $validator = $("#commentForm").validate({
		  rules: {
		    emailid: {
		      required: true,
		      email: true,
		      minlength: 8,
		    },
		    passwordfield:{
				required: true,
				minlength: 6,
				maxlength:40
			    },
			    cpasswordfield:{
					required: true,
					equalTo: "#passwordfield",
					minlength: 6,
					maxlength:40
				    },
		    lphone: {
			      number: true,
			      minlength: 9,
			      maxlength: 9,
			    },
			    cphone: {
				      required: true,
				      number: true,
				      minlength: 9,
				      maxlength: 9,
				    },
		
				    houseno: {
					      number: true,
					    },
					    zip: {
						      number: true,
						    },
						    streetno: {
							      number: true,
							    },
		    namefield: {
		      required: true,
		      minlength: 3
		    },
		    surnamefield: {
			      minlength: 3
			    },
			lnamefield: {
			      minlength: 3
		  	    },
		  	  fnamefield: {
			      required: true,
			      minlength: 3
			    },		    
		  }
		});

	  	$('#rootwizard').bootstrapWizard({
	  		'tabClass': 'nav nav-pills',
	  		'onNext': function(tab, navigation, index) {
	  			var $valid = $("#commentForm").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
	  		}
	  	});	
		window.prettyPrint && prettyPrint()
	});	
	</script>
	
	<script>
	$(document).ready(function() {
		$('.dp1').datepicker({
			  format: 'dd-MM-yyyy',
			  startView: 2
			});
	});	
	</script>
                            </div>
                               
                            </div>	
		
<?php 
include 'footer.php';
?>				