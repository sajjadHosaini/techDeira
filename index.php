<?php
include 'header.php';
?>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,400italic);


.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;

}

.thumbnail img {
    width: 100%;
    max-height: 221px;
}
</style>
<!-- START OF MAIN HEADER -->
<div id="main_header">
	<section id="head"> <?php if(isset($_GET['ta_register']) && $_GET['ta_register']=="success"){ ?>
	<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>SUCCESS!</strong> You have successfully registered as Trainee
			in Online Entreprenuer Workshop
		</div>
	<?php } ?> <br>
		<h1 class="header_desktop hidden-phone">
			<span style="color: #0088CC">TECH</span><span style="color: #E86537">DEIRA</span>
		</h1>
		<h1 class="header_phone hidden-desktop hidden-tablet">
			<span style="color: #0088CC">TECH</span><span style="color: #E86537">DEIRA</span>
		</h1>

		<p class="hidden-phone sub-text">Learn. Access. Collaborate.</p>
		<p class="sub-text-phone hidden-desktop hidden-tablet">Learn. Access.
			Collaborate.</p>
		<hr>
		<h3 class="hidden-phone">First and Fastest Growing Community
			Technology Center in Afghanistan</h3>
		<br>
		<div class="report-widgets" style="margin-top: 10px;">
			<div class="row-fluid">
				<div class="span3 offset3">
					<div class="widget blue clearfix">
						<div class="content">
							<div class="icon" style="margin-left: 12px;">Become a</div>
							<div class="value">

								<h2>
									<i class="icon-group icon-large"></i> MEMBER
								</h2>
							</div>
						</div>
						<a href="login/login.php?role=member#register" class="more"><i
							class="icon-arrow-right"></i> </a>
					</div>
				</div>
				<!-- <div class="span3">
                        <div class="widget orange clearfix">
                            <div class="content">
                                <div class="icon">
                                    Participate in TechDeira lectures
                                </div>
                                <div class="value">

                                    <h2><i class="icon-link icon-large"></i> Participate</h2>
                                </div>
                            </div>
                            <a href="register/participate.php" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div> -->
				<div class="span3">
					<div class="widget orange clearfix">
						<div class="content">
							<div class="icon" style="margin-left: -35px;">Become an</div>
							<div class="value">

								<h2>
									<i class="icon-male icon-large"></i> INSTRUCTOR
								</h2>
							</div>
						</div>
						<a href="login/login.php?role=instructor#register" class="more"><i
							class="icon-arrow-right"></i> </a>
					</div>
				</div>
				<!-- <div class="span3">
                        <div class="widget dark_turq clearfix">
                            <div class="content">
                                <div class="icon">
                                    Become a volunteer
                                </div>
                                <div class="value">

                                    <h2><i class="icon-usd icon-large"></i> Volunteer</h2>
                                </div>
                            </div>
                            <a href="register.php#volunteer" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div> -->
			</div>
		</div>
		<div style="margin-top: 70px;">
			<a class="gonext" href="#"><i class="icon-chevron-down icon-4x"></i>
			</a>
		</div>
	</section>
	<!-- <span id="next">&nbsp;</span> -->

  <span id="getjava">&nbsp;</span>
	<section class="intro" style="margin-top: 65px;" id="intro">
		<div class="intro-header">
			<h1 class="hidden-phone odd" >Next on TechDeira</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop odd">Next on
				TechDeira</h1>
			<p class="hidden-phone">Find out what is happeninig in TechDeira to
				participate in the events</p>
		</div>
		<!--
		<span class="pull-right"><div class="fb-share-button"
				data-href="http://dera.technation.af" data-type="button"></div>&nbsp;<a
			href="https://twitter.com/share"
			data-url="http://dera.technation.af/"
			data-text="TechDeira's Online #Entrepreneurship Workshop. Learn to earn an income online."
			class="twitter-share-button" data-dnt="true" data-count="none"
			data-via="techdeira @TechNationAF">Tweet</a></span>
		<div class="row-fluid intro-content">
			<div class="span12">
				<a href="register/tdf_workshop"><img
					src="assets/img/toew_banner.png" alt=""></a>
			</div>
			  <br>
			<div class="row">
		<div class="span8">
			<div id="myCarousel" class="carousel slide">
				<?php
						$selectLectures = mysql_query("SELECT * FROM lectures ORDER BY `date` limit 3");
						$numLectures = mysql_num_rows($selectLectures);
						?>
				<ol class="carousel-indicators">
					<?php for($i=0;$i<$numLectures;$i++){ ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) echo 'active'; ?>"></li>
					<?php } ?>
				</ol>
				<div class="carousel-inner">
					<?php
						if(!$selectLectures){
							echo mysql_error();
						}
						$count=1;
						while($rowLectures=mysql_fetch_array($selectLectures)){
							$lectureCourse = mysql_query("SELECT * FROM courses WHERE id = '".$rowLectures['course_id']."'");
							$rowCourse = mysql_fetch_array($lectureCourse);
					?>
					<div class=" <?php if($count==1) echo 'active'; ?> item">
						<img src="users/instructor/images/lectures/<?php echo $rowLectures['image']; ?>">
						<div class="carousel-caption">
							<h4>
								<strong><?php echo $rowCourse['course_title'] . ": "; ?></strong><?php echo $rowLectures['lecture_title']; ?>
							</h4>
							<p><?php echo $rowLectures['lecture_desc']; ?></p>
						</div>
					</div>
					<?php $count++; } ?>
				</div>
				<a class="carousel-control left" href="#myCarousel"
					data-slide="prev">&lsaquo;</a> <a class="carousel-control right"
					href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
		<div class="span4" style="text-align:left">
			<div class="well blue">
                            <div class="well-header">
                                <ul class="nav nav-tabs pull-left">
                                  <li class="active"><a href="#header-left-tab1" data-toggle="tab">Upcoming Lectures</a></li>
                                  <li><a href="#header-left-tab2" data-toggle="tab">Courses</a></li>
                                  <li><a href="#header-left-tab3" data-toggle="tab">Workshops</a></li>
                                </ul>
                            </div>

                            <div class="well-content" style="padding:0;" id="recentLectures">
                                <div class="tab-content">
                                  <div class="tab-pane active" id="header-left-tab1" style="padding:0;">
                                  	<ul class="rows">
                                    <?php
                                    	$selectTenLectures = mysql_query("SELECT * FROM lectures ORDER BY `date` LIMIT 10");
                                    	while($rowTenLectures=mysql_fetch_array($selectTenLectures)){
                                    		$course_tl = mysql_query("SELECT * FROM courses WHERE id = '".$rowTenLectures['course_id']."'");
                                    		$row_course_tl = mysql_fetch_array($course_tl);
                                    		?>
                                    		<a href="details.php"><li><h5><strong><?php echo $row_course_tl['course_title'] . ": "; ?></strong><?php echo $rowTenLectures['lecture_title']; ?></h5></li></a>
                                    		<?php
                                    	}
                                    ?>
                                	</ul>
                                  </div>
                                  <div class="tab-pane" id="header-left-tab2" style="padding:0;">
                                    <ul class="rows">
                                    <?php
                                    	$selectTenCourses = mysql_query("SELECT * FROM courses ORDER BY `date_from` LIMIT 10");
                                    	while($cat_row=mysql_fetch_array($selectTenCourses)){

                                    		echo "<li><a href='details.php?cat=$cat_row[category_id]' class='btn btn-warning'>" . $cat_row['course_title'] . "</a></li>";

                                    	}
                                    ?>

                                	</ul>
                                  </div>
                                  <div class="tab-pane" id="header-left-tab3">

                                  </div>
                                </div>
                            </div>
                        </div>
		</div>
		</div> -->
