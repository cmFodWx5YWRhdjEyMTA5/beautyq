// DashBoard JavaScripts

(function ($) {
	'use strict';

	var primary = '#7774e7',
			success = '#37c936',
			info = '#0f9aee',
			warning = '#ffcc00',
			danger = '#ff3c7e',
			primaryInverse = 'rgba(119, 116, 231, 0.1)',
			successInverse = 'rgba(55, 201, 54, 0.1)',
			infoInverse = 'rgba(15, 154, 238, 0.1)',
			warningInverse = 'rgba(255, 204, 0, 0.1)',
			dangerInverse = 'rgba(255, 60, 126, 0.1)',
			gray = '#f6f7fb',
			white = '#fff',
			dark = '#515365'

    $('#monthly-target').vectorMap({
        map: 'us_aea',
            backgroundColor: 'transparent',
            strokeWidth: 1,
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: 'transparent',
                    'stroke-width': 1,
                    'stroke': '#b5bad6',
                    'stroke-opacity': 1,
                    'cursor': 'pointer'
                },
                hover: {
                    'fill-opacity': 0.7
                }
            },
            markerStyle: {
                initial: {
                    fill: info,
                    stroke: info,
                    'fill-opacity': 1,
                    'stroke-width': 8,
                    'stroke-opacity': 0.3,
                    'cursor': 'pointer',
                    r: 5
                },
                hover: {
                    r: 8,
                    stroke: info,
                    'stroke-width': 10
                }
            },

            series: {
                regions: [{
                    values: {
                        "US-NE": gray,
                        "US-GA": success,
                        "US-TX": info,
                        "US-UT": primary
                    },
                    attribute: 'fill'
                }]
            }
    });

    var sparklineBarData = [32, 38, 36, 35, 38, 37, 35, 34, 36, 38, 36, 37, 35, 34, 37, 38, 38];
    $("#bar-config").sparkline(sparklineBarData,  
    {
        type: 'bar',
        height: '60',
        barWidth: 3,
        barSpacing: 8,
        barColor: info
    });

    var allocationChart = document.getElementById("allocation-chart");
    var allocationCtx = allocationChart.getContext('2d');
    var allocationData = {
        labels: ["Nota 1", "Nota 2", "Nota 3", "Nota 4", "Nota 5", "Nota 6", "Nota 7", "Nota 8", "Nota 9", "Nota 10"],
          datasets: [
            {
                fill: true,
                backgroundColor: [info, primary, success, gray, info, primary, success, gray, info, primary],
                data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100]
            }
        ]
    };

    var allocationConfig = new Chart(allocationCtx, {
			type: 'doughnut',
			data: allocationData,
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				cutoutPercentage: 75
      }
    });

    var lineChart = document.getElementById("line-chart");
    var lineCtx = lineChart.getContext('2d');
    lineChart.height = 80;
    var datapack1 = [90, 220, 150, 340, 500, 120, 180, 300, 250, 470, 90, 210];
    var lineConfig = new Chart(lineCtx, {
			type: 'line',
			data: {
				labels: ["Janeiro", "Feveriro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
				datasets: [{
					label: 'Clientes',
					backgroundColor: infoInverse,
					borderColor: info,
					pointBackgroundColor: info,
					borderWidth: 2,
					data: datapack1
				},]
			},
			
			options: {
				legend: {
					display: false
				},
				
				scales: {
					yAxes: [{
						stacked: true,
						ticks: {
							min: 0,
							stepSize: 100,
						}
					}]
        }
      }
    });

})(jQuery);