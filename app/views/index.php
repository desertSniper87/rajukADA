﻿<!DOCTYPE HTML>
<html>
	<head>
		<title>রাজধানী উন্নয়ন কতৃপক্ষ</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600|Source+Code+Pro" rel="stylesheet" />
		<!--[if lte IE 8]><script src="js/html5shiv.js" type="text/javascript"></script><![endif]-->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>		
		<script src="js/skel.min.js">
		{
			prefix: 'css/style',
			preloadStyleSheets: true,
			resetCSS: true,
			boxModel: 'border',
			grid: { gutters: 30 },
			breakpoints: {
				wide: { range: '1200-', containers: 1140, grid: { gutters: 50 } },
				narrow: { range: '481-1199', containers: 960 },
				mobile: { range: '-480', containers: 'fluid', lockViewport: true, grid: { collapse: true } }
			}
		}
		</script>
		<script>
			$(function() {

				// Note: make sure you call dropotron on the top level <ul>
				$('#main-nav > ul').dropotron({ 
					offsetY: -10 // Nudge up submenus by 10px to account for padding
				});

			});
		</script>
		<script>
			// DOM ready
			$(function() {
    
			// Create the dropdown base
			$("<select />").appendTo("nav");
   
			// Create default option "Go to..."
			$("<option />", {
				"selected": "selected",
				"value"   : "",
				"text"    : "Menu"
			}).appendTo("nav select");
   
			// Populate dropdown with menu items
			$("nav a").each(function() {
			var el = $(this);
			$("<option />", {
				"value"   : el.attr("href"),
				"text"    : el.text()
			}).appendTo("nav select");
			});
   
			// To make dropdown actually work
			// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
			$("nav select").change(function() {
				window.location = $(this).find("option:selected").val();
			});
  
			});
		</script>	
	</head>
	<body>
		<div id="header_container">		
		    <div class="container">
			<!-- Header -->
				<div id="header" class="row">
					<div class="4u">
						<div class="wrapper">
							<h1><a href="index.html">রাজউক<span class="header_colour"> ADA</span></a></h1>
							<h2>স্বয়ংক্রিয় বিনির্মান ব্যাবস্থা (Automated Development Authority)</h2>
					    </div>
					</div>
					
					<nav id="main-nav" class="8u">
						<ul>
							<li><a class="active" href="/">নীড়পাতা</a></li>
							<li><a href="application">আবেদন ফর্ম</a></li>
								<!--ul>
									<li><a href="landUsageClearance">ভূমি ব্যাবহারের আবেদন</li>
									<li><a href="buildingPermit"বিল্ডিং পারমিটের আবেদন></li>
								</ul-->
							<li><a href="message">বার্তা</a></li>
							<li><a href="complaint">অভিযোগ</a></li>							
							<li><a href="#">আবেদন </a>				
									<ul>
										<li><a href="#">অনুমোদিত আবেদনসমূহ</a></li>
										<li><a href="#">অননুমোদিত আবেদনসমূহ</a></li>
									</ul>
							</li>
							<li><a href="login">লগিন</a></li>
							<li><a href="employee/login">কর্মচারী লগইন</a></li>
						</ul>
					</nav>
				</div>
			</div>	
			
		    <div class="container">						
				<div class="12u">
					<div id="wrapper-banner">						
						<!-- Banner -->								
						<div id="banner">
							<a href="#"><img src="images/banner.jpg" alt="banner image" /></a>
						</div>	
					</div>
				</div>						
			</div>
			
        </div>		

		<div id="site_content">
		
		    <div class="container">						
				<div class="12u">
					<div id="strapline">						
						<h2>রাজধানী  উন্নয়ন কতৃপক্ষ - স্বয়ংক্রিয় বিনির্মান ব্যাবস্থায় আপনাকে স্বাগতম</h2>
					</div>
				</div>						
			</div>		
		
			<div class="container">			
			
				<!-- Features -->			
				<div class="row">									
					
					<section class="4u">
						<div id="sidebar">
							<section class="12u">
								<h3>খবর</h3> 
								<h4>নতুন ওয়েবসাইট</h4>
								<h5>March 1st, 2014</h5>
								<p>2014 সালে আমরা নতুন ওয়েবসাইট তৈরী করেছি. <a href="#">Read more</a></p>
							</section>
							<section class="12u">
								<h3>Useful Links</h3>
								<ul>
									<li><a href="#">First Link</a></li>
									<li><a href="#">Another Link</a></li>
									<li><a href="#">And Another</a></li>
									<li><a href="#">Last One</a></li>
								</ul>
							</section>
						</div>
					</section>

					<section class="4u">				
						
						<h3> ১৯৪৭ সালে ভারত বিভক্তির পর ঢাকা পূর্ব পাকিস্তানের প্রাদেশিক আসনে পরিণত হয়।    সামাজিক এবং বাহ্যিক অবকাঠামো ভেঙ্গে পরে । এ শহরের পরবর্তী সকল উন্নয়নে শৃংখলা বজায় রাখতে তড়িৎ পদক্ষেপ নেয়া প্রয়োজন।
