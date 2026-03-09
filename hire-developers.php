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
    <?php include __DIR__ . '/includes/header.php'; ?>
    <!-- hero section -->
    <section class="lg:px-20 px-4 py-14 relative  bg-[url('../img/hire-bg.webp')] bg-cover bg-no-repeat">
        <div class="max-w-4xl mx-auto">
            <div>
                <h6 class="md:text-[55px] text-xl font-bold text-center"> Hire Dedicated Developers from the<span
                        class="text-[#137ec2]"> Top 1% Talent Pool</span> </h6>
            </div>
            <div>
                <p class="text-center mt-4 text-black md:text-lg  text-sm tracking-[0.47px]">Work with pre-vetted,
                    highly skilled developers who bring expertise, innovation, and reliability to your projects â€”
                    ensuring faster delivery and exceptional results.</p>
            </div>
            <div class="flex items-center justify-center mt-10">
                <button
                    class="bg-[#137ec2] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-white  hover:bg-white md:text-base  transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black cursor-pointer">
                    <span class="relative z-10">Get a Free Quote</span>
                </button>
            </div>

        </div>
    </section>
    <section class="lg:px-20 px-10 py-16 bg-[linear-gradient(to_bottom,_#171624_63%,_#26374a_100%)]">
        <div class=" mt-10">

            <div class="mb-10 md:px-24 px-0 text-center">
                <h6 class="lg:text-3xl text-2xl text-white font-semibold text-center text-balance mb-4">Trusted By</h6>
                <p class="text-[#cecece] font-light md:text-[22px] text-sm text-center text-balance">Empowering Global
                    Brands and
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

    <section class="lg:px-20 px-4 py-16 bg-gray-100">
        <div class="max-w-5xl mx-auto">
            <div class="">
                <h2 class="text-center lg:text-4xl text-xl font-bold mb-4">
                    Hire Expert ReactJS Developers <span class="text-[#137ec2]">for Your Growing Project</span>
                </h2>
                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
                    As your project evolves, our skilled ReactJS developers ensure seamless development, timely updates,
                    and reliable support. We focus on delivering smooth scalability and long-term performance so your
                    application stays future-ready.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div
                    class="bg-white border border-[#f3f4f6] shadow-none hover:shadow-md rounded-xl p-6 py-8 flex gap-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 bg-[#137ec2] text-white rounded-full flex items-center justify-center font-bold">
                        1</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Custom ReactJS Web Development</h3>
                        <p class="text-gray-600 text-sm">
                            We craft tailor-made ReactJS solutions to match your business needs. Our team builds fast,
                            scalable, and feature-rich web applications that combine efficiency with
                            flexibilityâ€”ensuring your product performs flawlessly.
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white border border-[#f3f4f6] shadow-none hover:shadow-md rounded-xl p-6 py-8 flex gap-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 bg-[#137ec2] text-white rounded-full flex items-center justify-center font-bold">
                        2</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">ReactJS for Enterprise App Development</h3>
                        <p class="text-gray-600 text-sm">
                            Empower your enterprise with robust, scalable ReactJS applications. We deliver
                            high-performance solutions with seamless integration capabilities to meet the demands of
                            large-scale business operations.
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white border border-[#f3f4f6] shadow-none hover:shadow-md rounded-xl p-6 py-8 flex gap-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 bg-[#137ec2] text-white rounded-full flex items-center justify-center font-bold">
                        3</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Single Page Application (SPA) Development</h3>
                        <p class="text-gray-600 text-sm">
                            Build lightning-fast SPAs that offer a smooth, app-like user experience. Our ReactJS experts
                            create intuitive interfaces and optimized navigation for better engagement and performance.
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white border border-[#f3f4f6] shadow-none hover:shadow-md rounded-xl p-6 py-8 flex gap-4">
                    <div
                        class="flex-shrink-0 w-10 h-10 bg-[#137ec2] text-white rounded-full flex items-center justify-center font-bold">
                        4</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">ReactJS Material Design Integrations</h3>
                        <p class="text-gray-600 text-sm">
                            Elevate your appâ€™s look and feel with sleek, responsive Material Design. We integrate
                            visually appealing, mobile-friendly UI/UX designs that are both functional and attractive.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-[#0a0a0f] to-[#1a0820] text-white py-16">
        <div class="max-w-5xl    mx-auto px-4 text-center">
            <h2 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">
                oreotechnologies EXPERTISE
            </h2>
            <h3 class="text-xl md:text-3xl font-bold mt-2">
                Benefits of an embedded software development team
            </h3>

            <div class="grid md:grid-cols-2  mt-12">

                <div class="px-6 py-10 border border-[#542952] relative flex flex-col justify-center">
                    <span
                        class="font-['Open_Sans'] text-[140px] font-bold leading-none tracking-normal [color:rgba(110,193,228,0)] [-webkit-text-stroke-width:2px] [-webkit-text-stroke-color:rgba(255,255,255,0.28)] absolute left-10 top-4">1</span>
                    <h4 class="text-[#c73ca1] text-start text-lg mt-2">Access the Top 1% of Talent</h4>
                    <p class="text-gray-300 mt-2 text-start ps-[120px] text-sm">
                        We handpick elite developers after rigorous evaluations of technical expertise, problem-solving
                        skills, and soft skillsâ€”so you get only the best without the hassle.
                    </p>
                </div>

                <div class="px-6 py-10 border border-[#542952]  relative flex flex-col justify-center">
                    <span
                        class="font-['Open_Sans'] text-[140px] font-bold leading-none tracking-normal [color:rgba(110,193,228,0)] [-webkit-text-stroke-width:2px] [-webkit-text-stroke-color:rgba(255,255,255,0.28)] absolute left-10 top-4">2</span>
                    <h4 class="text-[#c73ca1] text-start text-lg mt-2">Streamline Communication</h4>
                    <p class="text-gray-300 mt-2 text-start ps-[120px] text-sm">
                        Our developers work in sync with your schedule, actively listen to feedback, and maintain clear,
                        transparent communication throughout the project.
                    </p>
                </div>

                <div class="px-6 py-10 border border-[#542952] relative flex flex-col justify-center">
                    <span
                        class="font-['Open_Sans'] text-[140px] font-bold leading-none tracking-normal [color:rgba(110,193,228,0)] [-webkit-text-stroke-width:2px] [-webkit-text-stroke-color:rgba(255,255,255,0.28)] absolute left-10 top-4">3</span>
                    <h4 class="text-[#c73ca1] text-start text-lg mt-2">Eliminate Recruitment Delays</h4>
                    <p class="text-gray-300 mt-2 text-start ps-[120px] text-sm">
                        Skip the lengthy hiring process. We quickly assemble a team of top-tier professionals and
                        onboard them so your project moves forward without interruptions.
                    </p>
                </div>

                <div class="px-6 py-10 border border-[#542952] relative flex flex-col justify-center">
                    <span
                        class="font-['Open_Sans'] text-[140px] font-bold leading-none tracking-normal [color:rgba(110,193,228,0)] [-webkit-text-stroke-width:2px] [-webkit-text-stroke-color:rgba(255,255,255,0.28)] absolute left-10 top-4">4</span>
                    <h4 class="text-[#c73ca1] text-start text-lg mt-2">Build Healthy, Aligned Teams</h4>
                    <p class="text-gray-300 mt-2 text-start ps-[120px] text-sm">
                        We ensure developers not only excel technically but also blend seamlessly into your culture,
                        fostering collaboration and long-term success.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="relative isolate overflow-hidden select-nonee py-6 md:py-8 lg:py-16 bg-gray-100">
            <div class="overflow-hidden">
                <div
                    class="absolute inset-x-0 top-0 h-96 z-0 text-slate-600/5 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="pp0" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%"
                                patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#pp0)"></rect>
                    </svg>
                </div>
                <div class="relative container mx-auto max-w-7xl px-6 lg:px-8 z-10 text-center">
                    <h2
                        class="max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight tracking-[-0.04em] text-black">
                        <span class="font-normal">Hire ReactJs Developer </span>
                        <span class="font-bold text-[#137ec2]">in
                            Easy Steps</span>
                    </h2>
                    <div class="md:text-base text-sm text-black/70 mt-3 text-balance">
                        Finding top ReactJS talent is now effortless. Follow these quick steps, and weâ€™ll bring your
                        project to life with the right expertise.
                    </div>
                </div>
            </div>
            <div class="container md:pt-10 md:p-5 sm:p-8 p-5 mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                <div class="flex flex-col w-full">
                    <ul class="grid md:grid-cols-4 grid-cols-1 max-md:gap-y-5">
                        <li
                            class="py-0 px-4 text-center relative before:w-full before:block before:absolute before:top-16 before:left-full before:-translate-x-1/2 before:-z-[1] before:border-b-2 before:border-dashed before:border-b-amber-600 last:before:hidden max-md:before:hidden ">
                            <img class="md:size-36 size-32 mx-auto bg-[#f6bf22] rounded-full overflow-hidden border-[14px] border-gray-100"
                                width="128" height="128" loading="lazy" fetchpriority="low"
                                src="https://d1y41eupgbwbb2.cloudfront.net/images/tell-us-what-you-need.webp"
                                alt="Tell us what you need" title="Tell us what you need">
                            <h3 class="md:text-lg text-base font-bold text-black md:pt-6 pt-4 md:pb-4 pb-2">Step 1:
                                Share Your Vision</h3>
                            <div class="md:text-base text-sm text-black/80">Tell us about your project goals, desired
                                features, and technical needs. The more details you share, the better we can tailor the
                                perfect solution for you.
                            </div>
                        </li>
                        <li
                            class="py-0 px-4 text-center relative before:w-full before:block before:absolute before:top-16 before:left-full before:-translate-x-1/2 before:-z-[1] before:border-b-2 before:border-dashed before:border-b-amber-600 last:before:hidden max-md:before:hidden ">
                            <img class="md:size-36 size-32 mx-auto bg-[#f6bf22] rounded-full overflow-hidden border-[14px] border-gray-100"
                                width="128" height="128" loading="lazy" fetchpriority="low"
                                src="https://d1y41eupgbwbb2.cloudfront.net/images/meet-the-top-talent.webp"
                                alt="Meet the top talent" title="Meet the top talent">
                            <h3 class="md:text-lg text-base font-bold text-black md:pt-6 pt-4 md:pb-4 pb-2">Step 2:
                                Choose Your Experts</h3>
                            <div class="md:text-base text-sm text-black/80">We handpick ReactJS developers from our
                                elite talent pool, matching their skills and experience to your projectâ€™s unique
                                requirements.
                            </div>
                        </li>
                        <li
                            class="py-0 px-4 text-center relative before:w-full before:block before:absolute before:top-16 before:left-full before:-translate-x-1/2 before:-z-[1] before:border-b-2 before:border-dashed before:border-b-amber-600 last:before:hidden max-md:before:hidden ">
                            <img class="md:size-36 size-32 mx-auto bg-[#f6bf22] rounded-full overflow-hidden border-[14px] border-gray-100"
                                width="128" height="128" loading="lazy" fetchpriority="low"
                                src="https://d1y41eupgbwbb2.cloudfront.net/images/interview-with-ease.webp"
                                alt="Interview with ease" title="Interview with ease">
                            <h3 class="md:text-lg text-base font-bold text-black md:pt-6 pt-4 md:pb-4 pb-2">Step 3:
                                Set the Timeline</h3>
                            <div class="md:text-base text-sm text-black/80">Work with us to define clear milestones,
                                delivery dates, and expectationsâ€”ensuring your project runs smoothly from day one.</div>
                        </li>
                        <li
                            class="py-0 px-4 text-center relative before:w-full before:block before:absolute before:top-16 before:left-full before:-translate-x-1/2 before:-z-[1] before:border-b-2 before:border-dashed before:border-b-amber-600 last:before:hidden max-md:before:hidden ">
                            <img class="md:size-36 size-32 mx-auto bg-[#f6bf22] rounded-full overflow-hidden border-[14px] border-gray-100"
                                width="128" height="128" loading="lazy" fetchpriority="low"
                                src="https://d1y41eupgbwbb2.cloudfront.net/images/hire-with-confidence.webp"
                                alt="Hire with confidence" title="Hire with confidence">
                            <h3 class="md:text-lg text-base font-bold text-black md:pt-6 pt-4 md:pb-4 pb-2">Step 4:
                                Launch Development</h3>
                            <div class="md:text-base text-sm text-black/80">Once the team is ready, development kicks
                                off immediately. We keep you updated at every stage, making adjustments along the way to
                                ensure perfect results.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="md:mb-20 mb-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="relative isolate overflow-hidden bg-gradient-to-r from-gray-900 to-gray-900/50 px-6 shadow-2xl rounded-2xl sm:rounded-3xl sm:px-16 lg:flex lg:gap-x-20 lg:px-24 *:relative *:z-10">
                <img src="https://d1y41eupgbwbb2.cloudfront.net/images/cta/hire-react-js-developer-cta-2.webp"
                    alt="Want to hire dedicated React.js developer for your project?"
                    title="Want to hire dedicated React.js developer for your project?"
                    class="!absolute !z-0 inset-0 size-full mix-blend-overlay object-cover object-center">
                <div
                    class="absolute inset-x-0 top-0 h-full z-0 text-white/20 [mask-image:linear-gradient(to_top,transparent,white)] pointer-events-none">
                    <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="I86" width="32" height="32" patternUnits="userSpaceOnUse" x="50%" y="100%"
                                patternTransform="translate(0 -1)">
                                <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#I86)"></rect>
                    </svg>
                </div>
                <div class="max-w-3xl  lg:mx-0 lg:flex-auto py-6 md:py-8 lg:py-16 lg:text-left relative z-[1]">
                    <h2
                        class="max-sm:text-xl max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-white font-normal empty:hidden max-sm:text-center">
                        Need Expert ReactJS Developers for Your Project?
                        <span class="font-bold text-gray-100"> Request a personalized quote today and kickstart your
                            project with confidence.</span>
                    </h2>
                    <div class="md:mt-10 mt-5 flex items-center gap-x-6 empty:hidden max-sm:justify-center">
                        <button
                            class="bg-[#f6bf22] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-black  hover:bg-white md:text-base transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black">Contact
                            us now!
                        </button>
                    </div>
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

    <!-- faq section -->
  <section class="lg:px-20 px-4 pb-10 md:pt-10 pt-0 w-full relative overflow-hidden  bg-white">
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

  <section class="py-10 lg:px-20 px-4">
  <div class=" mx-auto px-4">
    <h2 class="text-2xl font-bold text-center mb-6">
      Similar Developers <span class="text-[#137ec2]">You Can Hire</span>
    </h2>
    <div class="swiper similarSwiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
            <div class=" overflow-hidden">
                <div class=" overflow-hidden rounded-xl">
                    <img src="assets/img/hire-us.jpg" alt="UI UX Developer" class="w-full h-40 object-cover" />
                </div>
                <div class="p-4">
                    
                <h3 class="font-semibold text-center">Hire UI/UX Developer</h3>
                </div>
            </div>
          </a>
        </div>

      </div>

      <div class="md:mt-20 mt-14">
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


    <!-- footer section -->
    <?php include __DIR__ . '/includes/footer.php'; ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            // ---- THUMB SLIDER ----
            const networkThumbs = new Swiper('.networkThumbs', {
                loop: true,
                slidesPerView: 5,
                spaceBetween: 16,
                centeredSlides: true,
                slideToClickedSlide: true,
                watchSlidesProgress: true,
                thumbs: { multipleActiveThumbs: false },
                breakpoints: {
                    320: { slidesPerView: 2 },
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 5 }
                },
                observer: true,
                observeParents: true
            });

            // ---- MAIN SLIDER ----
            const networkSwiper = new Swiper('.networkSwiperClass', {
                loop: true,
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
            setTimeout(() => syncTo(networkSwiper.realIndex, 0), 60);
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
        var swiper = new Swiper(".similarSwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            breakpoints: {
            320: { slidesPerView: 1.2, spaceBetween: 10 },
            440: { slidesPerView: 1.7, spaceBetween: 10 },
            640: { slidesPerView: 2.2, spaceBetween: 15 },
            950: { slidesPerView: 3.5, spaceBetween: 20 },
            1024: { slidesPerView: 4, spaceBetween: 20 },
            },
        });
    </script>
</body>

</html>