<br><br>

<div>
      <div class="row">

        <div class="span4" >
          <div class="thumbnail">
            <img src="assets/img/java-logo.jpg" alt="">
              <div class="caption"><br>
                <h3 id="h3"><a href="#"  role="button" data-toggle="modal">Java Programming</a></h3>
                <p>This course teaches students how to develop Java applications. Topics covered include the Java programming language syntax, OO programming using Java, exception handling, file input/output, threads, <a href="#javaModal" role="button" data-toggle="modal">more...</a></p>
            </div>
          </div>
        </div>

        <div class="span4">
          <div class="thumbnail">
            <img src="assets/img/web-development.png" alt="">
              <div class="caption"><br>
                <h3><a href="#webModal" role="button" data-toggle="modal">Web Development</a></h3>
                <p>This course presents introductions to many of the basic concepts, issues and techniques related to designing, developing and deploying websites. During the course, students will learn about Web design, <a href="#webModal" role="button" data-toggle="modal">more...</a></p>
            </div>
          </div>
        </div>

        <div class="span4">
          <div class="thumbnail">
            <img src="assets/img/linux.png" alt="">
              <div class="caption"><br>
                <h3><a href="#linuxModal" role="button" data-toggle="modal">Linux System Administration</a></h3>
                <p>Linux System Administration is designed for IT professionals who are new to Linux and require core Red Hat Enterprise Linux skills. Focused on administration tasks that will be encountered in the workplace, <a href="#linuxModal" role="button" data-toggle="modal">more...</a></p>
            </div>
          </div>
        </div>

      </div><!-- End row -->
</div>


      <div class="row" style="text-align: center;">
      	<p><h2><a href="#registerModal" role="button" data-toggle="modal" class="btn btn-primary btn-xlarge orange" style="padding: 12px 38px;
