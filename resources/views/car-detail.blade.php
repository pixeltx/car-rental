<x-app>
    <div class="mx-4 sm:mx-6 lg:mx-16 mt-6 md:mt-12 lg:mt-16 mb-16">
        <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-6 gap-6">
            <!-- Section 1 -->
            <div class="md:col-span-2 md:row-span-2  overflow-hidden">
                <div class="shadow-lg ">
                    <div class="bg-newGreen uppercase text-center font-semibold text-2xl md:text-3xl py-4 md:py-6">
                        {{ $car->car_name }}
                    </div>
                    <div class="bg-[#f0f0f0] flex justify-center items-center py-6 md:py-8">
                        <div class="grid grid-cols-2 md:flex gap-4 text-sm md:text-lg">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path></svg>
                                <span>{{ $car->model ? $car->model->model_name : 'Tidak Ada Model' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg>
                                <span>{{ $car->seat_capacity }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg>
                                <span>{{ $car->transmission }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 fill-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z"></path> </svg>
                                <span>{{ $car->engine_capacity }} cc</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="md:col-span-2 md:row-span-2  overflow-hidden">
                <div class="shadow-lg">

                    <div class="bg-newGreen uppercase text-center font-semibold text-2xl md:text-3xl py-4 md:py-6">
                        Booking Now
                    </div>
                    <div class="bg-[#f0f0f0]">
                        <div class="flex flex-col md:flex-row items-center justify-around font-semibold py-6 text-lg md:text-xl">
                            <span>Rp {{ number_format($car->price, 0, ',', '.') }}/Hari</span>
                            <span>Rp {{ number_format($car->price*7, 0, ',', '.') }}/Minggu</span>
                        </div>
                        <div class="px-6 md:px-10 pb-6">
                            <button class="text-sm md:text-lg font-semibold w-full rounded-lg border-2 border-black py-2 bg-newGreen text-white hover:text-black hover:bg-transparent transition duration-300 shadow-md">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="md:col-span-2 md:row-span-4 overflow-hidden">
                <div class="swiper">
                    <div class="wrapper overflow-hidden mx-10">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide">
                                <img src="{{ asset('img/dummyImage.jpg') }}" alt="Car image" class="w-full  shadow-md">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/dummyImage.jpg') }}" alt="Car image" class="w-full  shadow-md">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('img/dummyImage.jpg') }}" alt="Car image" class="w-full  shadow-md">
                            </div>
                        </div>
                        <div class="pt-6 ">
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="md:col-span-2 md:row-span-4 overflow-hidden">
                <div class="shadow-lg rounded-lg">

                    <div class="bg-newGreen uppercase text-center font-semibold text-2xl md:text-3xl py-4 md:py-6">
                        Description
                    </div>
                    <div class="bg-[#f0f0f0] text-justify p-6 md:p-8 leading-relaxed">
                        {{ $car->description }}
                    </div>
                </div>
            </div>
        </div>        
        <div>
            <div class="flexjustify-center items-center text-center  md:px-16 lg:px-32 my-5 md:my-10">
                <div class="text-3xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] md:drop-shadow-lg">
                    Fasilitas
                </div>
            </div>
            <div class="flex md:flex-row flex-col justify-evenly space-y-10 md:space-y-0"> 
                <div class="w-full md:w-96">
                    <div class="bg-newGreen  text-center font-semibold text-2xl md:text-3xl py-4">
                        Include
                    </div>
                    <div class="bg-[#f0f0f0] px-10 py-6 md:py-8 min-h-96 max-h-96">
                        <ul class="list-disc list-outside text-base md:text-lg">
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                        </ul>
                    </div>
                </div>
                <div class="w-full md:w-96">
                    <div class="bg-newGreen  text-center font-semibold text-2xl md:text-3xl py-4">
                        Exclude
                    </div>
                    <div class="bg-[#f0f0f0] px-10 py-6 md:py-8  min-h-96 max-h-96">
                        <ul class="list-disc list-outside text-base md:text-lg ">
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                            <li>Dummy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/slide-car-detail.js')
</x-app>
