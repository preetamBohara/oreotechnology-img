<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind CSS v4 Setup</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="font-[Outfit] overflow-x-hidden ">
    <!-- header section -->
     <?php include __DIR__ . '/includes/header.php'; ?>
    <!-- banner section -->
    <section class="">
        <div class="flex flex-wrap relative md:h-[28rem] bg-[#f6f7f8] pt-14 lg:pb-14 pb-0  lg:px-20 px-4 ">
            <div class="md:w-1/2 w-full">
                <div class="flex flex-col justify-center lg:mb-0 mb-10">
                    <h6 class="text-gray-500 font-medium text-sm mb-4">CONTACT US</h6>
                    <h1 class="text-black font-medium lg:text-[64px] md:text-3xl text-xl lg:leading-[70px]">How Can We <br class="lg:block hidden"> <span class="text-[#137ec2]">Help?</span>
                    </h1>
                </div>
            </div>
            <div class="md:w-1/2 w-full relative">
                <div
                    class="rounded-tr-none rounded-br-none rounded-tl-2xl lg:-right-[86px] rounded-2xl lg:absolute relative lg:-bottom-[100px] overflow-hidden  ">
                    <img src="assets/img/contactusimg.avif" class="w-full h-full object-cover" alt="contactusimg">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us section -->
    <section class="bg-[url('../img/contact-bg.webp')] bg-cover bg-no-repeat">
        <div class="grid lg:grid-cols-2 grid-cols-1 relative  md:py-28 py-10 md:px-20 px-4 ">
            <div class="flex flex-col gap-5 justify-center lg:order-1 order-2 lg:mt-0 mt-10">
                <div class="flex flex-col gap-4 justify-center ">
                    <h1 class="text-black font-bold md:text-3xl text-xl ">Your Strategic Partner for<br> AI-powered Innovation
                    </h1>
                    <p class="md:text-base text-sm">Join 700+ companies who trust us to build secure, scalable <br> digital experiences powered by AI
                        and
                        human insight.</p>
                </div>
                <div class="flex gap-5 flex-col ">
                    <div class="flex flex-row gap-3 ">
                        <div
                            class="flex justify-center text-white items-center text-center h-[30px] w-[30px] rounded-full bg-[#137ec2]">
                            <span>
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                    </path>
                                    <path d="m21.854 2.147-10.94 10.939"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="text-center flex items-center">
                            <a href="#" class="font-medium text-black text-base">sales@techaheadcorp.com</a>
                        </div>
                    </div>
                    <div class="flex flex-row gap-3 ">
                        <div
                            class="flex justify-center text-white items-center text-center h-[30px] w-[30px] rounded-full bg-[#137ec2]">
                            <span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18px" width="18px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57a.84.84 0 0 0-.31-.05c-.26 0-.51.1-.71.29l-2.2 2.2a15.149 15.149 0 0 1-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1z"></path></svg>
                            </span>
                        </div>
                        <div class="text-center flex items-center">
                            <a href="#" class="font-medium text-black text-base">+1 (818) 318-0727</a>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden rounded-md mb-10">
                    <img src="assets/img/contact-clutch-review-logo.png" loading="lazy" class="w-[17rem]  h-9 object-cover"
                        alt="">
                </div>
 
                <div class="bg-[#ffffff1a] border border-[#ffffff] rounded-[20px] flex flex-col px-3 relative">
                    <div class="bg-white rounded-[40px] px-3 py-2 absolute top-0 -translate-y-1/2">
                        <h3 class="uppercase md:text-sm text-xs font-normal text-[#666666]">CHOSEN BY <span
                                class="font-semibold">INDUSTRY LEADERS </span>
                            TO BUILD WHATâ€™S NEXT</h3>
                    </div>
                    <div class="grid grid-cols-5 py-10 gap-3">
                        <div>
                            <img src="assets/img/contact-axa-client.svg" class="w-full h-full opacity-50" alt="axalogo">
                        </div>
                        <div>
                            <img src="assets/img/contact-audi-client.svg" class="w-full h-full opacity-50" alt="audilogo">
                        </div>
                        <div>
                            <img src="assets/img/contact-amex-client.svg" class="w-full h-full opacity-50" alt="amexlogo">
                        </div>
                        <div>
                            <img src="assets/img/contact-espnf1-client.svg" class="w-full h-full opacity-50" alt="espnlogo">
                        </div>
                        <div>
                            <img src="assets/img/contact-disney-client.svg" class="w-full h-full opacity-50" alt="desneylogo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:order-2 order-1">
                <div class="bg-white border border-[#7348c931] md:p-8 p-4 rounded-4xl">
                    <div>
                        <h6 class="text-2xl font-extrabold mb-4">Get in Touch</h6>
                        <p class="text-[#00000099] font-semibold text-sm mb-1 tracking-wider">Tell us what youâ€™re building â€” weâ€™ll show you how to get there, faster and smarter.</p>
                        <p class="text-[#00000099] text-sm font-medium italic">Response guaranteed within 24 hours.</p>
                    </div>
                    <div class="mt-10">
                        <form action="">
                            <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
                                <div class="border-b border-[#ccc]">
                                    <input type="text" placeholder="First Name*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                </div>
                                <div class="border-b border-[#ccc]">
                                    <input type="text" placeholder="Last Name*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                </div>
                                <div class="border-b border-[#ccc]">
                                    <input type="text" placeholder="Company*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                </div>
                                <div class="border-b border-[#ccc]">
                                    <input type="email" placeholder="Email Address*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                </div>  
                                <div class="border-b border-[#ccc]">
                                    <input type="tel" placeholder="Phone Number*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                </div>  
                                <div class="border-b border-[#ccc]">
                                   <select  class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm">
                                        <option selected>Your Preffered Budget Range*</option>
                                        <option value="">Less Than $50,000</option>
                                        <option value="">$50,000 - $100,000</option>
                                        <option value="">$100,000 - $200,000</option>
                                        <option value="">More Than $200,000</option>
                                    </select>
                                </div> 
                                <div class="border-b border-[#ccc] md:col-span-2">
                                   <textarea name="" id="" rows="2" placeholder="How can we help you?*" class="w-full focus:outline-0  py-2 placeholder:text-black text-black text-sm" id=""></textarea>
                                </div>
                                
                            </div>
                            <button class="cursor-pointer mt-4">
                                  <div class="bg-[#f6bf22] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base text-white hover:bg-white md:text-base transition-all duration-300 cursor-pointer hover:text-black hover:border-dashed border border-transparent hover:border-black">
                                    Start The Conversation
                                  </div>
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section -->
   <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>

