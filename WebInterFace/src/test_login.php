<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/assets/css/input.css" />
    <link
      rel="stylesheet"
      href="./assets/font/themify-icons-font/themify-icons/themify-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="./assets/css/style.css
    "
    />
    <link href="./dist/output.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
<div id="" 
         class="
         h-screen w-full 
                " 
         style="background-image: url('https://thuthuatnhanh.com/wp-content/uploads/2020/09/hinh-nen-cong-nghe.jpg');
         background-repeat: no-repeat;
                display: flex;
                align-items: center;
                justify-content: center;">
  <form     action="register.php"
            method="post"
            class="w-3/4 fixed grid grid-cols-2">
            <div class=" h-full w-full "
            style="background-color: rgba(255, 255, 255, 0.4);">
              <img
                src="./assets/img/bs.png"
                alt=""
                class="h-full"
              />
            </div>
            <div class="bg-gray-300 h-full w-full p-12">
            <form 
 action="login.php" 
 id=""
 class="h-4/5 w-1/3 bg-white "
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
<div ><a class="pl-16" href="">Forgot password?</a> </div>
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



</form>
              
              </div>
            </div>
          </form>
 
    </div>
    
</body>
</html>