/**
 * ------------------------
* Chart JS
 * ------------------------
* */
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Total Order',
                data: [12, 30, 3, 5, 2, 3, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Total Completed Order',
                data: [5, 20, 3, 15, 1, 7, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0)',
                ],
                borderColor: [
                    'rgb(99,107,255, 1)',
                    'rgb(235,54,105, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Total Completed Order',
                data: [0, 5, 30, 15, 7, 25, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0)',
                ],
                borderColor: [
                    'rgb(133,255,99, 1)',
                    'rgb(235,54,105, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
        ]
    },
    options: {
        scales: {
            /*xAxes: [{
                type: 'time',
                time: {
                    unit: 'month'
                }
            }],*/
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
