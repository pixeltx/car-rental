<x-app title="Beranda">
    <div class="overflow-hidden">
        <div>
            <div class="flex flex-wrap md:flex-nowrap">
                <!-- Section Kiri -->
                <div class="w-full md:w-1/2 py-8 md:py-14 px-6 md:px-28 order-2 md:order-1">
                    <div>
                        <div class="text-4xl md:text-7xl leading-tight font-bold text-[#ffd700]">
                            Bright Globaltrans
                        </div>
                        <div class="text-justify py-4 text-sm md:text-base">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias soluta voluptatum rerum dignissimos 
                            corporis eveniet omnis dolores voluptas quia voluptate repellendus suscipit obcaecati nesciunt 
                            eaque sapiente, non adipisci blanditiis. Ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quidem ipsa maxime in natus a eum reprehenderit culpa laboriosam tempora dolorum facere atque, 
                            voluptatem aut vitae suscipit repudiandae magni et dignissimos!
                        </div>
                        <div class="flex flex-row gap-4 md:gap-10 items-center pb-4">
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-7 text-customGreen  hover:bg-customGreen hover:text-white transition-colors duration-300">
                                ORDER NOW
                            </button>
                            <button class="text-sm md:text-xl border-2 border-customGreen py-1 px-5 md:px-10 text-customGreen  hover:bg-customGreen hover:text-white transition-colors duration-300">
                                CONTACT
                            </button>
                        </div>
                        <div class="bg-navbarTitle w-full rounded-md p-5 mt-4 drop-shadow-lg text-white">
                            <div class="flex flex-col md:flex-row gap-4">
                                <!-- Section Kiri -->
                                <div class="w-full md:w-1/2 text-justify">
                                    <h2 class="text-lg md:text-xl font-bold">Section Kiri</h2>
                                    <p>Konten untuk section kiri.</p>
                                </div>
                                <!-- Section Kanan -->
                                <div class="w-full md:w-1/2 text-justify">
                                    <h2 class="text-lg md:text-xl font-bold">Section Kanan</h2>
                                    <p>Konten untuk section kanan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Kanan -->
                <div class="w-full md:w-1/2 p-4 order-1 md:order-2 relative">
                    <div class="flex justify-center md:justify-end">
                        <img src="{{ asset('img/Road.jpg') }}" alt="road" class="rounded-full w-3/4 md:w-[85%] -mr-20 md:-mr-32 absolute hidden md:block">
                    </div>
                    <div class="absolute top-40 md:top-102 left-101 transform -translate-x-1/2 -translate-y-1/2 hidden md:block">
                        <div class="max-w-7xl w-full md:w-100">
                            <img src="{{ asset('img/fortuner.png') }}" alt="fortuner" class="z-10 w-3/4 md:w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-20 mt-8">
            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class=" h-[80vh] md:min-h-screen overflow-hidden rounded-lg">
                    <!-- Text Content -->
                    <div class="relative inset-0 z-40 flex flex-col items-center justify-start md:justify-center px-4 md:px-16 lg:px-32 pt-8 md:pt-0">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] drop-shadow-lg absolute top-32 md:top-52 right-20 md:left-[33rem]">
                            BrightGlobaltrans
                        </h1>
                        <p class="mt-4 text-xs md:text-lg lg:text-xl text-gray-100 font-medium drop-shadow-lg py-2 md:py-4 absolute top-40 md:top-72 right-20 md:left-[5rem] text-justify md:text-center pl-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum deserunt dolores hic voluptatum voluptates illo neque ad, fuga quidem quibusdam excepturi sunt officia sed commodi ipsam quos facere corporis praesentium.
                        </p>
                        <div class="flex md:flex-row gap-4 mt-6 absolute top-64 md:top-96 left-2.5 md:left-[38rem]">
                            <button class="text-xs md:text-lg border-2 border-bigTitle py-2 px-4 md:px-8 text-bigTitle hover:text-white hover:bg-customGreen hover:border-customGreen transition duration-300">
                                ORDER NOW
                            </button>
                            <button class="text-xs md:text-lg border-2 border-bigTitle py-2 px-4 md:px-8 text-bigTitle hover:text-white hover:bg-customGreen hover:border-customGreen transition duration-300">
                                CONTACT
                            </button>
                        </div>
                    </div>
                    <!-- Slider Images -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/armada-bgt-slider-1.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('img/armada-bgt-slider-2.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/armada-bgt-slider-3.jpg') }}" class="absolute block w-full h-full object-cover opacity-80" alt="">
                    </div>
                </div>
        
                <!-- Slider Controls -->
                <button type="button" class="hidden absolute top-0 left-0 z-50 md:flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-black/30 rounded-full group-hover:bg-black/50 transition duration-300">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="hidden absolute top-0 right-0 z-50 md:flex items-center justify-center h-full px-4 group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-black/30 rounded-full group-hover:bg-black/50 transition duration-300">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        
        
        <div class="px-8 md:px-28 my-14">
            <div class="flex flex-col md:flex-row justify-center gap-14 md:gap-6 lg:gap-40">
                <!-- Card 1 -->
                <div class="w-full md:w-1/3 lg:w-80 transition-transform transform hover:scale-105 hover:shadow-lg p-4 bg-white rounded-lg">
                    <img src="{{ asset('img/calendar.svg') }}" alt="Calendar Icon" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">3 <span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center text-gray-700 font-semibold">
                        Tahun
                    </p>
                </div>
                
                <!-- Card 2 -->
                <div class="w-full md:w-1/3 lg:w-80 transition-transform transform hover:scale-105 hover:shadow-lg p-4 bg-white rounded-lg">
                    <img src="{{ asset('img/partner.svg') }}" alt="Partner Icon" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">2000<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center text-gray-700 font-semibold">
                        Customer
                    </p>
                </div>
                
                <!-- Card 3 -->
                <div class="w-full md:w-1/3 lg:w-80 transition-transform transform hover:scale-105 hover:shadow-lg p-4 bg-white rounded-lg">
                    <img src="{{ asset('img/car.svg') }}" alt="Car Icon" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">200<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center text-gray-700 font-semibold">
                        Kendaraan
                    </p>
                </div>
                
                <!-- Card 4 -->
                <div class="w-full md:w-1/3 lg:w-80 transition-transform transform hover:scale-105 hover:shadow-lg p-4 bg-white rounded-lg">
                    <img src="{{ asset('img/maps.svg') }}" alt="Maps Icon" class="mx-auto mt-4 w-28">
                    <p class="text-center my-4 text-5xl text-bigTitle">20<span class="text-xl align-top text-textGreen">+</span></p>
                    <p class="text-center text-gray-700 font-semibold">
                        Pilihan Rute
                    </p>
                </div>
            </div>
        </div>
        
        <div>
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-2">
                Layanan Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Pilih Layanan Terbaik Dari Kami
            </div>
            <div class="px-8 py-10 flex flex-wrap justify-center gap-5">
                <!-- REGULER Section -->
                <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-2xl">REGULER</div>
                    <div>
                        <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                    </div>
                    <div>
                        <ul class="list-outside">
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-16">
                        <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                    </div>
                </div>
        
                <!-- Most Picked Section -->
                <div class="bg-bigTitle rounded-xl p-2 w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-xl pb-2">
                        Most Picked
                    </div>
                    <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full">
                        <div class="text-center text-[#fbf7eb] font-semibold text-2xl">CHARTER</div>
                        <div>
                            <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                        </div>
                        <div>
                            <ul class="list-outside">
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                                <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            </ul>
                        </div>
                        <div class="flex justify-center pt-4">
                            <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                        </div>
                    </div>
                </div>
        
                <!-- INTERNATIONAL Section -->
                <div class="bg-customGreen px-5 py-4 rounded-xl text-[#fbf7eb] w-full sm:w-80 md:w-96 lg:w-[23rem]">
                    <div class="text-center text-[#fbf7eb] font-semibold text-2xl">INTERNATIONAL</div>
                    <div>
                        <img src="{{ asset('img/dummyImage.jpg') }}" class="rounded-lg pt-3 pb-10 w-full">
                    </div>
                    <div>
                        <ul class="list-outside">
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                            <li class="flex gap-2"> <img src="{{ asset('img/Checklist.svg') }}" alt=""> dummy</li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-16">
                        <button class="bg-bigTitle text rounded-lg w-96 h-14 text-black font-semibold text-xl border-2 border-bigTitle hover:bg-customGreen hover:text-bigTitle transition duration-300">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-cover mb-10 " style="background-image: url('{{ asset('img/bg-rent.png') }}')">
            <div class="px-8 md:px-28 lg:px-28 py-5">
                <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-[#ffd700] mb-2">
                    Rute Kami
                </div>
                <div class="text-[#fbf7eb] text-sm md:text-xl mb-4">
                    Kami menyediakan rute-rute ke kota-kota besar yang tersedia setiap harinya
                </div>
                <div class="flex md:flex-row flex-col gap-3 pb-4 text-base md:text-lg">
                    <button id="ruteKhusus" class="text-[#fbf7eb] bg-bigTitle py-2 px-7 font-semibold rounded-xl" onclick="showRuteKhusus()">Rute Khusus</button>
                    <button id="ruteInternational" class="text-customGreen bg-[#fbf7eb] py-2 px-7 font-semibold rounded-xl" onclick="showRuteInternational()">Rute Internasional</button>
                </div>
                
                <div id="ruteContainer" class="bg-[#f6f1eb] rounded-lg text-base md:text-lg">
                    <!-- Data awal ditampilkan di sini -->
                    <div class="py-4">
                        <span class=" text-lg md:text-xl font-semibold px-10">Untuk perjalanan antar kota</span>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Bandara</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Yogyakarta</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Bali</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Semarang</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Bandung - Surabaya</div>
                    </div>
                    <div class="mx-6 mt-8 mb-2">
                        <div class="bg-customGreen w-full h-0.5 ">
                        </div>
                    </div>
                    <div class="p-5">
                        <button class="text-[#fbf7eb] bg-bigTitle w-full h-14 rounded-xl text-lg  md:text-xl font-bold border-2 border-bigTitle hover:bg-[#f6f1eb] hover:text-bigTitle trans transition duration-300">Hubungi Kami</button>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-2">
                        Paling Populer
                    </div>
                    <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                        Paling banyak disewa dan dicari
                    </div>
                    <div class="mx-10 md:mx-16">
                        <div class="bg-bigTitle flex flex-col md:flex-row p-8 md:p-6 gap-6 rounded-xl mb-6 shadow-lg">
                            {{-- gambar mobil --}}
                            <div class="w-full md:w-4/12">
                                <img src="{{ asset('img/fortuner.png') }}" alt="Fortuner" class="rounded-xl">
                            </div>
                            {{-- deskripsi singkat --}}
                            <div class="w-full md:w-8/12">
                                <h2 class="text-2xl font-bold">Fortuner</h2>
                                <div class=" grid grid-cols-2 md:flex gap-4 my-6 md:my-2  text-sm">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path></svg>
                                        <span>SUV</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                        <span>6</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-[15px] h-[15px] fill-[#000000]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z"></path>
                                          </svg>
                    
                                        <span>1200 cc</span>
                                    </div>
                                    
                                </div>
                                {{-- desc dummy --}}
                                <p class="text-justify hidden lg:block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sed, modi aut ullam soluta rerum officia hic laborum cum deleniti dolore sapiente recusandae, omnis libero enim deserunt quidem excepturi tenetur.
                                </p>
                                <div class="mt-4">
                                    <button class="border-2 border-customGreen bg-customGreen text-white py-2 px-4 rounded-lg hover:bg-bigTitle hover:text-black transition">Pesan Mobil</button>
                                </div>
                                <div class="  md:text-right text-2xl font-bold mt-4">
                                    Rp 1.700.000 / Hari
                                </div>
                            </div>
                        </div>
                        <div class="bg-bigTitle flex flex-col md:flex-row p-8 md:p-6 gap-6 rounded-xl mb-6 shadow-lg">
                            {{-- gambar mobil --}}
                            <div class="w-full md:w-4/12">
                                <img src="{{ asset('img/fortuner.png') }}" alt="Fortuner" class="rounded-xl">
                            </div>
                            {{-- deskripsi singkat --}}
                            <div class="w-full md:w-8/12">
                                <h2 class="text-2xl font-bold">Fortuner</h2>
                                <div class=" grid grid-cols-2 md:flex gap-4 my-6 md:my-2  text-sm">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path></svg>
                                        <span>SUV</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                        <span>6</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-[15px] h-[15px] fill-[#000000]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z"></path>
                                          </svg>
                    
                                        <span>1200 cc</span>
                                    </div>
                                    
                                </div>
                                {{-- desc dummy --}}
                                <p class="text-justify hidden lg:block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sed, modi aut ullam soluta rerum officia hic laborum cum deleniti dolore sapiente recusandae, omnis libero enim deserunt quidem excepturi tenetur.
                                </p>
                                <div class="mt-4">
                                    <button class="border-2 border-customGreen bg-customGreen text-white py-2 px-4 rounded-lg hover:bg-bigTitle hover:text-black transition">Pesan Mobil</button>
                                </div>
                                <div class="  md:text-right text-2xl font-bold mt-4">
                                    Rp 1.700.000 / Hari
                                </div>
                            </div>
                        </div>
                        <div class="bg-bigTitle flex flex-col md:flex-row p-8 md:p-6 gap-6 rounded-xl mb-6 shadow-lg">
                            {{-- gambar mobil --}}
                            <div class="w-full md:w-4/12">
                                <img src="{{ asset('img/fortuner.png') }}" alt="Fortuner" class="rounded-xl">
                            </div>
                            {{-- deskripsi singkat --}}
                            <div class="w-full md:w-8/12">
                                <h2 class="text-2xl font-bold">Fortuner</h2>
                                <div class=" grid grid-cols-2 md:flex gap-4 my-6 md:my-2  text-sm">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path></svg>
                                        <span>SUV</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                        <span>6</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-[15px] h-[15px] fill-[#000000]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z"></path>
                                          </svg>
                    
                                        <span>1200 cc</span>
                                    </div>
                                    
                                </div>
                                {{-- desc dummy --}}
                                <p class="text-justify hidden lg:block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, officia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sed, modi aut ullam soluta rerum officia hic laborum cum deleniti dolore sapiente recusandae, omnis libero enim deserunt quidem excepturi tenetur.
                                </p>
                                <div class="mt-4">
                                    <button class="border-2 border-customGreen bg-customGreen text-white py-2 px-4 rounded-lg hover:bg-bigTitle hover:text-black transition">Pesan Mobil</button>
                                </div>
                                <div class="  md:text-right text-2xl font-bold mt-4">
                                    Rp 1.700.000 / Hari
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="flex flex-col md:flex-row bg-navbarTitle p-6 md:p-8 rounded-xl gap-6">
                <!-- Section Kiri -->
                <div class="w-full md:w-1/2 space-y-6">
                    <div class="text-[#ffd700] font-semibold text-xl md:text-2xl">Tentang Kami</div>
                    <div class="text-white font-bold text-3xl md:text-4xl lg:text-5xl leading-snug">
                        Travel Door to Door: Perjalanan Nyaman & Aman
                    </div>
                    <div class="text-white font-medium text-justify leading-relaxed text-sm md:text-base">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorem nihil laborum esse, hic ea mollitia dicta, reprehenderit consequatur corrupti ipsa labore quos libero molestiae dolore non consequuntur, sint nisi? 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid quisquam numquam placeat quo delectus magni laboriosam! Quibusdam perferendis a qui officiis voluptas animi cupiditate, optio odit, harum numquam quasi saepe!
                    </div>
        
                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-bigTitle rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/price-tentang-kami.svg') }}" alt="Harga Terjangkau" class="w-16 md:w-20 mx-auto">
                            <div class="text-xl md:text-2xl ">Harga Terjangkau</div>
                        </div>
                        
                        <div class="bg-bigTitle rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/driver-tentang-kami.svg') }}" alt="Driver Profesional" class="w-16 md:w-20 mx-auto">
                            <div class="text-lg md:text-xl ">Driver Profesional & Berpengalaman</div>
                        </div>
                        
                        <div class="bg-bigTitle rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/car-tentang-kami.svg') }}" alt="Armada Terawat" class="w-16 md:w-20 mx-auto">
                            <div class="text-xl md:text-2xl ">Armada Dijamin Terawat</div>
                        </div>
        
                        <div class="bg-bigTitle rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/service-tentang-kami.svg') }}" alt="Pelayanan Cepat" class="w-16 md:w-20 mx-auto">
                            <div class="text-xl md:text-2xl ">Pelayanan Cepat & Ramah</div>
                        </div>
                    </div>
                </div>
        
                <!-- Section Kanan -->
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('img/dummy-image-portrait.jpg') }}" alt="Dummy Image" class="rounded-xl w-full max-w-sm md:max-w-md lg:max-w-lg md:block hidden">
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-2">
                Galeri
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Aktivitas dan Fasilitas Brightglobaltrans
            </div>
            <div class="bg-customGreen p-5 md:p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                    <div><img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="transition-transform transform hover:scale-105 hover:shadow-lg"></div>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-2">
                Hubungi Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Tidak ada kontak selain platform dan kontak yang tertera
            </div>
            <div class="flex flex-col md:flex-row gap-8 p-6">
                <!-- Kontak Informasi -->
                <div class="w-full md:w-1/2 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Kontak Item dengan Hover -->
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/wa-hubungi-kami.svg') }}" alt="WhatsApp" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">081394234397</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/email-hubungi-kami.svg') }}" alt="Email" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">Global@trans.com</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/ig-hubungi-kami.svg') }}" alt="Instagram" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">@globalTrans</span>
                        </div>
            
                        <div class="bg-bigTitle rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/fb-hubungi-kami.svg') }}" alt="Facebook" class="w-16 md:w-20">
                            <span class="text-lg md:text-2xl font-semibold text-white">Brightglobaltrans</span>
                        </div>
                    </div>
                </div>
            
                <!-- Google Map -->
                <div class="w-full md:w-1/2">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2820340975018!2d107.57189317475641!3d-6.856760593141673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6a81c9521bb%3A0xaa202e42a0872278!2sJl.%20Mekarwangi%20No.79%2C%20Sariwangi%2C%20Kec.%20Parongpong%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat%2040559!5e0!3m2!1sen!2sid!4v1736689481700!5m2!1sen!2sid"
                        class="w-full h-72 md:h-96 rounded-xl transition-transform transform hover:scale-105 hover:shadow-lg" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-app>
