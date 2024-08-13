var options = {
	chart: {
		height: 200,
		type: "area",
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 1,
	},
	series: [
		{
			name: "Tickets Resolved",
			data: [10, 30, 15, 50, 35, 90, 25],
		},
	],
	grid: {
		borderColor: "#dae1ea",
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -20,
			right: 10,
			bottom: 0,
			left: 10,
		},
	},
	xaxis: {
		categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
	},
	yaxis: {
		labels: {
			show: false,
		},
	},
	colors: ["#1a73e8", "#b7945e", "#28256d"],
	fill: {
		type: "gradient",
		gradient: {
			shadeIntensity: 1,
			opacityFrom: 0.2,
			opacityTo: 0.9,
			stops: [0, 90, 100],
		},
	},

	markers: {
		size: 5,
		opacity: 0.3,
		colors: ["#1a73e8", "#b7945e", "#28256d"],
		strokeColor: "#ffffff",
		strokeWidth: 5,
		hover: {
			size: 7,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return +val;
			},
		},
	},
};

var chart = new ApexCharts(document.querySelector("#tickets"), options);

chart.render();
