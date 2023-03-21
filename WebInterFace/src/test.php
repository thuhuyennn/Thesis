<!-- <!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var dps = []; // dataPoints
var chart = new CanvasJS.Chart("chartContainer", {
	title :{
		text: "Dynamic Data"
	},
	data: [{
		type: "line",
		dataPoints: dps
	}]
});

var xVal = 0;
var yVal = 100; 
var updateInterval = 1000;
var dataLength = 20; // number of dataPoints visible at any point

var updateChart = function (count) {

	count = count || 1;

	for (var j = 0; j < count; j++) {
		yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
		dps.push({
			x: xVal,
			y: yVal
		});
		xVal++;
	}

	if (dps.length > dataLength) {
		dps.shift();
	}

	chart.render();
};

updateChart(dataLength);
setInterval(function(){updateChart()}, updateInterval);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> -->


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


