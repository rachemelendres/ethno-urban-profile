function toggle(element) {
    var x = document.getElementById(element);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function toggleClose(element) {
    var x = document.getElementById(element);
	x.className = x.className.replace(" w3-show", "");
}

function reloadIndicators() {
	var ind1 = Math.floor(Math.random() * 1000);
	var ind2 = Math.floor(Math.random() * 1000);
	var ind3 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	document.getElementById('indicator1').innerHTML = ind1;
	document.getElementById('indicator2').innerHTML = ind2;
	document.getElementById('indicator3').innerHTML = ind3;
	document.getElementById('indicator4').innerHTML = ind4;
	document.getElementById('indicator5').innerHTML = ind1;
	document.getElementById('indicator6').innerHTML = ind2;
	document.getElementById('indicator7').innerHTML = ind3;
	document.getElementById('indicator8').innerHTML = ind4;
}


function reloadProgress() {
	var ind1 = Math.floor(Math.random() * 75) / 100;
	var ind2 = Math.floor(Math.random() * 75) / 100;
	var ind3 = Math.floor(Math.random() * 75) / 100;
	var ind4 = Math.floor(Math.random() * 75) / 100;
	document.getElementById('progress1').innerHTML = Math.round(ind1 * 100) + '%';
	document.getElementById('progress2').innerHTML = Math.round(ind2 * 100) + '%';
	document.getElementById('progress3').innerHTML = Math.round(ind3 * 100) + '%';
	document.getElementById('progress4').innerHTML = Math.round(ind4 * 100) + '%';
	document.getElementById('progress1').style.width = Math.round(ind1 * 100) + '%';
	document.getElementById('progress2').style.width = Math.round(ind2 * 100) + '%';
	document.getElementById('progress3').style.width = Math.round(ind3 * 100) + '%';
	document.getElementById('progress4').style.width = Math.round(ind4 * 100) + '%';
}

async function loadData(){
	const load_dir = 'data/urbanprofile/taytay.csv';
	const load_satellite_dir = 'data/satellite/satellite.csv';
	const load_soc_dir = 'data/socialph/social.csv';
	const response = await fetch(load_dir);
	const sat_response = await fetch(load_satellite_dir);
	const soc_response = await fetch(load_soc_dir);
	const data = await response.text();
	const sat_data = await sat_response.text();
	const soc_data = await soc_response.text();
  
	const table = data.split('\r\n').slice(1);

	var temp = "";

	table.forEach(row => {
		const columns = row.split(',');
			if(columns[1] != "undefined"){
				temp += "<tr>";
				temp += "<td>" + columns[1] + "</td>";
				temp += "<td>" + columns[2] + "</td>";
				temp += "<td>" + columns[3] + "</td>";
				temp += "<td>" + columns[4] + "</td>";
				temp += "<td>" + columns[5] + "</td>";
				temp += "<td>" + columns[6] + "</td>";
				temp += "<td>" + columns[7] + "</td>";
				temp += "<td>" + columns[8] + "</td>";
				temp += "<td>" + columns[9] + "</td>";
				temp += "<td>" + columns[10] + "</td>";
				temp += "<td>" + columns[11] + "</td>";
				temp += "<td>" + columns[12] + "</td>";
				temp += "<td>" + columns[13] + "</td>";
				temp += "<td>" + columns[14] + "</td>";
				temp += "<td>" + columns[15] + "</td></tr>";
				document.getElementById('data').innerHTML = temp;
			}
		});

		var temp = "";
		const sat_table = sat_data.split('\r\n').slice(1);
		sat_table.forEach(row => {
			const columns = row.split(',');
				if(columns[0] == "Taytay"){
					temp += "<tr>";
					temp += "<td>" + columns[1] + "</td>";
					temp += "<td>" + columns[2] + "</td>";
					temp += "<td>" + columns[3] + "</td>";
					temp += "<td>" + columns[4] + "</td>";
					temp += "<td>" + columns[5] + "</td></tr>";
					document.getElementById('satellite').innerHTML = temp;
				}
			});
		
		var temp = "";
		const soc_table = soc_data.split('\r\n').slice(1);
		soc_table.forEach(row => {
			const columns = row.split(',');
				if(columns[0] == "Taytay"){
					temp += "<tr>";
					temp += "<td>" + columns[1] + "</td>";
					temp += "<td>" + columns[2] + "</td>";
					temp += "<td>" + columns[3] + "</td>";
					temp += "<td>" + columns[4] + "</td>";
					temp += "<td>" + columns[5] + "</td>";
					temp += "<td>" + columns[6] + "</td>";
					temp += "<td>" + columns[7] + "</td>";
					temp += "<td>" + columns[8] + "</td></tr>";
					document.getElementById('cityperf').innerHTML = temp;
				}
			});
		
	}

loadData()

function produceChart(){
	window.chartColors = {
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: 'rgb(54, 162, 235)',
		purple: 'rgb(153, 102, 255)',
		grey: 'rgb(201, 203, 207)'
	};

	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
			datasets: [
				{
					label: "Relative Change",
					fill: false, 
					backgroundColor: window.chartColors.yellow,
					borderColor: window.chartColors.yellow,
					borderDash: [10,5],
					borderWidth: 2, 
					data: [-0.18706,-0.30939,-0.23278,-0.20263,-0.18178,-0.14536,-0.15883,-0.24957,-0.19313,-0.33958]
				},
				{
					label: "All Day",
					fill: false, 
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					borderWidth: 2, 
					// steppedLine: true,
					data: [0.30311,0.38245,0.36985,0.34005,0.34606,0.29747,0.31378,0.33707,0.32243,0.38314]
				}
			]
		},

		// Configuration options go here
		options: {
			maintainAspectRatio: false,
			legend: {
				display: true,
				position: 'bottom', 
				labels: {
					fontColor: '#fff'
				}
			}, 
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: false, 
						fontColor: 'white', 
						fontSize: 8
					}, 
					gridLines: {
						display: true, 
						color: '#303030',
						borderWidth: 0.5
					}
				}], 
				xAxes: [{
					ticks: {
						fontColor: 'white', 
						fontSize: 8
					}, 
					gridLines: {
						display: true,
						color: '#303030',
						borderWidth: 0.5
					}
				}]
			}
		}
	})
}