font-size: 22px;
font-weight: bold;">REGISTER NOW</a></h2></p>
      </div>
	</section>
	<span id="services">&nbsp; <br> <br> <br> <br>
	</span>


	<section class="intro">
		<div class="intro-header">
			<h1 class="hidden-phone even">Services</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop even">Services</h1>
			<p>Explore more about our exciting services and benefits by clicking
				each services category.</p>
		</div>
		<div id="servicestd" class="intro-content well orange">
			<div class="well-header">
				<h5 class="hidden-phone">Services at TechDeira</h5>
			</div>
			<div class="well-content ">
				<div style="margin: 0; padding: 0;" id="showTabs">
					<div class="row">
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="ms"><i class="icon-group icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="ms">Membership
										Services</a>
								</h3>
								<p class="muted">Exciting services & benefits for our members.</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="ac"><i class="icon-link icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="ac">Access
										& Connectivity</a>
								</h3>
								<p class="muted">Connect to internet & knowledge resources.</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="te"><i class="icon-pencil icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="te">Training
										& Education</a>
								</h3>
								<p class="muted">Comprehensive hands-on training programs</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="mc"><i class="icon-lightbulb icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="mc">Mentoring
										& Counseling</a>
								</h3>
								<p class="muted">Improving your techabilities</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="mp"><i class="icon-print icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="mp">Multimedia
										& Printing</a>
								</h3>
								<p class="muted">Digital printing and multimedia publishing</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="ge"><i class="icon-gamepad icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="ge">Gaming
										& Entertainment</a>
								</h3>
								<p class="muted">Getting children & youth interested to learn</p>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="ji"><i class="icon-rocket icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="ji">Job
										Preparation & Internship</a>
								</h3>
								<p class="muted">Opportunities for young students</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="ee"><i class="icon-dollar icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="ee">Entrepreneurship
										& eCommerce</a>
								</h3>
								<p class="muted">Outsourcing and self-employment</p>
							</div>
						</div>
						<div class="span4" style="display: inline">
							<div class="span3" style="display: inline">
								<span><a href="javascript:void(0)" class="services_tabs"
									name="tc"><i class="icon-rss icon-3x"></i> </a> </span>
							</div>
							<div class="span9" style="display: inline">
								<h3>
									<a href="javascript:void(0)" class="services_tabs" name="tc">Tech-Communities</a>
								</h3>
								<p class="muted">This is our services</p>
							</div>
						</div>

					</div>
				</div>
				<div style="margin: 0; padding: 0; display: none;" id="showContent">
					<div id="ms" style="display: none;" class="servicesContent">
						<h2>
							<strong>Membership Services</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>TechDeira is a club for Information Technology users,
							developers and administrators. We designed our membership
							services based on our decades of experience in the IT industry
							and academia. By becoming a TechDeira member you will enjoy
							multiple benefits, discounts and special offers on our services.
							TechDeira member-specific services and benefits include:</p>
						<ul>
							<li>Facility for a 24/7 internet connection through WiFi and open
								lab time</li>
							<li>Monthly member meetings and newsletters keeping members
								current on technology evolution (Event alert letters like:
								Conferences, Communities alerts, etc.)</li>
							<li>Learning and sharing experiences through various TechDeira
								support programs such as freelance technology business,
								authoring books and launching publications by members</li>
							<li>Enhancing technical and professional capacity by getting help
								in setting career goals, participating in internship and job
								training programs, and enrolling in lectures and training curses
							</li>
							<li>Professional network of tech users and developers and
								participation in local, national, regional and international
								conferences, awards and events</li>
							<li>Hosting events at TechDeira and assistance in acquiring
								sponsorships</li>
							<li>Creating an Income Stream by developing apps and content and
								getting your products promoted</li>
							<li>Getting technical support in trouble-shooting your software
								and hardware tools and devices,</li>
							<li>Facility to print, scan, photocopy and record your important
								documents</li>
							<li>Receive discounts and special offers on products and services</li>
							<li>(Help to join TechDeira Communities for entices: Muzila,
								Afghanistan Open source, etc.)</li>
						</ul>

					</div>

					<div id="ac" style="display: none;" class="servicesContent">
						<h2>
							<strong>Public Access & Connectivity</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>TechDeira understands the importance of operating with a secure
							and efficient internet connection as such it takes pride in
							providing a superfast 2MB internet access through the
							cutting-edge, WiMAX, technology. Allowing members and clients to
							have access to a good browsing experience, participate in online
							courses, and download and upload video and photos effectively.
							You can bring your own device and connect through our WiFi
							signals available throughout the TechDeira compound.</p>
						<p>If you don’t have a device, don’t worry, our impressive
							computer lab will allow you to connect with the internet and
							access our online services. All of which takes place in our safe
							and friendly environment.</p>
						<p>TechDeira's public access services offer members of the
							community variety of opportunities they can avail:</p>

						<ul>
							<li>Internet-cafÃ© and open lab time</li>
							<li>WiFi that connects own devices</li>
							<li>Coffee shop and a meeting space</li>
							<li>Voice and video conferencing facilities</li>
							<li>Instructions on effective use of the Internet</li>
						</ul>

						<p>Open lab time will provide community members through structured
							classes with opportunities to practice what they are learning or
							to branch out into further explorations.</p>

					</div>
					<div id="te" style="display: none;" class="servicesContent">
						<h2>
							<strong>Training and Education</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>To view our comprehensive hands-on training programs please
							click on the training sub-menus to find out more about our
							available training services.</p>
						<p>TechDeira's comprehensive training and education program
							involves far more than computer access. With computer education
							programs, we offer classroom and tutorial space for
							non-computer-based learning. Our instructors have the experience
							and qualifications needed to teach these classes. TechDeira's
							partners include renowned national and international institutions
							helping address the needs of the 21st century classroom.</p>
						<p>TechDeira's training and education services are organized in
							the following categories:</p>

						<div class="tabbable tabs-left">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab11" data-toggle="tab">Computer
										Education</a></li>
								<li><a href="#tab12" data-toggle="tab">Social Media and
										Communication</a></li>
								<li><a href="#tab13" data-toggle="tab">Leadership and Management</a>
								</li>
								<li><a href="#tab20" data-toggle="tab">Credibility and Trust
										Building</a></li>
								<li><a href="#tab14" data-toggle="tab">Business Development</a></li>
								<li><a href="#tab15" data-toggle="tab">Writing and Public
										Speaking</a></li>
								<li><a href="#tab16" data-toggle="tab">The Internet</a></li>
								<li><a href="#tab17" data-toggle="tab">Job Skills Training</a></li>
								<li><a href="#tab18" data-toggle="tab">Human Languages</a></li>
								<li><a href="#tab19" data-toggle="tab">Life-long Learning</a></li>

							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab11">
									<h4>Computer Education</h4>
									<p>TechDeira provides training on topics ranging from basic
										computer comfort and technology introduction to advance topics
										such as software application development, computer programing
										and network administrator education. We train in both open
										source and closed source software technologies.</p>
									<p>Some of our computer education courses include following
										topics, for a full list, please visit our website:</p>
									<ul class="sub-ul">
										<li>Introduction to Computing</li>
										<li>Digital literacy</li>
										<li>Linux</li>
										<li>Computer programming</li>
										<li>Web programming</li>
										<li>Mobile applications programming</li>
										<li>Computer networks</li>
										<li>Graphics designing</li>
										<li>Web designing</li>
										<li>Software user interface designing</li>

									</ul>
								</div>
								<div class="tab-pane" id="tab12">
									<h4>Social Media and Communication</h4>
									<p>Social media is changing the way human is communicating
										today. TechDeira has designed unique training courses on
										social media addressing diverse needs of businesses and
										society. These trainings and lectures will be a practical
										experience on social media platforms such as Facebook,
										Twitter, LinkedIn, Google+, Pinterest and others.</p>
								</div>
								<div class="tab-pane" id="tab13">
									<h4>Leadership and Management</h4>
									<p>These training workshops build the leadership capacity of
										young Afghans. Weather they are hardcore technical experts,
										administrators or managers, our leadership and management
										trainings will transform them into exceptional leaders.
										Participants will have a chance to attend leadership classes
										and learn leadership by doing.</p>
									<p>This course will teach topics around time management,
										planning, project management, organizational behavior,
										software applications for management.</p>

								</div>
								<div class="tab-pane" id="tab20">
									<h4>Credibility and Trust Building</h4>
									<p>Whether you are a husband or a wife, a father or a son, a
										teacher or a student, a businessman or a social worker, a
										sales person or a customer care representative, trust and
										credibility are crucial elements for your relationship, at
										home, at work and in the society. This course will teach you
										how trust and credibility are important and how they can be
										preserved.</p>
								</div>
								<div class="tab-pane" id="tab14">
									<h4>Business Development</h4>
									<p>If you are an entrepreneur or would like to establish your
										own business or social enterprise, this course will teach you
										important issues around business and how it can be created,
										developed and sustained.</p>
								</div>
								<div class="tab-pane" id="tab15">
									<h4>Writing and Public Speaking</h4>
									<p>TechDeira is creating a new generation of technology writers
										and public speakers, as we see not many. TechDeira offers
										specialized classes on writing and public speaking to
										individuals busy in various fields so they can continue
										sharing knowledge and experiences through speaking at events
										and authoring books and articles.</p>
								</div>
								<div class="tab-pane" id="tab16">
									<h4>The Internet</h4>
									<p>This training helps participants learn ways to use the
										Internet effectively for education and information access and
										communication. These will include: search techniques, online
										educational resources, content access and sharing, Google Maps
										and Open Street Maps, blogging, search engines and
										Internet-based promotion.</p>
								</div>
								<div class="tab-pane" id="tab17">
									<h4>Job Skills Training</h4>
									<p>Job skills training will include classes teaching basic
										computer literacy, keyboarding skills, word processing,
										graphics applications, spreadsheets, databases, career
										planning and goal setting, resume making, interviewing skills
										and other office skills classes.</p>
								</div>
								<div class="tab-pane" id="tab18">
									<h4>Human Languages</h4>
									<p>TechDeira's human language trainings are teaching Pashto,
										Dari and English. These programs will teach from basic skills
										to speak and understand the languages to advance grammar
										classes. The class will conclude with a test measuring
										students progress towards fluency in the language they are
										learning.</p>
								</div>
								<div class="tab-pane" id="tab19">
									<h4>Life Long Learning</h4>
									<p>Working with partner institutions, TechDeira is facilitating
										extension courses, distance learning, or online learning
										opportunities.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="mc" style="display: none;" class="servicesContent">
						<h2>
							<strong>Mentoring and Counseling</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>TechDeira works with children, youth and adults who are eager
							to keep up-to-date with and improve their techability.</p>
						<p>We offer support for all levels of experience. Whether you know
							nothing about computers, Internet, software, hardware, or you
							have limited knowledge of computers, TechDera, through our
							mentoring and counseling services, helps you enhance your skills
							and knowledge in these areas. There is no reason to worry we can
							help you achieve your professional development goals.</p>
						<p>TechDeira provides support services to diverse stakeholders who
							have limited experience with computers, software, hardware, and
							the Internet. Our mentoring, counseling and coaching programs
							work with children, youth and adults who want to learn skills in
							technology or improve their techability— the ability to know
							and use technologies better. With us, you get connected to
							like-minded people, technology, knowledge resources, and
							mentors— all generously sharing their knowledge and experience
							with others.</p>
						<p>Some of TechDeira's mentoring and counseling programs include:</p>
						<h4>
							<strong>Subject-Area Activities</strong>
						</h4>
						<p>Commercial software that offers homework help, tutorials, and
							other activities covering subjects, such as reading, writing,
							math, sciences, and other subjects will be made available.</p>
						<h4>
							<strong>Exploring the Internet</strong>
						</h4>
						<p>Once children are equipped with basic computer skills, they may
							wish to test and improve them by â€œsurfingâ€� the
							Internet, using the web as a research tool, or communicating with
							far-flung peers through electronic mail.</p>
						<ul>
							<li>Telecommunications contact with relatives and friends</li>
							<li>Telecommunications and CD-ROM-based travel explorations</li>
							<li>Health care and other services information</li>
						</ul>
						<h4>
							<strong>Career Planning and Counseling</strong>
						</h4>
						<ul>
							<li>Exploring hobbies and interests</li>
							<li>Financial planning assistance</li>
						</ul>
					</div>
					<div id="mp" style="display: none;" class="servicesContent">
						<h2>
							<strong>Digital Printing and Multimedia</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>TechDera provides a unique spot for your digital printing,
							multimedia publishing and entertainment. Our members now can
							benefit from these value added services.</p>
						<h4>
							<strong>Multimedia Publishing</strong>
						</h4>
						<p>Designing personal web pages, constructing family or
							neighborhood profiles, family tree and family history
							productions, creating project reports for school, scanning, and
							burning CDs.</p>
						<p>(Printing books of members and none members which is translated
							or published in official language of Afghanistan)</p>
						<h4>
							<strong>Graphics Designing</strong>
						</h4>
						<p>Adobe Photoshop, CorelDraw</p>
						<h4>
							<strong>Digital Printing</strong>
						</h4>
						<p>Photocopying, business card printing, envelops and document
							printing, photos printing, book binding</p>
					</div>
					<div id="ge" style="display: none;" class="servicesContent">
						<h2>
							<strong>Gaming and Entertainment</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>Games are effective tools for getting children and youth
							interested in learning more about computer technology. TechDeira
							is organizing a game of the week contest to enthuse and engage
							children; TechDeira is mindful about selecting games for
							different age levels of children.</p>
						<p>Our gaming and entertainment services include:</p>
						<ul>
							<li>Music-making: Learning about writing and recording music and
								songs</li>
							<li>Games such as chess, go, or backgammon</li>
							<li>Journey</li>
						</ul>
					</div>
					<div id="ji" style="display: none;" class="servicesContent">
						<h2>
							<strong>Job Preparation and Internship</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a> <br>
						<h4>
							<strong>Job Preparation</strong>
						</h4>
						<p>As with Training and Education, our comprehensive job
							preparation focus entails additional, non-computer classroom
							space along with experienced instructors conducting the classes.</p>
						<p>Our Job preparation covers job skills training and job search
							activities, this includes; Classes that teach basic computer
							literacy, keyboarding skills, word processing, graphics
							applications, spreadsheets, databases, career planning and goal
							setting, resume making, interviewing skills and other office
							skills, resume writing workshops, classes teaching interviewing
							skills such as what questions to ask and what is likely to be
							asked; how to dress; workplace behavior training; and, how and
							where to look for a job.</p>


						<h4>
							<strong>Internship</strong>
						</h4>
						<p>In partnership with NICTAA our internship program will provide
							practical experience for beginners in ICT jobs or profession. An
							ICT internship is on-the-job training in an ICT related field
							that the student or young worker wants to learn more about. This
							program plans a 3 month pre-internship intensive training and
							then a 3 month internship with an ICT industry related field.</p>
						<p>(And also in Afghan Telecommunication Companies like: Etisalat,
							MTN, Roshan and AfghaTellecom)</p>
					</div>
					<div id="ee" style="display: none;" class="servicesContent">
						<h2>
							<strong>Entrepreneurship and eCommerce</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>Electronic commerce is a term used to describe a variety of
							business activities that will be conducted at the TechDeira.
							These types of business activities will include outsourcing,
							small business support, self-employment, and entrepreneurship.</p>
						<h4>
							<strong>Outscoring</strong>
						</h4>
						<p>Is an activity in which the TechDeira will be hired by an
							organization or business to undertake a task it usually performs
							itself, such as payroll processing, data processing, and
							inventory. The TechDeira might be able to perform tasks for local
							businesses, certain government agencies, community-based
							organizations and schools for a fee, thereby employing TechDeira
							participants to do the work and earn revenue they share with
							TechDeira.</p>
						<h4>
							<strong>Small Business Support</strong>
						</h4>
						<p>Small Business Support is an activity where TechDeira
							facilities are made available to its members to support their
							business operations, such as by using computers for accounting,
							tracking inventory, billing, advertising and so forth.</p>
						<h4>
							<strong>Entrepreneurship</strong>
						</h4>
						<p>Entrepreneurship is a business activity created by the
							TechDeira member or former member in which the person establishes
							a business at home or at another location using skills learned at
							the TechDeira.</p>
					</div>
					<div id="tc" style="display: none;" class="servicesContent">
						<h2>
							<strong>Tech-Communities</strong>
						</h2>
						<a href="javascript:void(0)" class="goBack pull-right"><i
							class="icon-chevron-sign-left"></i> go back</a>
						<p>TechNation and TechDeira continually supports creating,
							developing and sustainment of specialized technology communities
							and task forces. These communities play a critical role in
							developing and promoting technology. TechDeira is providing
							support to the following technology communities and is hosting
							their meetings and events:</p>
						<ul>
							<li>TechWomen Afghanistan</li>
							<li>Open Source Afghanistan</li>
							<li>Afghan Computer Science Association</li>
							<li>Ubuntu Afghanistan community</li>
							<li>Mozilla Afghanistan community</li>
							<li>Girl Geek Dinners Kabul</li>
							<li>Wikipedia Pashto community</li>
							<li>Wikipedia Dari community</li>
							<li>Afghanistan Bloggers Association</li>
							<li>AfLoc Network</li>
							<li>GameDev</li>
							<li>TechMentor</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>



	<span id="getinv">&nbsp; <br> <br> <br> <br>
	</span>
	<section class="intro">
		<div class="intro-header">
			<h1 class="hidden-phone odd">Get Involved</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop odd">Get Involved</h1>
			<p>Join us by becoming, a member, an instructor or a volunteer.</p>
		</div>
		<div id="getinvolvedtd" class="intro-content well blue">
			<div class="well-header">
				<h5 class="hidden-phone">Membership in TechDeira</h5>
			</div>
			<div class="well-content">
				<p>TechDeira is a club for Information Technology users, developers
					and administrators. We designed our services based on our decades
					of experience in the IT industry and academia. By becoming a
					TechDeira member, instructor or a volunteer you will enjoy multiple
					benefits, discounts and special offers on our services.</p>
				<div class="row">
					<div class="span6">
						<span><a href="#memberModal" role="button" data-toggle="modal"><i
								class="icon-group icon-4x"></i> </a> </span>
						<h3>
							<a href="#memberModal" role="button" data-toggle="modal">Become a
								Member</a>
						</h3>
						<p>Be part of growing IT community; share experiences; connect
							with people, mentors and knowledge resources; and stay on top of
							tech issues.</p>


					</div>
					<div class="span6">
						<span><a href="#instructorModal" role="button" data-toggle="modal"><i
								class="icon-lightbulb icon-4x"></i> </a> </span>
						<h3>
							<a href="#instructorModal" role="button" data-toggle="modal">Become
								an Instructor</a>
						</h3>
						<p>A highly recognized position with an opportunity to create an
							income stream, enhance experiences, develop workforce, and be
							recognized globally.</p>
					</div>
					<div class="span6">
						<span><a href="#volunteerModal" role="button" data-toggle="modal"><i
								class="icon-cogs icon-4x"></i> </a> </span>
						<h3>
							<a href="#volunteerModal" role="button" data-toggle="modal">Become
								a Volunteer</a>
						</h3>
						<p>Volunteering with us is an exciting learning, networking and
							exposure opportunity for students and young professionals; and
							you can make a difference.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<span id="about">&nbsp; <br> <br> <br> <br>
	</span>
	<section class="intro">
		<div class="intro-header">
			<h1 class="hidden-phone even">About Us</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop even">About Us</h1>
			<p>Know who are we, what we do, and with whom are we involved.</p>
		</div>
		<div id="abouttd" class="intro-content well orange">
			<div class="well-header">
				<h5 class="hidden-phone">About Us</h5>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#about" id="goabout" data-toggle="tab">About
							TechDeira</a></li>
					<li><a href="#team" id="goteam" data-toggle="tab">TechDeira Team</a>
					</li>
					<li><a href="#org-behind" id="go-org-behind" data-toggle="tab">Organizations
							Behind</a></li>
				</ul>
			</div>
			<div class="well-content">

				<div class="tab-pane active" id="about1">
					<div class="row-fluid">
						<div class="span3">
							<div class="image hidden-phone"></div>
							<div class="image hidden-phone" style="margin-top: 10px;">
								<img src="assets/img/network.jpg" class="img-polaroid" alt="">
							</div>
						</div>
						<div class="span9">
							<h2>About TechDeira</h2>
							<p>
								TechDeira is Afghanistan’s dynamic community technology center
								providing lifelong learning and professional development
								opportunities for children, youth and adults. Established in
								2011 in Kabul, TechDeira is a multipurpose facility allowing
								both Afghan men and women access to diverse programs and
								services that can provide technology support and social and
								economic benefits. <br> <br> Using state-of-the-art information
								communication technologies, TechDeira creates a new generation
								of community leaders, develops technology and management skills
								of its members and clients. It provides career development
								opportunities, mentoring and counseling services, Internet and
								technology access, networking opportunities and knowledge
								resources. <br> <br> TechDeira is a common platform for
								professionals, academics, business community, civil society
								players, policymakers, public workers, political activists, and
								the mass media actors. It provides our citizens with a unique
								opportunity to achieve both personal and professional
								development goals. <br> <br> If you would like to become part of
								the growing technology equipped community of Afghanistan why not
								come Join us now!
							</p>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="team" hidden>
					<h2>TechDeira Team</h2>
					<p>
						The TechDeira team is comprised of senior entrepreneurs,
						educators, programmers, developers, community mobilizers and
						experts. The team’s working objective is to harness technology
						to develop capacities, enhance employability, create employment,
						promote entrepreneurship, and build workforce. <br>


					<div class="tabbable">
						<!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li><a href="#tab2" data-toggle="tab"><strong>Management</strong>
							</a></li>
							<li class="active"><a href="#tab1" data-toggle="tab"><strong>Steering
										Committee</strong> </a></li>

						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<div class="row-fluid" style="margin: 0;">
									<div class="span2">
										<img alt="Omar Mansoor Ansari, Founder" class="img-polaroid"
											src="assets/img/omarphoto.jpg">
									</div>
									<div class="span10">
										<blockquote>
											<p>
												<strong>Omar Mansoor Ansari</strong>
											</p>
											<span class="muted"> - Founder</span>
										</blockquote>
										<p>
											Omar is Afghanistanâ€™s senior entrepreneur and
											researcher in ICT. He has more than a decade experience in
											building institutions, coalition and start-ups. Omar worked
											with Microsoft and IDRC on software localization and received
											Microsoft Localization Champion Award. He worked as the
											Cofounder/ Executive director of Afghan Computer Science
											Association (ACSA), 1999-2008, and Founder/ Editor-in-Chief
											of the Computer Science bimonthly.<br> <br> His most recent
											work includes founding Open Source Alliance of Central Asia
											(OSACA), Open Source Afghanistan, TechWomen Afghanistan,
											TechWomen Central Asia, TechDeira, and TechWorks, all
											platforms for technology promotion and development, and
											education and networking. Omar is President of TechNation and
											is Chairing the National ICT Alliance of Afghanistan
											(NICTAA), the countryâ€™s largest consortium of ICT
											players. <br> <br> More about Omar, <a target="_blank"
												href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Ftechnation.af%2Fabout.html&region=follow_link&screen_name=CyberMullah&tw_p=followbutton&variant=2.0"><i
												class="icon-twitter-sign"></i> </a> <a
												href="http://af.linkedin.com/in/omansari" target="_blank"><i
												class="icon-linkedin-sign"></i> </a>
										</p>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab2">
								<div class="row-fluid" style="margin: 0;">
									<div class="span2">
										<img alt="Baseer Ahmad Baheer" class="img-polaroid"
											src="assets/img/baseerphoto.jpg">
									</div>
									<div class="span10">
										<blockquote>
											<p>
												<strong>Baseer Ahmad Baheer</strong>
											</p>
											<span class="muted"> - Lead Technology Educator</span>
										</blockquote>
										<p>
											Baseer is Afghanistan's top-notched web engineer with years
											of experience in teaching, developing technologies and
											creating tools and applications for desktop, web and mobile.
											Baseer received his BSc. in Computer Science from the
											University of Kabul, Afghanistan in 2005, and earned an MSc.
											in Software Engineering from the Technische Universitat
											Berlin, Berlin, Germany in 2010. <br> <br> More about Baseer,
											<a href="http://www.facebook.com/baseer.baheer"
												target="_blank"><i class="icon-facebook-sign"></i> </a> <a
												href="https://twitter.com/bbaheer" target="_blank"><i
												class="icon-twitter-sign"></i> </a> <a
												href="https://google.com/+BaseerBaheer" target="_blank"><i
												class="icon-google-plus-sign"></i> </a> <a
												href="https://af.linkedin.com/bbaheer" target="_blank"><i
												class="icon-linkedin-sign"></i> </a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</p>
				</div>
				<div class="tab-pane" id="org-behind" hidden>
					<h2>Organizations Behind</h2>
					<hr>
					<div class="row-fluid" style="margin: 0;">
						<div class="span6">
							<h3 style="padding-top: 30px;">TechNation</h3>
						</div>
						<div class="span6">
							<img alt="TechNation" class="pull-right"
								src="assets/img/technation-logo.png">
						</div>
					</div>
					<br>
					<p>TechDeira is an initiative by Afghanistan’s leading community
						technology firm, TechNation. The company engages in application
						development, education, incubation, community technology, public
						relations, research and policy analysis. It is governed and
						managed by a team of experienced entrepreneurs, industry leaders,
						and practitioners who are busy developing their economies and
						enriching their societies. TechNation addresses the technology
						needs of citizens transforming Afghanistan into a
						technology-enabled nation. Follow TechNation for more information.</p>
				</div>
			</div>
		</div>
	</section>
	<span id="media">&nbsp; <br> <br> <br> <br>
	</span>
	<section class="intro">
		<div class="intro-header">
			<h1 class="hidden-phone odd">Media</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop odd">Media</h1>
			<p class="hidden-phone">TechDeira on Media</p>
		</div>

		<div id="mediatd" class="intro-content well blue">
			<div class="well-header">
				<h5 class="hidden-phone">Media</h5>
			</div>
			<div class="well-content">
				<div class="tabbable">
					<!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab21" data-toggle="tab">Blog</a></li>
						<li><a href="#tab22" data-toggle="tab">Announcement</a></li>
						<li><a href="#tab23" data-toggle="tab">Press Releases</a></li>
						<li><a href="#tab24" data-toggle="tab">Press Coverage</a></li>
						<li><a href="#tab25" data-toggle="tab">Photos</a></li>
						<li><a href="#tab26" data-toggle="tab">Videos</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab21">
							<h2>Blog</h2>
						</div>
						<div class="tab-pane" id="tab22">
							<h2>Announcements</h2>
						</div>
						<div class="tab-pane" id="tab23">
							<h2>Press Releases</h2>
							<div class="well"><br>
								<center>
									<h3>
										<strong>Regenerating Afghanistan's Economic Development
											Through Online Entrepreneurship </strong>
									</h3>
									<h5>27th of January 2014</h5><br>
								</center>
								<p>Technology offers a diverse opportunity to increase economic
									development and Afghanistan is embracing this change.</p>
								<p>Through the promotion of technology as a tool for this
									development TechDeira takes an innovate approach to help
									Afghan's develop their skills and capacity. We were pleased to
									deliver a half day workshop on "Online Entrepreneurship" on Jan
									26, 2015. The workshop was aimed at encouraging young
									entrepreneurs to explore innovative ways of using technology.
									Mr. Fouad Bajwa, a renowned international ICT expert,
									introduced participants to how online work and entrepreneurship
									can be used to generate income-independent of your location in
									Afghanistan.</p>
								<p>Afghanistan has a rapidly growing youth labour force with
									reports (International Labour Organization Report, 2012)
									estimating the country has over 400,000 new labour market
									entrants each year, it therefore becomes important for the
									country to create new employment opportunities to meet this
									high demand. And it is our belief that the development of
									online business's and tech sets-ups can positively transform
									this situation.</p>
								<p>Over the last ten years Afghanistan, practically its youth
									generation has embraced technology usage and the power the
									internet can offer. Internet usage itself has grown from an
									estimated 200,000 in 2006 to over 1.8 million in 2012.
									(Internews Report, 2012) With this growing trend and the
									opportunity for Online Entrepreneurship development
									TechNation's President, Omar Mansoor Ansari, believes,</p><br>
								<blockquote>
									<p style="font-style: italic;">Technology provides a unique
										employment opportunity for youth. Teaching young women and men
										on how they can earn an income through working online can help
										address Afghanistan's unemployment challenges. This is what we
										need to work on.</p>
									<small>Omar Mansoor Ansari</small>
								</blockquote>
								<p>Over the last few years the development of online and tech
									start-up companies has seen success in a number of African
									countries with Nigeria and Kenya demonstrating how new
									companies have been able to attract foreign investment and
									boost their country's economy. (Penn Society for International
									Development, 2012)</p>
								<p>TechDeira is a community technology centre by TechNation.
									TechDeira is a common platform for professionals, academics,
									business community, civil society players, policymakers, public
									workers, political activists, and mass media actors. Providing
									unique opportunities for Afghan's to achieve both personal and
									professional development goals. Our Online Entrepreneurship
									Workshop provided participants with a great opportunity to meet
									other entrepreneurs and learn how they can create or improve
									their employment and help add economic development to their
									communities.</p>
							</div>
						</div>
						<div class="tab-pane" id="tab24">
							<h2>Press Coverage</h2>
						</div>
						<div class="tab-pane" id="tab25">
							<h2>Photos</h2>
						</div>
						<div class="tab-pane" id="tab26">
							<h2>Videos</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<span id="getcontact">&nbsp; <br> <br> <br> <br>
	</span>
	<section class="intro">
		<div class="intro-header">
			<h1 class="hidden-phone even">Contact</h1>
			<h1 style="font-size: 40px;" class="hidden-desktop odd">Contact</h1>
			<p class="hidden-phone">Thank you for visiting out little slice of
				the internet. If you would like to get into contact with our team
				simply use the following details. Cheers!</p>
		</div>
		<div class="intro-content well orange span12">
			<div class="row">
				<div class="span6 well send-message-div">

					<div class="well-header">
						<h5>Send us your messages</h5>
					</div>
					<div class="well-content">
						<div class="alert alert-success email-success"
							style="display: none;"></div>
						<form class="send-message" id="send-message">
							<p>Name:</p>
							<p>
								<input type="text" id="form-name" class="btn-block"
									placeholder="Your Name here..." required>
							</p>
							<p>Email:</p>
							<p>
								<input type="email" id="form-email" class="btn-block"
									placeholder="Enter a valid email..." required>
							</p>
							<p>Message:</p>
							<p>
								<textarea cols="102" rows="10" id="form-message" required
									placeholder="Please enter your message and comments here..."></textarea>
							</p>
							<input type="button" value="Send!"
								class="btn span2 orange btn-submit pull-right"
								style="text-align: center;" /><input type="reset"
								class="btn hidden-phone red pull-right" value="Cancel"
								style="margin-left: 5px;">
						</form>
					</div>
				</div>
				<div class="span6 well blue">
					<div class="well-header">
						<h5>Find us on Google Map</h5>
					</div>
					<div class="well-content">
						<iframe width="100%" height="350" frameborder="0" scrolling="no"
							marginheight="0" marginwidth="0"
							src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=TechNation+Kabul&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=44.744674,93.076172&amp;ie=UTF8&amp;hq=TechNation&amp;hnear=Kabul,+Afghanistan&amp;ll=34.533509,69.202837&amp;spn=0.045677,0.090895&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=133164435317091729&amp;output=embed"></iframe>
						<br /> <small><a
							href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=TechNation+Kabul&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=44.744674,93.076172&amp;ie=UTF8&amp;hq=TechNation&amp;hnear=Kabul,+Afghanistan&amp;ll=34.533509,69.202837&amp;spn=0.045677,0.090895&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=133164435317091729"
							style="color: #0000FF; text-align: left">View Larger Map</a> </small>

					</div>
				</div>
			</div>
		</div>
	</section>

