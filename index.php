<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind1 CSS v4 Setup</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="font-[Outfit]">
    <?php include __DIR__ . '/includes/header.php'; ?>
    <!-- hero section -->
    <section class="md:pb-8 pb-0">
        <div class="swiper mySwiper max-md:!h-auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide lg:px-20">
                    <div
                        class="relative h-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 bg-[url('../img/herobg.webp')] max-md:bg-[#f9f8fc] bg-cover bg-center bg-no-repeat">
                        <div class="flex flex-col justify-center sm:px-18 px-4 lg:px-0 md:py-0 py-8">
                            <h6 class="md:text-base text-sm font-medium tracking-[0.4px] md:mb-8 mb-4 ">AI-POWERED CUSTOM SOFTWARE DEVELOPMENT</h6>
                            <h3 class="text-black md:text-4xl text-[26px] tracking-[2px] mb-8 font-bold text-balance"> We brought
                                <span
                                    class="bg-[linear-gradient(99deg,#4ec6df,#4aa5cf)] bg-clip-text text-transparent">75%
                                    reduction</span>
                                in cost per hire using AI
                            </h3>
                            <h4 class="font-normal mb-12 text-black md:text-base text-sm text-balance"> We are revolutionizing the
                                landscape of
                                wellness with our cutting-edge IoT App for a
                                Startup backed by Shark Tank </h4>

                            <div class="flex  gap-4">
                                <button
                                    class="bg-black text-white py-2 px-6 rounded-lg hover:bg-white font-semibold md:text-base text-sm cursor-pointer transition-all duration-300 hover:text-black hover:border-dashed border border-black hover:border-black">Case
                                    Study</button>
                                <button
                                    class="
                                            relative
                                            overflow-hidden
                                        text-white
                                            py-2 px-6
                                                rounded-lg
                                            font-semibold md:text-base text-sm cursor-pointer transition-all border border-transparent duration-300
                                                before:absolute before:inset-0 before:bg-[linear-gradient(105deg,_#9063f4,_#517ded)] before:z-0
                                                    hover:before:opacity-0 hover:bg-white hover:text-black hover:border hover:border-black hover:border-dashed">
                                    <span class="relative z-10">Get a Qoute</span>
                                </button>

                            </div>
                        </div>
                        <!-- <div class=" relative  h-full"> -->
                        <div class="flex justify-center items-center w-auto lg:px-0 md:h-[600px] h-[300px] p-10 pb-0  max-md:pt-0">
                            <img src="assets/img/heroslide1.webp" loading="lazy" class="h-full w-full object-contain"
                                alt="slideimg1">
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="swiper-slide lg:px-20">
                    <div
                        class="relative grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 bg-[url('../img/herobg2.webp')] max-md:bg-[#f9f8fc] bg-cover bg-center bg-no-repeat">
                        <div class="flex flex-col justify-center sm:px-18 px-4 lg:px-0  md:py-0 py-8">
                            <h6 class="md:text-base text-sm font-medium tracking-[0.4px] md:mb-8 mb-4">AI-POWERED CUSTOM SOFTWARE DEVELOPMENT</h6>
                            <h3 class="text-black md:text-4xl text-[26px] tracking-[2px] mb-8 font-bold text-balance"> We brought
                                <span
                                    class="bg-[linear-gradient(99deg,#4ec6df,#4aa5cf)] bg-clip-text text-transparent">75%
                                    reduction</span>
                                in cost per hire using AI
                            </h3>
                            <h4 class="font-normal mb-12 text-black md:text-base text-sm text-balance"> We are revolutionizing the
                                landscape of
                                wellness with our cutting-edge IoT App for a
                                Startup backed by Shark Tank </h4>

                            <div class="flex gap-4">
                                <button
                                    class="bg-black text-white py-2 px-6 rounded-lg hover:bg-white font-semibold text-base cursor-pointer transition-all duration-300 hover:text-black hover:border-dashed border border-black hover:border-black">Case
                                    Study</button>
                                <button
                                    class="
                                            relative
                                            overflow-hidden
                                        text-white
                                            py-2 px-6
                                                rounded-lg
                                            font-semibold text-base cursor-pointer transition-all border border-transparent duration-300
                                                before:absolute before:inset-0 before:bg-[linear-gradient(105deg,_#9063f4,_#517ded)] before:z-0
                                                    hover:before:opacity-0 hover:bg-white hover:text-black hover:border hover:border-black hover:border-dashed">
                                    <span class="relative z-10">Get a Qoute</span>
                                </button>

                            </div>
                        </div>
                        <div class="flex justify-center items-center w-auto md:h-[600px] h-[300px] py-8 max-md:pt-0">
                            <img src="assets/img/heroslide2.webp" loading="lazy" class="h-full w-full object-contain"
                                alt="slideimg1">
                        </div>

                    </div>
                </div>

            </div>

            <div
                class="swiper-pagination-hero flex !justify-center !z-50 !absolute !items-center md:!bottom-0 !bottom-8 [&_.swiper-pagination-bullet]:!bg-gray-400/60 [&_.swiper-pagination-bullet]:!w-3 [&_.swiper-pagination-bullet]:!h-3 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet-active]:!bg-[#517ded]">
            </div>
        </div>
    </section>
    <!-- services section -->
    <section class="lg:px-20 px-4 py-10 bg-[#0b020e]">
        <div>
            <div>
                <h6 class="md:text-4xl text-xl text-[#f6bf22] font-medium text-center mb-4">SERVICES WE OFFER</h6>
                <p class="text-[#dbdbdb] font-light md:text-base text-xs text-center text-balance">We Offer on Demand Solutions top our Coustomers with trending & emerging technologies and with unique features to stay ahead in the market up to the mark</p>
            </div>
            <div class="lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 grid sm:gap-8 gap-4 mt-10">
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                            <h6 class="md:text-2xl text-lg text-white font-medium mb-4 ">Custom Software Development</h6>
                            <p class="text-[#dbdbdb] font-light md:text-base text-sm ">Create custom software tailored for your unique needs, including front-end, and core back-end technology..</p>
                        </a>
                    </div>
                </div>
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                        <h6 class="md:text-2xl text-lg text-white font-medium mb-4">QA andTesting</h6>
                        <p class="text-[#dbdbdb] font-light md:text-base text-sm">Make your technology bulletproof, with manual and automated testing.</p>
                        </a>
                    </div>
                </div>
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                        <h6 class="md:text-2xl text-lg text-white font-medium mb-4">AI and Data Science</h6>
                        <p class="text-[#dbdbdb] font-light md:text-base text-sm">Use leading AI, machine learning, and data engineering technologies to unlock business value.</p>
                        </a>
                    </div>
                </div>
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                        <h6 class="md:text-2xl text-lg text-white font-medium mb-4">Mobile App Development</h6>
                        <p class="text-[#dbdbdb] font-light md:text-base text-sm">Build performant, scalable, and secure mobile applications for iOS and Android devices.</p>
                        </a>
                    </div>
                </div>
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                        <h6 class="md:text-2xl text-lg text-white font-medium mb-4">UX/UI Design</h6>
                        <p class="text-[#dbdbdb] font-light md:text-base text-sm">We create high-performance iOS , Android , cross-platform applications  with responsive web solutions that deliver exceptional user experiences.</p>
                        </a>
                    </div>
                </div>
                <div class="md:min-h-[235px] min-h-[200px]">
                    <div class="border border-[#384c60] p-6 rounded-[40px] shadow-[0_0_8px_0_#00000059] hover:shadow-none transition-all h-full duration-300">
                        <a href="#">
                        <h6 class="md:text-2xl text-lg text-white font-medium mb-4 ">Platform and Infrastructure</h6>
                        <p class="text-[#dbdbdb] font-light md:text-base text-sm " >Ensure applications are secure, fault tolerant and highly available with our DevOps and Security engineers.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features section -->
    <section class="lg:px-20 px-4 py-8 ">
        <div>
            <div class="text-center">
                <h6 class="font-semibold md:text-lg text-sm mb-2">FEATURED WORK</h6>
                <p class="md:text-2xl text-lg text-black font-light text-center text-balance mb-4">Discover how we <span
                        class="text-[#137ec2] font-semibold">transform visions into digital realities ,</span> <br>
                    creating success stories that redefine industry benchmarks</p>
            </div>
            <div class="swiper homeSwipper2 pb-20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="rounded-2xl overflow-hidden flex flex-wrap md:mt-14 mt-6">
                            <div class="md:w-1/2 w-full">
                                <div class="bg-[#e1e1e159] p-8 space-y-10 h-full">
                                    <div
                                        class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] xl:text-base md:text-sm text-xs">
                                        <div>AI</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>ClimateTech</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>IOT</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>Mobile App</div>

                                    </div>
                                    <div>
                                        <p class="xl:text-2xl leading-[34px] md:text-xl text-lg font-medium   ">We
                                            revitlatized UK's largest smart home heating control manufacturer by
                                            deploying smart IoT solutions , reducing energy bills by 50%</p>
                                    </div>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">50%</h6>
                                            <p class="xl:text-lg md:text-sm font-light">Reduction in energy bills </p>
                                        </div>
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">15 times</h6>
                                            <p class="xl:text-lg md:text-sm font-light">More engagement triggered</p>
                                        </div>
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">32 zones</h6>
                                            <p class="xl:text-lg md:text-sm font-light">facilitated via mobile app,
                                                covering the entire home</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-1/2 w-full">
                                <div class="h-full">
                                    <img src="https://media.12newsnow.com/assets/CCT/images/c958c7b1-c3aa-4bc5-81a9-1f069f6e7d39/c958c7b1-c3aa-4bc5-81a9-1f069f6e7d39_1140x641.jpg"
                                        alt="" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="rounded-2xl overflow-hidden flex flex-wrap md:mt-14 mt-6">
                            <div class="md:w-1/2 w-full">
                                <div class="bg-[#e1e1e159] p-8 space-y-10 h-full">
                                    <div
                                        class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] xl:text-base md:text-sm text-xs">
                                        <div>AI</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>ClimateTech</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>IOT</div>
                                        <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                                        <div>Mobile App</div>

                                    </div>
                                    <div>
                                        <p class="xl:text-2xl leading-[34px] md:text-xl text-lg font-medium   ">We
                                            revitlatized UK's largest smart home heating control manufacturer by
                                            deploying smart IoT solutions , reducing energy bills by 50%</p>
                                    </div>
                                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">50%</h6>
                                            <p class="xl:text-lg md:text-sm font-light">Reduction in energy bills </p>
                                        </div>
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">15 times</h6>
                                            <p class="xl:text-lg md:text-sm font-light">More engagement triggered</p>
                                        </div>
                                        <div>
                                            <h6 class="font-bold xl:text-2xl md:text-lg">32 zones</h6>
                                            <p class="xl:text-lg md:text-sm font-light">facilitated via mobile app,
                                                covering the entire home</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:w-1/2 w-full">
                                <div class="h-full">
                                    <img src="https://media.12newsnow.com/assets/CCT/images/c958c7b1-c3aa-4bc5-81a9-1f069f6e7d39/c958c7b1-c3aa-4bc5-81a9-1f069f6e7d39_1140x641.jpg"
                                        alt="" class="w-full h-full object-cover">
                                </div>
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
    </section>
    <section class="lg:px-20 px-10 py-16 bg-[linear-gradient(to_bottom,_#171624_63%,_#26374a_100%)]">
        <div class=" mt-10">

            <div class="mb-10 md:px-24 px-0 text-center">
                <h6 class="lg:text-3xl text-2xl text-white font-semibold text-center text-balance mb-4">Trusted By</h6>
                <p class="text-[#cecece] font-light md:text-[22px] text-sm text-center text-balance">Empowering Global Brands and
                    Startups to Drive Innovation and Success with our unparalled expertise and commitment to
                    excellence</p>
            </div>
            <div class="swiper mySwiperLogo md:my-20 my-10">
                <div class="swiper-wrapper pb-10">
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-2.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-3.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-4.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-2.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-3.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-4.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
                            <img src="assets/img/feature-1.png" alt="features image" class="w-full h-auto">
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="md:w-[100px] w-[50px]">
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
    </section>
    <!-- call section -->
    <section class="lg:px-20 px-4 py-8 bg-black">
        <div class="flex flex-wrap items-center">
            <div class="md:w-1/2 w-full md:order-1 order-2">
                <div class=" md:text-[32px] text-xl font-normal text-white">
                    <h3 class="md:leading-10 leading-8">Want to accelerate software development at your company? </h3>
                    <span class="text-[#137ec2]">See how we can help.</span>
                </div>
                <div>
                    <button
                        class="mt-4 bg-[#f6bf22] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base text-white hover:text-[#f6bf22] hover:bg-transparent md:text-base  transition-all duration-300 hover:border-dashed border border-transparent hover:border-[#f6bf22] cursor-pointer">Schedule
                        a call</button>
                </div>
            </div>
            <div class="md:w-1/2 w-full flex items-center justify-center md:order-2 order-1 md-mb-0 mb-4">
                <div class="w-[460px] ">
                    <img src="assets/img/call-section.avif" alt="call image" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section -->
    <section class=" relative lg:px-20 px-4 bg-[#f6bf2259] overflow-hidden py-14">
        <div class="w-full group">
            <div class=" text-start w-full md:max-w-4/5 md:pb-4 flex flex-col items-start">
                <h6 class="text-[15px] uppercase text-black font-bold md:mb-4 mb-2">Built Together. Grown
                    Together.</h6>
                <h2 class="text-black font-normal md:leading-8 text-2xl md:text-[1.6rem] ">Discover how weâ€™ve
                    collaborated
                    with
                    leading startups, scaleups, and enterprises to build <span class="text-[#137ec2]">next-gen digital
                        solutions</span> â€”from concept to
                    launch to long-term support. Our clientsâ€™ success stories speak volumes.</h2>
            </div>
            <div class="flex flex-col md:flex-row gap-5 lg:gap-10 md:items-center justify-center md:justify-between ">
                <h2 class="uppercase font-medium text-black md:text-[1.4rem]">Exceeding Expectations, Delivering
                    Excellence </h2>
                <div class=" flex md:justify-center gap-3">
                    <div class="flex flex-col  gap-2">
                        <h3 class="text-black text-[11px] uppercase font-semibold">Reviewed on</h3>
                        <svg class="w-20 h-6" xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 87.861 25">
                            <path fill="#000"
                                d="M22.861 0h4v25h-4zm18 17.025c0 3.826-3.217 4.131-4.174 4.131-2.391 0-2.826-2.238-2.826-3.588V8h-4v9.548c0 2.37.744 4.326 2.048 5.63 1.152 1.153 2.878 1.783 4.748 1.783 1.326 0 3.204-.413 4.204-1.326V25h4V8h-4zM52.861 2h-4v6h-3v4h3v13h4V12h3V8h-3zm15.597 17.917c-.871.783-2.021 1.217-3.283 1.217-2.782 0-4.825-2.043-4.825-4.848s1.978-4.762 4.825-4.762c1.24 0 2.412.413 3.305 1.196l.607.522 2.697-2.696-.675-.609C69.522 8.504 67.415 7.7 65.174 7.7c-5 0-8.631 3.608-8.631 8.565 0 4.936 3.718 8.673 8.631 8.673 2.283 0 4.412-.804 5.979-2.26l.652-.609-2.739-2.694zM86.061 9.482C84.909 8.33 83.559 7.7 81.689 7.7c-1.326 0-2.828.413-3.828 1.325V0h-4v25h4v-9.365c0-3.826 2.718-4.13 3.675-4.13 2.391 0 2.325 2.239 2.325 3.587V25h4v-9.887c0-2.37-.495-4.326-1.8-5.631" />
                            <path fill="red" d="M65.043 13.438a2.891 2.891 0 1 1 0 5.784 2.891 2.891 0 0 1 0-5.784" />
                            <path fill="#000"
                                d="M17.261 18.721c-1.521 1.565-3.587 2.413-5.761 2.413-4.456 0-7.696-3.5-7.696-8.304 0-4.826 3.24-8.326 7.696-8.326 2.153 0 4.196.847 5.74 2.391l.608.609 2.674-2.674-.587-.609C17.718 1.938 14.718.7 11.5.7 4.935.7 0 5.917 0 12.851 0 19.764 4.957 24.96 11.5 24.96c3.24 0 6.24-1.26 8.457-3.543l.587-.609-2.652-2.717z" />
                        </svg>
                    </div>
                    <div class="flex flex-col mb-0 relative justify-between items-center gap-1">
                        <div class="flex  items-center gap-1">
                            <span class="text-[#137ec2]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-[#137ec2]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-[#137ec2]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-[#137ec2]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-[#137ec2]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <a href="" class="uppercase text-black text-sm">110 Reviews</a>
                    </div>
                </div>

            </div>
            <div class="pb-20">
                <div class="swiper solutionSwiper2 flex md:pt-12! pt-5! w-full overflow-visible!">
                    <div class="w-full flex swiper-wrapper" style="transition-duration: 0ms; transition-delay: 0ms;"
                        id="swiper-wrapper-399857be044ca4da" aria-live="polite">

                        <div class="swiper-slide">
                            <div
                                class="w-full bg-white flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden md:h-[250px] h-auto">

                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class=" relative mb-5 md:text-lg font-bold before:absolute before:bottom-0 before:left-0 before:w-8 before:h-0.5 before:bg-black">
                                            CDR</h2>
                                        <h3 class="text-[#5D5D5D] mb-2.5 text-sm font-bold">
                                            Robert Freiberg, Founder of CDR
                                        </h3>

                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                            "They have been extremely helpful in growing and improving CDR."
                                        </p>
                                    </div>
                                    <div class="flex items-center font-bold text-[15px] text-[#f6bf22] gap-2 ">
                                        <span>
                                            <svg class="size-7 cursor-pointer" stroke="currentColor" fill="none"
                                                stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                                stroke-linejoin="round" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </span>
                                        <p class="">Watch</p>
                                    </div>
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/testimonial.jpg" loading="lazy"
                                        class="w-full h-full object-cover" alt="testimonialimg">
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide">
                            <div
                                class="w-full bg-white flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden md:h-[250px] h-auto">

                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class=" relative mb-5 md:text-lg font-bold before:absolute before:bottom-0 before:left-0 before:w-8 before:h-0.5 before:bg-black">
                                            CDR</h2>
                                        <h3 class="text-[#5D5D5D] mb-2.5 text-sm font-bold">
                                            Robert Freiberg, Founder of CDR
                                        </h3>

                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                            "They have been extremely helpful in growing and improving CDR."
                                        </p>
                                    </div>
                                    <div class="flex items-center font-bold text-[15px] text-[#f6bf22] gap-2 ">
                                        <span>
                                            <svg class="size-7 cursor-pointer" stroke="currentColor" fill="none"
                                                stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                                stroke-linejoin="round" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </span>
                                        <p class="">Watch</p>
                                    </div>
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/testimonial.jpg" loading="lazy"
                                        class="w-full h-full object-cover" alt="testimonialimg">
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div
                                class="w-full bg-white flex md:flex-row flex-col  shadow-[0px_4px_18.9px_0px_#0000001F] rounded-3xl overflow-hidden md:h-[250px] h-auto">

                                <div class=" md:w-1/2 p-6 flex flex-col justify-between">
                                    <div>
                                        <h2
                                            class=" relative mb-5 md:text-lg font-bold before:absolute before:bottom-0 before:left-0 before:w-8 before:h-0.5 before:bg-black">
                                            CDR</h2>
                                        <h3 class="text-[#5D5D5D] mb-2.5 text-sm font-bold">
                                            Robert Freiberg, Founder of CDR
                                        </h3>

                                        <p class=" text-[#5E5E5E] mb-2 text-sm font-normal ">
                                            "They have been extremely helpful in growing and improving CDR."
                                        </p>
                                    </div>
                                    <div class="flex items-center font-bold text-[15px] text-[#f6bf22] gap-2 ">
                                        <span>
                                            <svg class="size-7 cursor-pointer" stroke="currentColor" fill="none"
                                                stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                                stroke-linejoin="round" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </span>
                                        <p class="">Watch</p>
                                    </div>
                                </div>
                                <div class=" md:w-1/2 w-full md:h-auto h-[250px]">
                                    <img src="assets/img/testimonial.jpg" loading="lazy"
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
    <!-- excellence section -->
    <section class="lg:px-20 px-4 py-8 bg-[#137ec2]">
        <div class="flex flex-wrap">
            <div class="md:w-3/5 w-full flex ">
                <div class="flex flex-wrap md:border-r border-[#c7c7c747]">
                    <div class="md:w-1/2 w-full pr-4">
                        <div>
                            <h6 class="md:text-4xl text-xl md:leading-[48px] font-medium text-white"><span
                                    class="text-[#f6bf22] ">Excellence .</span> <br>Our minimum bar for client delivery.
                            </h6>
                            <p class="text-[#c2c7cc] md:text-lg text-base mt-8 font-normal">Over 130 awards, accolades, and
                                achievements showcase our quality and commitment to client success.</p>
                        </div>
                        <div
                            class="py-1 flex w-fit justify-start md:justify-center border-b-2 border-[#f6bf22] group mt-14">
                            <a href="#"
                                class="flex tems-center gap-2 text-sm md:text-base text-[#f6bf22] font-medium transition-all duration-300 group-hover:translate-x-3">
                                <span>Everything We Do</span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.22 19.03a.75.75 0 0 1 0-1.06L18.19 13H3.75a.75.75 0 0 1 0-1.5h14.44l-4.97-4.97a.749.749 0 0 1 .326-1.275.749.749 0 0 1 .734.215l6.25 6.25a.75.75 0 0 1 0 1.06l-6.25 6.25a.75.75 0 0 1-1.06 0Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full ">
                        <div class="flex flex-col space-y-6 items-center justify-center ">
                            <div class="relative w-[250px] h-[250px]">

                                <div
                                    class="absolute inset-0 animate-spin-slow rounded-full flex items-center justify-center text-[#b5b5b5]">
                                    <svg class="w-full h-full" viewBox="0 0 200 200">
                                        <defs>
                                            <path id="circlePath"
                                                d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0" />
                                        </defs>
                                        <text fill="currentColor" font-size="12" letter-spacing="9">
                                            <textPath xlink:href="#circlePath" startOffset="50%" text-anchor="middle">
                                                projects executed successfully
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>

                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                                    <div class="text-[40px] font-bold">1,250+</div>
                                    <div class="text-lg font-semibold leading-tight">
                                        projects<br>delivered
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-[250px] h-[250px]">

                                <div
                                    class="absolute inset-0 animate-spin-slow rounded-full flex items-center justify-center text-[#b5b5b5]">
                                    <svg class="w-full h-full" viewBox="0 0 200 200">
                                        <defs>
                                            <path id="circlePath"
                                                d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0" />
                                        </defs>
                                        <text fill="currentColor" font-size="12" letter-spacing="8">
                                            <textPath xlink:href="#circlePath" startOffset="50%" text-anchor="middle">
                                                industry sectors industry sectors
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>

                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                                    <div class="text-[40px] font-bold">130+</div>
                                    <div class="text-lg font-semibold leading-tight">
                                        Industry<br>sectors
                                    </div>
                                </div>
                            </div>
                            <div class="relative w-[250px] h-[250px]">

                                <div
                                    class="absolute inset-0 animate-spin-slow rounded-full flex items-center justify-center text-[#b5b5b5]">
                                    <svg class="w-full h-full" viewBox="0 0 200 200">
                                        <defs>
                                            <path id="circlePath"
                                                d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0" />
                                        </defs>
                                        <text fill="currentColor" font-size="12" letter-spacing="16">
                                            <textPath xlink:href="#circlePath" startOffset="50%" text-anchor="middle">
                                                average client rating
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>

                                <div
                                    class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                                    <div class="text-[40px] font-bold">4.9/5</div>
                                    <div class="text-lg font-semibold leading-tight">
                                        client rating
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/5 w-full md:ps-6 md:mt-0 mt-6">
                <div class="grid grid-cols-2 gap-y-6 gap-x-4 ">
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-1.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-2.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-3.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-4.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-5.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="w-[115px] mb-10">
                            <img src="assets/img/exe-6.svg" alt="">
                        </div>
                        <div>
                            <h6 class="md:text-lg text-base font-normal text-white opacity-60 text-center">America's Fastest-Growing
                                Companies 2025</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:px-20 px-4 pt-14 pb-8 group/network bg-[linear-gradient(180deg,_#fff_0%,_#eeeffb_100%)]">
        <div>
            <div>
                <h6 class="text-[#137ec2] text-center text-base font-bold mb-4">OUR PARTNERS NETWORK</h6>
                <p class="text-black text-center text-xl text-balance">Harness our extensive platform expertise and strong tech alliances</p>
            </div>
            <div class="flex justify-center items-center mb-6">
               <div class="max-w-5xl mx-auto w-full group/possibility">
                    <div class="swiper networkThumbs w-full h-full">
                        <div class="swiper-wrapper py-12 ">
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                    <img src="assets/img/adobe.svg" class=" h-auto w-[104px] object-center mx-auto  object-contain" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                    <img src="assets/img/aws.png" class="h-auto w-[104px]  object-contain" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                <img src="assets/img/google.svg" class="h-auto w-[104px]  object-contain" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                <img src="assets/img/shopify.svg" class="h-auto w-[104px]  object-contain" alt="">
                                </div>
                            </div>
                             <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                <img src="assets/img/ibm.svg" class="h-auto w-[104px]  object-contain" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                <img src="assets/img/xamarin.svg" class="h-auto w-[104px]  object-contain" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide scale-100 transition-all duration-300 ease-in-out group/thumb [.swiper-slide-thumb-active]:scale-150">
                                <div class="flex items-center justify-center w-full">
                                <img src="assets/img/kalaviyo.svg" class="h-auto w-[104px] object-contain" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="absolute !hidden swiper networkSwiperClass h-full">
                        <div class="swiper-wrapper py-10 ">
                            <div class="swiper-slide slidernetwork1  ">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slidernetwork2 ">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slidernetwork3">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slidernetwork4">
                               <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="swiper-slide slidernetwork5">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slidernetwork6">
                               <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slidernetwork7">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="text-base text-black text-balance text-center"> As a leading digital transformation company, we offer rapid mobile app development services using IBM's cloud services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-full  ">
                        <div class="flex flex-col md:py-10 ">
                            <div class="w-full group-has-[.slidernetwork1.swiper-slide-active]/possibility:block  hidden  ">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center"> As a trusted Adobe Solution Partner, we help businesses design, develop, and deliver exceptional digital experiences powered by Adobeâ€™s cutting-edge tools and platforms</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full group-has-[.slidernetwork2.swiper-slide-active]/possibility:block  hidden ">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As an AWS Partner, we build secure, scalable, and high-performance cloud solutions leveraging the full power of Amazon Web Services.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full group-has-[.slidernetwork3.swiper-slide-active]/possibility:block  hidden">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As a Google Cloud Partner, we deliver innovative, AI-powered, and scalable solutions using Googleâ€™s advanced cloud technologies.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full group-has-[.slidernetwork4.swiper-slide-active]/possibility:block  hidden">
                               <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As a Shopify Partner, we create high-converting, custom online stores that deliver seamless shopping experiences.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="w-full group-has-[.slidernetwork5.swiper-slide-active]/possibility:block  hidden">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As an IBM Business Partner, we develop intelligent, enterprise-grade solutions powered by IBMâ€™s cutting-edge cloud and AI technologies</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full group-has-[.slidernetwork6.swiper-slide-active]/possibility:block  hidden">
                               <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As a Xamarin development partner, we build powerful, cross-platform mobile apps with native performance and a seamless user experience.</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full group-has-[.slidernetwork7.swiper-slide-active]/possibility:block  hidden">
                                <div class="max-w-xl mx-auto h-full flex items-center justify-center">
                                    <div class="flex items-center justify-center w-full bg-white p-7 rounded-xl relative">
                                        <div>
                                            <h6 class="md:text-base text-sm text-black text-balance text-center">As a Klaviyo Partner, we craft data-driven email and SMS marketing campaigns that boost engagement and drive sales</h6>
                                        </div>
                                        <div class="absolute top-4 right-5">
                                            <svg class="md:w-8 md:h-8 w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Double_Quotes_R"> <path id="Vector" d="M16 17C17.6569 17 19 15.6569 19 14V12.0001M19 12.0001V8.59847C19 8.03951 19 7.7596 18.8911 7.5459C18.7952 7.35774 18.6419 7.20487 18.4537 7.10899C18.2398 7 17.9602 7 17.4001 7H15.6001C15.04 7 14.7598 7 14.5459 7.10899C14.3577 7.20487 14.2049 7.35774 14.109 7.5459C14 7.75981 14 8.04005 14 8.6001V10.4001C14 10.9602 14 11.2398 14.109 11.4537C14.2049 11.6419 14.3577 11.7952 14.5459 11.8911C14.7596 12 15.0395 12 15.5985 12L19 12.0001ZM7 17C8.65685 17 10 15.6569 10 14L10 12.0001M10 12.0001V8.59846C10 8.0395 10 7.7596 9.89111 7.5459C9.79524 7.35774 9.64186 7.20487 9.4537 7.10899C9.23979 7 8.96015 7 8.4001 7H6.6001C6.04005 7 5.75981 7 5.5459 7.10899C5.35774 7.20487 5.20487 7.35774 5.10899 7.5459C5 7.75981 5 8.04005 5 8.6001V10.4001C5 10.9602 5 11.2398 5.10899 11.4537C5.20487 11.6419 5.35774 11.7952 5.5459 11.8911C5.7596 12 6.0395 12 6.59845 12L10 12.0001Z" stroke="#137ec2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us section -->
    <section class=" bg-black ">
        <div
            class="relative lg:px-20 px-4  bg-[url('../img/Ellipse.svg')] bg-no-repeat bg-[-60%_-40%] bg-[length:68%_auto]">
            <div class="flex flex-wrap relative p-6 py-20">
                <div class="md:w-1/2 w-full md:pr-20 mb-10">
                    <div class="md:sticky md:top-24 ">
                        <h6 class="text-white md:text-4xl text-xl font-normal mb-4">Why visionary brands and <br> startups choose
                            <span class="text-[#f6bf22] font-bold">TechAhead</span> </h6>
                        <p class="text-white text-base font-normal">At TechAhead, we donâ€™t just deliver projects: We
                            engineer future-ready digital ecosystems that are secure, scalable, intelligent, and
                            designed for impact. Hereâ€™s what sets us apart:</p>
                    </div>
                </div>
                <div class="md:w-1/2 w-full space-y-8">
                    <div class="flex items-start gap-4 ">
                        <div class="text-[#ffffff8c] text-xl font-semibold">01</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Accelerated Time to Market </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Leverage our proven
                                playbooks, agile delivery, and cross-functional teams to launch MVPs and platforms
                                30â€“50% faster, without sacrificing quality or scalability.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">02</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Enterprise-Grade from Day One</h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Our solutions are built to
                                meet the demands of Fortune 500s - embedding compliance, observability, modularity, and
                                performance from the first commit.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">03</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Seamless Integrations & Cloud Readiness
                            </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">With deep experience in AWS,
                                Azure, and hybrid environments, we architect APIs, microservices, and edge connections
                                that integrate smoothly with legacy systems and modern stacks alike.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">04</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Dedicated Team, Aligned with Your Vision
                            </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">Whether itâ€™s through team
                                augmentation or end-to-end delivery, our delivery pods embed into your workflow like an
                                in-house team, bringing product strategy, design, and engineering capabilities tailored
                                to your roadmap.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">05</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Proven Delivery. Predictable Velocity.
                            </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">With over 2,500 successful
                                projects and a 95% milestone adherence rate, weâ€™ve perfected the art of launching
                                products on timeâ€”whether it's a startup MVP or an enterprise transformation. </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">06</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">Secure by Design, Scalable by Default
                            </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">From DevSecOps pipelines to
                                SOC2/HIPAA-compliant infrastructure, we bake in security and performance, ensuring your
                                systems are audit-ready and built for global scale. </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="text-[#ffffff8c] text-xl font-semibold">07</div>
                        <div>
                            <h6 class="text-white md:text-xl text-base font-semibold mb-4">AI That Drives Actionable Outcomes </h6>
                            <p class="text-white md:text-base text-sm font-normal mb-4 tracking-wider">We specialize in building
                                custom LLM applications , RAG pipelines, and AI agents that solve real problemsâ€”reducing
                                operational load, accelerating insights, and enabling autonomous decision-making. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of section -->
    <section class=" blogsection relative lg:px-20 px-4 bg-[#f5f9ff] overflow-hidden py-14">
        <div class="w-full">

            <div class=" text-start w-full flex flex-col items-start">
                <h3 class="text-[15px] uppercase text-black font-bold md:mb-4 mb-2">BLOG & INSIGHTS</h3>
            </div>
            <div
                class="flex flex-col md:flex-row gap-5 mb-10 md:mb-28 lg:gap-10 md:items-center justify-center md:justify-between ">
                <div>
                    <h2 class="font-medium text-black md:text-[1.4rem]">Explore our <span
                            class="text-[#f6bf22]">insightful
                            blogs and articles</span> on <br> diverse technologies to make the
                        right choice. </h2>
                </div>
                <div class=" flex gap-3">
                    <button
                        class="cursor-pointer flex bg-transparent hover:bg-[#137ec2] hover:text-white transition-all duration-200ms items-center gap-2 text-[#137ec2] font-semibold text-sm border border-[#137ec2] rounded-[40px] whitespace-nowrap px-[18px] py-2.5">view
                        all <span class="text-xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.22 19.03a.75.75 0 0 1 0-1.06L18.19 13H3.75a.75.75 0 0 1 0-1.5h14.44l-4.97-4.97a.749.749 0 0 1 .326-1.275.749.749 0 0 1 .734.215l6.25 6.25a.75.75 0 0 1 0 1.06l-6.25 6.25a.75.75 0 0 1-1.06 0Z">
                                </path>
                            </svg>
                        </span>
                    </button>

                </div>

            </div>

            <div class="group mb-7">
                <div
                    class=" relative md:py-18 md:pr-[50px] md:pl-[70px] transition-all duration-300 md:group-hover:bg-[linear-gradient(293deg,_#6596FD_40%,_#CBA8FF_100%,_#A575EC_100%)]">
                    <div class="flex flex-col md:flex-row w-full gap-5 md:gap-[60px] ">

                        <div class=" md:w-2/5">
                            <div
                                class="md:absolute relative overflow-hidden  md:group-hover:bottom-32 md:h-[190px] transition-all duration-300 md:group-hover:scale-120 md:w-[320px] rounded-md">
                                <img src="assets/img/blogimg.webp" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-500 " alt="blogimg">
                            </div>
                        </div>

                        <div class="flex flex-row gap-10 md:w-3/5 items-center md:justify-between">
                            <div class="flex flex-col">
                                <h2 class="md:text-lg md:group-hover:text-white text-black font-medium">
                                    <a href="#">
                                        Real-Time Fraud Detection at Scale: <br> Leveraging MLOps for Financial
                                        Services
                                    </a>
                                </h2>
                                <p class="text-[#6e6e6e] md:group-hover:text-white  text-xs font-normal mb-5">July 14, 2025
                                    | 80 Views</p>
                                <div class="flex flex-row gap-3 ">
                                    <div class="rounded-full w-[38px] h-[38px] overflow-hidden bg-[#F4F7F8]">
                                        <img src="assets/img/testimonial.jpg" loading="lazy"
                                            class="w-full h-auto object-cover" alt="blogmen">
                                    </div>
                                    <div class="flex rounded-[40px] text-black bg-[#F4F7F8] px-3.5 py-1.5">
                                        Deepak Sinha
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center ">
                                <div
                                    class="md:w-[50px] md:h-[50px] h-[40px] w-[40px] rounded-full bg-black md:group-hover:bg-white flex justify-center items-center md:group-hover:text-black text-white">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="group mb-7">
                <div
                    class=" relative md:py-18 md:pr-[50px] md:pl-[70px] transition-all duration-300 md:group-hover:bg-[linear-gradient(293deg,_#6596FD_40%,_#CBA8FF_100%,_#A575EC_100%)]">
                    <div class="flex flex-col md:flex-row w-full gap-5 md:gap-[60px] ">

                        <div class=" md:w-2/5">
                            <div
                                class="md:absolute relative overflow-hidden md:group-hover:bottom-32 md:h-[190px] transition-all duration-300 md:group-hover:scale-120 md:w-[320px] rounded-md">
                                <img src="assets/img/blogimg.webp" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-500 " alt="blogimg">
                            </div>
                        </div>

                        <div class="flex flex-row gap-10 md:w-3/5 items-center md:justify-between">
                            <div class="flex flex-col">
                                <h2 class="md:text-lg md:group-hover:text-white text-black font-medium">
                                    <a href="#">
                                        Real-Time Fraud Detection at Scale: <br> Leveraging MLOps for Financial
                                        Services
                                    </a>
                                </h2>
                                <p class="text-[#6e6e6e] md:group-hover:text-white  text-xs font-normal mb-5">July 14, 2025
                                    | 80 Views</p>
                                <div class="flex flex-row gap-3 ">
                                    <div class="rounded-full w-[38px] h-[38px] overflow-hidden bg-[#F4F7F8]">
                                        <img src="assets/img/testimonial.jpg" loading="lazy"
                                            class="w-full h-auto object-cover" alt="blogmen">
                                    </div>
                                    <div class="flex rounded-[40px] text-black bg-[#F4F7F8] px-3.5 py-1.5">
                                        Deepak Sinha
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center ">
                                <div
                                    class="md:w-[50px] md:h-[50px] h-[40px] w-[40px] rounded-full bg-black md:group-hover:bg-white flex justify-center items-center md:group-hover:text-black text-white">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="group">
                <div
                    class=" relative md:py-18 md:pr-[50px] md:pl-[70px] transition-all duration-300 md:group-hover:bg-[linear-gradient(293deg,_#6596FD_40%,_#CBA8FF_100%,_#A575EC_100%)]">
                    <div class="flex flex-col md:flex-row w-full gap-5 md:gap-[60px] ">

                        <div class=" md:w-2/5">
                            <div
                                class="md:absolute relative overflow-hidden  md:group-hover:bottom-32 md:h-[190px] transition-all duration-300 md:group-hover:scale-120 md:w-[320px] rounded-md">
                                <img src="assets/img/blogimg.webp" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-500 " alt="blogimg">
                            </div>
                        </div>

                        <div class="flex flex-row gap-10 md:w-3/5 items-center md:justify-between">
                            <div class="flex flex-col">
                                <h2 class="md:text-lg md:group-hover:text-white text-black font-medium">
                                    <a href="#">
                                        Real-Time Fraud Detection at Scale: <br> Leveraging MLOps for Financial
                                        Services
                                    </a>
                                </h2>
                                <p class="md:group-hover:text-white text-[#6e6e6e] text-xs font-normal mb-5">July 14, 2025
                                    | 80 Views</p>
                                <div class="flex flex-row gap-3 ">
                                    <div class="rounded-full w-[38px] h-[38px] overflow-hidden bg-[#F4F7F8]">
                                        <img src="assets/img/testimonial.jpg" loading="lazy"
                                            class="w-full h-auto object-cover" alt="blogmen">
                                    </div>
                                    <div class="flex rounded-[40px] text-black bg-[#F4F7F8] px-3.5 py-1.5">
                                        Deepak Sinha
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center ">
                                <div
                                    class="md:w-[50px] md:h-[50px] h-[40px] w-[40px] rounded-full bg-black md:group-hover:bg-white flex justify-center items-center md:group-hover:text-black text-white">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M6.23 20.23 8 22l10-10L8 2 6.23 3.77 14.46 12z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <?php include __DIR__ . '/includes/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
    window.addEventListener('load', function () {
        // ---- THUMB SLIDER ----
        const networkThumbs = new Swiper('.networkThumbs', {
            loop: true,
            initialSlide: 0,
            slidesPerView: 5,
            spaceBetween: 16,
            centeredSlides: false,
            slideToClickedSlide: true,
            watchSlidesProgress: true,
            thumbs: { multipleActiveThumbs: false },
            breakpoints: {
                320:  { slidesPerView: 2 },
                640:  { slidesPerView: 3 },
                1024: { slidesPerView: 5 }
            },
            observer: true,
            observeParents: true
        });

        // ---- MAIN SLIDER ----
        const networkSwiper = new Swiper('.networkSwiperClass', {
            loop: true,
            initialSlide: 0,
            slidesPerView: 1,
            spaceBetween: 16,
            centeredSlides: true,
            loopAdditionalSlides: 10,
            speed: 700,
            autoplay: {
                delay: 2800,
                disableOnInteraction: false
            },
            thumbs: { swiper: networkThumbs },
            observer: true,
            observeParents: true
        });

        // âœ… Strong syncing function
        function syncTo(realIndex, dur = 400) {
            networkSwiper.slideToLoop(realIndex, dur, false);
            networkThumbs.slideToLoop(realIndex, dur, false);
        }

        // âœ… Force autoplay to start even if hidden at load
        networkSwiper.autoplay.start();

        // Visibility check â†’ pause & resume autoplay
        const root = document.querySelector('.networkSwiperClass');
        const io = new IntersectionObserver((entries) => {
            const vis = entries[0].isIntersecting;
            if (vis) {
                networkSwiper.update();
                networkThumbs.update();
                networkSwiper.autoplay.start();
                syncTo(networkSwiper.realIndex, 0);
            } else {
                networkSwiper.autoplay.stop();
            }
        }, { threshold: 0.1 });
        if (root) io.observe(root);

        // Main change â†’ thumbs ko center me lao
        networkSwiper.on('slideChange', () => {
            networkThumbs.slideToLoop(networkSwiper.realIndex, 400, false);
        });

        // Thumb click â†’ dono sliders same index pe
        networkThumbs.on('click', (sw) => {
            if (typeof sw.clickedIndex === 'undefined') return;
            const real = Number(sw.slides[sw.clickedIndex].dataset.swiperSlideIndex ?? sw.clickedIndex);
            syncTo(real, 450);
        });

        // Initial center fix
        setTimeout(() => syncTo(0, 0), 60);
    });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.mySwiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination-hero',
                    clickable: true,
                },
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.solutionSwiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination-solution',
                    clickable: true,
                },
                // Add responsive breakpoints
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 1.4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                },
            });
        });
        const swiperLogo = new Swiper(".mySwiperLogo", {
            loop: true,
            speed: 10000,
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: false,
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
                    slidesPerView: 4,
                    // spaceBetween: 20,
                },
                576: {
                    slidesPerView: 4,
                    // spaceBetween: 25,
                },
                768: {
                    slidesPerView: 4,
                    // spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 6,
                    // spaceBetween: 35,
                },
                1400: {
                    slidesPerView: 6,
                    // spaceBetween: 20,
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
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 2.1,
                        spaceBetween: 40,
                    },
                },
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.homeSwipper2', {
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
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>

</html>