produceChart()

	// fetch("data/urbanprofile/taytay.csv").then(
	// 	res => {
	// 	console.log("this response")
	// 	console.log("this", res.text());
	// 		  if (res.length > 0) {
	  
	// 			var temp = "";
	// 			data.forEach((itemData) => {
	// 			  temp += "<tr>";
	// 			  temp += "<td>" + itemData['Gender'] + "</td>";
	// 			  temp += "<td>" + itemData['Single'] + "</td>";
	// 			  temp += "<td>" + itemData['Married'] + "</td>";
	// 			  temp += "<td>" + itemData['College Degree'] + "</td>";
	// 			  temp += "<td>" + itemData['High School'] + "</td>";
	// 			  temp += "<td>" + itemData['Estimated Working Population'] + "</td>";
	// 			  temp += "<td>" + itemData['Nature'] + "</td>";
	// 			  temp += "<td>" + itemData['Politics'] + "</td>";
	// 			  temp += "<td>" + itemData['Sustainability'] + "</td>";
	// 			  temp += "<td>" + itemData['Shopping Malls'] + "</td>";
	// 			  temp += "<td>" + itemData['Gambling'] + "</td>";
	// 			  temp += "<td>" + itemData['Digitally Active'] + "</td>";
	// 			  temp += "<td>" + itemData['Slums'] + "</td>";
	// 			  temp += "<td>" + itemData['Pollution'] + "</td>";
	// 			  temp += "<td>" + itemData['Traffic'] + "</td></tr>";
	// 			});
	// 			document.getElementById('data').innerHTML = temp;
	// 		  }
	// 		}
	// 	)		
