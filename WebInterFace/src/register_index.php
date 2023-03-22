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
    <title>register</title>
  </head>
  <body>
    <div>
      <div class="">
        <div
          class="h-1/4 w-full bg-green-500 text pt-4"
          style="
            background-image: linear-gradient(
              to right,
              rgb(240 255 255) 10%,
              rgb(245 255 250) 30%,
              rgb(255 255 240)
            );
          "
        >
          <p class="text-4xl font-semibold text-black text-center">
            Welcome to the website
          </p>
          <br />

          <section class="max-w-4xl p-6 mx-auto rounded-md shadow-md dark:bg-gray-800" style="box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);background-image: linear-gradient(to right, rgb(211 211 211) 10%,rgb(220 220 220) 30%,rgb(0 255 127) );">
    <h1 class="text-xl text-black font-bold text-black capitalize dark:text-black">Account settings</h1>
    <form action="register.php" method="post">
        <div>
          <label class=" dark:text-gray-200" for="fullname" >Fullname <span class="font-bold text-red-600 ">*</span></label>
          <input id="fullname" name="fullname" type="text" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-black dark:text-gray-200" for="username">Username <span class="font-bold text-red-600 ">*</span></label>
                <input id="username" name="username" required type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-black dark:text-gray-200" for="email">Email Address</label>
                <input id="email" name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-black dark:text-gray-200" for="password">Password <span class="font-bold text-red-600 ">*</span></label>
                <input id="password" required type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-black dark:text-gray-200" for="repassword">Password Confirmation <span class="font-bold text-red-600 ">*</span></label>
                <input id="repassword" required name="repassword" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div class="block pt-10 pb-2 space-x-4 text-xl">
          <label>
            <input
              type="radio"
              name="gender"
              value="male"
              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
            />
            Male
          </label>
          <label>
            <input
              type="radio"
              name="gender"
              value=" female"
              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
            />
            Female
          </label>
        </div>

            <div>
                <label class="text-black dark:text-gray-200" for="birthday">Date</label>
                <input id="birthday" name="birthday" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-black dark:text-gray-200" for="address">Address</label>
                <input id="address"  name="address" type="text" class="block w-full px-6  mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></input>
            </div>
            <div>
                <label class="block text-sm font-medium text-black">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="fileupload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="fileupload" name="fileupload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-black">or drag and drop</p>
                  </div>
                  <p class="text-xs text-black">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
            
        </div>
        
        <div class="flex mb-12">
            <button type="submit" name="btn_reg" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-600">Register</button>
            <a href="index.php" class="mx-8 mt-2 text-green-400"><i class="fa-solid fa-arrow-left font-bold  mx-2"></i>Quay lại</a>
        </div>


    </form>
</section>

  </body>
</html>