</div>
<!-- Java Modal -->
<div id="javaModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Java Programming - Outline</h3>
  </div>
  <div class="modal-body">
    <div>
    • Language Components
    <br/>
</div>
<div>
    • Object Oriented Programming
</div>
<div>
    • Methods
</div>
<div>
    • Arrays
</div>
<div>
    • Encapsulation
</div>
<div>
    • Inheritance and Polymorphism
</div>
<div>
    • Abstract Classes and Interfaces
</div>
<div>
    • Exceptions
</div>
<div>
    • Input and Outputs in Java
</div>
<div>
    • Thread
</div>
<div>
    • Collections
</div>
<div>
    • Networking
</div>
<div>
    <br/>
</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<!-- Web Development Modal -->
<div id="webModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Web Development - Outline</h3>
  </div>
  <div class="modal-body">
    <div>
    <div>
        <br/>
    </div>
    <div>
        • Fundamentals
    </div>
    <div>
        • System Development Model
    </div>
    <div>
        • Web Design Concepts
    </div>
    <div>
        • HTML
    </div>
    <div>
        • CSS
    </div>
    <div>
        • JavaScript Core Skills
    </div>
    <div>
        • HTML5
    </div>
    <div>
        • Frameworks
    </div>
    <div>
        • The Architecture of Web Applications
    </div>
    <div>
        • Design Patterns
    </div>
    <div>
        • Database Driven Web Applications
    </div>
    <div>
        • PHP
    </div>
    <div>
        • Database Programming with PHP/MySQL
    </div>
    <div>
        • Ajax
    </div>
