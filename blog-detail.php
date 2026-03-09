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
    <section>
        <div class="flex w-full relative select-nonee bg-[#2b329a]">
            <div class="w-full relative !z-10">
                <div
                    class="absolute inset-x-0 md:left-0 bottom-0 h-full md:w-1/2 z-0 text-white/20 pointer-events-none md:[mask-image:linear-gradient(to_left,transparent,white)] [mask-image:linear-gradient(to_bottom,transparent,white)]">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg" area-hidden="true"
                        focusable="false">
                        <defs>
                            <pattern id="l10" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%"
                                patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#l10)"></rect>
                    </svg>
                </div>
                <div class="flex size-full items-center rounded-b-2xl relative overflow-hidden shadow-lg">
                    <div class="flex md:flex-nowrap flex-wrap items-center lg:px-20 px-4  w-full relative py-10 overflow-hidden z-10">
                        <div class="md:w-1/2 grow-0 max-md:text-center">
                            <a href="#" class="font-semibold uppercase text-white md:text-base text-sm pb-4">
                                MOBILE APP
                            </a>
                            <div
                                class="font-bold text-white xl:text-4xl lg:text-3xl md:text-2xl sm:text-xl text-lg text-balance !leading-tight">
                                How Much Does It Cost To Build An Auction App?
                            </div>
                            <div class="max-md:text-base text-lg text-white/80 pt-5 text-pretty w-10/12 max-md:mx-auto">
                                This guide will break down everything you need to know, from essential functionalities
                                and tech stack choices to a detailed cost breakdown, helping you plan your budget
                                efficiently and launch a high-performing auction app in 2025.</div>
                            <div class="flex gap-4 max-md:justify-center">
                                <div class="relative mt-8 flex items-center gap-x-2 max-sm:flex-col">
                                    <img src="https://images.ctfassets.net/hrltx12pl8hq/7JnR6tVVwDyUM8Cbci3GtJ/bf74366cff2ba271471725d0b0ef418c/shutterstock_376532611-og.jpg"
                                        class="size-10 rounded-full bg-gray-900 ring-1 ring-white/50 shadow-md shadow-white/10 aspect-square"
                                        width="40" height="40" loading="eager" fetchpriority="low" decoding="async"
                                        alt="{{$blog->author_name}}">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-100">auther name</p>
                                        <p class="text-gray-200">Aug 11, 2025</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/2 sm:w-8/12 w-10/12 max-md:mx-auto flex items-center justify-center">
                            <div class="relative w-[500px]  ">
                                <img class="object-cover w-full h-full content1-img "
                                    src="assets/img/blog-hero.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:px-20 px-4 md:py-14 py-8">
        <div class="flex flex-wrap w-full">
            <div class="lg:w-1/4 md:w-1/4 w-full">
                <div class="sticky top-28 w-full rounded-xl shadow-xl ring-2 ring-inset ring-gray-200 p-5">
                    <div class="w-full 2xl:text-base xl:text-sm lg:text-sm text-base font-bold text-gray-800 pb-4">Table
                        of Contents</div>
                    <ul
                        class="flex flex-col max-h-72 sm:max-h-[calc(100dvh-209px)] h-dvh overflow-x-hidden overflow-y-auto [scrollbar-width:thin] gap-3 list-disc pl-5">
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">What is an Auction App?</a>
                        </li>
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Why Businesses are Investing in Auction Platforms?</a>
                        </li>
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Estimated Cost to Build an Auction App</a>
                        </li>
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Factors Influencing Auction App Development Cost</a>
                        </li>
                        <ol class="flex flex-col gap-2 list-decimal pl-5">
                            <li class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black">
                                <a href="#">App Complexity Level &amp; Features</a>
                            </li>
                            <li class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black">
                                <a href="#">Platform Selection with the Right Technology</a>
                            </li>
                            <li class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black">
                                <a href="#">Backend Infrastructure</a>
                            </li>
                            <li class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black">
                                <a href="#">Size of the Development Group</a>
                            </li>
                            <li class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black">
                                <a href="#">App Design</a>
                            </li>
                        </ol>
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Popular Auction Apps</a>
                        </li>
                        
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Key Features of a Successful Auction App</a>
                        </li>
                        
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">How Can IMG Global Infotech Help You Build A Successful Auction
                                App?</a>
                        </li>
                        <li
                            class=" 2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">Conclusion</a>
                        </li>
                        <li
                            class="2xl:text-sm xl:text-sm lg:text-xs text-base text-gray-600 hover:md:text-black font-semibold">
                            <a href="#">FAQs</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="lg:w-1/2 w-full md:px-8 md:py-0 py-4">
                <div>
                    <p class="text-base mb-4">An auction is a traditional method in the USA where people can earn money
                        by placing high bids on collectible and vintage products. Auctions have various types, like
                        storage auctions, airport baggage auctions, and online auctions. Since now everything is in
                        place online through apps, you can even do an auction through the apps in just one click. Sounds
                        strange! but it is possible you can participate in any auction from mobile apps to place bids
                        and win products. An auction is not just gambling; there are great opportunities to place your
                        business as an auctioneer to make a stable income from your custom auction app.</p>
                    <p class="text-base mb-4">We know the auction is traditional and there is a low user base in this
                        market, but currently it is a trending business, which makes a higher profit in the business.
                        Now you know what the investment would be to build an auction app according to your business
                        objectives. In this blog, we will discover the Cost to develop a mobile auction app that can
                        cater to all your needs and requirements and that can also generate higher revenue in the
                        business let's beign. </p>
                    <div class="my-10">
                        <div>
                            <h2 class="md:text-3xl text-xl font-black text-[#137ec2] mb-6">What is an Auction App?</h2>
                            <p class="text-base mb-4">In simple words, auction apps are similar to online platforms
                                where the buyers can collect valuable and rare items by placing the bids for that
                                particular item. The main purpose of auction apps is presenting the products available
                                worldwide. The auction apps are just like a virtual market where the buyers and sellers
                                deal for products. </p>
                            <p class="text-base">An auction has been placed for a limited time period so the seller can
                                generate maximum profit through bidding apps. An auction business is a great idea to
                                maximize profit in the business. An auction app is a convenient way where buyers can see
                                the list of products and specific information so they can buy according to their
                                preferences. </p>

                        </div>
                    </div>
                    <div class="my-10">
                        <div>
                            <h2 class="md:text-3xl text-xl font-black text-[#137ec2] mb-6">Why Businesses are Investing in Auction
                                Platforms?</h2>
                            <div>
                                <img src="assets/img/blog-detail.jfif" alt="">
                            </div>
                            <p class="text-base mb-4">Auction apps are a brilliant way to engage customers to accelerate
                                the revenue up to 3 to 4 times. That's why most businesses are investing in online
                                auction platforms. Here are some benefits of integrating online auction platforms with
                                any business. </p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h6 class="text-xl font-black text-[#137ec2] mb-6">1. Enhance User Base</h6>
                            <p class="text-base mb-4">Auction apps can increase the user base in any business just
                                because of the easy accessibility of products and services in a particular period. You
                                need to develop an auction app that can significantly expand the customer base as per
                                the geographical location. These digital platforms can allow users to participate in
                                auctions at any time and anywhere. </p>
                        </div>
                        <div>
                            <h6 class="text-xl font-black text-[#137ec2] mb-6">2. Increased Worldwide Reach</h6>
                            <p class="text-base mb-4">It needs to provide a seamless experience to buyers and sellers
                                while living an auction. The ascension of Mobile app programming languages is a better
                                way to increase the business reach in every corner of the world seamlessly to generate
                                higher revenue in the business. </p>
                        </div>
                    </div>
                </div>
                <div class="w-full pt-8 has-[input]:block hidden">
                    <div id="faq-section" class="w-full md:text-lg text-base font-extrabold text-gray-800 pb-4">FAQs
                    </div>
                    <div class="relative flex flex-col mb-4">
                        <input class="peer/mm hidden" type="radio" name="mmMenu" id="mmCompany0">
                        <label for="mmCompany0"
                            class="flex items-center gap-x-[2px] bg-gray-100 sm:text-lg text-base capitalize font-medium relative z-10 text-gray-800 py-6 px-6 rounded-md peer-checked/mm:rounded-b-none after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-[1.6rem] after:top-[1.75rem] after:border-solid after:border-gray-800 after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:w-full peer-checked/mm:after:top-[2.1rem]">
                            How much does it cost to build an auction app? </label>
                        <div
                            class="w-full mt-[-43px] rounded-md bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                                <div class="w-full text-xs xl:text-sm">
                                    <div class="flex items-center gap-x-3 py-2 relative">
                                        <div
                                            class="flex-auto text-gray-900 sm:text-sm text-xs [&amp;_ul]:list-disc [&amp;_ul]:ps-4 [&amp;_a]:text-blue-600">
                                            <p>To build an auction app, it mainly depends on the set of features, the
                                                app complexity level, and the expertise of the development team. The
                                                average cost to build an auction app is estimated at $10,000 to $50,000+
                                                or beyond as well.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col mb-4">
                        <input class="peer/mm hidden" type="radio" name="mmMenu" id="mmCompany1">
                        <label for="mmCompany1"
                            class="flex items-center gap-x-[2px] bg-gray-100 sm:text-lg text-base capitalize font-medium relative z-10 text-gray-800 py-6 px-6 rounded-md peer-checked/mm:rounded-b-none after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-[1.6rem] after:top-[1.75rem] after:border-solid after:border-gray-800 after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:w-full peer-checked/mm:after:top-[2.1rem]">
                            How to create an auction platform? </label>
                        <div
                            class="w-full mt-[-43px] rounded-md bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                                <div class="w-full text-xs xl:text-sm">
                                    <div class="flex items-center gap-x-3 py-2 relative">
                                        <div
                                            class="flex-auto text-gray-900 sm:text-sm text-xs [&amp;_ul]:list-disc [&amp;_ul]:ps-4 [&amp;_a]:text-blue-600">
                                            <p>Here are some steps to create an auction platform for your business</p>

                                            <ul>
                                                <li>Get a domain name&nbsp;</li>
                                                <li>Create a web hosting account</li>
                                                <li>Develop a design&nbsp;</li>
                                                <li>Initialize the development process&nbsp;</li>
                                                <li>Include user-friendly content&nbsp;</li>
                                                <li>Access online payment configuration&nbsp;</li>
                                                <li>Establish Add-ons&nbsp;</li>
                                                <li>Launch your platform&nbsp;<br>
                                                    &nbsp;</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col mb-4">
                        <input class="peer/mm hidden" type="radio" name="mmMenu" id="mmCompany2">
                        <label for="mmCompany2"
                            class="flex items-center gap-x-[2px] bg-gray-100 sm:text-lg text-base capitalize font-medium relative z-10 text-gray-800 py-6 px-6 rounded-md peer-checked/mm:rounded-b-none after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-[1.6rem] after:top-[1.75rem] after:border-solid after:border-gray-800 after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:w-full peer-checked/mm:after:top-[2.1rem]">
                            What are the main features of an auction app? </label>
                        <div
                            class="w-full mt-[-43px] rounded-md bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                                <div class="w-full text-xs xl:text-sm">
                                    <div class="flex items-center gap-x-3 py-2 relative">
                                        <div
                                            class="flex-auto text-gray-900 sm:text-sm text-xs [&amp;_ul]:list-disc [&amp;_ul]:ps-4 [&amp;_a]:text-blue-600">
                                            <p>The essential feature of an auction app would be authentication.
                                                functionality of bidding, real-time alerts, payment integration,
                                                managing user profiles, proper registration, ad creation, and platform
                                                functionality.&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col mb-4">
                        <input class="peer/mm hidden" type="radio" name="mmMenu" id="mmCompany3">
                        <label for="mmCompany3"
                            class="flex items-center gap-x-[2px] bg-gray-100 sm:text-lg text-base capitalize font-medium relative z-10 text-gray-800 py-6 px-6 rounded-md peer-checked/mm:rounded-b-none after:absolute sm:after:h-3 sm:after:w-3 after:w-2 after:h-2 sm:after:right-7 after:right-5 sm:after:top-[1.6rem] after:top-[1.75rem] after:border-solid after:border-gray-800 after:border-t-0 after:border-r-2 after:border-b-2 after:border-l-0 after:inline-block after:rotate-45 after:bg-contain after:peer-checked/mm:rotate-[-135deg] peer-checked/mm:w-full peer-checked/mm:after:top-[2.1rem]">
                            What are the best auction apps? </label>
                        <div
                            class="w-full mt-[-43px] rounded-md bg-white p-6 peer-checked/mm:block hidden text-gray-900 sm:text-base text-sm py-3 pt-12">
                            <div class="grid grid-cols-1 flex-wrap w-full gap-4 ">
                                <div class="w-full text-xs xl:text-sm">
                                    <div class="flex items-center gap-x-3 py-2 relative">
                                        <div
                                            class="flex-auto text-gray-900 sm:text-sm text-xs [&amp;_ul]:list-disc [&amp;_ul]:ps-4 [&amp;_a]:text-blue-600">
                                            <p>Here are the top auction apps in the marketplace:&nbsp;</p>

                                            <ul>
                                                <li>eBay&nbsp;</li>
                                                <li>DealDash</li>
                                                <li>Auction.com</li>
                                                <li>LiveAuctioneers</li>
                                                <li>Copart</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full pt-8">
                    <div class="w-full md:text-lg text-base font-extrabold text-[#137ec2] pb-4">Share on</div>
                    <div class="flex gap-4 items-center mt-4">
                        <div class="text-black hover:text-[#137ec2]">
                            <a href="">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M20.45175,20.45025 L16.89225,20.45025 L16.89225,14.88075 C16.89225,13.5525 16.86975,11.844 15.04275,11.844 C13.191,11.844 12.90825,13.2915 12.90825,14.7855 L12.90825,20.45025 L9.3525,20.45025 L9.3525,8.997 L12.765,8.997 L12.765,10.563 L12.81375,10.563 C13.2885,9.66225 14.4495,8.71275 16.18125,8.71275 C19.78575,8.71275 20.45175,11.08425 20.45175,14.169 L20.45175,20.45025 Z M5.33925,7.4325 C4.1955,7.4325 3.27375,6.50775 3.27375,5.36775 C3.27375,4.2285 4.1955,3.30375 5.33925,3.30375 C6.47775,3.30375 7.4025,4.2285 7.4025,5.36775 C7.4025,6.50775 6.47775,7.4325 5.33925,7.4325 L5.33925,7.4325 Z M7.11975,20.45025 L3.5565,20.45025 L3.5565,8.997 L7.11975,8.997 L7.11975,20.45025 Z M23.00025,0 L1.0005,0 C0.44775,0 0,0.44775 0,0.99975 L0,22.9995 C0,23.55225 0.44775,24 1.0005,24 L23.00025,24 C23.55225,24 24,23.55225 24,22.9995 L24,0.99975 C24,0.44775 23.55225,0 23.00025,0 L23.00025,0 Z">
                                </path>
                            </svg>
                            </a>
                        </div>
                        <div class="text-black hover:text-[#137ec2]">
                            <a href=""></a>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
                                </path>
                            </svg>
                        </div>
                        <div class="text-black hover:text-[#137ec2]">
                            <a href="">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z">
                                </path>
                            </svg>
                            </a>
                        </div>
                        <div class="text-black hover:text-[#137ec2]">
                            <a href="">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z">
                                </path>
                            </svg>
                            </a>
                        </div>
                        <div class="text-black hover:text-[#137ec2]">
                            <a href="">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M508.6 148.8c0-45-33.1-81.2-74-81.2C379.2 65 322.7 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.6-.1 220.2 0 255.8c-.1 35.6 1 71.2 3.4 106.9 0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8 60.8.2 120.3-1 178.6-3.8 40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107 .2-35.6-.9-71.2-3.3-106.9zM207 353.9V157.4l145 98.2-145 98.3z">
                                </path>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="lg:w-1/4 w-full lg:mt-0 mt-5">

                <div
                    class="w-full rounded-xl shadow-xl shadow-gray-900/10 bg-gray-100 p-5  max-sm:hidden">
                    <div class="w-full 2xl:text-base xl:text-sm lg:text-sm text-base font-extrabold text-gray-800 pb-4">
                        Recent Blog</div>
                    <ul
                        class=" 2xl:text-sm xl:text-sm lg:text-xs text-base   *:duration-300 *:py-2  font-semibold flex flex-col">
                        <li class="hover:text-gray-900 text-gray-600">
                            <a href="#" class="flex gap-2 items-start">
                                <img
                                    class="2xl:w-20 xl:w-20 lg:w-16 w-20 aspect-[80/46] rounded-lg object-cover"
                                    width="80" height="46" src="assets/img/blog-detail.jfif"
                                    alt="blog">
                                <span class="line-clamp-2">How Much Does it Cost to Build an Auction App?</span>
                            </a>
                        </li>
                        <li class="hover:text-gray-900 text-gray-600">
                            <a href="#" class="flex gap-2 items-start">
                                <img
                                    class="2xl:w-20 xl:w-20 lg:w-16 w-20 aspect-[80/46] rounded-lg object-cover"
                                    width="80" height="46" src="assets/img/blog-detail.jfif"
                                    alt="blog">
                                <span class="line-clamp-2">How Much Does it Cost to Build an Auction App?</span>
                            </a>
                        </li>
                        <li class="hover:text-gray-900 text-gray-600">
                            <a href="#" class="flex gap-2 items-start">
                                <img
                                    class="2xl:w-20 xl:w-20 lg:w-16 w-20 aspect-[80/46] rounded-lg object-cover"
                                    width="80" height="46" src="assets/img/blog-detail.jfif"
                                    alt="blog">
                                <span class="line-clamp-2">How Much Does it Cost to Build an Auction App?</span>
                            </a>
                        </li>
                        <li class="hover:text-gray-900 text-gray-600">
                            <a href="#" class="flex gap-2 items-start">
                                <img
                                    class="2xl:w-20 xl:w-20 lg:w-16 w-20 aspect-[80/46] rounded-lg object-cover"
                                    width="80" height="46" src="assets/img/blog-detail.jfif"
                                    alt="blog">
                                <span class="line-clamp-2">How Much Does it Cost to Build an Auction App?</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full sticky top-28 mt-8">

                    <div
                        class="relative z-10 w-full max-w-3xl bg-[radial-gradient(164.75%_100%_at_50%_0%,#f7f7f9_0%,#d9dbe4_48.73%)] 2xl:p-5 xl:p-3 lg:p-2 shadow-lg sm:mx-0 rounded-lg sm:rounded-3xl">
                        <div class="flex flex-col 2xl:gap-5 xl:gap-4 lg:gap-3 md:gap-2 gap-2 items-center relative">
                            <div class="text-gray-700">
                                <div class="w-full text-center font-bold 2xl:text-base xl:text-sm lg:text-sm text-base">
                                    Start Your Journey To Success</div>
                            </div>
                            <div
                                class="w-full shrink-0 relative flex flex-col p-5 rounded-lg sm:rounded-3xl bg-white ">
                                <div>
                                    <form action="" class="space-y-2">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label for="name" class="block mb-2 md:text-base text-sm">Full Name*</label>
                                                <input type="text" id="name" name="contactname" required="" class="block rounded-md border border-[#a3a3a3] h-10 ps-4  w-full text-sm appearance-none text-black focus:border-gray-500 focus:outline-none focus:ring-0" placeholder="Full Name">
                                            </div>
                                            <div>
                                                <label for="name" class="block mb-2 md:text-base text-sm">Email*</label>
                                                <input type="email" id="name" name="contactname" required="" class="block rounded-md border border-[#a3a3a3] h-10 ps-4  w-full text-sm appearance-none text-black focus:border-gray-500 focus:outline-none focus:ring-0" placeholder="Email">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="name" class="block mb-2 md:text-base text-sm">Mobile number*</label>
                                            <input type="text" id="name" name="contactname" required="" class="block rounded-md border border-[#a3a3a3] h-10 ps-4  w-full text-sm appearance-none text-black focus:border-gray-500 focus:outline-none focus:ring-0" placeholder="Mobile number">
                                        </div>
                                        <div>
                                            <label for="name" class="block mb-2 md:text-base text-sm">Looking for*</label>
                                            <select name="" id="" class="block rounded-md border border-[#a3a3a3] h-10 ps-4  w-full text-sm appearance-none text-black focus:border-gray-500 focus:outline-none focus:ring-0">
                                                <option value="">Select</option>
                                                 <option value="">option 1</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="name" class="block mb-2 md:text-base text-sm">Mobile number*</label>
                                            <textarea type="text" id="name" rows="2" class="block rounded-md border border-[#a3a3a3] ps-4 pt-2 w-full text-sm appearance-none text-black focus:border-gray-500 focus:outline-none focus:ring-0" placeholder="Write a message"></textarea>
                                        </div>
                                        <div>
                                            <button class="bg-black font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-white w-full  hover:bg-white md:text-base  transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black">Schedule Free Consultation</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative lg:px-20 px-4 py-14 bg-[#f7f7f7]">
        <div class=" flex z-[1] relative ">
            <div class="flex flex-col">
                <div class="flex pb-4 gap-2 items-center">
                    <div class="md:size-12 size-10 shrink-0">
                        <img loading="lazy" fetchpriority="low" width="48" height="48"
                            src="https://images.ctfassets.net/hrltx12pl8hq/7JnR6tVVwDyUM8Cbci3GtJ/bf74366cff2ba271471725d0b0ef418c/shutterstock_376532611-og.jpg"
                            class="size-full rounded-full bg-[#D9D9D9]" alt="asdsds">
                    </div>
                    <div class="inline-flex flex-col gap-1.5 grow">
                        <div class="w-full md:text-xs text-[10px] font-medium text-[#868686]">Written by</div>
                        <div class="w-full md:text-base text-sm font-semibold text-[#585858]">Dipti Singhal</div>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="md:size-12 size-10 shrink-0">
                    </div>
                    <div class="inline-flex flex-col gap-1.5 grow">
                        <p class="w-full md:text-base text-[10px] font-medium text-[#868686]">Dipti Singhal is a skilled Content Writing Specialist at IMG Global Infotech, with strong expertise in creating engaging, SEO-optimized content for various industries. She focuses on blending storytelling with effective keyword strategies to help businesses connect with their audience and improve their online visibility. Passionate about delivering high-quality content that drives real results, Dipti plays an essential role in strengthening the companyâ€™s digital presence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-2 md:py-14 py-8">
        <div>
             <div class="swiper blogSwipper ">
                <div class="swiper-wrapper  py-3">
                    <div class="swiper-slide">
                        <div class=" bg-white w-full rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full bg-white rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full bg-white rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full bg-white rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full bg-white rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-full bg-white rounded-2xl shadow-[0_0_10px_2px_#00000042] overflow-hidden">
                            <a href="#">
                                <div class="relative overflow-hidden rounded-2xl ">
                                    <img src="assets/img/blog-detail.jfif" alt="Auction App" class="w-full h-48 object-cover">
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-4 text-xs mb-3">
                                        <span class="text-gray-500">Aug 11, 2025</span>
                                        <span class="px-2 py-1 text-xs font-medium text-[#3B82F6] bg-blue-100 rounded-full">
                                            MOBILE APP
                                        </span>
                                    </div>
                                    <h3 class="text-lg font-medium text-black mb-2">
                                    How Much Does it Cost to Build an Auction App?
                                    </h3>
                                    <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                                        An auction is a traditional method in the USA where people can earn money by placing high bids on collectible and vintag                                 
                                    </p>
                                    <div class="flex items-center gap-3 mt-5">
                                        <img src="assets/img/blog-detail.jfif" alt="Author" class="w-8 h-8 rounded-full">
                                        <div class="text-sm">
                                            <p class="text-gray-500">Written by</p>
                                            <p class="font-medium text-gray-900">Dipti Singhal</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
          document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.blogSwipper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination-solution',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 16,
                    },
                    475: {
                        slidesPerView: 1.5,
                        spaceBetween: 16,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 16,
                    },
                    768: {
                        slidesPerView: 2.5,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView:3.5,
                        spaceBetween: 20,
                    },
                    1124: {
                        slidesPerView:4,
                        spaceBetween: 20,
                    },
                },
            });
        });
    </script>
</body>

</html>
