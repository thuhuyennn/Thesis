

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
    
   <header>
    <nav class="flex border-b border-gray-300 bg-white fixed top-0 right-0 left-0">
        <div class="flex">
        <img class="h-24 w-24" src="./assets/img/logo.jpg" alt="">
          <p class=" flex 
                     justify-center 
                     items-center 
                     font-mono 
                     font-bold 
                     text-xl">PhysioDry</p>
        </div>
        <div class="flex justify-center items-center">
        <ul class="absolute top-8 right-0 flex font-bold font-mono text-lg justify-center items-center">
            <li class="mx-8"><a href="detail.php">Home</a> </li>
            <li class="mx-8 "><a href="h.php">Service</a></li>
            <li class="mx-8">FAQ</li>
            <li class="mx-8">
              <button style="border: none;"
                      id="login"
                      class="
                      cursor-pointer
                      rounded-md 
                      font-semibold 
                      h-7 
                      w-32 
                     bg-green-500  
                     text-white s
                     hover:bg-green-300 ">
                Details
              </button>
            </li>
          </ul>
        </div>
    </nav>
   </header>
   <div id="wapper" class="grid grid-cols-4 mt-28 ml-24">
    <div style="box-shadow: 1px 2px 4px 3px rgba(220, 220, 220);" class="p-6 h-96 w-3/4 flex 
                     
                      bg-white mt-10 ">
      <ul class=" space-y-4 w-full">
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-user"></i></i><a href="">Hồ sơ</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-heart-pulse"></i><a href="">Sức khỏe của tôi</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-calendar-days"></i><a href="">Lịch sử bệnh lý</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-comments"></i><a href="">Cộng đồng</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-gear"></i><a href="">Thiết lập tài khoản</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-question"></i><a href="">Trợ giúp</a></li>
        <li class=""><i class="tab-icon fa-solid fa-right-from-bracket"></i></i><a href="">Đăng xuất</a></li>
      </ul>
    
    </div>
    <div class="col-span-3 border-b border-gray-200 ml-6 mr-40 ">
        <p class=" py-6 font-bold text-3xl">Sức khỏe của tôi</p>

  <!-- Tab items -->
  <div class="tabs flex relative">
    <div class="tab-item active">
    <i class="tab-icon fa-solid fa-table"></i>
      <a href="h.php">Số liệu bảng</a>
    </div>
    <div class="tab-item">
    <i class="tab-icon fa-solid fa-chart-simple"></i>
    <a href="chart.php">Biểu đồ</a>
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
      


    </div>
    <div class="tab-pane">
      <h2>Biểu đồ</h2>
      
 
      
      
      


    </div>
    <div class="tab-pane">
      <h2>Dữ liệu chi tiết</h2>

      
    </div>
    <div class="tab-pane">
      <h2>Chuẩn đoán</h2>
      <p>Vue (pronounced /vjuː/, like view) is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. </p>
    </div>
  </div>
</div>
    </div>
    


   </div>

    
</body>

</html>