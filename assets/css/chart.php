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
				}
			}
		});

	});
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
<div class="container">
	
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
	
</div>