<!DOCTYPE HTML>
<html>
<head>
	<title>ETHNO Urban Profiling</title>
	<link rel="stylesheet" href="resources/css/all.css"/>
	<link rel="stylesheet" href="resources/app_css.css"/>
	<link rel="stylesheet" href="resources/w3.css"/>	
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
</head>

<body class="roboto" onresize="toggleClose('navBar');">

	<header class="w3-top">
		<div class="w3-indigo w3-xlarge w3-bar">
			<div class="w3-bar-item w3-indigo w3-button w3-hide-large" onclick="toggle('navBar');"><i class="fa fa-bars"></i></div>
			<div class="w3-bar-item">ETHNO - Urban Profiling</div>
		</div>
	</header>
	
	<div class="spacer"></div>	
	
	<nav class="quattrocento">
		<div class="w3-sidebar ambient w3-col l2 w3-bar-block w3-hide-medium w3-hide-small">
			<? include('menu.php'); ?>
		</div>

		<div id="navBar" class="w3-sidebar ambient w3-animate-left w3-bar-block w3-hide w3-large">
			<? include('menu.php'); ?>
		</div>
	</nav>

	<div class="w3-row">
		<div class="w3-col l2 w3-hide-medium w3-hide-small">&nbsp;</div>
			<div class="w3-col l10 w3-black">
				<section id="" class="w3-padding">
					<div class="w3-row">
						<select class="w3-quarter w3-select w3-dark-grey" id="series1" onchange="">
							<option value="">Select Location</option>
							<option value="arienda">Lupang Arienda, Taytay</option>
							<option value="dumaguete">Foundation University, Dumaguete (for maintenance)</option>
						</select>
					</div>
				</section>
				
				<section id="section1" class="w3-padding">
					<div class="w3-xlarge">Lupang Arienda, Taytay, Rizal</div>
				</section>
				
				<section id="" class="w3-padding">
					<p>This shows KPIs on HUD to highlight the main figures being monitored by a dashboard.</p>
					<div class="w3-row">
						<div class="indicator w3-third">
							<div class="w3-bar w3-padding w3-orange w3-hover-yellow">
								<div class="w3-bar-item">LatLong</div>
								<div class="w3-bar-item w3-right" id="indicator1">14.54, 121.10</div>
							</div>
						</div>

						<div class="indicator w3-third">
							<div class="w3-bar w3-row w3-padding w3-blue w3-hover-light-blue">
								<div class="w3-bar-item">Land Use</div>
								<div class="w3-bar-item w3-right" id="indicator2" >16.62%</div>
							</div>
						</div>

						<div class="indicator w3-third">
							<div class="w3-bar w3-padding w3-green w3-hover-light-green">
								<div class="w3-bar-item">Communities</div>
								<div class="w3-bar-item w3-right" id="indicator3" >46</div>
							</div>
						</div>				
					</div>
					<br/>
					<!-- <button class="w3-button w3-blue" onclick="reloadIndicators();">Reload</button>	 -->
					<hr/>
				</section>
				<section id="" class="w3-padding">
					<div class="w3-xlarge"></div>
					<div class="w3-row-padding w3-margin-top">
						<div class="w3-third">
							<div class="w3-card-2 w3-center">
								<img src="images/drone_arienda.png" style="height:350px">
							<div class="w3-container">
								<h5 id="drone_place">Aerial Imagery</h5>
							</div>
						</div>
					</div>

					<div class="w3-third">
						<div class="w3-card-2 w3-center">
							<img src="images/streetfoot_arienda.png" style="height:350px">
							<div class="w3-container">
								<h5>Building Footprint and Road Networks</h5>
							</div>
						</div>
					</div>

					<div class="w3-third">
						<div class="w3-card-2 w3-center">
							<img src="images/community_arienda.png" style="height:350px">
							<div class="w3-container">
								<h5>Road Network Communities</h5>
							</div>
						</div>
					</div>
				</section>

				

				<section id="section2" class="w3-padding">
					<hr>
					<div class="w3-xlarge">Urban Profile (Taytay, Rizal)</div>
					<div class="w3-row">
						<div class="indicator w3-third">
							<div class="w3-bar w3-padding w3-orange w3-hover-yellow">
								<div class="w3-bar-item">Poverty Incidence</div>
								<div class="w3-bar-item w3-right" id="indicator1">3.51%</div>
							</div>
						</div>
						
						<div class="indicator w3-third">
							<div class="w3-bar w3-row w3-padding w3-blue w3-hover-light-blue">
								<div class="w3-bar-item">Revenue</div>
								<div class="w3-bar-item w3-right" id="indicator2" >₱723,785,579.90 (2016)</div>
							</div>
						</div>
						
						<div class="indicator w3-third">
							<div class="w3-bar w3-padding w3-green w3-hover-light-green">
								<div class="w3-bar-item">Population</div>
								<div class="w3-bar-item w3-right" id="indicator3">117,830 Residents</div>
							</div>
						</div>				
					</div>
					<!-- <button class="w3-button w3-blue" onclick="reloadIndicators();">Reload</button>	 -->
					<hr/>
					
					<section id="section1a" class="w3-padding" onchange="generateTable()">
						<select name="" id="gender">
							<option value="">Select Gender:</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
						
						<select name="" id="age_group">
							<option value="">Select Age Group</option>
							<option value="genz">Gen Z (18-24)</option>
							<option value="mill">Millennial (25-40)</option>
							<option value="genx">Gen X (41-56)</option>
							<option value="boomers">Boomers (57+)</option>
						</select>
						<!-- <select name="" id="interests">
							<option value=""></option>
							<option value="single">Single</option>
							<option value="married">Married</option>
							<option value="college">College</option>
							<option value="hs">Highschool</option>
							<option value="emp">Employed</option>
							<option value="nature">Nature</option>
							<option value="pol">Politics</option>
							<option value="sust">Sustainability</option>
							<option value="shop">Shopping Malls</option>
							<option value="gamb">Gambling</option>
							<option value="dig">Digitally Active</option>
							<option value="slum">Slums</option>
							<option value="pollu">Pollution</option>
							<option value="traffic">Traffic</option>
						</select> -->
					</section>

					<p>This shows the Social Interests of the local population within 5 mile radius disaggregated by gender, age group, marital status, educational background and interests</p>
					<div class="w3-responsive">
						<table class="w3-table w3-border">
							<thead>
							<tr>
								<th>Gender</th>
								<th>Age Group</th>
								<th>Single</th>
								<th>Married</th>
								<th>College</th>
								<th>High School</th>
								<th>Employed</th>
								<th>Nature</th>
								<th>Politics</th>
								<th>Sustainability</th>
								<th>Shopping Malls</th>
								<th>Gambling</th>
								<th>Digitally Active</th>
								<th>Slums</th>
								<th>Pollution</th>
								<th>Traffic</th>
							</tr>
							</thead>
							<tbody id="data">
	
							</tbody>
						</table>
					</div>
				</section>

				<section id="section3" class="w3-padding">
					<hr>
					<div class="w3-xlarge">Satellite Indicators</div>
					<table class="w3-table w3-border w3-responsive">
					<thead>
						<tr>
							<th>NDBI</th>
							<th>NDVI</th>
							<th>NO2</th>
							<th>PM2.5</th>
							<th>Population Density (SEDAC)</th>
						</tr>
						</thead>
						<tbody id="satellite">

						</tbody>
					</table>
				
				</section>
	
				<section id="section4" class="w3-padding">
					<hr>
					<div class="w3-xlarge">LGU Performance by Competitiveness Index (by GovPH CMCI)</div>
					<table class="w3-table w3-border w3-responsive">
					<thead>
						<tr>
							<th>Area</th>
							<th>2014</th>
							<th>2015</th>
							<th>2016</th>
							<th>2017</th>
							<th>2018</th>
							<th>2019</th>
							<th>2020</th>
						</tr>
						</thead>
						<tbody id="cityperf">

						</tbody>
					</table>
				</section>

				<section id="section5" class="w3-padding">
					<div class="w3-xlarge" >Movement Range Reports</div>
					<p>This shows how people move in a certain location to indicate activity and mobility in the area and track the seasonal indicators.</p>
					
					<div class=""><canvas id="myChart" style="height: 350px;"></canvas></div>
					<hr/>
				</section>

				<section id="about" class="w3-padding">
					<div class="w3-xlarge" >About</div>
					<div class="w3-small">ETHNO urban profile integrates several sources of digital data and local statistics/secondary data sources to generate detailed insights about locations and communities.</div>
					<hr/>
				</section>			

				<footer class="w3-padding w3-small w3-indigo">
					&copy; ETHNO - Urban Profiling
				</footer>
			</div>	
	</div>
	
	<script src="chart/Chart.bundle.js"></script>
	<script src="resources/app_js.js"></script> 


</body>
</html>