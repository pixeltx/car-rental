<x-app :settings="$settings">
    <div class="z-10 mt-[72px] md:mt-[80px]">
        <div class="">
            <div class="flex flex-col justify-center items-center text-center space-y-4 px-4 md:px-16 lg:px-32 py-8 my-5 md:my-10">
                <div class="font-[Raleway] text-3xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] md:drop-shadow-lg">
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
                    <div class="flex gap-2 swiper-wrapper">
                        @foreach ($testimonies as $testimony)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $testimony->image) }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                        @endforeach
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="w-[27rem] h-[16rem] object-cover">
                        </div>
                    </div>
                    <div class="pt-10">
                        <div class="swiper-pagination "></div>
                    </div>
                    
                   
                    <div class="">
                        <div class="swiper-button-prev "></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/slide-testimoni.js')
</x-app>