</h3>
						<p>১৯৭১ সালের স্বাধীনতা যুদ্ধের পরে ঢাকা বাংলাদেশের রাজধানী হিসেবে আত্বপ্রকাশ করে।</p>
						<p>১৯৫১ সাল থেকে ১৯৭১ সাল পর্যন্ত জনসংখ্যা ০.২৮ মিলিয়ন থেকে বেড়ে ১.২ মিলিয়ন হয়।</p>
						<p>দ্রুত বর্ধনশীল শহরগুলোর মধ্যে ঢাকা অন্যতম। বর্তমানে জনসংখ্যা ১০ মিলিয়ন ছাড়িয়ে গেছে। যদিও অতীত পরিকল্পনায় জেলা শহর থেকে বিশ্বের বড় শহরগুলোর একটিতে পরিনত করার চেষ্টা করা হয়, অধিকাংশ-ই ব্যর্থ হয়। ফলে খুব দ্রুত জীবনযাত্রার মানের অবনতি ঘটে । </p>
						<p>(১৯৫৯ - ১৯৭৯) কিন্তু নতুন পরিকল্পনা প্রয়োগ না হতেই এটা সর্বোচ্চ দ্বিগুনভাবেই শেষ হয়েছিলো ১৯৯৫ সালে ।</p>
					
					</section>	

					<section class="4u">				
						
						<h3>Browser Compatibility</h3>
						<p>This template has been tested in the following browsers:</p>
						<ul>
							<li>Internet Explorer 9</li>
							<li>FireFox 24</li>
							<li>Google Chrome 31</li>
						</ul>						
					</section>						

				</div>
				
			</div>
        </div>	

		<div class="gallery-wrapper">
			<div class="container">					
					<div class="row">									
						
						<section class="3u">				
							<h4>Gallery Image 1</h4>
							<a href="#" class="image"><img src="images/image1.jpg" alt="image 1"/></a>					
						</section>	

						<section class="3u">				
							<h4>Gallery Image 2</h4>
							<a href="#" class="image"><img src="images/image2.jpg" alt="image 2"/></a>					
						</section>		

						<section class="3u">				
							<h4>Gallery Image 3</h4>
							<a href="#" class="image"><img src="images/image3.jpg" alt="image 3"/></a>					
						</section>		

						<section class="3u">				
							<h4>Gallery Image 4</h4>
							<a href="#" class="image"><img src="images/image4.jpg" alt="image 4"/></a>					
						</section>						

					</div>	
					<div class="row">									
						
						<section class="3u">				
							<h4>Gallery Image 5</h4>
							<a href="#" class="image"><img src="images/image2.jpg" alt="image 1"/></a>					
						</section>	

						<section class="3u">				
							<h4>Gallery Image 6</h4>
							<a href="#" class="image"><img src="images/image4.jpg" alt="image 2"/></a>					
						</section>		

						<section class="3u">				
							<h4>Gallery Image 7</h4>
							<a href="#" class="image"><img src="images/image1.jpg" alt="image 3"/></a>					
						</section>		

						<section class="3u">				
							<h4>Gallery Image 8</h4>
							<a href="#" class="image"><img src="images/image3.jpg" alt="image 4"/></a>					
						</section>						

					</div>	
			</div>
		</div>		
		
		<div class="footer-wrapper">	
			<div class="container">					
			<!-- Footer -->
				<footer>
					<p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
					<p><a href="index.html">নীড়পাতা</a> | <a href="application.html">আবেদন ফর্ম</a> | <a href="message.html">বার্তা</a> | <a href="complaint.html">অভিযোগ</a> | <a href="login.php">লগিন</a></p>
					<p>Copyright &copy; CSS3_catmint | <a href="http://skeljs.org/">skel.js</a> | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
				</footer>		
			</div>
		</div>
			
	</body>
</html>
