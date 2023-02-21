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
      <div class="fixed left-0 top-0 bottom-0 right-0 bg-white">
        <div
          class="h-1/3 w-full bg-green-500 text-white pt-4"
          style="
            background-image: linear-gradient(
              to right,
              rgb(131, 238, 131) 10%,
              rgb(65, 192, 65) 30%,
              rgb(12, 73, 12)
            );
          "
        >
          <p class="text-4xl font-semibold text-center">
            Welcome to the website
          </p>
          <br />
          <p class="opacity-90 italic mx-52">
            I believe that the greatest gift you can give your family and the
            world is a healthy you – Joyce Meyer. Bạn nên tin rằng món quà quý
            giá nhất ma bạn có thể tặng cho gia đình bạn va cả thế giời nay đó
            chính là sức khỏe của bản thân bạn
          </p>
          <form
            action="register.php"
            method="post"
            class="h-3/4 w-2/3 top-36 fixed grid grid-cols-3"
            style="left: 16%"
          >
            <div class="bg-black h-full w-full">
              <img
                src="https://img.lovepik.com/element/40036/9469.png_860.png"
                alt=""
                class="h-full"
              />
            </div>
            <div class="bg-gray-300 h-full w-full col-span-2">
              <div class="text-black p-6">
                <div class="grid grid-cols-2 gap-4 mt-4">
                  <div>
                    <label for="Fname"
                      >First Name <span class="text-red-600">*</span></label
                    ><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-user"></i>
                      </div>
                      <input
                        name="firstname"
                        type="text"
                        id="Fname"
                        placeholder=""
                        class="border w-full"
                        required
                      />
                    </div>
                  </div>
                  <div>
                    <label for="Lname"
                      >Last Name <span class="text-red-600">*</span></label
                    ><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-user"></i>
                      </div>
                      <input
                        type="text"
                        name="lastname"
                        id="Lname"
                        placeholder=""
                        class="border w-full"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-4">
                  <div>
                    <label for="Password"
                      >Password <span class="text-red-600">*</span></label
                    ><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-lock"></i>
                      </div>
                      <input
                        type="password"
                        name="password"
                        id="Password"
                        placeholder=""
                        class="border w-full"
                        required
                      />
                    </div>
                  </div>
                  <div>
                    <label for="repass"
                      >Re-Type Password
                      <span class="text-red-600">*</span></label
                    ><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-lock"></i>
                      </div>
                      <input
                        type="password"
                        name="repassword"
                        id="repass"
                        placeholder=""
                        class="border w-full"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div>
                  <label for="bday">Birth Day</label><br />
                  <div class="flex">
                    <div
                      class="h-7 w-7 bg-white text-black text-md text-center"
                    >
                      <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <input
                      type="date"
                      name="birthday"
                      id="bday"
                      placeholder=""
                      class="border w-full"
                    />
                  </div>
                </div>
                <div>
                  <label for="address">Address</label><br />
                  <div class="flex">
                    <div
                      class="h-7 w-7 bg-white text-black text-md text-center"
                    >
                      <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <input
                      type="text"
                      name="address"
                      id="address"
                      placeholder=""
                      class="border w-full"
                    />
                  </div>
                </div>

                <div class="grid grid-cols-2 gap-4 py-4">
                  <div class="pb-6">
                    <label for="mail">Email *</label><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-envelope"></i>
                      </div>
                      <input
                        type="email"
                        name="email"
                        id="mail"
                        placeholder=""
                        class="border w-full"
                      />
                    </div>
                    <br />
                    <label for="phone">Phone number</label><br />
                    <div class="flex">
                      <div
                        class="h-7 w-7 bg-white text-black text-md text-center"
                      >
                        <i class="fa-solid fa-phone"></i>
                      </div>
                      <input
                        type="number"
                        name="telephone"
                        id="phone"
                        placeholder=""
                        class="border w-full"
                      />
                    </div>
                  </div>
                  <div>
                    <div class="grid grid-cols-2 mt-6">
                      <div>
                        <input
                          class="h-4 w-4"
                          type="radio"
                          name="gender"
                          value="male"
                          checked
                          id=""
                        />
                        Male
                      </div>
                      <div>
                        <input
                          class="h-4 w-4"
                          type="radio"
                          name="gender"
                          value="female"
                          checked
                          id=""
                        />
                        Female
                      </div>
                    </div>
                    <button
                      type="submit"
                      name="btn_reg"
                      style="
                        box-shadow: 0 5px 4px rgba(0, 0, 0, 0.4);
                        background-image: linear-gradient(
                          to right,
                          rgb(131, 238, 131) 10%,
                          rgb(65, 192, 65) 30%,
                          rgb(12, 73, 12)
                        );
                      "
                      class="h-12 w-full mt-10"
                    >
                      Register
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
