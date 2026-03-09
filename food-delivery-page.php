<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind CSS v4 Setup</title>
  <link href="./assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />
</head>

<body class="font-[Outfit]">
  <!-- header section -->
  <?php include __DIR__ . '/includes/header.php'; ?>
  <!-- banner section -->
  <section class="lg:px-20 px-4">
    <div>
      <div class="relative h-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1">
        <div class="flex flex-col justify-center md:space-y-14 space-y-6">
          <nav class="flex items-center" aria-label="Breadcrumb">
            <ul class="inline-flex items-center space-x-1 md:space-x-2">
              <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm text-black font-semibold hover:text-blue-600">
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
                  </svg>
                  <a href="#" class="ms-1 text-sm font-medium text-black hover:text-blue-600 md:ms-2">Services</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
                  </svg>
                  <span class="ms-1 text-sm font-medium text-black/50 md:ms-2">Mobile App Development</span>
                </div>
              </li>
            </ul>
          </nav>
          <h3 class="text-black md:text-4xl text-lg font-bold">
            We brought
            <span class="text-[linear-gradient(99deg,_#4ec6df,_#4aa5cf)]">75% reduction</span>
            in cost per hire using AI
          </h3>
          <h4 class="font-normal text-black text-base">
            We are revolutionizing the landscape of wellness with our
            cutting-edge IoT App for a Startup backed by Shark Tank
          </h4>

          <div class="">
            <button
              class="bg-[#137ec2] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-white  hover:bg-white md:text-base  transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black cursor-pointer">Get
              a Free Quote</button>
          </div>
        </div>
        <div class="flex justify-center items-center xl:w-[600px] w-auto h-auto p-10">
          <img src="assets/img/food-banner.webp" loading="lazy" class="w-full object-cover" alt="slideimg1" />
        </div>
      </div>
    </div>
  </section>
  <!-- services section -->
  <section class="lg:px-20 px-4 py-14">
    <div>
      <h2 class="md:text-5xl text-xl font-medium text-black">Food and Beverage development Services We Provide</h2>
      <div class="mt-14">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Native Mobile App Development</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>Create a unique, platform-specific mobile app. Native mobile apps leverage the specific capabilities of
                individual platforms to improve user engagement and satisfaction.</p>
              <p>Our developers use the latest IDEs, such as Android Studio and Xcode, along with performance profiling
                tools, to create an intuitive user experience. If your business wants to provide a superior user
                experience on different platforms, a native mobile app is the way to go.</p>
            </div>
          </div>
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Cross-Platform App Development</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>Reduce production time and reach a wider audience with an app that works on multiple platforms. You can
                save time and resources using a cross-platform rather than native app development approach.</p>
              <p>Our mobile app developers utilize cross-platform tools like React Native and Flutter to create apps
                that work across multiple platforms. Thanks to these tools and a unified code base, we produce
                cross-platform apps more quickly, allowing you to connect with your user base sooner.</p>
            </div>
          </div>
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Progressive Web App Development</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>Harness modern web capabilities with progressive web app (PWA) development. Deliver an app-like
                experience to a wide user base by connecting with them through their web browsers rather than a
                standalone app they need to download.</p>
              <p>Using tools like Workbox and Lighthouse, our mobile app developers create PWAs that function offline,
                deliver push notifications, and protect user data</p>
            </div>
          </div>
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">iOS App Development</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>Your business needs a way to connect with enterprise corporate clients and individual consumers alike.
                One of the best ways to do this is with a dedicated iOS app. Reach a broad iOS audience and have a
                secure app that your audience loves.</p>
              <p>Our developers use robust iOS development tools like Xcode and Interface Builder to streamline
                development.</p>
            </div>
          </div>
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Android App Development</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>One of the most significant advantages of the Android platform is the number of customization options.
                Create a unique app experience for your audience that connects with users worldwide and on different
                types of Android devices.</p>
              <p>With modern tools like Android Studio and the Software Development Kit (SDK), our developers creates
                custom Android apps.</p>
            </div>
          </div>
          <div class="border-t border-[#d9dcdf] pt-5">
            <div class="flex items-center gap-4 ">
              <div class="text-[#f6bf22]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                  width="20px" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z">
                  </path>
                </svg>
              </div>
              <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Wearables and Embedded Software</h3>
            </div>
            <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
              <p>Connect with your audience in an entirely new way thanks to wearables and embedded software. We'll help
                you leverage the latest technology trends to stay competitive in your market.</p>
              <p>We build apps for wearables using tools like Arduino, PlatformIO, and MBEDâ€”whether you're looking to
                create the next great health monitoring app, help your audience stay productive, or track sleeping
                patterns.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose us section -->
  <section class="lg:px-20 px-4 py-14 bg-[#f7f8fc]">
    <div class="flex flex-wrap">
      <div class="md:w-1/2 w-full">
        <div>
          <div>
            <h6 class="md:text-lg text-sm font-bold mb-6">THIS IS WHY TECHAHEAD IS THE</h6>
            <h6
              class=" flex flex-col gap-2 text-transparent bg-clip-text bg-[linear-gradient(285deg,_#137ec2,_#f6bf22,_#137ec2)] font-bold md:text-3xl text-xl">
              #1 Food Delivery App <br> <span class="text-black font-normal">Development Company</span> </h6>
          </div>
          <div class="mt-3">
            <p class="text-[#222222] leading-[1.6]">By leveraging the dynamics of technology <br> and human-first design
              fundamentals, we are empowering food businesses to attract more customers and turbocharge profits. </p>
          </div>
        </div>
        <div class="mt-8 space-y-8">
          <div class="flex gap-4">
            <div class="text-[#137ec2] w-9 h-9 rounded-full bg-[#2182b826] flex items-center justify-center shrink-0 ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M416 128 192 384l-96-96"></path>
              </svg>
            </div>
            <div>
              <h6 class="text-base font-semibold mb-2">Seamless Integration </h6>
              <p class="text-sm font-normal">Our food delivery app development services seamlessly integrate with
                existing restaurant systems, ensuring smooth operations and enhanced efficiency.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="text-[#137ec2] w-9 h-9 rounded-full bg-[#2182b826] flex items-center justify-center shrink-0 ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M416 128 192 384l-96-96"></path>
              </svg>
            </div>
            <div>
              <h6 class="text-base font-semibold mb-2">Seamless Integration </h6>
              <p class="text-sm font-normal">Our food delivery app development services seamlessly integrate with
                existing restaurant systems, ensuring smooth operations and enhanced efficiency.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="text-[#137ec2] w-9 h-9 rounded-full bg-[#2182b826] flex items-center justify-center shrink-0 ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M416 128 192 384l-96-96"></path>
              </svg>
            </div>
            <div>
              <h6 class="text-base font-semibold mb-2">Seamless Integration </h6>
              <p class="text-sm font-normal">Our food delivery app development services seamlessly integrate with
                existing restaurant systems, ensuring smooth operations and enhanced efficiency.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="text-[#137ec2] w-9 h-9 rounded-full bg-[#2182b826] flex items-center justify-center shrink-0 ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M416 128 192 384l-96-96"></path>
              </svg>
            </div>
            <div>
              <h6 class="text-base font-semibold mb-2">Seamless Integration </h6>
              <p class="text-sm font-normal">Our food delivery app development services seamlessly integrate with
                existing restaurant systems, ensuring smooth operations and enhanced efficiency.</p>
            </div>
          </div>
          <div class="flex gap-4">
            <div class="text-[#137ec2] w-9 h-9 rounded-full bg-[#2182b826] flex items-center justify-center shrink-0 ">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px"
                width="20px" xmlns="http://www.w3.org/2000/svg">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                  d="M416 128 192 384l-96-96"></path>
              </svg>
            </div>
            <div>
              <h6 class="text-base font-semibold mb-2">Seamless Integration </h6>
              <p class="text-sm font-normal">Our food delivery app development services seamlessly integrate with
                existing restaurant systems, ensuring smooth operations and enhanced efficiency.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="md:w-1/2 w-full">
        <div class="p-8">
          <img src="assets/img/food-section.webp" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- chance section -->
  <section class="lg:px-20 px-4 py-10 relative overflow-hidden bg-[#137ec2]">
    <div class="flex">
      <div class="flex flex-col w-full">
        <div class="flex flex-wrap items-center justify-between">
          
          <div class="md:w-6/12 w-full rounded-3xl flex items-center justify-center relative">
            <img loading="lazy" fetchpriority="low" src="https://toxsl.com/themes/new/img/screen/food_banner_image.png"
              alt="If You're a Person Who think out of the Box &amp; Dream Big"
              title="If You're a Person Who think out of the Box &amp; Dream Big"
              class="size-full object-contain object-bottom relative z-10 aspect-[569/394]" width="569" height="394">
          </div>
          <div class="md:w-6/12 w-full xl:py-16 lg:py-14 md:py-12 sm:py-10 py-8">
            <div
              class=" w-full 2xl:text-4xl xl:text-3xl lg:text-2xl text-xl md:font-bold font-semibold text-white text-balance relative z-10 max-md:text-center">
              Turn Every Order Into Opportunity In The Digital Food Scene</div>
            <div class="w-full md:pt-6 pt-4 max-md:text-center">
              <button
                class="bg-[#f6bf22] font-medium text-nowrap px-8 py-4 rounded-lg lg:text-lg text-base  text-black hover:bg-transparent md:text-base transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black cursor-pointer">
                <span>Consult Our Experts</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--food delivery  -->
  <section class="lg:px-20 px-4 pt-10 relative bg-[#051621]">
    <div class="!container flex  z-10 relative">
      <div class="flex flex-col w-full">
        <div class="flex flex-wrap justify-between relative items-start ">
          <div class="lg:w-6/12 md:w-7/12 w-full rounded-3xl flex flex-col relative md:pl-8 md:mb-0 mb-6">
            <div class="w-full flex flex-col overflow-x-hidden gap-6">
              <div
                class="flex md:gap-6 gap-4 items-start md:p-6 rounded-xl duration-300 hover:lg:bg-gradient-to-r hover:lg:from-[#f6bf2261] hover:lg:to-[#08101D]">
                <div class="md:size-14 size-12 flex items-center justify-center shrink-0 rounded-full bg-[#f6bf22]">
                  <svg fill="#000" width="35px" height="35px" viewBox="0 0 64 64" id="Layer_1_1_" version="1.1"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <g>
                        <path
                          d="M63,26c0-3.433-2.007-6.561-5.05-8.06C57.982,17.631,58,17.318,58,17c0-4.963-4.038-9-9-9 c-0.076,0-0.151,0.013-0.228,0.015C47.865,4.005,44.28,1,40,1c-3.483,0-6.505,1.993-8,4.896C30.505,2.993,27.483,1,24,1 c-4.248,0-7.862,2.955-8.775,7.011C15.15,8.01,15.076,8,15,8c-4.962,0-9,4.037-9,9c0,0.305,0.016,0.613,0.049,0.922 C2.999,19.42,1,22.57,1,26c0,2.303,0.877,4.4,2.305,5.993C1.832,33.635,1,35.771,1,38c0,3.432,2.007,6.561,5.05,8.06 C6.018,46.369,6,46.682,6,47c0,4.963,4.038,9,9,9c0.076,0,0.15-0.01,0.225-0.011C16.138,60.045,19.752,63,24,63 c3.483,0,6.505-1.993,8-4.896C33.495,61.007,36.517,63,40,63c4.28,0,7.865-3.005,8.772-7.015C48.849,55.987,48.924,56,49,56 c4.962,0,9-4.037,9-9c0-0.305-0.017-0.612-0.049-0.922C61.001,44.581,63,41.43,63,38c0-2.303-0.877-4.4-2.305-5.993 C62.168,30.365,63,28.229,63,26z M56.493,44.533l-0.785,0.3l0.16,0.825C55.956,46.11,56,46.562,56,47c0,3.859-3.14,7-7,7 c0-4.963-4.038-9-9-9v2c3.86,0,7,3.141,7,7s-3.14,7-7,7s-7-3.141-7-7V16h-2v38c0,3.859-3.14,7-7,7 c-3.247,0-6.013-2.219-6.783-5.288C21.109,54.721,24,51.196,24,47h-2c0,3.859-3.14,7-7,7s-7-3.141-7-7s3.14-7,7-7v-2 c-3.932,0-7.275,2.539-8.497,6.06C4.372,42.824,3,40.51,3,38c0-1.734,0.647-3.395,1.793-4.673C6.265,34.376,8.059,35,10,35v-2 c-3.86,0-7-3.141-7-7c0-2.878,1.812-5.504,4.507-6.533l0.786-0.301l-0.161-0.825C8.044,17.892,8,17.44,8,17c0-3.859,3.14-7,7-7 s7,3.141,7,7h2c0-4.196-2.891-7.721-6.783-8.712C17.987,5.219,20.753,3,24,3c3.86,0,7,3.141,7,7v4h2v-4c0-3.859,3.14-7,7-7 s7,3.141,7,7s-3.14,7-7,7v2c4.962,0,9-4.037,9-9c3.86,0,7,3.141,7,7s-3.14,7-7,7v2c3.932,0,7.275-2.539,8.497-6.061 C59.628,21.175,61,23.49,61,26c0,1.734-0.647,3.395-1.793,4.673C57.735,29.624,55.941,29,54,29c-4.962,0-9,4.037-9,9h2 c0-3.859,3.14-7,7-7s7,3.141,7,7C61,40.878,59.188,43.504,56.493,44.533z">
                        </path>
                        <path d="M43,10h2c0-2.757-2.243-5-5-5v2C41.654,7,43,8.346,43,10z"></path>
                        <path d="M37,54h-2c0,2.757,2.243,5,5,5v-2C38.346,57,37,55.654,37,54z"></path>
                        <path d="M54,41v2c2.757,0,5-2.243,5-5h-2C57,39.654,55.654,41,54,41z"></path>
                        <path d="M39,37h-2c0,3.309,2.691,6,6,6v-2C40.794,41,39,39.206,39,37z"></path>
                        <path d="M41,23v-2c-3.309,0-6,2.691-6,6h2C37,24.794,38.794,23,41,23z"></path>
                        <path d="M25,37h-2c0,3.309,2.691,6,6,6v-2C26.794,41,25,39.206,25,37z"></path>
                        <path d="M40,28h-2c0,3.309,2.691,6,6,6v-2C41.794,32,40,30.206,40,28z"></path>
                        <path d="M27,23v-2c-3.309,0-6,2.691-6,6h2C23,24.794,24.794,23,27,23z"></path>
                        <path d="M14,36h2c0-2.206,1.794-4,4-4v-2C16.691,30,14,32.691,14,36z"></path>
                        <path d="M15,50v2c2.757,0,5-2.243,5-5h-2C18,48.654,16.654,50,15,50z"></path>
                        <path d="M5,26h2c0-1.654,1.346-3,3-3v-2C7.243,21,5,23.243,5,26z"></path>
                        <path d="M15,12v2c1.654,0,3,1.346,3,3h2C20,14.243,17.757,12,15,12z"></path>
                        <path d="M24,5v2c1.654,0,3,1.346,3,3h2C29,7.243,26.757,5,24,5z"></path>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="w-full flex flex-col md:gap-3 gap-1">
                  <h3 class="w-full xl:text-2xl lg:text-xl md:text-lg text-base font-semibold text-white">Artificial
                    Intelligence</h3>
                  <div class="w-full md:text-sm text-xs font-normal text-white">By integrating AI, we enable smart order
                    routing, and personalized recommendations, streamlining delivery operations for faster, smarter
                    service.</div>
                </div>
              </div>
              <div
                class="flex md:gap-6 gap-4 items-start md:p-6 rounded-xl duration-300 hover:lg:bg-gradient-to-r hover:lg:from-[#f6bf2261] hover:lg:to-[#08101D]">
                <div class="md:size-14 size-12 flex items-center justify-center shrink-0 rounded-full bg-[#f6bf22] !text-black">
                 <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 10C2 8.89543 2.89543 8 4 8H20C21.1046 8 22 8.89543 22 10V17C22 18.1046 21.1046 19 20 19H16.1324C15.4299 19 14.7788 18.6314 14.4174 18.029L12.8575 15.4292C12.4691 14.7818 11.5309 14.7818 11.1425 15.4292L9.58261 18.029C9.22116 18.6314 8.57014 19 7.86762 19H4C2.89543 19 2 18.1046 2 17V10Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3.81253 6.7812C4.5544 5.6684 5.80332 5 7.14074 5H16.8593C18.1967 5 19.4456 5.6684 20.1875 6.7812L21 8H3L3.81253 6.7812Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>
                <div class="w-full flex flex-col md:gap-3 gap-1">
                  <h3 class="w-full xl:text-2xl lg:text-xl md:text-lg text-base font-semibold text-white">AR and VR</h3>
                  <div class="w-full md:text-sm text-xs font-normal text-white">AR and VR technologies transform food
                    delivery by letting customers virtually explore menus or sample dishes, boosting engagement and
                    smarter decision-making.</div>
                </div>
              </div>
              <div
                class="flex md:gap-6 gap-4 items-start md:p-6 rounded-xl duration-300 hover:lg:bg-gradient-to-r hover:lg:from-[#f6bf2261] hover:lg:to-[#08101D]">
                <div class="md:size-14 size-12 flex items-center justify-center shrink-0 rounded-full bg-[#f6bf22]">
                  <svg fill="#000" height="35px" width="35px" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 386.651 386.651" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <g>
                        <path
                          d="M342.367,135.781c-2.674-1.367-5.889-1.122-8.324,0.635l-138.556,99.968l-89.233-83.725 c-3.032-2.844-7.736-2.892-10.826-0.112l-74.395,66.959c-1.685,1.518-2.648,3.679-2.648,5.946v91.451c0,4.418,3.582,8,8,8h312.339 c4.418,0,8-3.582,8-8v-174C346.724,139.899,345.041,137.149,342.367,135.781z M53.507,308.903H34.385v-79.889l19.122-17.211 V308.903z M88.045,308.903H69.507v-111.5l18.538-16.685V308.903z M122.582,308.903h-18.538V172.526l18.538,17.393V308.903z M157.12,308.903h-18.538V204.931l18.538,17.394V308.903z M192.015,308.903H173.12v-71.565l16.227,15.226 c0.791,0.741,1.702,1.288,2.667,1.65V308.903z M226.91,308.903h-18.896v-61.828l18.896-13.634V308.903z M261.806,308.903H242.91 v-87.006l18.895-13.633V308.903z M296.701,308.903h-18.896V196.72l18.896-13.634V308.903z M330.724,308.903h-18.022v-137.36 l18.022-13.003V308.903z">
                        </path>
                        <path
                          d="M385.375,65.087c-1.439-2.148-3.904-3.404-6.461-3.337l-50.696,1.368c-3.471,0.094-6.429,2.547-7.161,5.941 c-0.732,3.395,0.95,6.85,4.074,8.366l11.846,5.75L196.96,183.012l-95.409-86.504c-4.738-4.296-11.955-4.322-16.723-0.062 L4.173,168.491c-5.149,4.599-5.594,12.501-0.995,17.649c4.598,5.148,12.499,5.594,17.649,0.995l72.265-64.55l94.533,85.709 c2.369,2.147,5.376,3.239,8.398,3.239c2.532,0,5.074-0.767,7.255-2.322L350.82,104.01l0.701,11.074 c0.22,3.464,2.777,6.329,6.193,6.939c0.444,0.079,0.889,0.118,1.328,0.118c2.938,0,5.662-1.724,6.885-4.483l20.077-45.327 C387.052,69.968,386.815,67.234,385.375,65.087z">
                        </path>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="w-full flex flex-col md:gap-3 gap-1">
                  <h3 class="w-full xl:text-2xl lg:text-xl md:text-lg text-base font-semibold text-white">Analytics of
                    Data</h3>
                  <div class="w-full md:text-sm text-xs font-normal text-white">We use data analytics to examine
                    consumer behavior, demand patterns, and operational effectiveness to optimize food delivery apps.
                  </div>
                </div>
              </div>
              <div
                class="flex md:gap-6 gap-4 items-start md:p-6 rounded-xl duration-300 hover:lg:bg-gradient-to-r hover:lg:from-[#f6bf2261] hover:lg:to-[#08101D]">
                <div class="md:size-14 size-12 flex items-center justify-center shrink-0  rounded-full bg-[#f6bf22]">
                  <svg width="35px" height="35px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <defs>
                        <style>
                          .a {
                            fill: none;
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                          }
                        </style>
                      </defs>
                      <circle class="a" cx="14.3548" cy="19.496" r="4.934"></circle>
                      <path class="a"
                        d="M24.7339,33.2758v1.6906a1.641,1.641,0,0,1-1.6447,1.6446H6.1447A1.641,1.641,0,0,1,4.5,34.9664V33.2758c2.1586-7.0207,18.973-5.8163,20.2339,0Z">
                      </path>
                      <path class="a" d="M25.258,20.877v5.0323"></path>
                      <path class="a" d="M29.8186,16.2116V30.5745"></path>
                      <path class="a" d="M34.3791,11.3891V35.3972"></path>
                      <path class="a" d="M43.5,20.877v5.0323"></path>
                      <path class="a" d="M38.94,16.2116V30.5745"></path>
                    </g>
                  </svg>
                </div>
                <div class="w-full flex flex-col md:gap-3 gap-1">
                  <h3 class="w-full xl:text-2xl lg:text-xl md:text-lg text-base font-semibold text-white">Voice Support
                  </h3>
                  <div class="w-full md:text-sm text-xs font-normal text-white">By integrating voice support, we offer a
                    hands-free experience that makes it simple for users to place orders and browse menus.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:w-5/12 md:w-5/12 w-full md:sticky md:top-[200px] flex flex-col items-center">
            <h2
              class="w-full 2xl:text-4xl xl:text-3xl lg:text-2xl text-xl font-semibold text-white text-balance relative z-10">
              Revolutionizing Food Delivery with Next-Gen Technologies</h2>
            <div class="mt-6 max-w-[400px]">
              <img loading="lazy" fetchpriority="low" src="assets/img/cook.png"
                alt="food image"
                title="food image"
                class="w-full">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- other apps -->
  <section class="lg:px-20 px-4 md:py-10 py-4 w-full relative overflow-hidden ">
    <div class="!container flex xl:py-16 lg:py-14 md:py-12 sm:py-10 py-8">
      <div class="flex flex-col w-full">
        <h2
          class="w-full 2xl:text-3xl xl:text-2xl lg:text-xl text-xl font-semibold text-black text-balance relative z-10 text-center md:pb-4 pb-2">
          Your One-Stop Partner for On-Demand App Solutions</h2>
        <div
          class="w-full 2xl:text-lg xl:text-base md:text-sm text-xs md:font-medium font-normal text-black text-balance relative z-10 text-center md:pb-12 pb-5">
          Our wide range of services ensures that your business gets everything it needs to grow â€” all in one place
        </div>
        <div
          class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 2xl:gap-9 lg:gap-7 md:gap-5 gap-4 w-full relative z-10">
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg width="30px" height="30px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" fill="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: none;
                        stroke: #fff;
                        stroke-miterlimit: 10;
                        stroke-width: 1.91px;
                      }

                      .cls-2 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <path class="cls-1"
                    d="M2.45,18.68H7.23a0,0,0,0,1,0,0v2.86a1,1,0,0,1-1,1H3.41a1,1,0,0,1-1-1V18.68A0,0,0,0,1,2.45,18.68Z">
                  </path>
                  <path class="cls-1"
                    d="M16.77,18.68h4.77a0,0,0,0,1,0,0v2.86a1,1,0,0,1-1,1H17.73a1,1,0,0,1-1-1V18.68A0,0,0,0,1,16.77,18.68Z">
                  </path>
                  <path class="cls-1"
                    d="M5.32,11H18.68a3.82,3.82,0,0,1,3.82,3.82v3.82a0,0,0,0,1,0,0H1.5a0,0,0,0,1,0,0V14.86A3.82,3.82,0,0,1,5.32,11Z">
                  </path>
                  <path class="cls-1"
                    d="M16.29,4.36H7.71A1.91,1.91,0,0,0,5.88,5.75l-1.52,5.3H19.64l-1.52-5.3A1.91,1.91,0,0,0,16.29,4.36Z">
                  </path>
                  <circle class="cls-2" cx="4.84" cy="15.34" r="1.43"></circle>
                  <circle class="cls-2" cx="19.16" cy="15.34" r="1.43"></circle>
                  <path class="cls-1" d="M14.86,15.82h0Z"></path>
                  <line class="cls-1" x1="22.5" y1="9.14" x2="19.09" y2="9.14"></line>
                  <line class="cls-1" x1="4.91" y1="9.14" x2="1.5" y2="9.14"></line>
                  <polygon class="cls-1" points="14.86 4.36 9.14 4.36 10.09 1.5 13.91 1.5 14.86 4.36"></polygon>
                </g>
              </svg>
            </div>
            <h3 class="w-full lg:text-lg md:text-sm text-xs font-semibold  text-balance relative z-10">
              Taxi Booking App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg fill="#fff" width="35px" height="35px" viewBox="0 0 100 100" version="1.1" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="SVGRepo_bgCarrier" stroke-width="2"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g id="store"></g>
                  <g id="groceries"></g>
                  <g id="fruits"></g>
                  <g id="bakery"></g>
                  <g id="hygiene_product"></g>
                  <g id="detergent"></g>
                  <g id="cooking_oil"></g>
                  <g id="snacks"></g>
                  <g id="canned_food"></g>
                  <g id="wheat_flour"></g>
                  <g id="milk_powder"></g>
                  <g id="coffee_powder"></g>
                  <g id="tea_bag"></g>
                  <g id="meat"></g>
                  <g id="chicken"></g>
                  <g id="cart"></g>
                  <g id="sausage"></g>
                  <g id="egg"></g>
                  <g id="drink"></g>
                  <g id="vegetable">
                    <g>
                      <path
                        d="M88,48h-4.5c1.6-6,2.9-11.4,3.2-13.3c0.9-5.4-1.8-10.6-6.2-13.2c1.1-0.3,2.2-0.8,3.3-1.5c3.4-2.5,4.2-7,4.2-7.2 c0-0.3,0-0.5-0.2-0.8c-0.2-0.2-0.4-0.4-0.7-0.4c-0.2,0-3.3-0.4-6.2,0.9c-0.2-3.3-2-5.9-2.1-6c-0.2-0.2-0.4-0.4-0.7-0.4 c-0.3,0-0.5,0-0.8,0.2c-0.1,0.1-2.6,2-3.8,5.1c-2.4-2.1-5.5-2.7-5.7-2.8c-0.3,0-0.5,0-0.8,0.2s-0.4,0.4-0.4,0.7 c0,0.2-0.6,4.7,1.8,8.1c0.8,1.1,1.7,1.9,2.6,2.5c-1.7,0.4-3.3,1.1-4.7,2.1c-1.8,1.3-3.2,3-4.1,5c-1.2-3.7-4-6.7-7.6-8.1 c1-0.5,2.1-1.1,3-2c3-3,3.1-7.6,3.1-7.8c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.7-0.3c-0.2,0-3.3,0.1-6.1,1.8c-0.7-3.2-2.9-5.5-3-5.6 c-0.4-0.4-1.1-0.4-1.4,0c-0.1,0.1-2.3,2.4-3,5.6c-2.8-1.7-6-1.8-6.1-1.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7 c0,0.2,0.1,4.8,3.1,7.8c0.9,0.9,2,1.6,3,2c-3.6,1.4-6.4,4.4-7.6,8.1c-0.9-2-2.3-3.7-4.1-5c-1.4-1-3-1.8-4.7-2.1 c0.9-0.6,1.9-1.4,2.6-2.5c2.4-3.4,1.9-7.9,1.8-8.1c0-0.3-0.2-0.5-0.4-0.7c-0.2-0.2-0.5-0.2-0.8-0.2c-0.2,0-3.2,0.6-5.7,2.8 c-1.2-3-3.7-5-3.8-5.1C22.4,6,22.1,6,21.8,6c-0.3,0-0.5,0.2-0.7,0.4c-0.1,0.1-1.9,2.8-2.1,6c-3-1.3-6.1-0.9-6.2-0.9 c-0.3,0-0.5,0.2-0.7,0.4C12,12.2,12,12.5,12,12.8c0,0.2,0.9,4.7,4.2,7.2c1,0.8,2.2,1.2,3.3,1.5c-4.4,2.6-7,7.8-6.2,13.2 c0.3,1.9,1.6,7.3,3.2,13.3H12c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h1.1L17,86.3c0.7,5.5,5.4,9.7,11,9.7h44.2c5.5,0,10.3-4.2,11-9.7 L86.9,56H88c0.6,0,1-0.4,1-1v-6C89,48.4,88.6,48,88,48z M82.6,18.3c-1.4,1-3,1.4-4.3,1.5c1-1.2,2.1-2.9,2.5-5 c1.7-1,3.7-1.2,4.9-1.2C85.3,14.8,84.4,17,82.6,18.3z M77.7,8.6c0.6,1.2,1.4,3.4,1.1,5.6c-0.3,2.2-1.8,4-2.8,5 c-0.6-1.2-1.4-3.4-1.1-5.6C75.3,11.4,76.8,9.6,77.7,8.6z M70.2,16.3c-1.3-1.8-1.5-4.2-1.5-5.5c1.2,0.4,3,1.2,4.3,2.7 c-0.3,2.1,0.3,4.1,0.9,5.6C72.6,18.6,71.2,17.7,70.2,16.3z M67.7,23.7c2.3-1.7,5.2-2.4,8-1.9c5.9,1,9.9,6.6,9,12.6 c-0.3,1.6-1.5,6.8-3.3,13.6h-1.9c0.1-0.1,0.1-0.2,0.1-0.3c0.1-0.5-0.3-1.1-0.8-1.1l-5.8-0.9c-0.5-0.1-1.1,0.3-1.1,0.8 s0.3,1.1,0.8,1.1l2.7,0.4H62c0.4-8.1,0.9-15,1.2-17.1C63.7,28,65.3,25.4,67.7,23.7z M56.4,15.5c-1.2,1.2-2.8,1.9-4.1,2.2 c0.8-1.3,1.7-3.2,1.7-5.4c1.6-1.3,3.5-1.8,4.8-2C58.6,11.6,58,13.9,56.4,15.5z M50,6.6c0.8,1.1,2,3.1,2,5.4c0,2.3-1.2,4.3-2,5.4 c-0.8-1.1-2-3.1-2-5.4C48,9.7,49.2,7.7,50,6.6z M41.2,10.2c1.2,0.2,3.2,0.7,4.8,2c0.1,2.2,0.9,4.1,1.7,5.4c-1.3-0.3-2.9-1-4.1-2.2 C42,13.9,41.4,11.6,41.2,10.2z M50,20C50,20,50,20,50,20C50,20,50,20,50,20c6.1,0,11,4.9,11,11c0,2.1-0.5,8.9-1.4,17H40.4 C39.5,39.9,39,33.1,39,31C39,24.9,43.9,20,50,20z M31.3,10.8c0,1.4-0.2,3.7-1.5,5.5c-1,1.4-2.4,2.2-3.6,2.8 c0.6-1.5,1.1-3.5,0.9-5.6C28.3,12,30.2,11.2,31.3,10.8z M22.3,8.6c1,1,2.4,2.8,2.8,5c0.3,2.2-0.5,4.4-1.1,5.6c-1-1-2.4-2.8-2.8-5 C20.8,12,21.6,9.8,22.3,8.6z M14.3,13.5c1.2,0,3.2,0.2,4.9,1.2c0.4,2.1,1.5,3.9,2.5,5.1c-1.3-0.1-3-0.5-4.3-1.5 C15.6,17,14.7,14.8,14.3,13.5z M15.3,34.4c-0.9-6,3.1-11.6,9-12.6c2.8-0.5,5.7,0.2,8,1.9c2.4,1.7,3.9,4.3,4.4,7.2 c0.3,2.1,0.9,9,1.2,17.1H24.7l2.7-0.4c0.5-0.1,0.9-0.6,0.8-1.1s-0.6-0.9-1.1-0.8l-5.8,0.9c-0.5,0.1-0.9,0.6-0.8,1.1 c0,0.1,0.1,0.2,0.1,0.3h-1.9C16.8,41.2,15.6,36,15.3,34.4z M81.1,86.1c-0.6,4.5-4.4,7.9-9,7.9H27.9c-4.5,0-8.4-3.4-9-7.9L15.1,56 H40h20h24.9L81.1,86.1z M87,54h-1H60H40H14h-1v-4h74V54z">
                      </path>
                      <path d="M43,32h6c0.6,0,1-0.4,1-1s-0.4-1-1-1h-6c-0.6,0-1,0.4-1,1S42.4,32,43,32z"></path>
                      <path d="M52,40h6c0.6,0,1-0.4,1-1s-0.4-1-1-1h-6c-0.6,0-1,0.4-1,1S51.4,40,52,40z"></path>
                      <path d="M49,44h-6c-0.6,0-1,0.4-1,1s0.4,1,1,1h6c0.6,0,1-0.4,1-1S49.6,44,49,44z"></path>
                      <path
                        d="M26,32.6c-0.1-0.5-0.6-0.9-1.1-0.8l-5.8,0.9c-0.5,0.1-0.9,0.6-0.8,1.1c0.1,0.5,0.5,0.8,1,0.8c0.1,0,0.1,0,0.2,0l5.8-0.9 C25.8,33.7,26.1,33.2,26,32.6z">
                      </path>
                      <path
                        d="M29.2,41.2c0.1,0,0.1,0,0.2,0l5.8-0.9c0.5-0.1,0.9-0.6,0.8-1.1s-0.6-0.9-1.1-0.8l-5.8,0.9c-0.5,0.1-0.9,0.6-0.8,1.1 C28.3,40.8,28.7,41.2,29.2,41.2z">
                      </path>
                      <path
                        d="M74.8,33.8l5.8,0.9c0.1,0,0.1,0,0.2,0c0.5,0,0.9-0.3,1-0.8c0.1-0.5-0.3-1.1-0.8-1.1l-5.8-0.9c-0.5-0.1-1.1,0.3-1.1,0.8 C73.9,33.2,74.2,33.7,74.8,33.8z">
                      </path>
                      <path
                        d="M64.8,40.2l5.8,0.9c0.1,0,0.1,0,0.2,0c0.5,0,0.9-0.3,1-0.8c0.1-0.5-0.3-1.1-0.8-1.1l-5.8-0.9c-0.5-0.1-1.1,0.3-1.1,0.8 C63.9,39.6,64.2,40.1,64.8,40.2z">
                      </path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Grocery Delivery App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg height="35px" width="35px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#fff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <style type="text/css">
                    .st0 {
                      fill: #fff;
                    }
                  </style>
                  <g>
                    <path class="st0"
                      d="M302.206,406.028h-214c-13.125,0-23.773,8.471-23.773,18.928v0.552c0,10.472,10.644,18.944,23.773,18.944h214 c13.128,0,23.778-8.471,23.778-18.944v-0.552C325.983,414.499,315.342,406.028,302.206,406.028z">
                    </path>
                    <path class="st0"
                      d="M57.23,380.53c0.701,0.23,1.319,0.536,1.978,0.973c1.15,0.759,2.434,1.971,3.918,3.665 c1.108,1.25,2.319,2.752,3.73,4.362c2.12,2.408,4.718,5.144,8.372,7.368c1.82,1.104,3.906,2.047,6.183,2.691 c2.28,0.644,4.76,0.981,7.348,0.981c3.001,0.008,5.849-0.452,8.429-1.311c2.258-0.752,4.282-1.786,6.046-2.96 c3.089-2.062,5.378-4.454,7.283-6.601c1.422-1.625,2.641-3.128,3.768-4.4c1.678-1.924,3.089-3.251,4.362-4.01 c0.652-0.383,1.258-0.667,1.986-0.874c0.724-0.192,1.568-0.338,2.71-0.338c1.322,0,2.246,0.185,3.051,0.453 c0.698,0.23,1.319,0.536,1.982,0.973c1.15,0.759,2.434,1.971,3.909,3.665c1.112,1.25,2.323,2.752,3.738,4.362 c2.12,2.408,4.715,5.144,8.372,7.368c1.821,1.112,3.899,2.047,6.187,2.691c2.284,0.644,4.757,0.981,7.344,0.981 c3.002,0.008,5.857-0.452,8.426-1.311c2.262-0.752,4.286-1.786,6.049-2.96c3.093-2.062,5.374-4.454,7.276-6.601 c1.438-1.625,2.652-3.128,3.775-4.4c1.676-1.924,3.094-3.251,4.37-4.01c0.64-0.383,1.253-0.667,1.982-0.874 c0.721-0.192,1.572-0.338,2.706-0.338c1.323,0,2.25,0.185,3.048,0.453c0.702,0.23,1.323,0.536,1.985,0.973 c1.15,0.759,2.434,1.971,3.91,3.665c1.119,1.25,2.327,2.752,3.738,4.362c2.12,2.408,4.714,5.144,8.375,7.368 c1.821,1.112,3.894,2.047,6.183,2.691c2.289,0.644,4.757,0.981,7.345,0.981c3.005,0.008,5.853-0.452,8.433-1.311 c2.254-0.752,4.282-1.786,6.045-2.96c3.09-2.062,5.382-4.454,7.28-6.601c1.426-1.625,2.652-3.128,3.764-4.4 c1.678-1.924,3.097-3.251,4.382-4.01c0.632-0.383,1.253-0.667,1.973-0.874c0.721-0.192,1.572-0.338,2.711-0.338 c1.322,0,2.246,0.185,3.051,0.453c0.706,0.23,1.323,0.536,1.982,0.973c1.153,0.759,2.434,1.971,3.921,3.665 c1.112,1.25,2.319,2.759,3.738,4.362c2.108,2.408,4.714,5.144,8.368,7.368c1.82,1.112,3.902,2.047,6.19,2.691 c2.281,0.644,4.757,0.989,7.341,0.989c3.005,0,5.861-0.46,8.429-1.319c2.254-0.752,4.286-1.786,6.048-2.96 c3.094-2.062,5.382-4.454,7.284-6.601c1.418-1.625,2.645-3.128,3.764-4.4c1.678-1.924,3.097-3.251,4.374-4.01 c0.64-0.383,1.254-0.667,1.981-0.866c0.729-0.2,1.572-0.346,2.714-0.346c4.708,0,8.533-3.825,8.533-8.54 c0-4.714-3.825-8.54-8.533-8.54c-3.009,0-5.856,0.46-8.437,1.318c-2.258,0.744-4.289,1.787-6.045,2.952 c-3.089,2.062-5.378,4.446-7.283,6.608c-1.422,1.618-2.649,3.128-3.768,4.393c-1.672,1.924-3.097,3.25-4.37,4.017 c-0.652,0.383-1.258,0.66-1.978,0.866c-0.728,0.207-1.58,0.338-2.714,0.338c-1.319,0-2.25-0.177-3.055-0.437 c-0.697-0.23-1.314-0.552-1.982-0.988c-1.15-0.751-2.438-1.978-3.913-3.665c-1.112-1.25-2.327-2.744-3.73-4.37 c-2.123-2.392-4.715-5.137-8.376-7.352c-1.828-1.112-3.902-2.047-6.191-2.706c-2.288-0.637-4.757-0.974-7.344-0.974 c-3.006,0-5.853,0.452-8.434,1.318c-2.254,0.744-4.286,1.787-6.045,2.952c-3.089,2.062-5.378,4.446-7.279,6.608 c-1.434,1.618-2.653,3.128-3.772,4.393c-1.679,1.924-3.09,3.25-4.374,4.017c-0.644,0.383-1.254,0.66-1.974,0.866 c-0.721,0.207-1.572,0.338-2.71,0.338c-1.323,0-2.254-0.177-3.051-0.437c-0.701-0.23-1.322-0.552-1.986-0.988 c-1.146-0.751-2.43-1.978-3.91-3.665c-1.112-1.25-2.319-2.744-3.73-4.354c-2.124-2.408-4.714-5.152-8.375-7.368 c-1.829-1.112-3.898-2.047-6.191-2.706c-2.28-0.637-4.761-0.981-7.341-0.974c-3.001-0.008-5.857,0.452-8.433,1.318 c-2.254,0.744-4.286,1.779-6.049,2.952c-3.09,2.062-5.378,4.446-7.28,6.608c-1.426,1.618-2.641,3.128-3.764,4.393 c-1.675,1.924-3.098,3.25-4.374,4.017c-0.64,0.383-1.253,0.66-1.974,0.866c-0.736,0.199-1.579,0.338-2.71,0.338 c-1.322,0-2.254-0.177-3.059-0.437c-0.698-0.23-1.319-0.552-1.974-0.988c-1.157-0.751-2.434-1.978-3.921-3.665 c-1.112-1.258-2.315-2.752-3.734-4.354c-2.112-2.408-4.711-5.152-8.368-7.368c-1.82-1.112-3.91-2.047-6.187-2.706 c-2.281-0.637-4.753-0.981-7.34-0.974c-3.009-0.008-5.853,0.452-8.441,1.318c-2.254,0.744-4.27,1.779-6.034,2.952 c-3.093,2.062-5.382,4.446-7.283,6.608c-1.43,1.61-2.645,3.128-3.764,4.393c-1.679,1.924-3.105,3.25-4.37,4.017 c-0.652,0.383-1.265,0.66-1.986,0.866c-0.721,0.199-1.572,0.33-2.706,0.338c-1.323-0.008-2.25-0.177-3.055-0.437 c-0.697-0.23-1.314-0.552-1.982-0.988c-1.142-0.751-2.434-1.97-3.906-3.665c-1.115-1.258-2.323-2.752-3.733-4.362 c-2.12-2.4-4.719-5.136-8.372-7.368c-1.82-1.104-3.902-2.039-6.186-2.698c-2.286-0.637-4.758-0.981-7.349-0.974 c-4.715,0-8.537,3.826-8.537,8.54c0,4.715,3.822,8.54,8.537,8.54C55.501,380.076,56.428,380.261,57.23,380.53z">
                    </path>
                    <path class="st0"
                      d="M391.466,125.069l15.156-69.74l54.884-31.87L447.89,0l-65.234,37.872l-18.956,87.197H193.117l1.038,13.562 l7.961,103.442c-2.997-0.146-6.018-0.222-9.058-0.222c-71.24,0-129.888,40.74-137.482,86.163c-0.272,1.641-0.483,2.07-0.64,2.53 c-0.134,0.444-0.211,0.89-0.211,2.56c0,9.729,5.421,14.858,14.823,14.858h247.019c9.388,0,14.819-5.129,14.819-14.858 c0-3.319-0.295-1.824-0.858-5.09c-3.791-22.754-20.416-44.335-45.002-60.22c-7.984-5.159-16.801-9.683-26.292-13.485 c-9.882-3.94-20.485-7.069-31.64-9.199l-7.283-94.864h218.849l-24.1,313.862h-86.469c-3.021-3.702-7.459-5.903-13.673-5.903 h-70.953h-25.265H71.251c-14.14,0-19.081,11.484-19.081,25.621v2.568C52.17,500.531,63.639,512,77.784,512h230.547 c13.156,0,24.019-9.92,25.456-22.708h104.604l27.971-364.223H391.466z M117.361,294.428c-3.757,0-6.816-3.059-6.816-6.83 c0-3.78,3.058-6.846,6.816-6.846c3.783,0,6.842,3.066,6.842,6.846C124.203,291.369,121.145,294.428,117.361,294.428z M144.7,273.928c-3.78,0-6.839-3.059-6.839-6.832c0-3.779,3.059-6.846,6.839-6.846c3.775,0,6.838,3.066,6.838,6.846 C151.538,270.869,148.475,273.928,144.7,273.928z M168.603,294.428c-3.776,0-6.838-3.059-6.838-6.83 c0-3.78,3.062-6.846,6.838-6.846c3.783,0,6.842,3.066,6.842,6.846C175.446,291.369,172.387,294.428,168.603,294.428z M189.103,265.388c-3.775,0-6.842-3.06-6.842-6.832c0-3.763,3.067-6.823,6.842-6.823c3.776,0,6.842,3.06,6.842,6.823 C195.945,262.328,192.879,265.388,189.103,265.388z M271.072,282.461c3.784,0,6.842,3.059,6.842,6.838 c0,3.772-3.059,6.839-6.842,6.839c-3.756,0-6.815-3.067-6.815-6.839C264.257,285.52,267.316,282.461,271.072,282.461z M236.915,260.174c3.783,0,6.842,3.059,6.842,6.823c0,3.795-3.058,6.854-6.842,6.854c-3.772,0-6.816-3.059-6.816-6.854 C230.099,263.234,233.143,260.174,236.915,260.174z M221.555,289.299c0,3.772-3.062,6.839-6.842,6.839 c-3.756,0-6.815-3.067-6.815-6.839c0-3.78,3.058-6.838,6.815-6.838C218.493,282.461,221.555,285.52,221.555,289.299z">
                    </path>
                  </g>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Food Delivery App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg fill="#fff" width="35px" height="35px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M7,2A1,1,0,0,1,8,1h8a1,1,0,0,1,0,2H8A1,1,0,0,1,7,2ZM3,20V8A3,3,0,0,1,6,5H18a3,3,0,0,1,3,3V20a3,3,0,0,1-3,3H6A3,3,0,0,1,3,20Zm16-1H5v1a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1ZM5,8v9H19V8a1,1,0,0,0-1-1H6A1,1,0,0,0,5,8Zm6,7h2V13h2V11H13V9H11v2H9v2h2Z">
                  </path>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Medicine Delivery App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg fill="#fff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" viewBox="0 0 210 256"
                enable-background="new 0 0 210 256" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M174.55,144.5L174.55,144.5c-1.4-4-5-6.5-9.2-6.5H159V23c0-11.708-9.292-21-21-21H25C12.57,2,2,12.57,2,25v183 c0,11.9,10.95,22,22.75,22l114.213,0c1.207,0,2.27,0.984,2.18,2.188c-0.095,1.266-1.153,1.812-2.393,1.812h-45.5L128,254h80 L174.55,144.5z M82.05,220.2c-3.199,0-5.599-2.399-5.6-5.598c-0.001-3.045,2.557-5.602,5.602-5.602 c3.199,0.001,5.598,2.401,5.598,5.6C87.55,217.8,85.25,220.2,82.05,220.2z M144,138h-19.65c-5.3,0-9.8,4.7-9.8,10l0,0 c0,5.3,4.5,10,9.8,10h19.8v42H18V31h126V138z M80.085,139.555l-37.771-38.713c-10.856-9.545-12.208-26.341-2.622-37.238l0,0 c9.545-10.856,26.382-12.167,37.238-2.622l3.769,3.277l3.769-3.277c11.061-9.586,27.693-8.234,37.238,2.622l0,0 c9.586,11.061,8.234,27.693-2.622,37.238L80.085,139.555z">
                  </path>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Dating App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg fill="#fff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" viewBox="0 0 210 256"
                enable-background="new 0 0 210 256" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M174.55,144.5L174.55,144.5c-1.4-4-5-6.5-9.2-6.5H159V23c0-11.708-9.292-21-21-21H25C12.57,2,2,12.57,2,25v183 c0,11.9,10.95,22,22.75,22l114.213,0c1.207,0,2.27,0.984,2.18,2.188c-0.095,1.266-1.153,1.812-2.393,1.812h-45.5L128,254h80 L174.55,144.5z M82.05,220.2c-3.199,0-5.599-2.399-5.6-5.598c-0.001-3.045,2.557-5.602,5.602-5.602 c3.199,0.001,5.598,2.401,5.598,5.6C87.55,217.8,85.25,220.2,82.05,220.2z M144,138h-19.65c-5.3,0-9.8,4.7-9.8,10l0,0 c0,5.3,4.5,10,9.8,10h19.8v42H18V31h126V138z M80.085,139.555l-37.771-38.713c-10.856-9.545-12.208-26.341-2.622-37.238l0,0 c9.545-10.856,26.382-12.167,37.238-2.622l3.769,3.277l3.769-3.277c11.061-9.586,27.693-8.234,37.238,2.622l0,0 c9.586,11.061,8.234,27.693-2.622,37.238L80.085,139.555z">
                  </path>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Online Doctor Appointment App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e]">
              <svg fill="#fff" height="35px" width="35px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <g>
                      <path
                        d="M237.291,415.073c-2.575-2.575-6.405-3.763-10.013-3.03c-0.71,0.133-1.41,0.355-2.076,0.633 c-0.677,0.277-1.321,0.622-1.92,1.021c-0.611,0.4-1.177,0.866-1.687,1.376s-0.977,1.077-1.376,1.687 c-0.4,0.599-0.744,1.243-1.021,1.92c-0.277,0.666-0.488,1.365-0.633,2.076s-0.222,1.443-0.222,2.165 c0,0.721,0.078,1.454,0.222,2.165c0.144,0.71,0.355,1.41,0.633,2.076c0.278,0.677,0.622,1.321,1.021,1.92 c0.4,0.611,0.866,1.177,1.376,1.687s1.077,0.977,1.687,1.376c0.599,0.4,1.243,0.744,1.92,1.021c0.666,0.278,1.365,0.5,2.076,0.633 c0.71,0.144,1.443,0.222,2.165,0.222c2.93,0,5.783-1.188,7.848-3.252c0.511-0.511,0.977-1.077,1.388-1.687 c0.4-0.599,0.744-1.243,1.021-1.92c0.278-0.666,0.488-1.365,0.633-2.076c0.144-0.71,0.211-1.443,0.211-2.165 C240.543,420.001,239.366,417.137,237.291,415.073z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M437.02,74.981C388.667,26.628,324.38,0,256,0c-0.2,0-0.397,0.007-0.596,0.008C255.371,0.007,255.34,0,255.306,0 c-0.045,0-0.09,0.01-0.135,0.01C187.94,0.222,124.725,26.188,76.779,73.225c-0.712,0.442-1.393,0.942-2.001,1.552 c-0.608,0.608-1.109,1.29-1.551,2C26.188,124.724,0.222,187.94,0.01,255.171c0,0.045-0.01,0.09-0.01,0.135 c0,0.033,0.007,0.064,0.008,0.098C0.008,255.603,0,255.801,0,256c0,68.38,26.628,132.667,74.98,181.019 C123.333,485.37,187.62,512,256,512s132.667-26.628,181.02-74.981C485.372,388.667,512,324.38,512,256 S485.372,123.333,437.02,74.981z M489.209,239.496c-21.352-7.686-64.615-21.626-120.527-31.152 c32.439-45.763,53.077-85.832,62.875-106.571C464.384,139.094,485.525,186.924,489.209,239.496z M408.719,79.113 c-20.773,9.82-60.774,30.441-106.451,62.819c-9.332-54.778-22.901-97.412-30.676-119.198 C323.814,26.189,371.405,46.853,408.719,79.113z M238.989,22.823c-7.78,21.814-21.325,64.407-30.645,119.107 c-45.024-31.916-84.536-52.408-105.551-62.392C139.842,47.328,187.096,26.573,238.989,22.823z M79.538,102.793 c9.985,21.015,30.478,60.529,62.392,105.551c-54.7,9.32-97.292,22.864-119.107,30.645 C26.573,187.095,47.328,139.842,79.538,102.793z M22.733,271.593c21.788,7.775,64.422,21.344,119.197,30.677 c-32.377,45.675-52.997,85.677-62.819,106.451C46.852,371.405,26.189,323.813,22.733,271.593z M255.293,466.745 c-1.47-4.487-3.037-9.445-4.661-14.837c-1.768-5.87-7.96-9.195-13.83-7.427s-9.195,7.96-7.427,13.83 c3.87,12.847,7.407,23.276,10.142,30.899c-52.581-3.681-100.417-24.821-137.744-57.653c20.74-9.798,60.811-30.438,106.575-62.877 c1.253,7.345,2.624,14.708,4.099,22.024c1.212,6.01,7.065,9.9,13.076,8.686c6.01-1.212,9.899-7.066,8.687-13.076 c-2.61-12.935-4.879-26.013-6.742-38.872c-0.562-3.874-3.121-7.164-6.738-8.663c-3.616-1.499-7.754-0.98-10.889,1.361 c-41.167,30.74-79.499,52.208-104.016,64.646c12.439-24.517,33.906-62.849,64.646-104.015c2.341-3.136,2.858-7.273,1.361-10.889 c-1.497-3.615-4.789-6.175-8.663-6.738c-50.855-7.375-93.149-19.302-119.278-27.844c26.097-8.534,68.343-20.447,119.278-27.833 c3.873-0.562,7.165-3.121,8.663-6.738s0.98-7.754-1.361-10.889c-30.74-41.167-52.208-79.499-64.646-104.015 c24.517,12.439,62.849,33.907,104.016,64.646c3.136,2.341,7.274,2.858,10.889,1.361c3.616-1.497,6.176-4.789,6.738-8.663 c7.375-50.856,19.302-93.149,27.844-119.278c8.534,26.097,20.447,68.343,27.833,119.278c0.562,3.874,3.121,7.164,6.738,8.663 c3.615,1.497,7.754,0.98,10.889-1.361c41.167-30.74,79.499-52.208,104.016-64.646c-12.439,24.517-33.906,62.849-64.646,104.015 c-2.341,3.136-2.858,7.273-1.361,10.889c1.497,3.615,4.789,6.175,8.663,6.738c50.855,7.375,93.149,19.302,119.278,27.844 c-26.097,8.534-68.343,20.447-119.278,27.833c-3.873,0.562-7.165,3.121-8.663,6.738s-0.98,7.754,1.361,10.889 c30.74,41.166,52.208,79.499,64.646,104.015c-24.517-12.439-62.849-33.907-104.016-64.646c-3.136-2.342-7.275-2.859-10.889-1.361 c-3.616,1.497-6.176,4.789-6.738,8.663C275.767,398.313,263.835,440.617,255.293,466.745z M271.083,489.3 c7.679-21.32,21.646-64.626,31.185-120.618c46.441,32.92,87.016,53.685,107.477,63.303 C372.159,464.864,323.986,485.913,271.083,489.3z M431.985,409.745c-9.617-20.462-30.381-61.036-63.303-107.477 c55.992-9.54,99.296-23.506,120.617-31.185C485.913,323.987,464.864,372.159,431.985,409.745z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M310.818,304.062c-17.123-9.909-27.761-28.326-27.761-48.062s10.637-38.153,27.761-48.062 c3.429-1.985,5.54-5.646,5.54-9.607s-2.111-7.623-5.54-9.607c-11.785-6.82-25.223-10.425-38.861-10.425 c-42.845,0-77.702,34.857-77.702,77.702c0,42.845,34.857,77.702,77.702,77.702c13.638,0,27.076-3.605,38.861-10.425 c3.429-1.985,5.54-5.646,5.54-9.607C316.358,309.708,314.246,306.047,310.818,304.062z M271.957,311.501 c-30.603,0-55.501-24.898-55.501-55.501s24.898-55.501,55.501-55.501c3.754,0,7.488,0.382,11.14,1.131 c-14.035,14.356-22.24,33.851-22.24,54.37s8.205,40.014,22.24,54.37C279.445,311.119,275.712,311.501,271.957,311.501z">
                      </path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Astrology App</h3>
          </a>
          <a href="#"
            class="w-full cursor-pointer flex items-center 2xl:rounded-3xl md:rounded-2xl rounded-xl 2xl:p-5 md:p-4 p-3 2xl:gap-5 md:gap-3 gap-2 border relative text-black/80 hover:bg-[#f6bf22] duration-300 transition-all">
            <div
              class="2xl:size-24 md:size-12 size-9 flex relative z-10 items-center justify-center 2xl:rounded-2xl md:rounded-xl rounded-lg shrink-0 bg-[#0000006e] text-white">
              <svg fill="#fff" width="35px" height="35px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M19.699219 1C17.665885 1 16 2.6658854 16 4.6992188L16 15.400391C16 17.433724 17.665885 19.099609 19.699219 19.099609L30.400391 19.099609C32.433724 19.099609 34.099609 17.433724 34.099609 15.400391L34.099609 4.6992188 A 1.0001 1.0001 0 0 0 34.097656 4.6328125C33.964738 2.6383346 32.334115 1 30.300781 1L19.699219 1 z M 19.699219 3L30.300781 3C31.265919 3 32.030467 3.7585597 32.099609 4.7617188L32.099609 15.400391C32.099609 16.367057 31.367057 17.099609 30.400391 17.099609L19.699219 17.099609C18.732552 17.099609 18 16.367057 18 15.400391L18 4.6992188C18 3.7325521 18.732552 3 19.699219 3 z M 24 6L24 9L21 9L21 11L24 11L24 14L26 14L26 11L29 11L29 9L26 9L26 6L24 6 z M 6.6992188 9C4.6658853 9 3 10.665885 3 12.699219L3 46L48 46L48 12.699219C48 10.665885 46.334115 9 44.300781 9L36 9L36 11L44.300781 11C45.267448 11 46 11.732552 46 12.699219L46 44L30 44L30 33L29 33L25.400391 33L20 33L20 44L5 44L5 12.699219C5 11.732552 5.7325521 11 6.6992188 11L14 11L14 9L6.6992188 9 z M 6.9589844 21.958984L6.9589844 30.041016L16.041016 30.041016L16.041016 21.958984L15 21.958984L10.900391 21.958984L6.9589844 21.958984 z M 19.958984 21.958984L19.958984 30.041016L30.041016 30.041016L30.041016 21.958984L29 21.958984L24.900391 21.958984L19.958984 21.958984 z M 33.958984 21.958984L33.958984 30.041016L43.041016 30.041016L43.041016 21.958984L42 21.958984L38.900391 21.958984L33.958984 21.958984 z M 9.0410156 24.041016L10.900391 24.041016L13.958984 24.041016L13.958984 27.958984L9.0410156 27.958984L9.0410156 24.041016 z M 22.041016 24.041016L24.900391 24.041016L27.958984 24.041016L27.958984 27.958984L22.041016 27.958984L22.041016 24.041016 z M 36.041016 24.041016L38.900391 24.041016L40.958984 24.041016L40.958984 27.958984L36.041016 27.958984L36.041016 24.041016 z M 6.9589844 32.958984L6.9589844 41.041016L16.041016 41.041016L16.041016 32.958984L15 32.958984L10.900391 32.958984L6.9589844 32.958984 z M 33.958984 32.958984L33.958984 41.041016L43.041016 41.041016L43.041016 32.958984L42 32.958984L38.900391 32.958984L33.958984 32.958984 z M 22 35L25.400391 35L28 35L28 44L22 44L22 35 z M 9.0410156 35.041016L10.900391 35.041016L13.958984 35.041016L13.958984 38.958984L9.0410156 38.958984L9.0410156 35.041016 z M 36.041016 35.041016L38.900391 35.041016L40.958984 35.041016L40.958984 38.958984L36.041016 38.958984L36.041016 35.041016 z">
                  </path>
                </g>
              </svg>
            </div>
            <h3
              class="w-full 22xl:text-xl 2xl:text-lg lg:text-base md:text-sm text-xs font-semibold  text-balance relative z-10">
              Hospital Management App</h3>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- faq section -->
  <section class="lg:px-20 px-4 pb-10 md:pt-10 pt-0 w-full relative overflow-hidden md:bg-[#f6bf222e] bg-white">
    <div class="!container flex xl:py-16 lg:py-14 md:py-12 sm:py-10 ">
      <div class="flex flex-col w-full">
        <h2
          class="w-full 2xl:text-4xl xl:text-3xl lg:text-2xl text-xl md:font-bold font-semibold text-[#454444] text-balance relative z-10 md:text-center">
          Frequently Asked Questions</h2>
        <div class="flex flex-wrap md:pt-12 pt-4 md:-mx-4 -mx-2 md:gap-y-8 gap-y-4">

          <div class="md:w-1/2 w-full flex flex-col md:px-4 px-2">
            <ul class="w-full flex flex-col md:gap-8 gap-4">
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faq0" class="hidden">
                <label for="faq0"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">What are the essential features of
                    a food delivery app?</h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>Some of the essential features are user log-in, restaurant browsing, order placement, payment
                    options, real-time tracking, notifications, &amp; customer feedback.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faq1" class="hidden">
                <label for="faq1"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">How long does it take to develop a
                    restaurant app? </h3>
                 <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>The development timeline ranges based on features, complexity &amp; design. On average, a food
                    delivery app takes 2-6 months to develop.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faq2" class="hidden">
                <label for="faq2"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">How much does it cost to make a
                    food delivery app? </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>Cost can range from $15,000 to $49,000+ or more based on features, platform, and customization. You
                    should consult top app development companies like IMG Global Infotech for the right cost.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faq3" class="hidden">
                <label for="faq3"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">Can third-party services be
                    integrated into my app? </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>Yes, you can integrate third-party services such as payment gateways, map APIs, or loyalty programs
                    for more functional abilities of the app.</p>
                </div>
              </li>
            </ul>
          </div>


          <div class="md:w-1/2 w-full flex flex-col md:px-4 px-2">
            <ul class="w-full flex flex-col md:gap-8 gap-4">
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faqs0" class="hidden">
                <label for="faqs0"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">How will you protect user data?
                  </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>We use encryption and secure payment gateways and do regular security audits to give all protection
                    possible for your users' data.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faqs1" class="hidden">
                <label for="faqs1"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">Do you offer post-launch support
                    for the app? </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>We provide ongoing support and maintenance for the purpose of curing bugs, adding updates, and
                    having your restaurant app run smoothly after its launch.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faqs2" class="hidden">
                <label for="faqs2"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">Can the app scale up with me as my
                    business grows? </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>We offer app solutions that scale and can add new features, increase user capacity, and expand
                    according to how your business grows.</p>
                </div>
              </li>
              <li
                class="md:p-8 py-6 px-4 flex flex-col gap-2 rounded-xl bg-white shadow-[0px_3.29px_11.77px_0px_#0000001F] group/faq">
                <input type="radio" name="faq" id="faqs3" class="hidden">
                <label for="faqs3"
                  class="flex items-start cursor-pointer gap-2 before:absolute before:-inset-4 relative">
                  <h3 class="grow lg:text-base text-sm font-semibold text-[#454444]">How can I ensure Real-Time
                    Delivery? </h3>
                  <div
                    class="">
                      <svg class="group-has-[:checked]/faq:rotate-180 transition-all duration-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                  </div>
                </label>
                <div class="text-xs font-normal text-[#454444] hidden group-has-[:checked]/faq:block">
                  <p>The app is integrated with real-time GPS, so customers and drivers can track deliveries through to
                    the point of delivery with live updates and accurate ETAs.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer section -->
   <?php include __DIR__ . '/includes/footer.php'; ?>
</body>

</html>