</div>
<div>
    <br/>
</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<!-- Linux Administration Modal -->
<div id="linuxModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Linux System Administration - Outline</h3>
  </div>
  <div class="modal-body">
<div>
    <div>
        <div>
            • Server Installation
            <br/>
        </div>
        <div>
            • Using the command line interface (CLI) and sudo
        </div>
        <div>
            • Package Management
        </div>
        <div>
            • Networking
        </div>
        <div>
            • Permissions - User and File Management
        </div>
        <div>
            • Proxy Server
        </div>
        <div>
            • DNS Server
        </div>
        <div>
            • Web Servers
        </div>
        <div>
            • Database Server
        </div>
        <div>
            • Email Server
        </div>
        <div>
            • File Server
        </div>
        <div>
            • LAMP Server
        </div>
        <div>
            • Samba File Server
        </div>
        <div>
            • Server Security
        </div>
        <div>
            • OpenSSH Server
        </div>
        <div>
            • Print Server
        </div>
        <div>
            • Monitoring
        </div>
    </div>
</div>  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<!-- Web Development Modal -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Register for our courses</h3>
  </div>
  <div class="modal-body">
  	<div class="alert alert-success" id="successAlert" style="display:none">Success</div>
  	<div class="alert alert-error" id="errorAlert" style="display:none">Warning</div>
	<!-- Edited by Ali Sajjad Hosaini -->
  	<form class="form-horizontal" id="registerForm">
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Full Name</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" class="input-large" name="fullname" placeholder="Full name" required>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputPassword">Address</label>
		    <div class="controls">
		    	<textarea name="address" cols="40" rows="5"></textarea>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Gender</label>
		    <div class="controls">
		      <input type="radio" name="gender" value="male"> Male<br>
		      <input type="radio" name="gender" value="female"> Female<br>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Home Phone Number</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" class="input-large" name="homephone" placeholder="Home Phone Number">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Cell Phone</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" class="input-large" name="cellphone" placeholder="Cell Phone Number" required>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
		    <div class="controls">
		      <input type="email" id="inputEmail" class="input-large" name="email" placeholder="Email" required>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Date of Birth</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" class="input-mini" name="dob-day" placeholder="Day" required>
		      <input type="text" id="inputEmail" class="input-mini" name="dob-month" placeholder="Month" required>
		      <input type="text" id="inputEmail" class="input-small" name="dob-year" placeholder="Year" required>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Employer</label>
		    <div class="controls">
		      <input type="text" id="inputEmail" class="input-large" name="employer" placeholder="Employer">
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="inputEmail">Choose Courses</label>
		    <div class="controls">
