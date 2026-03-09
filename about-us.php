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
    <section class="lg:px-20 px-4 py-14 bg-[url('../img/about-bg.webp')] bg-cover bg-no-repeat ">
        <div>
            <div class="text-center md:space-y-8 space-y-4">
                <h6 class="text-[#222222] md:text-2xl text-base  font-medium  uppercase">Illuminating The Path Of</h6>
                <h6 class="text-[#222222] md:text-4xl text-xl font-bold uppercase ">Innovation And Excellence</h6>
                <p class="text-[#222222] md:text-lg text-base">Transforming businesses with digital innovation and data-driven applications</p>
                <div class="">
                <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-white font-semibold md:text-base text-sm cursor-pointer transition-all duration-300 hover:text-black hover:border-dashed border border-black hover:border-black">Let's Talk</button>
            </div>
            </div>
        </div>
    </section>
    <section class="lg:px-20 px-4 md:py-14 py-4">
        <div class="flex flex-wrap">
            <div class="xl:w-1/2 lg:w-1/3 md:w-2/3   w-full relative">
                <div class="md:sticky md:top-24">
                    <h6 class="font-medium lg:text-4xl text-xl">...in startups to Fortune 500 companies, such as Google, Pinterest, Rolls Royce, and many, many more...</h6>
                    <div class="py-1 flex w-fit justify-start md:justify-center border-b-2 border-black group mt-14">
                            <a href="#" class="flex tems-center gap-2 text-xl text-black font-medium transition-all duration-300 group-hover:translate-x-3">
                                <span>Who we work with</span>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.22 19.03a.75.75 0 0 1 0-1.06L18.19 13H3.75a.75.75 0 0 1 0-1.5h14.44l-4.97-4.97a.749.749 0 0 1 .326-1.275.749.749 0 0 1 .734.215l6.25 6.25a.75.75 0 0 1 0 1.06l-6.25 6.25a.75.75 0 0 1-1.06 0Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                </div>
            </div>
            <div class="xl:w-1/2 lg:w-2/3 w-full">
              <div class="relative overflow-hidden">

                <div class="absolute top-0 left-0 w-full sm:h-75 h-40 bg-gradient-to-b from-white to-transparent  z-10 pointer-events-none"></div>

                <div class="grid grid-cols-3 gap-x-6 md:px-6 py-8 bg-white relative z-0">
                  <div class="space-y-6">
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-1.svg" alt="Adobe" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center ">
                      <img src="assets/img/contact-logo-2.svg" alt="Salesforce" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-3.svg" alt="SiriusXM" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-4.svg" alt="IQVIA" class="h-6" />
                    </div>
                  </div>
                  <div class="space-y-6 -mt-10">
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center ">
                      <img src="assets/img/contact-logo-5.svg" alt="AP" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-6.svg" alt="Pinterest" class="h-6" />
                    </div>

                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-7.svg" alt="Netgear" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-8.svg" alt="Google" class="h-6" />
                    </div>
                  </div>
                  <div class="space-y-6">
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-9.svg" alt="ViacomCBS" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-10.svg" alt="Netgear" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-11.svg" alt="Google" class="h-6" />
                    </div>
                    <div class="bg-white shadow-md rounded-2xl p-6 md:w-[154px] md:h-[136px] sm:w-[110px] sm:h-[110px] w-[80px] h-[80px] flex items-center justify-center">
                      <img src="assets/img/contact-logo-12.svg" alt="ViacomCBS" class="h-6" />
                    </div>
                  </div>
                </div>

                <div class="absolute bottom-0 left-0 w-full sm:h-75 h-40 bg-gradient-to-t from-white to-transparent  z-10 pointer-events-none"></div>
              </div>

            </div>
        </div>
    </section>
    <!-- vission mission section -->
    <section class="lg:px-20 px-4 pb-14">
        <div>
            <div class="flex flex-wrap">
              <div class="md:w-1/2 w-full">
                  <div>
                    <h6 class="md:text-xl text-base font-bold text-[#030303] mb-6">LET'S GET TO KNOW EACH OTHER</h6>
                    <p class="md:text-4xl text-2xl text-[#222222] font-semibold">What is imprinted in our DNA</p>
                  </div>
              </div>
              <div class="md:w-1/2 w-full md:mt-0 mt-10">
                <div>
                  <div>
                    <h6 class="text-xl font-bold text-[#222222] md:mb-6 mb-4">Mission</h6>
                    <p class="md:text-xl text-base">We are a caring partner that provides innovative Design & Development solutions for funded startups, technology SMEs and Fortune 500 companies.</p>
                  </div>
                  <div class="mt-10">
                    <h6 class="text-xl font-bold text-[#222222] mb-6">Vision</h6>
                    <p class="md:text-xl text-base">We are a full-cycle Digital Product Company that builds and transforms amazing projects with human-centric design for the world`s top companies.</p>
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

