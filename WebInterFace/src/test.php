<?php
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);



// Tạo bảng HTML






// Đóng kết nối database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/assets/css/input.css" />
    <link
      rel="stylesheet"
      href="./assets/font/themify-icons-font/themify-icons/themify-icons.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/style.css
    ">
    <link href="./dist/output.css" rel="stylesheet" />
    <title>detail</title>

    <script>
	$(document).ready(function(){
		setInterval(function(){
			$("#data").load("get_data.php");
		}, 1000);
	});
	</script>

    
</head>
<body>

   <div id="wapper" class="grid grid-cols-4 mt-28 ml-24">
    <div style="box-shadow: 1px 2px 4px 3px rgba(220, 220, 220);" class="p-6 h-96 w-3/4 flex 
                     
                      bg-white mt-10 ">

    
    </div>
    <div class="col-span-3 border-b border-gray-200 ml-6 mr-40 ">
        <p class=" py-6 font-bold text-3xl">Sức khỏe của tôi</p>

  <!-- Tab items -->
  <div class="tabs flex relative">
    <div class="tab-item active">
    <i class="tab-icon fa-solid fa-table"></i>
      Số liệu bảng
    </div>
    <div class="tab-item">
    <i class="tab-icon fa-solid fa-chart-simple"></i>
      Biểu đồ
    </div>
    <div class="tab-item">
    <i class="tab-icon fa-solid fa-circle-info"></i>
      Dữ liệu chi tiết
    </div>

    <div class="tab-item">
    <i class="tab-icon fa-solid fa-stethoscope"></i>
      Chuẩn đoán
    </div>
    <div class="line absolute left-0 bottom-0 w-0 h-1"></div>
  </div>

  <!-- Tab content -->
  <div class="tab-content">
    <div class="tab-pane active">
      <h2>Số liệu dạng bảng</h2>
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
            <?php
            $table = "";
            while($row = mysqli_fetch_assoc($result)) {
                $table .= "<tr>";
                $table .= "<td>" . $row["id"] . "</td>";
                $table .= "<td>" . $row["heartbeat"] . "</td>";
                $table .= "<td>" . $row["concentration"] . "</td>";
                if($row["heartbeat"] < 50) {
                    $table .= "<td>Cảnh báo</td>";
                } else {
                    $table .= "<td>An toàn</td>";
                }
                
                $table .= "<td>" . $row["TimeStamp"] . "</td>";
                $table .= "</tr>";
                
            
            
            
            }
            echo $table;
            ?>
		</tbody>
	</table>
    </div>
    <div class="tab-pane">
      <h2>Biểu đồ</h2>
    </div>
    <div class="tab-pane">
      <h2>Dữ liệu chi tiết</h2>
    
    </div>
    <div class="tab-pane">
      <h2>Chuẩn đoán</h2>
      <p>Vue</p>
    </div>
  </div>
</div>
    </div>
    


   </div>























































































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


    
.tabs .line {
  background-color: #33CC66;
  transition: all 0.2s ease;
}
.tab-item {
  min-width: 80px;
  padding: 16px 20px 11px 20px;
  font-size: 18px;
  text-align: center;
  color: #33CC66;
  background-color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom: 5px solid transparent;
  opacity: 0.4;
  cursor: pointer;
  transition: all 0.5s ease;
}
.tab-icon {
  font-size: 18px;
  width: 32px;
  position: relative;
  top: 2px;
}
.tab-item:hover {
  opacity: 1;
  background-color: rgba(194, 53, 100, 0.05);
  border-color: rgba(194, 53, 100, 0.1);
}
.tab-item.active {
  opacity: 1;
}
.tab-content {
  padding: 28px 0;
}
.tab-pane {
  color: #333;
  display: none;
}
.tab-pane.active {
  display: block;
}
.tab-pane h2 {
  font-size: 24px;
  margin-bottom: 8px;
}

    </style>
   <script >
    
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$(".tab-item");
const panes = $$(".tab-pane");

const tabActive = $(".tab-item.active");
const line = $(".tabs .line");


requestIdleCallback(function () {
  line.style.left = tabActive.offsetLeft + "px";
  line.style.width = tabActive.offsetWidth + "px";
});

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    $(".tab-item.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
    pane.classList.add("active");
  };
});

   </script>






   


    
</body>

</html>