<input type="checkbox" name="webcourse" value="yes"> <strong> &nbsp; Web Development </strong><br>(Sunday, Tuesday, Thursday -- 3:00PM to 4:30PM)<hr>
<input type="checkbox" name="javacourse" value="yes"> <strong> &nbsp; Java Programming </strong><br>(Saturday, Monday, Wednesday -- 5:00PM to 6:30PM)<hr>
<input type="checkbox" name="linuxcourse" value="yes"> <strong> &nbsp; Linux System Administration </strong><br>(Thursdays -- 8:30AM to 12:30PM)
		    </div>
		  </div>
  </div>
  <div class="modal-footer">
  	<button class="btn btn-success span2 blue pull-right" name="submit" type="submit">Register</button>
  </div>
</form>

</div>
<div id="memberModal" class="modal hide fade" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">
			<i class="icon-remove"></i>
		</button>
		<h3>
			<strong>Membership Benefits</strong>
		</h3>
	</div>
	<div class="modal-body">
		<p>Here are your top 10 reasons why you should become a TechDeira
			Member:</p>
		<ol>
			<li>Facility for a 24/7 internet connection through WiFi and open lab
				time</li>
			<li>Monthly member meetings and newsletters keeping members current
				on technology evolution</li>
			<li>Learning and sharing experiences through various TechDeira
				support programs such as freelance technology business, authoring
				books and launching publications by members</li>
			<li>Enhancing technical and professional capacity by getting help in
				setting career goals, participating in internship and job training
				programs, and enrolling in lectures and training courses</li>
			<li>Professional network and dozens of tech users and developers
				communities and participation in local, national, regional and
				international conferences, awards and events</li>
			<li>Hosting events at TechDeira and assistance in acquiring
				sponsorships</li>
			<li>Creating an Income Stream by developing apps and content and
				getting your products promoted</li>
			<li>Getting technical support in troubleshooting your software and
				hardware tools and devices,</li>
			<li>Facility to print, scan, photocopy and record your important
				documents</li>
			<li>Receive discounts and special offers on products and services</li>
		</ol>
	</div>
	<div class="modal-footer">
		<a href="login/login.php?role=member#register"
			class="btn blue input-medium"><strong>JOIN NOW</strong> </a> <a
			href="#" data-dismiss="modal" aria-hidden="true" class="btn grey">Close</a>
	</div>
