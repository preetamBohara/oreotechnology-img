<header class="z-40 text-sm sticky top-0 transform duration-300 bg-white py-2 md:h-auto h-[80px]">
        <div class=" relative box-content flex h-full items-center justify-between lg:px-20 px-4 xl:mx-auto">
            <div class="group peer-has-[checked]:sidebar-open w-full">
                <div class="flex items-center justify-between w-full">
                    <a href="index.php" class="block ">
                        <div class=" lg:w-[110px] w-[70px] overflow-hidden ">
                            <img src="assets/img/oreotechnologies.png" class="w-full h-auto ">
                        </div>
                    </a>
                    <label for="sidebar-toggle"
                        class="inline-block p-4 cursor-pointer text-gray-600 hover:text-black lg:hidden ">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <input type="checkbox" id="sidebar-toggle" class="hidden peer" />

                <aside
                    class="fixed top-0 left-0 h-full w-64 bg-white  text-black transform -translate-x-full group-has-[.peer:checked]:translate-x-0 transition-transform duration-300 z-50">
                    <div class="p-4 flex justify-between items-center border-b border-gray-700">
                        <div class=" lg:w-[110px] w-[70px] overflow-hidden ">
                            <img src="assets/img/oreotechnologies.png" class="w-full h-auto ">
                        </div>
                        <label for="sidebar-toggle"
                            class="cursor-pointer text-black text-2xl ">&times;</label>
                    </div>
                    <ul class="p-4 space-y-2">
                        <li><a href="index.php" class="block hover:text-yellow-400">Home</a></li>
                        <li><a href="about-us.php" class="block hover:text-yellow-400">About</a></li>
                        <li>
                            <div>
                                <div class="relative group my-2">
                                    <input type="checkbox" id="aiml-toggle" class="hidden peer">
                                    <label for="aiml-toggle"
                                        class="cursor-pointer justify-between flex items-center gap-2">
                                        <h6 class="text-black md:text-base text-sm">AI/ML</h6>
                                        <div>
                                            <svg class="transition-transform group-has-[#aiml-toggle:checked]:rotate-180"
                                                stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="16px" width="16px"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div class="mt-2 hidden group-has-[#aiml-toggle:checked]:block">
                                        <div class="flex items-start gap-4">
                                            <div class="w-full space-y-3">
                                                <div>
                                                    <h6 class="ps-4">AI</h6>
                                                    <ul class="space-y-2 ps-4">
                                                        <li><a href="#" class="block hover:text-yellow-400">AI Development</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">AI Agent</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">Micro SaaS Development</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">AI Consulting</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h6 class="ps-4">Generative AI</h6>
                                                    <ul class="space-y-2 ps-4">
                                                        <li><a href="#" class="block hover:text-yellow-400">Generative AI Development</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">Generative AI Integration</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">LLM Development</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">Adaptive AI Development</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h6 class="ps-4">ML</h6>
                                                    <ul class="space-y-2 ps-4">
                                                        <li><a href="#" class="block hover:text-yellow-400">Machine Learning Development</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">ML Model Engineering</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">ML Ops Consulting</a></li>
                                                        <li><a href="#" class="block hover:text-yellow-400">ML & Data Science Consulting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="contact-us.php" class="block hover:text-yellow-400">Contact</a></li>
                        <li>
                            <div>
                                <div class="relative group my-2">
                                    <input type="checkbox" id="service-toggle" class="hidden peer">
                                    <label for="service-toggle"
                                        class="cursor-pointer justify-between      flex items-center gap-2 ">
                                        <h6 class=" text-black md:text-base text-sm">Service</h6>
                                        <div class="">
                                            <svg class=" transition-transform group-has-[#service-toggle:checked]:rotate-180"
                                                stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="16px" width="16px"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div class="mt-2 hidden group-has-[#service-toggle:checked]:block ">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <ul class="space-y-2 ps-4">
                                                    <li><a href="#" class="block hover:text-yellow-400">Service 1</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Service 2</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Service 3</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Service 4</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Service 5</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="relative group my-2">
                                    <input type="checkbox" id="solution-toggle" class="hidden peer">
                                    <label for="solution-toggle"
                                        class="cursor-pointer justify-between      flex items-center gap-2 ">
                                        <h6 class=" text-black md:text-base text-sm">Solution</h6>
                                        <div class="">
                                            <svg class=" transition-transform group-has-[#solution-toggle:checked]:rotate-180"
                                                stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="16px" width="16px"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z">
                                                </path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div class="mt-2 hidden group-has-[#solution-toggle:checked]:block ">
                                        <div class="flex items-start gap-4">
                                            <div>
                                                <ul class="space-y-2 ps-4">
                                                    <li><a href="#" class="block hover:text-yellow-400">Solution 1</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Solution 2</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Solution 3</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Solution 4</a>
                                                    </li>
                                                    <li><a href="#" class="block hover:text-yellow-400">Solution 5</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="contact-us.php" class="block hover:text-yellow-400">Contact</a></li>
                    </ul>
                </aside>
            </div>
            <div class="md:h-full lg:flex hidden h-auto">
                <nav aria-label=" main navigation" class="flex h-full items-center">
                    <ul class="z-40 flex h-full items-center xl:space-x-3 space-x-1 ">
                        <li
                            class="relative group text-black hover:text-[#137ec2] flex h-full text-base font-bold cursor-pointer">
                            <a href="index.php" class="relative flex items-center justify-center px-2 lg:px-2
                                        before:absolute before:-bottom-[28px] before:left-0 before:h-1 
                                        before:bg-[#137ec2] before:transition-all before:duration-300 
                                        group-hover:before:w-full">
                                Home
                            </a>
                        </li>
                        <li
                            class="relative group text-black hover:text-[#137ec2] flex h-full text-base font-bold cursor-pointer">
                            <a href="about-us.php" class="relative flex items-center justify-center px-2 lg:px-2
                                        before:absolute before:-bottom-[28px] before:left-0 before:h-1 
                                        before:bg-[#137ec2] before:transition-all before:duration-300 
                                        group-hover:before:w-full">
                                About
                            </a>
                        </li>

                        <li class="group static py-4 hover:text-[#137ec2] text-black flex h-full text-base font-bold">
                            <a href="#"
                                class="flex items-center justify-center text-nowrap focus:outline-none relative before:absolute before:-bottom-[16px] lg:px-2 px-2 before:left-0 before:h-1 before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full">
                                AI/ML
                                <span class="w-8">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="p-2 text-black group-hover:text-[#137ec2] transition duration-300 group-hover:rotate-180"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div
                                class="absolute left-0 top-[56px] z-40 flex w-full bg-white drop-shadow-lg pointer-events-none invisible -translate-y-10 transform opacity-0 duration-500 group-hover:pointer-events-auto group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 shadow-lg mt-2 scale-y-95 origin-top transition-all group-hover:scale-y-100">
                                <div class="flex w-full">
                                    <div class="grid md:grid-cols-4 grid-cols-2 w-full space-x-4">
                                        <div class="bg-[#f6f7f8] p-8">
                                            <div>
                                                <h6 class="text-black font-medium text-2xl mb-3">AI/ML</h6>
                                                <div class="mb-20">
                                                    <p class="text-[#3d4751] font-normal text-base">Get AI and machine learning development services built around your business needs</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-8 flex justify-between flex-col">
                                            <div>
                                                <h6 class="text-black text-lg font-bold">AI Development</h6>
                                                <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                    <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all"><a href="#" class="text-base font-medium">AI Development</a></li>
                                                    <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all"><a href="#" class="text-base font-medium">AI Agent</a></li>
                                                    <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all"><a href="#" class="text-base font-medium">Micro SaaS Development</a></li>
                                                    <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all"><a href="#" class="text-base font-medium">AI Consulting</a></li>
                                                    <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all"><a href="#" class="text-base font-medium">Enterprise AI Development</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="py-8">
                                            <h6 class="text-black text-lg font-bold">Generative AI</h6>
                                            <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">Generative AI Development</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">Generative AI Integration</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">LLM Development</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">Adaptive AI Development</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">Generative AI in Real Estate</a></li>
                                            </ul>
                                        </div>
                                        <div class="py-8">
                                            <h6 class="text-black text-lg font-bold">Machine Learning</h6>
                                            <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">Machine Learning Development</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">ML Model Engineering</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">ML Ops Consulting</a></li>
                                                <li class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all"><a href="#" class="text-base font-medium">ML & Data Science Consulting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="group static py-4 hover:text-[#137ec2] text-black flex h-full  text-base font-bold">
                            <a href="#"
                                class="flex items-center justify-center text-nowrap focus:outline-none relative before:absolute before:-bottom-[16px] lg:px-2 px-2  before:left-0 before:h-1  before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full ">
                                Services
                                <span class="w-8">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class=" p-2 text-black group-hover:text-[#137ec2] transition duration-300 group-hover:rotate-180"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div
                                class="absolute left-0  top-[56px] z-40  flex w-full bg-white  drop-shadow-lg  pointer-events-none invisible -translate-y-10 transform opacity-0 duration-500 group-hover:pointer-events-auto group-hover:visible group-hover:translate-y-0 group-hover:opacity-100  shadow-lg mt-2  scale-y-95 origin-top transition-all  group-hover:scale-y-100">
                                <div class="flex w-full ">
                                    <div class="grid md:grid-cols-4 grid-cols-2  w-full space-x-4">
                                        <div class="bg-[#f6f7f8]  p-8">
                                            <div>
                                                <h6 class="text-black font-medium text-2xl mb-3">Services</h6>
                                                <div class="mb-20">
                                                    <p class="text-[#3d4751] font-normal text-base">Get software
                                                        development services, built around your needs</p>
                                                </div>
                                                <div class="border-t border-[#e1e1e1] pt-4">
                                                    <div>
                                                        <h6 class=" text-xl"> Rolls Royce</h6>
                                                        <p class="text-black font-normal pt-4">
                                                            We built an app for real-time nuclear plant monitoring. Read
                                                            case study.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-8 flex justify-between flex-col">
                                            <div>
                                                <div>
                                                    <h6 class="text-black text-lg font-bold">Mobile App Development</h6>
                                                </div>
                                                <div>
                                                    <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all ">
                                                            <a href="mobile-app-development.php" class="text-base font-medium">Android App
                                                                Development</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="mobile-app-development.php" class="text-base font-medium">IOS App
                                                                Development</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="mobile-app-development.php" class="text-base font-medium">Hybrid App
                                                                Development</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="text-black relative text-2xl font-normal before:absolute before:h-px before:w-full before:bg-black before:-bottom-1 before:left-0 before:transition-all before:duration-500 hover:before:w-0 flex items-center gap-2 w-fit">
                                                    <span>All Services</span>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 512 512" height="20px" width="20px"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="py-8">
                                            <div>
                                                <h6 class="text-black text-lg font-bold">E-Commerce Development</h6>
                                            </div>
                                            <div>
                                                <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Shopify
                                                            Development</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Wordpress
                                                            Development</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="py-8">
                                            <div class="mb-3">
                                                <a href="#" class="text-black text-lg font-bold ">ERP Development</a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-black text-lg font-bold">Website Designing and
                                                    Development Development</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="group static hover:text-[#137ec2] text-black flex h-full py-4 text-base font-bold">
                            <a href="#"
                                class="flex   items-center justify-center text-nowrap focus:outline-none relative before:absolute before:-bottom-[16px] lg:px-2 px-2  before:left-0 before:h-1  before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full ">
                                Solutions
                                <span class="w-8">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class=" p-2 text-black group-hover:text-[#137ec2] transition duration-300 group-hover:rotate-180"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>

                            <div
                                class="absolute left-0  top-[64px] z-40  flex w-full bg-white drop-shadow-lg pointer-events-none invisible -translate-y-10 transform opacity-0 duration-500 group-hover:pointer-events-auto group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                                <div class="flex w-full">
                                    <div class="grid md:grid-cols-4 grid-cols-2  w-full space-x-4">
                                        <div class="bg-[#f6f7f8] p-8">
                                            <div>
                                                <h6 class="text-black font-medium text-2xl mb-3">Solutions</h6>
                                                <div class="mb-20">
                                                    <p class="text-[#3d4751] font-normal text-base">Get software
                                                        development Solutions, built around your needs</p>
                                                </div>
                                                <div class="border-t border-[#e1e1e1] pt-4">
                                                    <div class="">
                                                        <div>
                                                            <h6 class=" text-xl"> Rolls Royce</h6>
                                                            <p class="text-black font-normal pt-4">
                                                                We built an app for real-time nuclear plant monitoring.
                                                                Read case study.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="py-8 flex flex-col justify-between h-full">
                                                <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                        <a href="#" class="text-base font-medium">Taxi Booking App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                        <a href="#" class="text-base font-medium">Grocery App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                        <a href="food-delivery-page.php" class="text-base font-medium">Food Delivery App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                        <a href="#" class="text-base font-medium">Medicine Delivery
                                                            App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                        <a href="#" class="text-base font-medium">Dating App</a>
                                                    </li>
                                                </ul>
                                                <a href="#"
                                                    class="text-black relative text-2xl font-normal before:absolute before:h-px before:w-full before:bg-black before:-bottom-1 before:left-0 before:transition-all before:duration-500 hover:before:w-0 flex items-center gap-2 w-fit">
                                                    <span>All Solutions</span>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 512 512" height="20px" width="20px"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>
                                        <div>
                                            <div class="py-8">
                                                <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Online Doctor
                                                            Appointment App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Astrology App</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Hospital
                                                            Management</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">School Management</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="py-8">
                                                <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Institute
                                                            Management</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">College Management</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Fantasy</a>
                                                    </li>
                                                    <li
                                                        class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-300 transition-all">
                                                        <a href="#" class="text-base font-medium">Opinion Trading</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="group static hover:text-[#137ec2] text-black flex h-full py-4 text-base font-bold">
                            <a href="#"
                                class="flex   items-center justify-center text-nowrap focus:outline-none relative before:absolute before:-bottom-[16px] lg:px-2 px-2  before:left-0 before:h-1  before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full ">
                                Hire Developers
                                <span class="w-8">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class=" p-2 text-black group-hover:text-[#137ec2] transition duration-300 group-hover:rotate-180"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>

                            <div
                                class="absolute left-0  top-[64px] z-40  flex w-full bg-white drop-shadow-lg pointer-events-none invisible -translate-y-10 transform opacity-0 duration-500 group-hover:pointer-events-auto group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                                <div class="flex w-full">
                                    <div class="grid md:grid-cols-4 grid-cols-2  w-full space-x-4">
                                        <div class="bg-[#f6f7f8] p-8">
                                            <div>
                                                <h6 class="text-black font-medium text-2xl mb-3">Hire Skilled Developers</h6>
                                                <div class="mb-20">
                                                    <p class="text-[#3d4751] font-normal text-base">Get dedicated developers, handpicked to match your project requirements, and build high-quality solutions tailored to your needs.</p>
                                                </div>
                                                <div class="border-t border-[#e1e1e1] pt-4">
                                                    <div class="">
                                                        <div>
                                                            <h6 class=" text-xl"> Rolls Royce</h6>
                                                            <p class="text-black font-normal pt-4">
                                                                We built an app for real-time nuclear plant monitoring.
                                                                Read case study.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-8">
                                            <div>
                                                <div>
                                                    <h6 class="text-black text-lg font-bold">Mobile</h6>
                                                </div>
                                                <div>
                                                    <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all ">
                                                            <a href="#" class="text-base font-medium">Hire mobile app developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire android app developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire IOS app developers</a>
                                                        </li>
                                                         <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire Flutter app developers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-8">
                                            <div>
                                                <div>
                                                    <h6 class="text-black text-lg font-bold">Frontend</h6>
                                                </div>
                                                <div>
                                                    <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all ">
                                                            <a href="#" class="text-base font-medium">Hire React js developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire angular developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire Full-Stack developers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-8">
                                            <div>
                                                <div>
                                                    <h6 class="text-black text-lg font-bold">Backend</h6>
                                                </div>
                                                <div>
                                                    <ul class="text-lg text-[#939393] pl-6 mt-4 space-y-4">
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all ">
                                                            <a href="#" class="text-base font-medium">Hire python developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire Php developers</a>
                                                        </li>
                                                        <li
                                                            class="relative before:absolute before:w-2 before:h-2 before:bg-[#137ec2] before:top-[12px] before:left-[-20px] before:rotate-45 hover:before:rotate-180 duration-500 transition-all">
                                                            <a href="#" class="text-base font-medium">Hire Java developers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li
                            class="relative group text-black hover:text-[#137ec2] flex h-full py-4 text-base font-bold cursor-pointer">
                            <a href="blog-list.php"
                                class="relative items-center justify-center flex   before:absolute before:-bottom-[28px] lg:px-2 px-2  before:left-0 before:h-1  before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full ">
                                Blog
                            </a>
                        </li>
                          <li
                            class="relative group text-black hover:text-[#137ec2] flex h-full py-4 text-base font-bold cursor-pointer">
                            <a href="contact-us.php"
                                class="relative items-center justify-center flex   before:absolute before:-bottom-[28px] lg:px-2 px-2  before:left-0 before:h-1  before:bg-[#137ec2] before:transition-all before:duration-300 group-hover:before:w-full ">
                                Contact
                            </a>
                        </li>
                        <li>
                            <button class="cursor-pointer">
                                <div
                                    class="bg-[#f6bf22] font-medium text-nowrap px-4 py-2 rounded-lg lg:text-lg text-base  text-white  hover:bg-white md:text-base  transition-all duration-300 hover:text-black hover:border-dashed border border-transparent hover:border-black">
                                    Schedule a call
                                </div>
                            </button>
                        </li>
                    </ul>


                </nav>
            </div>

        </div>
    </header>
