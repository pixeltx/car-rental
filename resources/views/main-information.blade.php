<x-app :settings="$settings">
    <div class="pt-6 pb-12 md:space-y-10 z-10 mt-[72px] md:mt-[80px]">
        <!-- Pusat Informasi Section -->
        <div class="fade-animation text-center space-y-6 px-6 md:px-20 lg:px-32 py-8 ">
            <h1 class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-newGold ">
                PUSAT INFORMASI
            </h1>
            <p class="text-sm md:text-lg lg:text-xl text-customGreen font-semibold leading-relaxed">
                Pusat bantuan dan informasi untuk rental mobil seluruh kota besar di Indonesia. Hubungi kami untuk konsultasi.
                Rental mobil murah di Bandung, Jakarta, Jogjakarta, dan kota besar lain. Informasi tentang tata cara sewa mobil,
                syarat dan ketentuan, serta cara daftar member di BRIGHTGLOBALTRANS.
            </p>
        </div>

        <!-- Informasi Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 md:px-16 lg:px-32 text-[#222222]">
            <!-- Card 1 -->
            <div class="bg-newGold rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-lg md:text-xl font-bold text-center ">TATA CARA PEMINJAMAN</h2>
                <p class=" text-justify leading-relaxed mt-4">
                    {{ $settings['cara_peminjaman'] }}
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-newGold rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-lg md:text-xl font-bold text-center ">SYARAT DAN KETENTUAN</h2>
                <p class=" text-justify leading-relaxed mt-4">
                    {{ $settings['syarat_ketentuan'] }}
                </p>
            </div>
        </div>
    </div>
    <div class="mx-6 md:mx-16 lg:mx-32 mt-7 mb-20">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:1/2">
                <div class="flex flex-col justify-start space-y-5 text-[#222222]">
                    @foreach ($faqs as $index => $faq)
                        <div class="relative w-full bg-newGold shadow-md">
                            <!-- Checkbox sebagai trigger -->
                            <input type="checkbox" id="faq{{ $index }}" class="hidden peer">
                
                            <!-- Label mencakup pertanyaan & arrow -->
                            <label for="faq{{ $index }}" class="flex items-center justify-between cursor-pointer px-5 py-5 min-h-[50px]">
                                <span class="font-bold break-words flex-1">
                                    {{ $faq->question }}
                                </span>
                
                                <!-- Arrow -->
                                <svg class="w-5 h-5 fill-hitam transition-transform duration-500 peer-checked:rotate-180" 
                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </label>
                
                            <!-- Jawaban -->
                            <div class="max-h-0 overflow-hidden peer-checked:max-h-[200px] text-customGreen bg-white transition-[max-height] duration-500 ease-in-out">
                                <p class="p-5 text-sm">
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full md:1/2 flex justify-center items-center">
                <img src="{{ asset('img/dummy-image-portrait.jpg') }}" class="rounded-xl w-full max-w-sm md:max-w-md lg:max-w-lg md:block hidden" alt="">
            </div>
        </div>
    </div>
</x-app>
