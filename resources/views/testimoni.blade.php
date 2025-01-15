<x-app>
    <div class="z-10">
        <div class="">
            <div class="flex flex-col justify-center items-center text-center space-y-4 px-4 md:px-16 lg:px-32 py-8 my-5 md:my-10">
                <div class="text-3xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] drop-shadow-lg">
                    TESTIMONI
                </div>
                <div class="text-sm md:text-lg lg:text-xl text-customGreen font-semibold leading-relaxed">
                    Lihat pengalaman pelanggan kami melalui galeri foto di bawah ini. Kami bangga telah melayani berbagai kebutuhan sewa kendaraan, 
                    mulai dari liburan keluarga hingga perjalanan bisnis. Setiap foto mencerminkan komitmen kami untuk memberikan layanan terbaik 
                    dan kendaraan berkualitas.
                </div>
            </div>
        </div>    
        
        <div class="px-4 md:px-10">
            <div class="swiper mb-10">
                <div class="wrapper overflow-hidden mx-10">
                    <div class="flex md:gap-2 swiper-wrapper">   
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="pt-10">
                        <div class="swiper-pagination "></div>
                    </div>
                    
                    {{-- <div class="flex justify-center items-center">
                        <div class="swiper-pagination"></div>
                    </div> --}}
                    <div class="swiper-button-prev "></div>
                    <div class="swiper-button-next"></div>
                    {{-- <div class="flex justify-center items-center py-5 gap-4">
                        <div class="swiper-button-prev">
                            <svg class="w-[35px] h-[35px] fill-customGreen" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>
                              </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg class="w-[35px] h-[35px] fill-customGreen" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app>