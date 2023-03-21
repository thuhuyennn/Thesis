<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dynamic Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<style>
        #c4ytable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	
}

#c4ytable td, #c4ytable th {
    border: 1px solid #ddd;
    padding: 8px;
}

#c4ytable tr:nth-child(even){background-color: #f2f2f2;}

#c4ytable tr:hover {background-color: #ddd;}

#c4ytable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #00A8A9;
    color: white;
}
    </style>
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


<title>Dữ liệu thời tiết</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		setInterval(function(){
			$("#data").load("get_data_chart.php");
		}, 1000);
	});
	</script>
</head>
<body>
	<h1>Dữ liệu thời tiết</h1>
	<div class="">
	<table id='c4ytable' >
		<thead>
			<tr>
				<th>STT</th>
				<th>NHỊP TIM</th>
                <th>NỒNG ĐỘ OXY</th>
				<th>STATUS</th>
                <th>TIME</th>
			
			</tr>
		</thead>
		<tbody id="data">
		</tbody>
	</table>
</body>
</html>
