<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom Ease | Projects </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    <section class="min-h-screen bg-[url('/images/image14.png')] bg-cover bg-center">
        <header class="bg-[#120F1133] md:flex md:flex-row justify-between items-center lg:px-10 md:px-3 py-10 hidden">
            <a  href="/" class="flex justify-start">
                <img src="/images/BloomEase-01.png" alt="Logo">
            </a>

            <div class="md:space-x-3 lg:space-x-16 justify-center text-white md:text-lg lg:text-xl">
                <a href="/about">About</a>
                <a href="/work">Our Work</a>
                <a href="/services">Services</a>
                <a href="/contact">Contact Us</a>
            </div>

            <div class="justify-end">
                <a href="/contact" class="bg-gradient-to-r from-[#0768B3] to-[#032D4D] lg:px-14 px-10 py-3 rounded-3xl text-white md:text-base lg:text-lg font-semibold">Get in Touch</a>
            </div>
        </header>

        <header class="flex flex-row w-full bg-[#000000] justify-between items-center px-8 py-5 md:hidden">
            <a href="#"><img src="/images/BloomEase-01.png" alt="logo"></a>

            <button id="hamburger" class="text-white focus:outline-none">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                  
            </button>
        </header>

        <nav id="menu" class="flex flex-col pl-8 justify-start hidden font-inter font-semibold text-[#ffffff] bg-[#000000] gap-10 pb-10">
            <a href="/" class="underline decoration-[#0768B3] decoration-2 mt-5">Home</a>
            <a href="/about">About</a>
            <a href="/work">Our Work</a>
            <a href="/services">Services</a>
            <a href="/contact">Contact Us</a>
            <a href="/contact" class="w-[30%] bg-[#0768B3] py-3 rounded-3xl text-white text-center md:text-base lg:text-lg font-semibold">Get in Touch</a>
        </nav>

        <div class="flex flex-col text-center items-center justify-center text-white px-8 lg:mt-16 mt-20">
            <p class="text-xl font-semibold">SMALLER HEADER TEXT GOES HERE</p>
            <p class="text-5xl lg:text-7xl mt-10 font-bold">Lorem ispum lorem ispum <br>main heading text for <br>hero section goes here.</p>
            <p class="text-xl mt-10 font-semibold">Lorem ispum body text. Lorem ispum body text. Lorem ispum <br>body text. Lorem ispum body text. Lorem ispum body text.</p>
        </div>
    </section>

    <section class="flex bg-black">
        <div class="flex flex-col text-center justify-center w-fulls text-white lg:p-16 p-5">
            <p class="md:text-3xl text-2xl font-semibold">
                INTRODUCTION TO SURROUND SNAPS
            </p>
            <p class="text-xl mt-6 font-semibold">
                Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. 
                Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. 
                Lorem ispum body text.
            </p>
        </div>
    </section> 

    <section class="flex bg-white">
        <div class="flex flex-col md:flex-row justify-between items-center w-full lg:p-16 p-5">
            <div class="flex flex-col text-black justify-center items-start w-full lg:w-1/2 lg:mt-0 mt-10 lg:mb-0 mb-10">
                <p class="md:text-3xl text-2xl font-semibold md:text-start text-center">
                    SURROUND SNAPS
                </p>
                <p class="text-xl mt-6 font-semibold">
                    Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. 
                    Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. 
                    Lorem ispum body text.
                </p>
            </div>

            <div class="w-full lg:w-1/2 flex justify-center items-centerhb b">
                <img src="/images/Surround_Snaps.png" alt="">
            </div>
        </div>
    </section>

    <section class="flex bg-black">
        <div class="flex lg:flex-row flex-col items-center justify-center w-full p-10 lg:p-16 lg:space-x-20">
            <!-- First Column -->
            <div class="flex flex-col items-start text-white space-y-5">
                <div class="bg-gradient-to-r from-[#808080] to-[#1C1C1C] rounded-lg p-5 flex items-center justify-center w-[300px] h-[290px]">
                    <p class="text-start text-lg">
                        Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text.
                        <br/>
                        <br/>
                        <br/>
                        <span class="text-3xl font-bold ">01. <br> Heading<br></span>
                    </p>
                </div>
                <img src="/images/image.png" alt="Image 1" class="w-[300px] h-[290px] object-cover rounded-lg">
            </div>

            <!-- Second Column-->
            <div class="text-white relative mt-5">
                <img src="/images/image (2).png" alt="Long Image" class="w-[300px] lg:w-[400px] h-auto rounded-lg">

                <p class="absolute top-2 left-2 text-white text-3xl font-bold">
                    03. <br> Heading <br>
                </p>

                <p class="absolute bottom-2 left-2 text-white text-lg">
                    Lorem ispum body text. Lorem ispum body text. <br/>Lorem ispum body text. Lorem ispum body text.
                </p>
            </div>

            <!-- Third Column -->
            <div class="flex flex-col items-center lg:items-end text-white space-y-5 mt-5">
                <img src="/images/image (1).png" alt="Image 2" class="w-[300px] h-[290px] object-cover rounded-lg">
                <div class="bg-gradient-to-r from-[#808080] to-[#1C1C1C] rounded-lg p-5 flex items-center justify-center w-[300px] h-[290px]">
                    <p class="text-start text-lg">
                    <span class="text-3xl font-bold">01. <br>Heading<br></span>
                        <br/>
                        <br/>
                        <br/>
                        Lorem ispum body text. Lorem ispum body text. Lorem ispum body text. Lorem ispum body text.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="flex bg-[url('/images/image15.png')] bg-cover bg-center">
        <div class="md:relative md:flex flex-col justify-center items-center bg-white w-full opacity-90 p-20">
            <h1 class="text-6xl font-bold text-black text-center leading-tight md:mb-0 mb-3">
            STAY CONNECTED<br>WITH US
            </h1>

            <!-- Floating Input -->
            <div class="md:absolute md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 flex">
            <input 
                type="email" 
                placeholder="email address" 
                class="py-2 px-4 rounded-l-full border border-gray-300 focus:outline-none"
            >
            <button 
                class="bg-blue-600 text-white px-6 rounded-r-full font-semibold hover:bg-blue-700">
                Connect
            </button>
            </div>
        </div>
    </section>

    <section class="bg-[#000000] w-full">
        <footer class="flex flex-col lg:flex-row justify-between p-10">
            <div class="lg:w-[40%] w-full flex flex-col text-white">
              <a href="/" class="flex justify-start">
              <img src="/images/BloomEase-01.png" alt="" class="mb-5">
              </a>

                <p>Bloom Ease Technology. 
                    <br>A product of Bloom Digital Media Ltd. 
                    <br>All Rights Reserved.
                </p>
            </div>

            <div class="lg:w-[60%] flex flex-row justify-between text-white items-end">
                <div class="flex flex-col">
                    <p class="mb-5">OFFICE</p>
                    <a href="/">Location</a>
                    <a href="/">Location</a>
                    <p>Abuja, Nigeria.</p>
                </div>

                <div class="flex flex-col mt-5">
                    <p class="mb-5">COMPANY</p>
                    <a href="/about">About</a>
                    <a href="/services">Services</a>
                    <a href="/work">Our Work</a>

                </div>

                <div class="flex flex-col mt-5">
                    <p class="mb-5">SOCIALS</p>
                    <a href="">Twitter</a>
                    <a href="">LinkedIn</a>
                    <a href="">Instagram</a>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>

<script src="/js/hamburger.js"></script>