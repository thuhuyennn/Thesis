<!DOCTYPE html>
<html>
<head>
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
	<title>Dữ liệu thời tiết</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		setInterval(function(){
			$("#data").load("get_data.php");
		}, 1000);
	});
	</script>
</head>
<body>
	<h1>Dữ liệu thời tiết</h1>
	<table id='c4ytable'>
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
