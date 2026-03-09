<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS v4 Setup</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="font-[Outfit]">
    <!-- header section -->
     <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- hero section -->
    <section class="lg:px-20 px-4 py-14 relative  before:content-[''] before:absolute before:top-1/2 before:left-1/2 before:block before:w-[calc(100%-10px)] before:h-[calc(100%-10px)] before:-translate-x-1/2 before:-translate-y-1/2 before:transform before:bg-no-repeat before:bg-center before:bg-contain  before:aspect-[1/1] before:min-h-[100px]">
        <div class="max-w-4xl mx-auto">
            <nav class="flex items-center justify-center" aria-label="Breadcrumb">
                <Ul class="inline-flex items-center space-x-1 md:space-x-2 ">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm text-black font-semibold hover:text-blue-600 ">
                            Home
                        </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ms-1 text-sm font-medium text-black hover:text-blue-600 md:ms-2 ">Services</a>
                    </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-black/50 md:ms-2">Mobile App Development</span>
                    </div>
                    </li>
                </Ul>
            </nav>
            <div>
                <h6 class="md:text-[55px] text-xl font-bold text-center mt-14"> Your Trusted <span class="text-transparent bg-clip-text bg-[linear-gradient(285deg,_#137ec2,_#f6bf22,_#137ec2)]">Mobile App</span> Development Company </h6>
            </div>
            <div>
                <p class="text-center mt-4 text-black md:text-lg  text-sm tracking-[0.47px]">As a leading mobile app development company, weâ€™ve been helping businesses of all sizes turn their ideas into reality since 2009. We offer a full range of services from designing to maintenance.</p>
            </div>
            <div class="flex items-center justify-center mt-10">
                <button class="bg-[#137ec2] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-white  hover:bg-white md:text-base  transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black cursor-pointer">
                    <span class="relative z-10">Get a Free Quote</span>
                </button>
            </div>

        </div>
        <div class="absolute top-0 right-0 flex items-center justify-center left-0 z-[-1]">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="682" height="682" viewBox="0 0 682 682">
                <defs>
                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#b522a2" stop-opacity="0.031"/>
                    <stop offset="1" stop-color="#bf239a" stop-opacity="0"/>
                    </linearGradient>
                </defs>
                <g id="Ellipse_762" data-name="Ellipse 762" stroke="#fff" stroke-width="1" fill="url(#linear-gradient)">
                    <circle cx="341" cy="341" r="341" stroke="none"/>
                    <circle cx="341" cy="341" r="340.5" fill="none"/>
                </g>
            </svg>
        </div>
    </section>
    <!-- services section -->
    <section class="lg:px-20 px-4 md:py-14 py-0">
        <div>
            <h2 class="md:text-5xl text-xl font-medium text-black">Mobile App Development Services We Provide</h2>
            <div class="mt-14">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-8">
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Native Mobile App Development</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>Create a unique, platform-specific mobile app. Native mobile apps leverage the specific capabilities of individual platforms to improve user engagement and satisfaction.</p>
                            <p>Our developers use the latest IDEs, such as Android Studio and Xcode, along with performance profiling tools, to create an intuitive user experience. If your business wants to provide a superior user experience on different platforms, a native mobile app is the way to go.</p>
                         </div>
                    </div>
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Cross-Platform App Development</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>Reduce production time and reach a wider audience with an app that works on multiple platforms. You can save time and resources using a cross-platform rather than native app development approach.</p>
                            <p>Our mobile app developers utilize cross-platform tools like React Native and Flutter to create apps that work across multiple platforms. Thanks to these tools and a unified code base, we produce cross-platform apps more quickly, allowing you to connect with your user base sooner.</p>
                         </div>
                    </div>
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Progressive Web App Development</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>Harness modern web capabilities with progressive web app (PWA) development. Deliver an app-like experience to a wide user base by connecting with them through their web browsers rather than a standalone app they need to download.</p>
                            <p>Using tools like Workbox and Lighthouse, our mobile app developers create PWAs that function offline, deliver push notifications, and protect user data</p>
                         </div>
                    </div>
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">iOS App Development</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>Your business needs a way to connect with enterprise corporate clients and individual consumers alike. One of the best ways to do this is with a dedicated iOS app. Reach a broad iOS audience and have a secure app that your audience loves.</p>
                            <p>Our developers use robust iOS development tools like Xcode and Interface Builder to streamline development.</p>
                         </div>
                    </div>
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Android App Development</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>One of the most significant advantages of the Android platform is the number of customization options. Create a unique app experience for your audience that connects with users worldwide and on different types of Android devices.</p>
                            <p>With modern tools like Android Studio and the Software Development Kit (SDK), our developers creates custom Android apps.</p>
                         </div>
                    </div>
                    <div class="border-t border-[#d9dcdf] pt-5">
                        <div class="flex items-center gap-4 ">
                            <div class="text-[#f6bf22]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"></path></svg>
                            </div>
                            <h3 class="md:text-2xl text-base font-normal text-[#3d4751]">Wearables and Embedded Software</h3>
                        </div>
                        <div class="mt-4 text-[#52606d] space-y-2 md:text-base text-sm">
                            <p>Connect with your audience in an entirely new way thanks to wearables and embedded software. We'll help you leverage the latest technology trends to stay competitive in your market.</p>
                            <p>We build apps for wearables using tools like Arduino, PlatformIO, and MBEDâ€”whether you're looking to create the next great health monitoring app, help your audience stay productive, or track sleeping patterns.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- features section -->
    <section class="lg:px-20 px-4 py-8 bg-[linear-gradient(to_bottom,_#171624_63%,_#26374a_100%)]">
        <div>
            
            <div class=" mt-10">
                
                <div class="mb-10 md:px-24 px-0 text-center">
                    <h6 class="lg:text-3xl text-2xl text-white font-semibold text-center mb-4">Trusted By</h6>
                    <p class="text-[#cecece] font-light md:text-[22px] text-sm text-center">Empowering Global Brands and Startups to Drive Innovation and Success with our unparalled expertise and commitment to excellence</p>
                </div>
                <div class="swiper mySwiperLogo2 my-20">
                    <div class="swiper-wrapper pb-10">
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-2.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-3.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-4.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-2.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-3.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-4.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="w-[100px]">
                                    <img src="assets/img/feature-2.png" alt="features image" class="w-full h-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                class="max-w-7xl mx-auto md:px-4 grid grid-cols-1 lg:grid-cols-5 md:grid-cols-3 gap-y-14  space-x-6 md:mt-8 mt-4 px-8">

                <div class="space-y-2 relative px-6">
                    <div class="block absolute left-0 top-0 transform h-12 w-[2px] bg-[#137ec2] "></div>
                    <h3 class="md:text-4xl text-2xl font-black text-white ">2,500+</h3>
                    <p class="text-xs text-white ">Apps & Digital<br>Products Delivered</p>
                </div>

                <div class="space-y-2 relative px-6">
                    <div class="block absolute left-0 top-0 transform h-12 w-[2px] bg-[#137ec2] "></div>
                    <h3 class="md:text-4xl text-2xl font-black text-white ">100+</h3>
                    <p class="text-xs text-white ">Apps Development Agency & B2B Provider Awards</p>
                </div>

                <div class="space-y-2 relative px-6">
                    <div class="block absolute left-0 top-0 transform h-12 w-[2px] bg-[#137ec2] "></div>
                    <h3 class="md:text-4xl text-2xl font-black text-white ">1,200+</h3>
                    <p class="text-xs text-white ">Global Brands & Fast Growing Startups Trust us</p>
                </div>

                <div class="space-y-2 relative px-6">
                    <div class="block absolute left-0 top-0 transform h-12 w-[2px] bg-[#137ec2] "></div>
                    <h3 class="md:text-4xl text-2xl font-black text-white ">15+</h3>
                    <p class="text-xs text-white ">Years of Proven Success in the Industry</p>
                </div>

                <div class="space-y-2 relative px-6">
                    <div class="block absolute left-0 top-0 transform h-12 w-[2px] bg-[#137ec2] "></div>
                    <h3 class="md:text-4xl text-2xl font-black text-white ">250+</h3>
                    <p class="text-xs text-white ">In-house Developers, Architects, Analysts, and Designers</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- explore section -->
     <section class="lg:px-20 px-4 py-8 pt-14 relative overflow-hidden">
      <div class="w-full group">
            <div class="text-center">
                <h6 class="font-semibold md:text-lg text-sm mb-2">CASE STUDIES</h6>
                <h6 class="text-transparent bg-clip-text bg-[linear-gradient(285deg,_#137ec2,_#d7ad35,_#137ec2)] md:text-3xl  text-xl font-semibold mb-4">Exploring Success Stories</h6>
                <p class="md:text-2xl text-base text-black font-light text-center mb-4">Now explore our impactful case studies as a trusted mobile app development company mobile app development company in USA  showcasing rapid  app innovation. Discover the possibilities and inspiration through our successful projects.</p>
            </div>
              <div class="md:pb-20 pb-5">
                <div class="swiper solutionSwiper2 flex md:pt-12! pt-5! w-full overflow-visible!">
                    <div class="w-full flex swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms;"
                        id="swiper-wrapper-399857be044ca4da" aria-live="polite">
 
                        <div class="swiper-slide">
                            <div
                                class="w-full bg-[#F5F5F7] flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden ">
 
                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class="md:text-3xl text-xl md:mb-6 mb-3 font-semibold">
                                            Adjust My Crown</h2>
                                        <h3 class=" mb-2.5 text-base font-semibold">
                                           IoT-Powered Smart Homes
                                        </h3>
    
                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                           We created an Emmy award-Winning experience,translated into a stunning, bold and beautiful user experience. 
                                        </p>
                                        <div class="flex flex-wrap items-center gap-4 md:mt-8 mt-4">
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">IOT</div>
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">Mobile App</div> 
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">UX/UI Design</div> 
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/explore.gif" loading="lazy"
                                        class="w-full h-full object-cover" alt="testimonialimg">
                                </div>
                            </div>
 
                        </div>
 
                       <div class="swiper-slide">
                            <div
                                class="w-full bg-[#F5F5F7] flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden ">
 
                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class="md:text-3xl text-xl md:mb-6 mb-3 font-semibold">
                                            Adjust My Crown</h2>
                                        <h3 class=" mb-2.5 text-base font-semibold">
                                           IoT-Powered Smart Homes
                                        </h3>
    
                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                           We created an Emmy award-Winning experience,translated into a stunning, bold and beautiful user experience. 
                                        </p>
                                        <div class="flex flex-wrap items-center gap-4 md:mt-8 mt-4">
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">IOT</div>
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">Mobile App</div> 
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">UX/UI Design</div> 
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/explore.gif" loading="lazy"
                                        class="w-full h-full object-cover" alt="testimonialimg">
                                </div>
                            </div>
 
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="w-full bg-[#F5F5F7] flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden ">
 
                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class="md:text-3xl text-xl md:mb-6 mb-3 font-semibold">
                                            Adjust My Crown</h2>
                                        <h3 class=" mb-2.5 text-base font-semibold">
                                           IoT-Powered Smart Homes
                                        </h3>
    
                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                           We created an Emmy award-Winning experience,translated into a stunning, bold and beautiful user experience. 
                                        </p>
                                        <div class="flex flex-wrap items-center gap-4 md:mt-8 mt-4">
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">IOT</div>
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">Mobile App</div> 
                                            <div class="border border-[#B8B8DB] px-4 py-1 rounded-full">UX/UI Design</div> 
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/explore.gif" loading="lazy"
                                        class="w-full h-full object-cover" alt="testimonialimg">
                                </div>
                            </div>
 
                        </div>
 
                    </div>
                    <div class="">
                        <div
                            class="swiper-button-prev !top-auto bottom-3 md:!right-20 !right-14 !left-auto after:!text-sm font-bold !text-white bg-black md:!w-12 md:!h-12 !w-8 !h-8 rounded-full">
                        </div>
                        <div
                            class="swiper-button-next !top-auto bottom-3 !right-4 !left-auto after:!text-sm font-bold !text-white bg-black md:!w-12 md:!h-12 !w-8 !h-8 rounded-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- why choose us section -->
    <section class=" bg-black ">
        <div class="relative lg:px-20 px-4  bg-[url('../img/Ellipse.svg')] bg-no-repeat bg-[-60%_-40%] bg-[length:68%_auto]">
            <div class="flex flex-wrap relative md:p-6 py-20">
                <div class="md:w-1/2 w-full md:pr-20 mb-10">
                    <div class="md:sticky md:top-24 ">
                        <p class="text-sm text-[#f6bf22] mb-4">Advanced Technologies for Mobile App Development </p>
                        <h6 class="text-white md:text-3xl text-lg font-normal mb-4">Integrate Advanced Technologies With Our Mobile App Development Services </h6>
                    </div>
                </div>
                <div class="md:w-1/2 w-full space-y-8">
                    <div class="flex items-start gap-4 ">
                        
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">01</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Accelerated Time to Market </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Leverage our proven playbooks, agile delivery, and cross-functional teams to launch MVPs and platforms 30â€“50% faster, without sacrificing quality or scalability.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">02</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Enterprise-Grade from Day One</h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Our solutions are built to meet the demands of Fortune 500s - embedding compliance, observability, modularity, and performance from the first commit.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">03</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Seamless Integrations & Cloud Readiness</h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">With deep experience in AWS, Azure, and hybrid environments, we architect APIs, microservices, and edge connections that integrate smoothly with legacy systems and modern stacks alike.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">04</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Dedicated Team, Aligned with Your Vision</h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Whether itâ€™s through  team augmentation or end-to-end delivery, our delivery pods embed into your workflow like an in-house team, bringing product strategy, design, and engineering capabilities tailored to your roadmap.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">05</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Proven Delivery. Predictable Velocity. </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">With over 2,500 successful projects and a 95% milestone adherence rate, weâ€™ve perfected the art of launching products on timeâ€”whether it's a startup MVP or an enterprise transformation. </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">06</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Secure by Design, Scalable by Default </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">From DevSecOps pipelines to SOC2/HIPAA-compliant infrastructure, we bake in security and performance, ensuring your systems are audit-ready and built for global scale. </p>
                        </div>
                    </div>
                        <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] md:text-xl text-base font-semibold">07</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">AI That Drives Actionable Outcomes  </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">We specialize in building custom LLM applications , RAG pipelines, and AI agents that solve real problemsâ€”reducing operational load, accelerating insights, and enabling autonomous decision-making.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us section -->
    <section class="lg:px-20 px-4 py-8">
        <div>
             <div class="text-center">
                <h6 class="font-semibold md:text-lg text-sm mb-2 text-transparent bg-clip-text bg-[linear-gradient(285deg,_#137ec2,_#d7ad35,_#137ec2)]">Industries We Focus On </h6>
                <h6 class=" md:text-3xl text-xl font-semibold mb-4">Mobile App Development Company For Different Industries </h6>
                <p class="md:text-2xl text-base text-black font-light text-center mb-4">We are among the top mobile app development companies, having deep expertise in delivering powerful and scalable mobile apps for different industries and sectors. We specialize in both B2B and B2C mobile app development. </p>
            </div>
            <div class="mt-10">
                <ul class="flex flex-wrap md:gap-8 gap-4 items-center justify-center">
                    <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Aerospace & Defence</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Industrial Manufacturing</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Insurtech</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Education</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Travel</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Energy & Utilities</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Petrochemical</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Fintech</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Sports</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Real Estate</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Social Media</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Healthcare</div>
                                </div>
                            </div>
                        </a>
                    </li>
                     <li>
                        <a href="" >
                            <div class="p-[2px]  bg-gradient-to-r from-[#137ec2] via-[#f6bf22] to-[#137ec2] rounded-full">
                                <div class="flex bg-white items-center gap-2 p-1 pr-3 rounded-full">
                                    <div class="md:w-10 md:h-10 w-8 h-8 bg-[#e7e7e7] flex items-center justify-center rounded-full text-black">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M461.81 53.81a4.4 4.4 0 0 0-3.3-3.39c-54.38-13.3-180 34.09-248.13 102.17a294.9 294.9 0 0 0-33.09 39.08c-21-1.9-42-.3-59.88 7.5-50.49 22.2-65.18 80.18-69.28 105.07a9 9 0 0 0 9.8 10.4l81.07-8.9a180.29 180.29 0 0 0 1.1 18.3 18.15 18.15 0 0 0 5.3 11.09l31.39 31.39a18.15 18.15 0 0 0 11.1 5.3 179.91 179.91 0 0 0 18.19 1.1l-8.89 81a9 9 0 0 0 10.39 9.79c24.9-4 83-18.69 105.07-69.17 7.8-17.9 9.4-38.79 7.6-59.69a293.91 293.91 0 0 0 39.19-33.09c68.38-68 115.47-190.86 102.37-247.95zM298.66 213.67a42.7 42.7 0 1 1 60.38 0 42.65 42.65 0 0 1-60.38 0z"></path><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M109.64 352a45.06 45.06 0 0 0-26.35 12.84C65.67 382.52 64 448 64 448s65.52-1.67 83.15-19.31A44.73 44.73 0 0 0 160 402.32"></path></svg>
                                    </div>
                                    <div class="md:text-base text-sm">Fitness</div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="lg:px-20 px-4 py-14 bg-[#f0f8ff]">
        <div>
            <div>
                <h6 class="text-lg upercase font-bold mb-8">Related blogs</h6>
                <div class="md:text-3xl text-xl mb-2">Explore our insightful blogs on</div>
                <div class="md:text-3xl text-2xl font-bold">Mobile App Development Services</div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 mt-16">
                <div>
                    <div class="">
                        <img src="assets/img/blogimg.webp" alt="" class="w-full h-auto">
                    </div>
                    <div class="mt-4">
                        <div class="mb-4">
                            <a href="#" class="text-lg"> Fantasy Football Application Development with AWS DynamoDS  </a>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-[#8847B9]">
                            <span>Read More</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                        </a>
                    </div>
                </div>
                 <div>
                    <div class="">
                        <img src="assets/img/blogimg.webp" alt="" class="w-full h-auto">
                    </div>
                    <div class="mt-4">
                        <div class="mb-4">
                            <a href="#" class="text-lg"> Fantasy Football Application Development with AWS DynamoDS  </a>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-[#8847B9]">
                            <span>Read More</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                        </a>
                    </div>
                </div>
                 <div>
                    <div class="">
                        <img src="assets/img/blogimg.webp" alt="" class="w-full h-auto">
                    </div>
                    <div class="mt-4">
                        <div class="mb-4">
                            <a href="#" class="text-lg"> Fantasy Football Application Development with AWS DynamoDS  </a>
                        </div>
                        <a href="#" class="flex items-center gap-2 text-[#8847B9]">
                            <span>Read More</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section -->
    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        
        const swiperLogo2 = new Swiper(".mySwiperLogo2", {
            loop: true,
            speed: 10000,
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination:false,
            autoplay: {
                delay: 0,
                enabled: true
            },
            allowTouchMove: false,
            loopedSlides: 50,
            grabCursor: false,
            centeredSlides: false,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                576: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 6,
                },
                1400: {
                    slidesPerView: 6,
                },
            },
        });
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.solutionSwiper2', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination-solution',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView:1,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>

</html>
