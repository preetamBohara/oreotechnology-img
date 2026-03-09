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
                    <button class="bg-black text-white py-2 px-6 rounded-lg hover:bg-white font-semibold md:text-base text-sm transition-all duration-300 hover:text-black hover:border-dashed border border-black hover:border-black cursor-pointer">Get In Touch</button>
                </div>
            </div>
        </div>
    </section>
    <!-- success story section -->
     <section class="lg:px-20 px-4 py-14">
        <div>
            <div class="flex flex-wrap">
                <div class="md:w-1/3 w-full">
                    <h6 class="text-2xl font-bold text-[#137ec2]">Our success stories</h6>
                </div>
                <div class="md:w-2/3 w-full md:mt-0 mt-10 md:ps-10">
                    <div>
                        <div>
                            <p class="md:text-lg text-base">At TechAhead, we partner with clients to design and develop custom mobile apps, platforms, so they can experience their idea in to a product, that are built to grow. Our expertise spans across a diverse range of clients, from global brands and media properties to startups and well-funded ventures.</p>
                        </div>
                        
                    </div>
              </div>
            </div>
        </div>
     </section>

     <!-- projects section -->
      <section class="lg:px-20 px-4 md:py-14 pt-3">
        <div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-14">
                <div class="md:even:mt-20">
                    <span class="bg-[#f6bf22] px-4 py-1 rounded-xl">Real Estate</span> 
                    <div class=" mt-5 ">
                        <video autoplay muted loop controlslist="nodownload" class="w-full h-full rounded-xl overflow-hidden">
                            <source src="https://tamediacdn.techaheadcorp.com/wp-content/uploads/2023/12/16042731/JLL-VIDEO.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] md:text-sm text-xs">
                            <div>AI</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>ClimateTech</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>IOT</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>Mobile App</div>
                        </div>
                        <div>
                            <a href="#" class=" md:text-xl font-semibold text-base">Transforming Commercial Real Estate with Smart Building Technology</a>
                        </div>
                        <div>
                            <p class="text-lg ">Find out how we empowered 2 million moms to lose 6 million pounds in 12 months and triggered a health revolution.</p>
                        </div>
                    </div>
                </div>
                <div class="md:even:mt-20">
                    <span class="bg-[#f6bf22] px-4 py-1 rounded-xl">Real Estate</span> 
                    <div class=" mt-5 ">
                        <video autoplay muted loop controlslist="nodownload" class="w-full h-full rounded-xl overflow-hidden">
                            <source src="https://tamediacdn.techaheadcorp.com/wp-content/uploads/2023/12/16042731/JLL-VIDEO.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] md:text-sm text-xs">
                            <div>AI</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>ClimateTech</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>IOT</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>Mobile App</div>
                        </div>
                        <div>
                            <a href="#" class=" md:text-xl font-semibold text-base">Transforming Commercial Real Estate with Smart Building Technology</a>
                        </div>
                        <div>
                            <p class="text-lg ">Find out how we empowered 2 million moms to lose 6 million pounds in 12 months and triggered a health revolution.</p>
                        </div>
                    </div>
                </div>
                <div class="md:even:mt-20">
                    <span class="bg-[#f6bf22] px-4 py-1 rounded-xl">Real Estate</span> 
                    <div class=" mt-5 ">
                        <video autoplay muted loop controlslist="nodownload" class="w-full h-full rounded-xl overflow-hidden">
                            <source src="https://tamediacdn.techaheadcorp.com/wp-content/uploads/2023/12/16042731/JLL-VIDEO.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] md:text-sm text-xs">
                            <div>AI</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>ClimateTech</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>IOT</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>Mobile App</div>
                        </div>
                        <div>
                            <a href="#" class=" md:text-xl font-semibold text-base">Transforming Commercial Real Estate with Smart Building Technology</a>
                        </div>
                        <div>
                            <p class="text-lg ">Find out how we empowered 2 million moms to lose 6 million pounds in 12 months and triggered a health revolution.</p>
                        </div>
                    </div>
                </div>
                <div class="md:even:mt-20">
                    <span class="bg-[#f6bf22] px-4 py-1 rounded-xl">Real Estate</span> 
                    <div class=" mt-5 ">
                        <video autoplay muted loop controlslist="nodownload" class="w-full h-full rounded-xl overflow-hidden">
                            <source src="https://tamediacdn.techaheadcorp.com/wp-content/uploads/2023/12/16042731/JLL-VIDEO.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="mt-5 space-y-4">
                        <div class="flex items-center  md:gap-4 gap-2 text-[#9d9d9d] md:text-sm text-xs">
                            <div>AI</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>ClimateTech</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>IOT</div>
                            <div class="w-[6px] h-[6px] bg-[#9d9d9d] rounded-full"></div>
                            <div>Mobile App</div>
                        </div>
                        <div>
                            <a href="#" class=" md:text-xl font-semibold text-base">Transforming Commercial Real Estate with Smart Building Technology</a>
                        </div>
                        <div>
                            <p class="text-lg ">Find out how we empowered 2 million moms to lose 6 million pounds in 12 months and triggered a health revolution.</p>
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

