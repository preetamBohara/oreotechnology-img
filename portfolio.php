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
    <section class="lg:px-20 px-4 py-14 bg-[url('../img/case-study-bg.webp')] bg-cover bg-no-repeat ">
        <div>
            <div class="text-center md:space-y-6 space-y-4">
                <h6 class="text-[#222222] md:text-5xl text-base leading-normal"><span class="font-bold">We craft tomorrowâ€™s </span>digital <br> experiences products, and ventures</h6>
                <p class="text-[#222222] md:text-lg text-base">The Success Stories of TechAhead, that brought light to many Startups and Global Brands.</p>
                <div class="">
                    <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-white font-semibold md:text-base text-sm cursor-pointer transition-all duration-300 hover:text-black hover:border-dashed border border-black hover:border-black">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section -->
     <section class="lg:px-20 px-4 py-14">
        <div>
            <div class="grid md:grid-cols-3 grid-cols-1 md:gap-10 gap-4">
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black md:text-xl text-base font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black text-xl font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#8d8d8d45] rounded-2xl p-2 shadow-none hover:shadow-[0px_8px_9px_0_#00000063] transition-all duration-300">
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="assets/img/portfolio-1.avif" class="w-full h-auto">
                    </div>
                    <div class="mt-2">
                        <div class="text-center">
                            <h6 class="text-black text-xl font-bold">Adobe</h6>
                            <p class="text-black md:text-lg text-sm">Website</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
     </section>
    <!-- footer section -->
     <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>

