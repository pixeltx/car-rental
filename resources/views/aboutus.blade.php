<x-app>
    <div>
        <div class="bg-cover" style="background-image: url('{{ asset('img/bg-rent.png') }}')">
            <div class="flex flex-col justify-center items-center text-center space-y-4 md:space-y-8 px-4 md:px-16 lg:px-32 py-8 mb-5 md:mb-10">
                <div class="text-3xl md:text-5xl lg:text-6xl font-bold text-[#ffd700] md:drop-shadow-lg">
                    BrightGlobaltrans
                </div>
                <div class="text-sm md:text-lg lg:text-xl text-[#fbf7eb] font-semibold leading-relaxed">
                    penyedia layanan sewa mobil dengan sopir untuk perjalanan lokal dan antar kota, serta layanan sewa mobil internasional untuk destinasi global.
                </div>
                <div class="flex flex-row  gap-4 md:gap-10 items-center pb-4">
                    <a href="{{ route('rent') }}" class="text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        ORDER NOW
                    </a>
                    <a href="https://wa.me/+6281214955293" class="text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        CONTACT
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="flex flex-col md:flex-row bg-newGreen p-6 md:p-8 rounded-xl gap-6">
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
                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/price-tentang-kami.svg') }}" alt="Harga Terjangkau" class="w-16 md:w-20 mx-auto">
                            <div class="text-xl md:text-2xl ">Harga Terjangkau</div>
                        </div>
                        
                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/driver-tentang-kami.svg') }}" alt="Driver Profesional" class="w-16 md:w-20 mx-auto">
                            <div class="text-lg md:text-xl ">Driver Profesional & Berpengalaman</div>
                        </div>
                        
                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/car-tentang-kami.svg') }}" alt="Armada Terawat" class="w-16 md:w-20 mx-auto">
                            <div class="text-xl md:text-2xl ">Armada Dijamin Terawat</div>
                        </div>
        
                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
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
        <div>
            <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-center text-[#ffd700] mb-4 md:mb-8">
                Team support
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-5 mx-6 md:mx-12 lg:mx-16 my-8">
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" class="" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="">
                    </div>
                    <div class="text-center text-base md:text-xl">
                        Desc desc desc desc
                    </div>
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
                        <a href="https://wa.me/+6281214955293" class="bg-newGold rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/wa-hubungi-kami.svg') }}" alt="WhatsApp" class="w-10 md:w-14">
                            <span class="text-lg md:text-2xl font-semibold text-white">0812-1495-5293</span>
                        </a>
            
                        <div class="bg-newGold rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/email-hubungi-kami.svg') }}" alt="Email" class="w-10 md:w-14">
                            <span class="text-lg md:text-2xl font-semibold text-white">Global@trans.com</span>
                        </div>
            
                        <div class="bg-newGold rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/ig-hubungi-kami.svg') }}" alt="Instagram" class="w-10 md:w-14">
                            <span class="text-lg md:text-2xl font-semibold text-white">@globalTrans</span>
                        </div>
            
                        <div class="bg-newGold rounded-xl p-6 flex items-center gap-4 transition-transform transform hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('img/fb-hubungi-kami.svg') }}" alt="Facebook" class="w-10 md:w-14">
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