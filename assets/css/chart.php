 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/bootstrap4-alpha3.min.css">
	
		<script src="assets/js/jquery-3.1.0.min.js"></script>
		<script src="assets/js/tether.min.js"></script>
		<script src="assets/js/bootstrap4-alpha3.min.js"></script>
		<script src="assets/js/canvasjs.min.js"></script>
		<script src="assets/js/jquery.scrollspeed.min.js"></script>
		<script src="assets/js/jquery.inview.min.js"></script>

<script>

	$(function () {
				var totalRevenue = 15341110,
						totalUsers = 7687036;
				
				// CanvasJS doughnut chart to show annual sales percentage from United States(US)
				var salesDoughnutChartUS = new CanvasJS.Chart("sales-doughnut-chart-us", { 
					animationEnabled: true,
					backgroundColor: "transparent",
					title: {
						fontColor: "#848484",
						fontSize: 70,
						horizontalAlign: "center",
						text: "47%",
						verticalAlign: "center"
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							explodeOnClick: false,
							innerRadius: "96%",
							radius: "90%",
							startAngle: 270,
							type: "doughnut",
							dataPoints: [
								{ y: 47, color: "#c70000", toolTipContent: "United States: $<span>" + CanvasJS.formatNumber(Math.round(47 / 100 * totalRevenue), '#,###,###') + "</span>" },
								{ y: 53, color: "#424242", toolTipContent: null }
							]
						}
					]
				});

				// CanvasJS doughnut chart to show annual sales percentage from Netherlands(NL)
				var salesDoughnutChartNL = new CanvasJS.Chart("sales-doughnut-chart-nl", { 
					animationEnabled: true,
					backgroundColor: "transparent",
					title: {
						fontColor: "#848484",
						fontSize: 70,
						horizontalAlign: "center",
						text: "19%",
						verticalAlign: "center"
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							explodeOnClick: false,
							innerRadius: "96%",
							radius: "90%",
							startAngle: 270,
							type: "doughnut",
							dataPoints: [
								{ y: 19, color: "#c70000", toolTipContent: "Netherlands: $<span>" + CanvasJS.formatNumber(Math.round(19 / 100 * totalRevenue), '#,###,###') + "</span>" },
								{ y: 81, color: "#424242", toolTipContent: null }
							]
						}
					]
				});

				// CanvasJS doughnut chart to show annual sales percentage from Germany(DE)
				var salesDoughnutChartDE = new CanvasJS.Chart("sales-doughnut-chart-de", { 
					animationEnabled: true,
					backgroundColor: "transparent",
					title: {
						fontColor: "#848484",
						fontSize: 70,
						horizontalAlign: "center",
						text: "12%",
						verticalAlign: "center"
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							explodeOnClick: false,
							innerRadius: "96%",
							radius: "90%",
							startAngle: 270,
							type: "doughnut",
							dataPoints: [
								{ y: 12, color: "#c70000", toolTipContent: "Netherlands: $<span>" + CanvasJS.formatNumber(Math.round(12 / 100 * totalRevenue), '#,###,###') + "</span>" },
								{ y: 88, color: "#424242", toolTipContent: null }
							]
						}
					]
				});

				// CanvasJS spline area chart to show pageviews from Jan 2015 - Dec 2015
				var pageViewsSplineAreaChart = new CanvasJS.Chart("page-views-spline-area-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					axisX: {
						gridThickness: 0,
						lineThickness: 0,
						maximum: new Date("1 Dec 2015"),
						minimum: new Date("1 Jan 2015"),
						tickLength: 0,
						valueFormatString: " "						
					},
					axisY: {
						gridThickness: 0,
						lineThickness: 0,
						tickLength: 0,
						valueFormatString: " "
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							color: "#424242",
							fillOpacity: 1,
							lineColor: "#ffffff",
							lineThickness: 3,							
							markerSize: 0,
							type: "splineArea",
							dataPoints: [
								{ x: new Date("1 Jan 2015"), y: 2171991 },
								{ x: new Date("1 Feb 2015"), y: 2678910 },
								{ x: new Date("1 Mar 2015"), y: 3215487 },
								{ x: new Date("1 Apr 2015"), y: 2213754 },
								{ x: new Date("1 May 2015"), y: 2584561 },
								{ x: new Date("1 Jun 2015"), y: 3178647 },
								{ x: new Date("1 Jul 2015"), y: 3645041 },
								{ x: new Date("1 Aug 2015"), y: 2914568 },
								{ x: new Date("1 Sep 2015"), y: 3985421 },
								{ x: new Date("1 Oct 2015"), y: 3754219 },
								{ x: new Date("1 Nov 2015"), y: 3971047 },
								{ x: new Date("1 Dec 2015"), y: 4121538 }
							]
						}
					]
				});
				
				// CanvasJS spline area chart to show orders from Jan 2015 - Dec 2015
				var ordersSplineAreaChart = new CanvasJS.Chart("orders-spline-area-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					axisX: {
						gridThickness: 0,
						lineThickness: 0,
						maximum: new Date("1 Dec 2015"),
						minimum: new Date("1 Jan 2015"),
						tickLength: 0,
						valueFormatString: " "						
					},
					axisY: {
						gridThickness: 0,
						lineThickness: 0,
						tickLength: 0,
						valueFormatString: " "
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							color: "#424242",
							fillOpacity: 1,
							lineColor: "#ffffff",
							lineThickness: 3,							
							markerSize: 0,
							type: "splineArea",
							dataPoints: [
								{ x: new Date("1 Jan 2015"), y: 17376 },
								{ x: new Date("1 Feb 2015"), y: 21431 },
								{ x: new Date("1 Mar 2015"), y: 25724 },
								{ x: new Date("1 Apr 2015"), y: 22138 },
								{ x: new Date("1 May 2015"), y: 20676 },
								{ x: new Date("1 Jun 2015"), y: 25429 },
								{ x: new Date("1 Jul 2015"), y: 29160 },
								{ x: new Date("1 Aug 2015"), y: 23317 },
								{ x: new Date("1 Sep 2015"), y: 31883 },
								{ x: new Date("1 Oct 2015"), y: 30034 },
								{ x: new Date("1 Nov 2015"), y: 31768 },
								{ x: new Date("1 Dec 2015"), y: 41215 }
							]
						}
					]
				});
				
				// CanvasJS spline area chart to show revenue from Jan 2015 - Dec 2015
				var revenueSplineAreaChart = new CanvasJS.Chart("revenue-spline-area-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					axisX: {
						gridThickness: 0,
						lineThickness: 0,
						maximum: new Date("1 Dec 2015"),
						minimum: new Date("1 Jan 2015"),
						tickLength: 0,
						valueFormatString: " "						
					},
					axisY: {
						gridThickness: 0,
						lineThickness: 0,
						tickLength: 0,
						valueFormatString: " "
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242"
					},
					data: [
						{
							color: "#424242",
							fillOpacity: 1,
							lineColor: "#ffffff",
							lineThickness: 3,							
							markerSize: 0,
							type: "splineArea",
							yValueFormatString: "$###,###.##",
							dataPoints: [
								{ x: new Date("1 Jan 2015"), y: 868800 },
								{ x: new Date("1 Feb 2015"), y: 1071550 },
								{ x: new Date("1 Mar 2015"), y: 1286200 },
								{ x: new Date("1 Apr 2015"), y: 1106900 },
								{ x: new Date("1 May 2015"), y: 1033800 },
								{ x: new Date("1 Jun 2015"), y: 1017160 },
								{ x: new Date("1 Jul 2015"), y: 1458000 },
								{ x: new Date("1 Aug 2015"), y: 1165850 },
								{ x: new Date("1 Sep 2015"), y: 1594150 },
								{ x: new Date("1 Oct 2015"), y: 1501700 },
								{ x: new Date("1 Nov 2015"), y: 1588400 },
								{ x: new Date("1 Dec 2015"), y: 1648600 }
							]
						}
					]
				});

				// CanvasJS doughnut chart to show annual users - new and returning
				var usersDoughnutChart = new CanvasJS.Chart("users-doughnut-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					toolTip: {
						backgroundColor: "#000000",
						borderThickness: 2,
						cornerRadius: 0,
						fontColor: "#ffffff",
						contentFormatter: function (e) {
							return e.entries[0].dataPoint.name + ": " + CanvasJS.formatNumber(e.entries[0].dataPoint.y, '###,###') + " - " + Math.round(e.entries[0].dataPoint.y / totalUsers * 100) + "%"; // calcuting and showing percentage of users inside tooltip
						}
					}, 
					data: [
						{
							innerRadius: "82%",
							radius: "100%",
							showInLegend: false,
							startAngle: 180,
							type: "doughnut",
							dataPoints: [
								{ y: 1921757, name: "Returning", color: "#c70000" }, 
								{ y: 5765279, name: "New", color: "#424242", exploded: true }
							]
						}
					]
				});

				// CanvasJS spline chart to show users - new and returning from Jan 2015 - Dec 2015
				var usersSplineChart = new CanvasJS.Chart("users-spline-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					axisX: {
						gridThickness: 0,
						labelFontColor: "#bbbbbb",
						lineColor: "#bbbbbb"
					},
					axisY: {
						gridThickness: 0,
						labelFontColor: "#bbbbbb",
						lineColor: "#bbbbbb"
					},
					legend: {
						dockInsidePlotArea: true,
						fontColor: "#ffffff",
						fontSize: 16,
						horizontalAlign: "right",
						verticalAlign: "top"
					},
					toolTip: {
						backgroundColor: "#000000",
						borderThickness: 2,
						cornerRadius: 0,
						fontColor: "#ffffff",
						shared: true
					},
					data: [
						{
							color: "#424242",
							legendMarkerType: "square",
							legendText: "NEW",
							name: "NEW",
							showInLegend: true,						
							type: "spline",
							dataPoints: [
								{ x: new Date("1 Jan 2015"), y: 325799 },
								{ x: new Date("1 Feb 2015"), y: 401837 },
								{ x: new Date("1 Mar 2015"), y: 482323 },
								{ x: new Date("1 Apr 2015"), y: 332063 },
								{ x: new Date("1 May 2015"), y: 387684 },
								{ x: new Date("1 Jun 2015"), y: 476797 },
								{ x: new Date("1 Jul 2015"), y: 546756 },
								{ x: new Date("1 Aug 2015"), y: 437186 },
								{ x: new Date("1 Sep 2015"), y: 597813 },
								{ x: new Date("1 Oct 2015"), y: 563133 },
								{ x: new Date("1 Nov 2015"), y: 595657 },
								{ x: new Date("1 Dec 2015"), y: 618231 }
							]
						},
						{
							color: "#c70000",						
							legendMarkerType: "square",
							legendText: "RETURNING",
							name: "RETURNING",
							showInLegend: true,
							type: "spline",
							dataPoints: [
								{ x: new Date("1 Jan 2015"), y: 108599 },
								{ x: new Date("1 Feb 2015"), y: 133945 },
								{ x: new Date("1 Mar 2015"), y: 160774 },
								{ x: new Date("1 Apr 2015"), y: 110688 },
								{ x: new Date("1 May 2015"), y: 129228 },
								{ x: new Date("1 Jun 2015"), y: 158932 },
								{ x: new Date("1 Jul 2015"), y: 182252 },
								{ x: new Date("1 Aug 2015"), y: 145728 },
								{ x: new Date("1 Sep 2015"), y: 199271 },
								{ x: new Date("1 Oct 2015"), y: 187711 },
								{ x: new Date("1 Nov 2015"), y: 198552 },
								{ x: new Date("1 Dec 2015"), y: 206077 }
							]
						}
					]
				});
		
				// CanvasJS bar chart to show country wise annual users percentage
				var usersCountriesBarChart = new CanvasJS.Chart("users-countries-bar-chart", {
					animationEnabled: true,
					backgroundColor: "transparent",
					axisX: {
						labelFontColor: "#f7f6f6",
						labelFontSize: 18,
						lineThickness: 0,
						tickThickness: 0
					},
					axisY: {
						gridThickness: 0,
						lineThickness: 0,
						tickThickness: 0,
						valueFormatString: " "
						                    
					},
					toolTip: {
						backgroundColor: "#ffffff",
						borderThickness: 0,
						cornerRadius: 0,
						fontColor: "#424242",
						contentFormatter: function (e) {
							return e.entries[0].dataPoint.label + ": " +  CanvasJS.formatNumber(Math.round(e.entries[0].dataPoint.y / 100 * totalUsers), '###,###'); // calculating and showing country wise number of users inside tooltip
						}
					},
					data: [
						{
							color: "#424242",
							indexLabelFontColor: "#f7f6f6",
							indexLabelFontFamily: "calibri",
							indexLabelFontSize: 18,
							indexLabelPlacement: "outside",
							type: "bar",
							dataPoints: [
								{ y: 2,  indexLabel: "2%",  label: "Others" },
								{ y: 4,  indexLabel: "4%",  label: "Japan" },
								{ y: 5,  indexLabel: "5%",  label: "India" },
								{ y: 12, indexLabel: "12%", label: "Netherlands" },
								{ y: 9,  indexLabel: "9%",  label: "France" },
								{ y: 10, indexLabel: "10%", label: "Spain" },
								{ y: 14, indexLabel: "14%", label: "Germany" },
								{ y: 44, indexLabel: "44%", label: "United States" }
							]
						}
					]
				});
		
				jQuery.scrollSpeed(100, 400); // for smooth mouse wheel scrolling
				
				// jQuery.inview plugin
				$('.inview').one('inview', function (e, isInView) {
					if (isInView) {
						switch (this.id) {
							case "sales-doughnut-chart-us": salesDoughnutChartUS.render();
								break;
							case "sales-doughnut-chart-nl": salesDoughnutChartNL.render();
								break;
							case "sales-doughnut-chart-de": salesDoughnutChartDE.render();
								break;
							case "page-views-spline-area-chart": pageViewsSplineAreaChart.render();
								break;
							case "orders-spline-area-chart": ordersSplineAreaChart.render();
								break;
							case "revenue-spline-area-chart": revenueSplineAreaChart.render();
								break;
							case "users-doughnut-chart": usersDoughnutChart.render();
								break;
							case "users-spline-chart": usersSplineChart.render();
								break;
							case "users-countries-bar-chart": usersCountriesBarChart.render();
								break;
						}
					}
				});
		
			});
	
		</script>

  </head>
  <body>
		<div class="container">
			<h1>Annual Sales And Website Traffic &#8211; 2015</h1>
			<h5 class="m-t-1">Revenue: <span class="tag tag-success" id="revenue-tag">$15,341,110</span></h5>
			<hr class="m-t-2">
			
			<h3>Sales &#8211; Top 3 Countries</h3>
			
			<!-- sales doughnut charts -->
			<div class="row">	
				<div class="col-md-4">
					<div class="inview" id="sales-doughnut-chart-us"></div>
					<h3 class="align-center">United States</h3>
				</div>
				
				<div class="col-md-4">
					<div class="inview" id="sales-doughnut-chart-nl"></div>
					<h3 class="align-center">Netherlands</h3>
				</div>
				
				<div class="col-md-4">
					<div class="inview" id="sales-doughnut-chart-de"></div>
					<h3 class="align-center">Germany</h3>
				</div>
			</div>
			<!-- row sales doughnt charts -->
			
			<hr>
			
			<!-- stats spline area charts -->
			<div class="row">
				<div class="col-md-4">
					<div class="card card-block">
						<h5 class="card-title">PAGE VIEWS</h5>
						<h2>38,435,184</h2>
						<div class="inview" id="page-views-spline-area-chart"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card card-block">
						<h5 class="card-title">ORDERS</h5>
						<h2 >320,151</h2>
						<div class="inview" id="orders-spline-area-chart"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="card card-block">
						<h5 class="card-title">REVENUE</h5>
						<h2>$15,341,110</h2>
						<div class="inview" id="revenue-spline-area-chart"></div>
					</div>
				</div>
			</div>
			<!-- row stats spline area charts -->
			
			<hr>
			
			<h3>New vs Returning Users</h3>
			
			<!-- users doughnut and spline chart -->
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="inview" id="users-doughnut-chart"></div>
				</div>

				<div class="col-lg-9 col-md-8">
					<div class="inview" id="users-spline-chart"></div>
				</div>
			</div>
			<!-- row users doughnut and spline chart -->
			
			<hr>
			
			<h3>Users By Countries</h3>
			
			<!-- users countries bar chart -->
			<div class="row">
				<div class="col-md-12">					
					<div class="inview" id="users-countries-bar-chart"></div>
				</div>
			</div>
			<!-- row users countries bar chart -->
			
		</div> <!-- container -->
		
	</body>

<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

	__gaTracker('create', 'UA-38086017-1', 'auto');
	__gaTracker('set', 'forceSSL', true);
	__gaTracker('set', 'anonymizeIp', true);
	__gaTracker('require', 'displayfeatures');
	__gaTracker('send','pageview');
</script>