</div>
<!-- INSTRUCTOR MODAL -->
<div id="instructorModal" class="modal hide fade" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">
			<i class="icon-remove"></i>
		</button>
		<h3>
			<strong>Instructorship Benefits</strong>
		</h3>
	</div>
	<div class="modal-body">
		<p>Here are the top 10 ways how being a TechDeira Instructor helps you
			and Afghanistan:</p>
		<ol>
			<li>Opportunity to share your knowledge and experience and contribute
				to the workforce development of Afghanistan</li>
			<li>Be recognized through Hall of Fame</li>
			<li>Connect with knowledge resources and other instructors and
				enhance your experiences through unique technology platforms</li>
			<li>Create an income stream by gaining financial returns for your
				contribution as a lecturer</li>
			<li>Have free access to the internet through WiFi and OpenLab time</li>
			<li>Participation in local, national, regional and international
				conferences, awards and events and network with different tech
				communities</li>
			<li>Monthly member meetings and newsletters keeping members current
				on technology evolution</li>
			<li>Getting technical support in troubleshooting your software and
				hardware tools and devices</li>
			<li>Facility to print, scan, photocopy and record your important
				documents</li>
			<li>Receive discounts and special offers on products and services</li>
		</ol>
	</div>
	<div class="modal-footer">
		<a href="login/login.php?role=instructor#register"
			class="btn blue input-medium"><strong>JOIN NOW</strong> </a> <a
			href="#" data-dismiss="modal" aria-hidden="true" class="btn grey">Close</a>
	</div>
