<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:login_index.php");
}

?>
<?php
    //Connect to database and create table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_sensor";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
        echo "<a href='install.php'>If first time running click here to install database</a>";
    }
    $sql = "SELECT * FROM data_value ORDER BY id DESC";
    $result=mysqli_query($conn,$sql);

    // Lưu dữ liệu vào một mảng
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
           $data[] = $row;
     } 
     
?>

<!-- Tạo mảng cho dữ liệu  -->
<?php
$heartbeat = array();
$concentration = array();
$labels = array();
foreach ($data as $row) {
    $heartbeat[] = $row['heartbeat'];
    $concentration[] = $row['concentration'];
    $labels[] = $row['Time'];
}
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
            <li class="mx-8"><a href="view.php">Home</a> </li>
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
                     <a href=""><?php echo $_SESSION['user']; ?></a>
              </button>
              
            </li>
          </ul>
        </div>
    </nav>
   </header>
   <div id="wapper" class="grid grid-cols-4 mt-24 ml-24">
    <div style="box-shadow: 1px 2px 4px 3px rgba(220, 220, 220);" class="p-6 h-96 w-3/4 flex 
                     
                      bg-white mt-10 ">
      <ul class=" space-y-4 w-full">
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-user"></i></i><a href="">Hồ sơ</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-heart-pulse"></i><a href="">Sức khỏe của tôi</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-calendar-days"></i><a href="">Lịch sử bệnh lý</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-comments"></i><a href="">Cộng đồng</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-gear"></i><a href="">Thiết lập tài khoản</a></li>
        <li class="border-b border-gray-200 pb-2"><i class="tab-icon fa-solid fa-question"></i><a href="">Trợ giúp</a></li>
        <li class=""><i class="tab-icon fa-solid fa-right-from-bracket"></i></i><a href="logout.php">Đăng xuất</a></li>
      </ul>
    
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
      <!-- <h2>Số liệu dạng bảng</h2> -->
      <?php 
    $sql = "SELECT * FROM data_value ORDER BY id DESC";
    if ($result=mysqli_query($conn,$sql))
    {
      // Fetch one and one row
      echo "<TABLE id='c4ytable'>";
      echo "<TR >
                <TH>Sr.No.</TH>
                <TH>NHỊP TIM</TH>
                <TH>NỒNG ĐỘ OXY</TH>
                <TH>Status</TH>
                <TH>Time</TH>
            </TR>";
      while ($row=mysqli_fetch_row($result))
      {

   
      
        // Kiểm tra nhiệt độ và độ ẩm để hiển thị trạng thái
        if ($row[1] <50 or $row[2] <50 or $row[1] >100 or $row[2] > 100) {
          $status = "<p class='text-red-600 font-semibold'>Cảnh báo
          <p/>";
        } else {
          $status = "<p class='text-blue-500 font-medium'>Bình thường
          <p/>";
        }
      

        //echo "<TD>".$row[3]."</TD>";
    
          echo "<TR>";
          echo "<TD>".$row[0]."</TD>";
          echo "<TD>".$row[1]."</TD>";
          echo "<TD>".$row[2]."</TD>";
          echo "<TD>".$status."</TD>";
          echo "<TD>".$row[5]."</TD>";
          echo "</TR>";
      
        

      }
      echo "</TABLE>";
      // Free result set
      mysqli_free_result($result);
    }

    mysqli_close($conn);
