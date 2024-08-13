var options = {
	chart: {
		height: 279,
		width: "75%",
		type: "bar",
		toolbar: {
			show: false,
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: "60%",
			borderRadius: 8,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		show: true,
		width: 0,
		colors: ["#FFFFFF"],
	},
	series: [
		{
			name: "Tickets",
			data: [207, 455, 832, 1283],
		},
	],
	legend: {
		show: false,
	},
	xaxis: {
		categories: ["Usa", "India", "Brazil", "Mexico"],
	},
	yaxis: {
		show: false,
	},
	fill: {
		colors: ["#ffffff"],
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return +val;
			},
		},
	},
	grid: {
		show: false,
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
			top: 0,
			right: 0,
			bottom: -10,
			left: 0,
		},
	},
	colors: ["#ffffff"],
};
var chart = new ApexCharts(document.querySelector("#callsByCountry"), options);
chart.render();
