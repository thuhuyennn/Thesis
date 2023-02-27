
<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>Home</title>
  </head>
  <body>
    <div class="my-6 mx-32">
      <div class="relative ">
        <div class="flex">
          <img class="h-24 w-24" src="./assets/img/logo.jpg" alt="">
          <p class=" flex 
                     justify-center 
                     items-center 
                     font-mono 
                     font-bold 
                     text-xl">PhysioDry</p>
        </div>

        <button style="border: none;"
                class="absolute 
                       right-0 
                       top-8 
                       h-9 
                       w-52
                       rounded-md 
                       font-medium
                       bg-green-500  
                       hover:bg-green-300 
                       text-gray-50">
          Make an Appointment
        </button>
      </div>
      <div class="grid grid-cols-2 gap-2">
        <div class="text-4xl font-serif font-bold">
          As to diseases, make a habit of two things — to help, or at least, to
          do no harm.
        </div>
        <div>
          <ul class="flex font-bold font-mono text-lg">
            <li class="mx-8">Home</li>
            <li class="mx-8">Service</li>
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
          <p class="text-justify py-5 opacity-60">
            A slender restricted diet is always dangerous inchronic diseases,
            and also in acute diseases, where it is not requisite. Andagain, a
            diet brought to the extreme point of attenuation is dangerous;
            andrepletion, when in the extreme, is also dangerous.
          </p>
        </div>
      </div>
      <div class="grid grid-cols-4 gap-4">
        <div class="w-full bg-green-500 rounded-md"></div>
        <div class=" col-span-3
                     bg-cover 
                     bg-no-repeat 
                     h-screen rounded-md  
                     flex 
                     justify-center 
                     items-center"
          style=" background-image: url(./assets/img/img_1j.jpg);">
             <div class="ml-32 h-4/5  
                         w-1/2 
                         rounded-md " 
                  style="background-color: rgba(0, 0, 0, 0.6);">
              <div>
                <input  type="text" class="input-search m-6 px-4" 
                        style="background-color: rgba(255, 255, 255, 0.4); 
                        border-radius: 0 15px 0 15px; 
                        box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);">
                <div class="grid grid-cols-2 gap-2 ">
                  <div class=" h-40 bg-cover w-64" 
                  style="background-image: url(./assets/img/sun.png);">
                  </div>
                  <div class="name
                              font-semibold 
                              text-xl
                             text-white 
                             space-y-4 
                             text-center">
                    <span class="city"></span>
                    <samp>,</samp>
                    <span class="country"></span>
                    <div class="temperature">
                      <span class="value text-7xl "></span>
                      <span><SUp>o</SUp>C</span>
                    </div>         
                    <p class="time"></p>
                  </div>
                </div>
                <div class=" font-semibold 
                             text-4xl text-center
                              text-white 
                              mx-24 
                              my-5 
                              rounded-lg 
                              py-6 " 
                    style="background-color: rgb(252, 248, 248, 0.2);
                           box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);">
                <p class="short-desc">Clouds</p> 
                 </div>
                <div class="more-desc 
                            flex 
                            px-6 
                            mt-8 
                            text-lg
                             text-white" 
                     style="justify-content: space-between ; 
                            text-align: center ">
                  <div class="visibility flex flex-col ">
                    <i class="fa-solid fa-eye "></i>
                    <span class=""></span>
                  </div>
                   <div class="wind flex flex-col">
                    <i class="fa-brands fa-twitter"></i>
                    <span class=""></span>
                  </div>
                  <div class="cloud flex flex-col">
                    <i class="fa-solid fa-cloud-sun"></i>
                    <span></span>
                  </div>
                </div>


              </div>
              <div>

              </div>
             </div>
          </div>
        </div>
      </div>

    </div>
    <div id="model" 
         class="fixed 
                invisible
                top-0 
                bottom-0 
                left-0 
                right-0
                " 
         style="background-color: rgba(0, 0, 0, 0.6);
                display: flex;
                align-items: center;
                justify-content: center;">
       <div id="select"
            class="relative 1/2 w-1/2 bg-white py-8 px-24 rounded-xl"
          >
          <img src="./assets/img/logobacsi.png"  class=" h-40 w-40 absolute -top-24 left-64 " alt="">
           <button id="close" class="absolute -top-4 -right-4 h-12 w-12 rounded-full bg-white"
           style="box-shadow: 0 6px 6px rgba(0, 0, 0, 0.8);">
           <i class="fa-solid fa-xmark text-3xl font-extrabold text-yellow-400"></i>
           </button>
          <P class="text-xl font-semibold  text-center pt-8">Đăng nhập tài khoản để xem thông tin chi tiết của người dùng</P>
        <div class="mx-16">
        <button type="submit" 
                  onclick="location.href='login_index.php'"
                  class="h-12 
                         w-full
                         my-6 
                         font-semibold
                         rounded-3xl
                       hover:bg-gradient-to-r from-green-300 to-green-500
                       text-white"
                       style="box-shadow:0 4px 0 #1a8b29d7;
                          background-image: linear-gradient(
                            83.47deg,
                            #58cc02 9.02%,
                            #23ac38 90.81%
                        );">
           ĐĂNG NHẬP
          </button>
          <button  class="rounded-3xl 
                          h-12 
                          w-full
                          font-bold 
                        hover:bg-red-400
                        bg-red-700 "
                    onclick="location.href='register_index.php'"
                    style="box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);">TẠO MỘT TÀI KHOẢN MỚI</button>

        </div>
</div>
</div>
    </div>
    <script src="weather.js"></script>
    <script src="login.js"></script>
  </body>
  
  
</html>