?>

    </div>
    <div class="tab-pane">
      <!-- <h2>Biểu đồ</h2> -->
      <canvas id="myChart"></canvas>
      <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Nhịp tim',
                    data: <?php echo json_encode($heartbeat); ?>,
                    backgroundColor: '#0000BB',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
                }, {
                    label: 'Nồng độ Oxy trong máu',
                    data: <?php echo json_encode($concentration); ?>,
                    backgroundColor: '#BB0000',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'data'
                }
            }
        });
    </script>
      
      
      
      


    </div>
    <div class="tab-pane">
      
      <div class="relative py-4 card grid grid-cols-4 w-full bg-white h-24 rounded-md  text-center" style="box-shadow: 1px 2px 4px 3px rgba(220, 220, 220);">
        <button id="open_card_popup" class="absolute -top-4 -right-4 h-8 w-8 rounded-full bg-white border border-green-400">
          <i class="fa-solid fa-pen text-green-400"></i>
        </button>
        <div class="age border-r border-gray-300">
          <p class="opacity-70">Tuổi</p> 
          <p class="text-xl font-bold">20 Tuổi</p>
        </div>
        <div class="height border-r border-gray-300">
          <p class="opacity-70">Chiều cao</p> 
          <p class="text-xl font-bold">150 cm</p>
        </div>
        <div class="weight border-r border-gray-300">
          <p class="opacity-70">Cân nặng</p> 
          <p class="text-xl font-bold">45 kg</p>
        </div>
        <div class="activity">
          <p class="opacity-70">Hoạt động</p> 
          <p class="text-xl font-bold">Ít</p>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-10">
        <div class="relative h-28 w-full border border-gray-300 rounded-lg grid grid-cols-3">
          <div class="col-span-2 pl-6 pt-3">
            <p>Chỉ số SpO2</p>
            <p class="text-2xl font-medium">60</p>
            <p class="text-blue-500">Bình thường</p>
          </div>
          <img class="h-20 w-20 absolute right-4 bottom-2" src="./assets/img/spo2.png" alt="">

          
        </div>
        <div class="relative h-28 w-full border border-gray-300 rounded-lg grid grid-cols-3">
        <div class="col-span-2 pl-6 pt-3">
            <p>Chỉ số nhịp tim</p>
            <p class="text-2xl font-medium">60</p>
            <p class="text-blue-500">Bình thường</p>
        </div>
          <img class="h-20 w-20 absolute right-4 bottom-2" src="./assets/img/tim.jpg" alt="">
        </div>
        <div class=" relative h-28 w-full border border-gray-300 rounded-lg grid grid-cols-3">
        <div class="col-span-2 pl-6 pt-3">
            <p>Chỉ số huyết áp</p>
            <p class="text-2xl font-medium">60</p>
            <p class="text-blue-500">Bình thường</p>
        </div>
          <img class="h-20 w-20 absolute right-4 bottom-2" src="./assets/img/huyetap.jpg" alt="">
        </div>
        <div class=" relative h-28 w-full border border-gray-300 rounded-lg grid grid-cols-3">
        <div class="col-span-2 pl-6 pt-3">
            <p>Chỉ số MBI</p>
            <p class="text-2xl font-medium">60</p>
            <p class="text-blue-500">Bình thường</p>
        </div>
          <img class="h-20 w-20 absolute right-4 bottom-2" src="./assets/img/can.jpg" alt="">
        </div>
      </div>

      
    </div>
    <div class="tab-pane">
      <h2>Chuẩn đoán</h2>
      <p>Vue (pronounced /vjuː/, like view) is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. </p>
    </div>
  </div>
</div>
    </div>
    


   </div>

   <div id="popup" class="invisible fixed top-0 bottom-0 left-0 right-0" 
         style="background-color: rgba(0, 0, 0, 0.6);display: flex;align-items: center;justify-content: center;">
      <form id="card_popup " class="relative h-5/6 w-2/5 bg-white rounded-xl p-6">
        <p class="text-xl font-bold text-gray-500 pb-6">Cập nhật thông tin</p>
        <button id="close_card_popup" class="absolute top-6 right-5 text-xl font-bold text-gray-500">X</button>
        <div>
        <label class="font-bold text-gray-500 text-sm" for="ngaysinh">Ngày sinh</label><br>
        <input class="mt-2 mb-5 w-full border border-gray-300 h-10 rounded-md" type="datetime" name="birthday" id="ngaysinh">
      </div>
      <div>
        <label class="font-bold text-gray-500 text-sm" for="chieucao">Chiều cao của bạn? (cm)</label><br>
        <input class="mt-2 mb-5 w-full border border-gray-300 h-10 rounded-md" type="number" name="" id="chieucao">
      </div>
      <div>
        <label class="font-bold text-gray-500 text-sm" for="cannang">Cân năng của bạn? (kg)</label><br>
        <input class=" mt-2 mb-5 w-full border border-gray-300 h-10 rounded-md" type="number" name="" id="cannang">
      </div>
      <p class="font-bold text-gray-500 text-sm">Chọn cường độ hoạt động của bạn</p>
      <div class="grid grid-cols-4 gap-2 mt-2" >
        <div class="h-20 w-20 rounded-sm border border-gray-300"></div>
        <div class="h-20 w-20 rounded-sm border border-gray-300"></div>
        <div class="h-20 w-20 rounded-sm border border-gray-300"></div>
        <div class="h-20 w-20 rounded-sm border border-gray-300"></div>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-5" >
        <button id="close_card_popup" class="w-full h-10 border-2 border-green-600 rounded-md text-green-600 text-xl font-bold bg-white hover:bg-green-600 hover:text-white" type="">Hủy</button>
        <button class="w-full h-10  rounded-md text-white text-xl font-bold bg-green-500 hover:bg-green-700" type="">Lưu</button>
      </div>

      </form>



    </div>
   </div>


   <script>
    //file detail
const popup = document.querySelector("#popup");
const open_card_popup = document.querySelector("#open_card_popup");
//const close_card_popup = document.querySelector("#close_card_popup");
const close_card_popups = document.querySelectorAll("#close_card_popup");

for (const close_card_popup of close_card_popups){
  close_card_popup.addEventListener("click", closeCarPopup);
      }
// close_card_popup.addEventListener("click", closeCarPopup);

open_card_popup.addEventListener("click", openCarPopup);

function openCarPopup() {
  popup.classList.toggle("invisible");
}
function closeCarPopup() {
  popup.classList.toggle("invisible");
}
   </script>






   
   <script>
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