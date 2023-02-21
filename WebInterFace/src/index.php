
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
    <title>IoT</title>
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
                top-0 
                bottom-0 
                left-0 
                right-0
                invisible" 
         style="background-color: rgba(0, 0, 0, 0.6);
                display: flex;
                align-items: center;
                justify-content: center;">
 <form 
 action="login.php" 
 id="login"
 class="h-4/5 w-1/3 bg-white p-8 animate-[wiggle_0.5s_ease_infinite]"
 style="box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);">

<div id="header">
<ul class="flex mb-12 ">
 <li class="mx-2">Sign in with</li>
 <li class="mx-2"><button class="rounded-full h-8 w-8 bg-blue-900 text-white"><i class="fa-brands fa-facebook-f"></i></button></li>
 <li class="mx-2"><button class="rounded-full h-8 w-8 bg-blue-900 text-white"><i class="fa-brands fa-twitter"></i></button></li>
 <li class="mx-2"><button class="rounded-full h-8 w-8 bg-blue-900 text-white"><i class="fa-brands fa-instagram"></i></button></li>
</ul>

</div>
<div id="conten">
<input type="email" placeholder="Email address" class="w-full h-9 mb-6 border rounded-sm px-2"  >
<input type="password" placeholder="Password" class="w-full h-9 mb-6 border rounded-sm px-2">
</div>
<div id="footer_1" class="grid grid-cols-2 gap-4">
<div class="flex">
 <input type="checkbox" name="" id="">
 <p class="mx-2">Remember me</p>
</div>
<div>Forgot password?</div>
</div>
<div id="footer_2">
<button type="submit" 
       class="h-9 
              w-32 
              my-6 
              font-semibold
              rounded-sm
              bg-blue-800
              hover:bg-blue-600
              text-white">
   LOGIN
 </button>
<P>Don't have an account? <a href="register_index.php" class="text-red-700">Register</a></P>
<button  class="float-right
               rounded-3xl 
               h-8 
               w-20 
               font-semibold 
               mt-16
               hover:bg-red-400
              bg-red-800 "
        style="box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);">Close</button>
</div>


</form>
    </div>
    <script src="weather.js"></script>
    <script src="login.js"></script>
  </body>
  
  
</html>


