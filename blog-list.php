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
    <section class="lg:px-20 px-4 md:py-14 py-6 relative bg-[url('../img/blog-bg.png')] bg-no-repeat bg-cover">
        <div class="max-w-7xl mx-auto">
            <div>
                <h6 class="md:text-[45px] text-[28px] font-medium text-center text-balance">Explore In-Depth  and <span class="text-transparent bg-clip-text bg-[#137ec2]">Knowledge</span> and <span class="text-transparent bg-clip-text bg-[#137ec2]">Expert Perspectives</span> .</h6>
            </div>
            <div>
                <p class="text-center mt-4 text-medium text-black md:text-lg text-base tracking-[0.47px]"> Dive into comprehensive articles, expert opinions, and practical tips that help you stay informed and inspired in todayâ€™s fast-paced digital world.
            <div class="flex items-center justify-center mt-10 ">
                <form class="relative searchBlogForm w-full">
                    <div class="mx-auto max-w-4xl relative">
                        <input type="search" value="" id="searchBlog" class="block w-full p-4  pe-24 text-sm text-black placeholder:text-black border border-black rounded-full bg-transparent focus:outline-0"placeholder="Search App, Web, Fantasy..." required="">
                        <div class="absolute right-2 top-2 w-10 h-10 bg-black rounded-full flex items-center ps-3 pointer-events-none">
                            <svg class="size-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mx-auto max-w-6xl">
                        <div class="mt-10 flex-wrap flex items-center md:justify-center justify-start gap-4">
                            <p class="text-black text-sm font-medium text-nowrap">Search By Tags :</p>
                            <ul class="flex flex-wrap items-center md:justify-center justify-start md:gap-4 gap-2">
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Android</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">App Development Cost</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Artificial Intelligence</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Automations</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Cloud</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Cunstructions</li>
                                <li class="text-black text-sm font-medium bg-white border border-gray-200 rounded-full px-4 py-2 hover:bg-gray-100 cursor-pointer w-fit">Data Analytics</li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section class="lg:px-20 px-2 container py-8  mx-auto">
        <div class="flex flex-wrap gap-y-4 ">
             <div class="w-full lg:w-2/3 px-2">
                <a href="blog-detail.php">
                    <div class="flex flex-col md:flex-row border border-[#eaecf8] hover:scale-95 transition-all duration-300 bg-white rounded-2xl shadow-[0_0.5rem_1rem_#00000012] overflow-hidden ">
                        <div class="md:w-1/2">
                        <img src="assets/img/blog-1.webp" alt="Article image" class="w-full h-full object-cover" />
                        </div>

                        <div class="p-6 flex flex-col gap-3 md:w-1/2">
                            <span class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium text-black bg-[#f2f4fd] rounded-lg w-fit ">
                                <svg fill="#f6bf22" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M216.02,611.195c5.978,3.178,12.284-3.704,8.624-9.4c-19.866-30.919-38.678-82.947-8.706-149.952 c49.982-111.737,80.396-169.609,80.396-169.609s16.177,67.536,60.029,127.585c42.205,57.793,65.306,130.478,28.064,191.029 c-3.495,5.683,2.668,12.388,8.607,9.349c46.1-23.582,97.806-70.885,103.64-165.017c2.151-28.764-1.075-69.034-17.206-119.851 c-20.741-64.406-46.239-94.459-60.992-107.365c-4.413-3.861-11.276-0.439-10.914,5.413c4.299,69.494-21.845,87.129-36.726,47.386 c-5.943-15.874-9.409-43.33-9.409-76.766c0-55.665-16.15-112.967-51.755-159.531c-9.259-12.109-20.093-23.424-32.523-33.073 c-4.5-3.494-11.023,0.018-10.611,5.7c2.734,37.736,0.257,145.885-94.624,275.089c-86.029,119.851-52.693,211.896-40.864,236.826 C153.666,566.767,185.212,594.814,216.02,611.195z"></path> </g> </g></svg>
                                Latest
                            </span>

                            <p class="text-sm text-black uppercase tracking-wide">Artificial Intelligence</p>

                            <h2 class="text-xl font-semibold text-black">
                                Google ADK vs AWS Strands: Whatâ€™s Best AI Agent Platform for Enterprise?
                            </h2>

                            <p class="text-black text-base">
                                Enterprise AI has evolved beyond simple automation, we are now witnessing the emergence of truly autonomous agents that can reason...
                            </p>

                            <p class="text-xs text-[#0000004d]">
                                Ritosubhra Mukherjee | August 11, 2025
                            </p>

                            <button class="px-4 py-2 border border-black cursor-pointer rounded-md text-sm font-medium text-black w-fit">
                                Read More
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div  class="w-full md:w-1/2 lg:w-1/3 px-2">
                <a href="blog-detail.php">
                    <div class="bg-white rounded-2xl overflow-hidden  border-[#eaecf8] hover:scale-95 transition-all duration-300 shadow-[0_0.5rem_1rem_#00000012]">
                        <img src="assets/img/blog-1.webp" alt="Article image" class="w-full h-48 object-cover" />
                        <div class="p-6 flex flex-col gap-3">
                        <p class="text-sm text-black uppercase tracking-wide">Design Experience</p>
                        <h2 class="text-lg font-medium text-black">
                            Zero UI: How Voice, Gesture, and Ambient Interfaces Are Replacing Screens
                        </h2>
                        <p class="text-xs text-[#0000004d]">
                            Ritosubhra Mukherjee | August 7, 2025
                        </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                <a href="blog-detail.php">
                    <div class="bg-white rounded-2xl overflow-hidden  border-[#eaecf8] hover:scale-95 transition-all duration-300 shadow-[0_0.5rem_1rem_#00000012]">
                        <img src="assets/img/blog-1.webp" alt="Article image" class="w-full h-48 object-cover" />
                        <div class="p-6 flex flex-col gap-3">
                        <p class="text-sm text-black uppercase tracking-wide">Design Experience</p>
                        <h2 class="text-lg font-medium text-black">
                            Zero UI: How Voice, Gesture, and Ambient Interfaces Are Replacing Screens
                        </h2>
                        <p class="text-xs text-[#0000004d]">
                            Ritosubhra Mukherjee | August 7, 2025
                        </p>
                        </div>
                    </div>
                </a>
            </div>
            <div  class="w-full md:w-1/2 lg:w-1/3 px-2">
                <a href="blog-detail.php">
                    <div class="bg-white rounded-2xl overflow-hidden  border-[#eaecf8] hover:scale-95 transition-all duration-300 shadow-[0_0.5rem_1rem_#00000012]">
                        <img src="assets/img/blog-1.webp" alt="Article image" class="w-full h-48 object-cover" />
                        <div class="p-6 flex flex-col gap-3">
                        <p class="text-sm text-black uppercase tracking-wide">Design Experience</p>
                        <h2 class="text-lg font-medium text-black">
                            Zero UI: How Voice, Gesture, and Ambient Interfaces Are Replacing Screens
                        </h2>
                        <p class="text-xs text-[#0000004d]">
                            Ritosubhra Mukherjee | August 7, 2025
                        </p>
                        </div>
                    </div>
                </a>
            </div>
            <div  class="w-full md:w-1/2 lg:w-1/3 px-2">
                <a href="blog-detail.php">
                    <div class="bg-white rounded-2xl overflow-hidden  border-[#eaecf8] hover:scale-95 transition-all duration-300 shadow-[0_0.5rem_1rem_#00000012]">
                        <img src="https://images.ctfassets.net/hrltx12pl8hq/7JnR6tVVwDyUM8Cbci3GtJ/bf74366cff2ba271471725d0b0ef418c/shutterstock_376532611-og.jpg" alt="Article image" class="w-full h-48 object-cover" />
                        <div class="p-6 flex flex-col gap-3">
                        <p class="text-sm text-black uppercase tracking-wide">Design Experience</p>
                        <h2 class="text-lg font-medium text-black">
                            Zero UI: How Voice, Gesture, and Ambient Interfaces Are Replacing Screens
                        </h2>
                        <p class="text-xs text-[#0000004d]">
                            Ritosubhra Mukherjee | August 7, 2025
                        </p>
                        </div>
                    </div>
                </a>
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
