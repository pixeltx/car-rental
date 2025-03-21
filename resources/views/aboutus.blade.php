<x-app :settings="$settings">
    <div class="mt-[72px] md:mt-[80px]">
        <div class="bg-cover" style="background-image: url('{{ asset('img/bg-rent.png') }}')">
            <div
                class="fade-animation flex flex-col justify-center items-center text-center space-y-4 md:space-y-8 px-4 md:px-16 lg:px-32 py-8 mb-5 md:mb-10">
                <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-newGold md:drop-shadow-lg">
                    Bright Global Trans
                </div>
                <div class="text-sm md:text-lg lg:text-xl text-[#fbf7eb] font-semibold leading-relaxed">
                    penyedia layanan sewa mobil dengan sopir untuk perjalanan lokal dan antar kota, serta layanan sewa
                    mobil internasional untuk destinasi global.
                </div>
                <div class="flex flex-row  gap-4 md:gap-10 items-center pb-4">
                    <a href="{{ route('rent') }}"
                        class="font-[poppins] text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        ORDER NOW
                    </a>
                    <a href="https://wa.me/+6281214955293"
                        class="font-[poppins] text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-customGreen hover:bg-transparent hover:border-baseBackground hover:text-baseBackground transition-colors duration-300">
                        CONTACT
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="flex flex-col lg:flex-row bg-newGreen p-6 sm:p-8 lg:p-10 rounded-xl gap-6 lg:gap-12">
                <!-- Section Kiri -->
                <div class="w-full lg:w-1/2 space-y-6">
                    <div class="font-[Poppins] text-newGold font-semibold text-lg sm:text-xl lg:text-2xl">Tentang Kami
                    </div>
                    <div class="text-white font-bold text-2xl sm:text-3xl lg:text-4xl leading-snug">
                        Travel Door to Door: Perjalanan Nyaman & Aman
                    </div>
                    <div class="text-white font-medium text-justify leading-relaxed text-sm sm:text-base md:text-lg">
                        Bright Global Trans adalah bagian dari PT Cahaya Pendidikan Internasional, yang menghadirkan
                        layanan transportasi berkualitas untuk perjalanan lokal maupun internasional. Kami menawarkan
                        Travel Door to Door dengan fokus pada kenyamanan, keamanan, dan kepuasan pelanggan.

                        Sebagai penyedia layanan sewa mobil dengan sopir, kami melayani perjalanan antar kota, bisnis,
                        wisata, hingga layanan charter eksklusif. Tak hanya itu, kami juga menghadirkan sewa mobil
                        internasional di berbagai negara untuk pengalaman perjalanan yang lebih praktis dan nyaman.

                    </div>

                    <!-- Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/price-tentang-kami.svg') }}" alt="Harga Terjangkau"
                                class="w-14 sm:w-16 md:w-20 mx-auto">
                            <div class="text-base sm:text-lg md:text-xl">Harga Terjangkau</div>
                        </div>

                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/driver-tentang-kami.svg') }}" alt="Driver Profesional"
                                class="w-14 sm:w-16 md:w-20 mx-auto">
                            <div class="text-base sm:text-lg md:text-xl">Driver Profesional & Berpengalaman</div>
                        </div>

                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/car-tentang-kami.svg') }}" alt="Armada Terawat"
                                class="w-14 sm:w-16 md:w-20 mx-auto">
                            <div class="text-base sm:text-lg md:text-xl">Armada Dijamin Terawat</div>
                        </div>

                        <div class="bg-newGold rounded-xl p-4 space-y-4 text-center">
                            <img src="{{ asset('img/service-tentang-kami.svg') }}" alt="Pelayanan Cepat"
                                class="w-14 sm:w-16 md:w-20 mx-auto">
                            <div class="text-base sm:text-lg md:text-xl">Pelayanan Cepat & Ramah</div>
                        </div>
                    </div>
                </div>

                <!-- Section Kanan -->
                <div class="w-full lg:w-1/2 flex justify-center items-center">
                    <img src="{{ asset('img/img-aboutus.jpg') }}" alt="Dummy Image"
                        class="rounded-xl w-full max-w-sm md:max-w-md lg:max-w-lg hidden lg:block">
                </div>
            </div>
        </div>
        {{-- <div class="mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="font-[Poppins] text-2xl sm:text-3xl lg:text-5xl font-bold text-center text-newGold mb-6 lg:mb-10">
                Team Support
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="space-y-4">
                    <div class="w-full">
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="Team Member" class="rounded-xl w-full h-auto">
                    </div>
                    <div class="text-center text-sm sm:text-base md:text-lg">
                        Desc desc desc desc
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="space-y-4">
                    <div class="w-full">
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="Team Member" class="rounded-xl w-full h-auto">
                    </div>
                    <div class="text-center text-sm sm:text-base md:text-lg">
                        Desc desc desc desc
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="space-y-4">
                    <div class="w-full">
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="Team Member" class="rounded-xl w-full h-auto">
                    </div>
                    <div class="text-center text-sm sm:text-base md:text-lg">
                        Desc desc desc desc
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="space-y-4">
                    <div class="w-full">
                        <img src="{{ asset('img/dummyImage1banding1.jpg') }}" alt="Team Member" class="rounded-xl w-full h-auto">
                    </div>
                    <div class="text-center text-sm sm:text-base md:text-lg">
                        Desc desc desc desc
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="mt-10 md:mt-16 lg:mt-20 mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-newGold mb-2">
                Hubungi Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Tidak ada kontak selain platform dan kontak yang tertera
            </div>
            <div class="flex flex-col lg:flex-row gap-8 p-6">
                <!-- Kontak Informasi -->
                <div class="w-full lg:w-1/2 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-6">
                        <div class="md:w-72">
                            <a href="https://wa.me/{{ $settings['phone_number'] }}"
                                class="fade-animation bg-newGold rounded-xl p-4 flex items-center gap-3 transition-transform transform hover:scale-105 hover:shadow-lg overflow-hidden">
                                <img src="{{ asset('img/wa-hubungi-kami.svg') }}" alt="WhatsApp"
                                    class="w-6 sm:w-10 flex-shrink-0">
                                <span class="text-white font-semibold text-sm md:text-base leading-tight truncate">
                                    0812-1495-5293
                                </span>
                            </a>
                        </div>
                        <div class="md:w-80">
                            <a href="mailto:{{ $settings['email_address'] }}"
                                class="fade-animation bg-newGold rounded-xl p-4 flex items-center gap-3 transition-transform transform hover:scale-105 hover:shadow-lg overflow-hidden">
                                <img src="{{ asset('img/email-hubungi-kami.svg') }}" alt="Email"
                                    class="w-6 sm:w-10 flex-shrink-0">
                                <span class="text-white font-semibold text-sm md:text-base leading-tight truncate">
                                    brightglobaltrans@gmail.com
                                </span>
                            </a>
                        </div>


                        <div class="md:w-72">
                            <a href="{{ $settings['instagram_link'] }}"
                                class="fade-animation bg-newGold rounded-xl p-4 flex items-center gap-3 transition-transform transform hover:scale-105 hover:shadow-lg overflow-hidden">
                                <img src="{{ asset('img/ig-hubungi-kami.svg') }}" alt="Instagram"
                                    class="w-6 sm:w-10 flex-shrink-0">
                                <span class="text-white font-semibold text-sm md:text-base leading-tight truncate">
                                    @brightglobaltrans
                                </span>
                            </a>
                        </div>

                        <div class="md:w-80">
                            <a href="{{ $settings['tiktok_link'] }}"
                                class="fade-animation bg-newGold rounded-xl p-4 flex items-center gap-3 transition-transform transform hover:scale-105 hover:shadow-lg overflow-hidden">
                                <img src="{{ asset('img/tiktok-hubungi-kami.svg') }}" alt="Tiktok"
                                    class="w-6 sm:w-10 flex-shrink-0">
                                <span class="text-white font-semibold text-sm md:text-base leading-tight truncate">
                                    @brightglobaltrans
                                </span>
                            </a>
                        </div>

                    </div>


                </div>

                <!-- Google Map -->
                <div class="w-full lg:w-1/2 fade-animation">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2820340975018!2d107.57189317475641!3d-6.856760593141673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6a81c9521bb%3A0xaa202e42a0872278!2sJl.%20Mekarwangi%20No.79%2C%20Sariwangi%2C%20Kec.%20Parongpong%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat%2040559!5e0!3m2!1sen!2sid!4v1736689481700!5m2!1sen!2sid"
                        class="w-full h-72 md:h-80 lg:h-96 rounded-xl transition-transform transform hover:scale-105 hover:shadow-lg"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</x-app>
