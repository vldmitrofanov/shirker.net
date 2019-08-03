<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Stellar by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">About me</a></li>
							<li><a href="#first">Skills</a></li>
							<li><a href="#second">Experience</a></li>
							<li><a href="#cta">Contact me</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h1>Full-stack web developer for hire</h1>
										</header>
										<p>Hi, I'm Vladimir Mitrofanov aka Shirker, a web-developer from Saint Petersburg, Russia. 
											A strong conceptual thinker who has a keen interest in all things related to the Internet. I do have the ability and experience
											needed to design and execute complex software projects for a diverse variety of users. I am committed to having an impact
											on the future of any company that I work for, and possess the enthusiasm and commitment to learn and develop my
											career within a fast paced and growing business. I have a track record of building fluid and dynamic interfaces that are use friendly, and which positively impact on people’s lives. Right now I am looking for a suitable opportunity that will not only
											take my career to the next level, but will also allow me to work alongside a very specialised team. </p>
										{{--<ul class="actions">
											<li><a href="generic.html" class="button">Read the autobiography</a></li>
										</ul>--}}
									</div>
									<span class="image"><img src="images/vlad.png" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Key skills and competencies</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon solid major style1 fa-code"></span>
										<h3>Front-end Developer</h3>
										<p>VueJS, NuxtJS(Server-Side Rendered), Vanilla JavaScript, SASS, LESS, Webpack, Gulp, NodeJS, npm, jQuery, responsive mobile-first/desktop-first design.</p>
									</li>
									<li>
										<span class="icon major style3 fa-php"></span>
										<h3>Back-end Developer</h3>
										<p>PHP7 (Laravel 5+), Vanilla PHP, Golang (Gin, GORM), Perl(a little). REST API, JWT, oAuth, Queues etc.. Databases: MySQL/Maria, Postgres, Mongo, Firebase. Have knowledge of WordPress development (and it's API), CodeIgniter</p>
									</li>
									<li>
										<span class="icon major style5 fa-linux"></span>
										<h3>System Administrator</h3>
										<p>Started with my own Web-Hosting, I had my hands on FreeBSD, RH alike Linux (Fedora, Centos), Debian alike (Ubuntu, Debian), SUSE, Solaris, LFS. A bit of Cisco. Asterisk 1.4, 1.6 expert. </p>
									</li>
								</ul>
								<footer class="major">
									<ul class="actions special">
										<!--<li><a href="generic.html" class="button">Learn More</a></li>-->
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Work Experience & Career History</h2>
									<p>Started in 2007 my very first scripting was done on FreeBSD 6<br />
									Running with PHP4 + MySQL 5.0 + Apache 1.3</p>
								</header>
								{{--<ul class="statistics">
									<li class="style1">
										<span class="icon solid fa-code-branch"></span>
										<strong>5,120</strong> Etiam
									</li>
									<li class="style2">
										<span class="icon fa-folder-open"></span>
										<strong>8,192</strong> Magna
									</li>
									<li class="style3">
										<span class="icon solid fa-signal"></span>
										<strong>2,048</strong> Tempus
									</li>
									<li class="style4">
										<span class="icon solid fa-laptop"></span>
										<strong>4,096</strong> Aliquam
									</li>
									<li class="style5">
										<span class="icon fa-gem"></span>
										<strong>1,024</strong> Nullam
									</li>
								</ul>--}}
								<div class="content content0">
									<div class="left">
										<ul>
											<li>2007 - 2009</li>
										</ul>
										<span class="company-name">Inthost.biz web hosting service (owner)</span>
										<p>Running my own Web-Hosting service along with work as a tech-support for insa-payment terminals back in my home city S-Peterburg, Russia. 
											I've learnt basic web programming, maintanance and troubleshooting of PCs, servers and webservices, such as mail, web-server, database and so on
										</p>
										
										<ul>
											<li>2009 - 2017</li>
										</ul>
										<span class="company-name">724Care Inc, Cebu Philippines (IT manager, PHP Developer)</span>
										<p>In 2009 I decided to move over to the Philippines. 
											Applied as a technician to a call-center in Cebu City, after a while I was promoted to the IT manager position. 
											It was interesting job and I've gained much of my knowledge from the company founders  
											whose were skilled and experienced IT experts with strong IT-ingeneering background. 
											In a few years I became Asterisk (SIP server) expert, database maintainer (MySQL), Network engeneer. 
											In 2012 the company had high demand for a PHP developer. So as a part-timer I started to work as PHP coder,
											developing our own dialer (based on GNUDialer), which we sucessfully used for outbound calls. 
											The core of the dialer was written in C++, which I had to modify in order to work with the new agent's interface, 
											which I made in Vanilla PHP and jQuery.
											Another my project was <a href="https://github.com/vldmitrofanov/yp-downloader" target=_blank>PHP YellowPages parser</a> 
											(Vanilla PHP and Wordpress plugin). As an outbound callcenter we always were in needs of fresh leads. So my parser has come handy. 
											It could parse and download a few hundred thousands leads a day. Also a back-end, where operator can filter leads by zip-codes, cities or states, 
											remove duplicates, create order to download selected areas/businesses.
											All downloading was going through a proxies whose were downloaded and tested automatically. 
											Thousands lines of PHP code and Bash scripting I wrote made me think about turning into a web developer eventually.
										</p>
									</div>
									<div class="right">
										<ul>
											<li>2011 - current time</li>
										</ul>
										<span class="company-name">Upwork.com (part-time freelancer)</span>
										<p>
											To earn some extra income I started to work on-line on Freelancer.com and Odesk.com 
											(currently Upwork.com). Currently I don't maintain my Freelancer.com account. Link to my Upwork profile is included in the footer. 
										</p>

										
										<ul>
												<li>2017 - current time</li>
											</ul>
											<span class="company-name">EmbassyAlliance Travel (web developer)</span>
											<p class="sm-bt">
												Working full time as full-stack web developer. Completed several projects using PHP7 (Laravel), VueJS, NodeJS, MySQL, Postgres, Mongo, Redis (for the queues). 
												Each project includes 3-rd parties oAuth (Google+, Facebook), and online payment processing.
											</p>
											<p class="sm-bt">
												Three major projects I've done with EmbassyAlliance are: 
											</p>
											<p class="sm-bt">
												<a href="https://www.joyscoot.com">JoyScoot</a> scooter rental in Singapore. Part of this project is Web POS, which allows our operators to work 
												direcly with the databese of the scooters on their Cash Register
											</p>
											<p class="sm-bt">	
												<a href="https://www.attractionsbox.com">Attractions Box</a> online booking for the attractions tickets. Project is still in startup stage, but fully operating. 
												Currently we cover Singapore only.
											</p>
											<p>	
												<a href="https://www.embassy.camp">Embassy Camps</a> Summer camps for the children based in Malaysia and Singapore.
											</p>
										
												<h3>Education:</h3>
												<ul>
													<li>2004-2006 Saint Petersburg State University <br />(Saint Petersburg, Russia)</li>
												</ul>
												<p>Distance Education, attended a course "Computer science and computer technology"</p>
									</div>
								</div>
								<footer class="major">
									{{--<ul class="actions special">
										<li><a href="generic.html" class="button">Read More</a></li>
									</ul>--}}
								</footer>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>Contact me</h2>
									<p>If you want to hire me please contact me at any time.<br />
									Mostly I'm reachable through email or WhatsApp</p>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="mailto:shirker2006@gmail.com" class="button primary">Send email</a></li>
										<li><a href="https://api.whatsapp.com/send?phone=601127113327&text=Vladimir%20Mitrofanov,%20Full%20Stack%20Web%20Developer" target=_blank class="button">WhatsApp me</a></li>
									</ul>
								</footer>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Cookie policy</h2>
							<p>This website is using cookies, because cookies is the part of communication between framework, 
								which this website built on, and your web-browser to distinguish you from other users. By continuing to browse the site, you are agreeing to our use of cookies.</p>
							{{--<dd><ul class="actions">
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>--}}
						</section>
						<section>
							<h2>How to reach me</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd>Kuala Lumpur, Malaysia</dd>
								<dt>Phone</dt>
								<dd>+60 (11) 2711 3327</dd>
								<dt>Email</dt>
								<dd><a href="mailto:shirker2006@gmail.com">shirker2006@gmail.com</a></dd>
							</dl>
							<ul class="icons" style="display:flex">
								<li><a href="https://stackoverflow.com/users/2437063/shirker" target=_blank class="icon brands fab fa-stack-overflow alt"><span class="label">Stack Overflow</span></a></li>
								<li><a href="https://www.facebook.com/vladimir.mitrofanov.7" target=_blank class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.upwork.com/o/profiles/users/_~0192e6a122709c6306/" target=_blank class="icon brands alt upwork" style="width:2.65em;height: 2.65em;">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" style="enable-background:new 0 0 56.7 56.7;" version="1.1" viewBox="0 0 56.7 56.7" xml:space="preserve"><path style="fill:white" d="M42.4,17.7c-5.3,0-9.3,3.5-10.9,9c-2.5-3.9-4.5-8.3-5.6-12.1h-5.6v14.7c0,2.9-2.4,5.3-5.3,5.3c-2.9,0-5.3-2.4-5.3-5.3V14.7  H4.3v14.7c0,6.1,4.9,11,10.9,11c6,0,10.9-4.9,10.9-11v-2.5c1.1,2.2,2.5,4.6,4,6.7l-3.5,16.3h5.7L34.7,38c2.2,1.4,4.7,2.2,7.7,2.2  c6.1,0,11.1-5,11.1-11.4C53.5,22.7,48.5,17.7,42.4,17.7z M42.4,34.6c-2.2,0-4.5-1-6.3-2.5l0.6-2.2v-0.1c0.4-2.4,1.7-6.4,5.8-6.4  c3.1,0,5.6,2.5,5.6,5.6C48,32.1,45.3,34.6,42.4,34.6z"/></svg>
									<span class="label">Upwork</span></a></li>
								<li><a href="https://github.com/vldmitrofanov/" target=_blank class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								{{--<li><a href="#" target=_blank class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>--}}
							</ul>
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>