</div>

<div id="volunteerModal" class="modal hide fade" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">
			<i class="icon-remove"></i>
		</button>
		<h3>
			<strong>Instructorship Benefits</strong>
		</h3>
	</div>
	<div class="modal-body">
		<p>Here are top 10 ways how volunteering with TechDeira can help you
			achieve your career development goals:</p>
		<ol>
			<li>Learn, share and be exposed to up-to-date technologies and
				educational resources</li>
			<li>Learn by doing through working closely with top-notched industry
				leaders, technologists, developers, instructors and young
				professionals</li>
			<li>Enhance your leadership and managerial capabilities by not
				learning leadership but practicing it</li>
			<li>Become a writer and speaker-- we are a network of writers,
				bloggers, editors, and speakers. Being with us you will learn great
				deal on writing and public speaking</li>
			<li>Have free access to the internet through WiFi and OpenLab time</li>
			<li>Participation in local, national, regional and international
				conferences, awards and events and network with different tech
				communities</li>
			<li>Monthly member meetings and newsletters keeping members current
				on technology evolution</li>
			<li>Getting technical support in troubleshooting your software and
				hardware tools and devices</li>
			<li>Facility to print, scan, photocopy and record your important
				documents</li>
			<li>Receive discounts and special offers on products and services</li>
		</ol>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn blue input-medium"><strong>JOIN NOW</strong> </a>
		<a href="#" data-dismiss="modal" aria-hidden="true" class="btn grey">Close</a>
	</div>
</div>
<!-- END OF MAIN HEADER -->
<!-- START OF about SECTION -->

<!-- END OF about SECTION -->
<script type="text/javascript" src="assets/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript"
	src="assets/js/library/bootstrap-carousel.js"></script>
<script type="text/javascript"
	src="assets/js/library/bootstrap-transition.js"></script>
<script type="text/javascript"
	src="assets/js/library/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="assets/js/myscript.js"></script>
<script type="text/javascript"
	src="assets/js/library/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript"
	src="assets/js/library/bootstrap-modal.js"></script>
<script type="text/javascript"
	src="assets/js/library/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="assets/js/flatpoint_core.js"></script>

<script type="text/javascript" src="assets/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".goabout").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#about").offset().top
			}, 1000);
		});

		$(".gogetcontact").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#getcontact").offset().top
			}, 1000);
		});

//saber
    $(".gojava").on("click",function(){
      $('html, body').animate({
        scrollTop: $("#getjava").offset().top
      }, 1000);
    });

    $(".goweb").on("click",function(){
      $('html, body').animate({
        scrollTop: $("#getjava").offset().top
      }, 1000);
    });

    $(".golinux").on("click",function(){
      $('html, body').animate({
        scrollTop: $("#getjava").offset().top
      }, 1000);
    });
//

		$("#gopage-top").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#page-top").offset().top
			}, 1000);
		});
		$(".gogetinv").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#getinv").offset().top
			}, 1000);
		});
		$(".goservices").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#services").offset().top
			}, 1000);
		});

		$(".gonext").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#next").offset().top
			}, 1000);
		});
		$(".gomedia").on("click",function(){
			$('html, body').animate({
				scrollTop: $("#media").offset().top
			}, 1000);
		});
	});

	$(function(){
		$("#goabout").on("click",function(){
			$("#team").hide();
			$("#org-behind").hide();
			$("#about1").fadeIn();
		});

		$("#goteam").on("click",function(){
			$("#about1").hide();
			$("#org-behind").hide();
			$("#team").fadeIn();
		});

		$("#go-org-behind").on("click",function(){
			$("#team").hide();
			$("#about1").hide();
			$("#org-behind").fadeIn();
		});
	});

	/* Email Script */
	$(function(){
		$("#send-message .btn-submit").on("click",function(){
			var name = $("#form-name").val();
		    var email = $("#form-email").val();
		    var message = $("#form-message").val();
		if( /(.+)@(.+){2,}\.(.+){2,}/.test(email)  && name != "" && message != ""){
			 		$('.send-message-div').css({ opacity: 0.5 });
				    var data = "name="+name+"&email="+email+"&message="+message;
				$.ajax({
				    type: "POST",
				    url: "execute/email.php",
				    data: data,
				    success: function(){
				    	$('.send-message-div').css({ opacity: 1 });
				    	$('.email-success').removeClass('alert-error').addClass('alert-success');
				        $('.email-success').fadeIn(1000).html("<strong>Thank you, </strong>your message has been sent successfully.");
				    }
				});

		  // valid email
		} else {
		     $('.email-success').addClass('alert-error').removeClass('alert-success');
		     $('.email-success').fadeIn(1000).html("ERROR: Not a valid data entry, check whether fields are blank or email is invalid.");

		}
		});
	});

	$(function(){
		//callback handler for form submit
		$("#registerForm").submit(function(e)
		{
			  e.preventDefault(); //STOP default action
		    var postData = $(this).serialize();
		    $.ajax(
		    {
		        url : "temp/register.php",
		        type: "POST",
		        data : postData,
		        success:function(data, textStatus, jqXHR)
		        {
		            if(data == "success"){
		            	$("#successAlert").show().html("Congratulations, Registered Successfully").attr("tabindex",-1).focus();
		            } else {
		            	$("#errorAlert").show().html("Warning: " + data).attr("tabindex",-1).focus();
		            }
		        },
		        error: function(jqXHR, textStatus, errorThrown)
		        {
		            alert("AJAX failed");
		        }
		    });
		    e.unbind(); //unbind. to stop multiple form submit.
		});

	});
	</script>

<?php
	include 'footer.php';
	?>
