

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
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
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
      <!-- component -->



<!-- This is an example component -->
<div class="max-w-2xl mx-auto">
    
    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
            </li>
            <li role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden h-96 overflow-y-scroll" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		setInterval(function(){
			$("#data").load("get_data_chart.php");
		}, 1000);
	});
	</script>

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
            <!-- <p class="text-gray-500 dark:text-gray-400 text-sm">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p> -->
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 h-40 overflow-y-scroll" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <p class="text-gray-500 dark:text-gray-400 text-sm">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhThis is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <p class="text-gray-500 dark:text-gray-400 text-sm">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <p class="text-gray-500 dark:text-gray-400 text-sm">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
    </div>

    <!-- <p class="mt-5">This tabs component is part of a larger, open-source library of Tailwind CSS components. Learn more by going to the official <a class="text-blue-600 hover:underline" href="#" target="_blank">Flowbite Documentation</a>.</p> -->
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

    </div>
  </div>
</div>
    </div>
    


   </div>

    
</body>

</html>