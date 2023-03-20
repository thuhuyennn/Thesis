<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dynamic Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'NHỊP TIM',
                data: [],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 3
            }, {
                label: 'NỒNG ĐỘ 0XY TRONG MÁU',
                data: [],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        displayFormats: {
                            second: 'h:mm:ss a'
                        }
                    }
                }]
            }
        }
    });

    function updateChart() {
        // Get data from server
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_data.php');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Parse JSON data
                var data = JSON.parse(xhr.responseText);
                // Update chart data
                for (var i = 0; i < data.length; i++) {
                    chart.data.labels[i] = data[i].TimeStamp;
                    chart.data.datasets[0].data[i] = data[i].heartbeat;
                    chart.data.datasets[1].data[i] = data[i].concentration;
                }
                chart.update();
            }
        };
        xhr.send();
    }

    setInterval(updateChart, 100);
  </script>
</body>
</html>
