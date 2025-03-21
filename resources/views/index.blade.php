<x-app :settings="$settings" title="Beranda">
    <div class="overflow-hidden mt-[30px]">
        <div class="mb-20">
            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-[100vh] md:min-h-screen sm:h-[70vh] overflow-hidden">
                    <!-- Slider Images -->
                    <div class="absolute inset-0 z-10">
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/rmada-bgt-slider-1.jpg') }}"
                                class="absolute block w-full h-full object-cover md:object-cover sm:object-contain sm:object-center"
                                alt="">
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('img/rmada-bgt-slider-2.jpg') }}"
                                class="absolute block w-full h-full object-cover md:object-cover sm:object-contain sm:object-center"
                                alt="">
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/rmada-bgt-slider-3.jpg') }}"
                                class="absolute block w-full h-full object-cover md:object-cover sm:object-contain sm:object-center"
                                alt="">
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/rmada-bgt-slider-4.jpg') }}"
                                class="absolute block w-full h-full object-cover md:object-cover sm:object-contain sm:object-center"
                                alt="">
                        </div>
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="{{ asset('img/rmada-bgt-slider-5.jpg') }}"
                                class="absolute block w-full h-full object-cover md:object-cover sm:object-contain sm:object-center"
                                alt="">
                        </div>
                    </div>

                    <!-- Text Content -->
                    <div
                        class="fade-animation absolute inset-0 z-20 flex flex-col items-center justify-center px-6 md:px-16 text-center text-white">
                        <h1
                            class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-newGold drop-shadow-xl mb-5">
                            Bright Global Trans
                        </h1>
                        <div class="bg-black/40 p-4 md:p-6 rounded-lg">
                            <p class="text-sm md:text-lg lg:text-xl text-white font-medium drop-shadow-xl">
                                Penyedia layanan sewa mobil & travel yang mengutamakan kenyamanan, keamanan, dan
                                kepuasan pelanggan.
                                Dengan armada terbaru dan driver profesional, kami siap mengantar perjalanan Anda dengan
                                layanan terbaik,
                                baik untuk perjalanan lokal, antar kota, maupun internasional.
                            </p>
                        </div>
                        <div class="font-[poppins] flex flex-col md:flex-row gap-4 mt-6">
                            <a href="{{ route('rent') }}"
                                class="text-sm md:text-lg border-2 border-newGold py-2 px-6 md:px-8 text-newGold hover:text-white hover:bg-newGreen hover:border-newGreen transition duration-300">
                                ORDER NOW
                            </a>
                            <a href="https://wa.me/{{ $settings['phone_number'] }}"
                                class="text-sm md:text-lg border-2 border-newGold py-2 px-6 md:px-8 text-newGold hover:text-white hover:bg-newGreen hover:border-newGreen transition duration-300">
                                CONTACT
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="px-8 md:px-28">
            <div class="flex flex-row flex-wrap justify-center gap-6 lg:gap-10">

                <!-- Card 2 -->
                <div id="animate"
                    class="w-96 transition-transform transform hover:scale-105 hover:shadow-lg p-6 rounded-lg flex flex-col items-center">
                    <div class="h-28 flex items-center justify-center">
                        <img src="{{ asset('img/partner.svg') }}" alt="Partner Icon" class="w-20 md:w-28">
                    </div>
                    <p class="text-center my-4 text-4xl md:text-5xl text-newGold counter" data-target="2000">
                        0<span class="text-lg md:text-xl align-top text-newGreen">+</span>
                    </p>
                    <p class="text-center text-hitam font-semibold text-base md:text-lg">
                        Customer
                    </p>
                </div>

                <!-- Card 3 -->
                <div id="animate"
                    class="w-96 transition-transform transform hover:scale-105 hover:shadow-lg p-6 rounded-lg flex flex-col items-center">
                    <div class="h-28 flex items-center justify-center">
                        <img src="{{ asset('img/car.svg') }}" alt="Car Icon" class="w-20 md:w-28">
                    </div>
                    <p class="text-center my-4 text-4xl md:text-5xl text-newGold counter" data-target="200">
                        0<span class="text-lg md:text-xl align-top text-newGreen">+</span>
                    </p>
                    <p class="text-center text-hitam font-semibold text-base md:text-lg">
                        Kendaraan
                    </p>
                </div>

                <!-- Card 4 -->
                <div id="animate"
                    class="w-96 transition-transform transform hover:scale-105 hover:shadow-lg p-6 rounded-lg flex flex-col items-center">
                    <div class="h-28 flex items-center justify-center">
                        <img src="{{ asset('img/maps.svg') }}" alt="Maps Icon" class="w-20 md:w-28">
                    </div>
                    <p class="text-center my-4 text-4xl md:text-5xl text-newGold counter" data-target="20">
                        0<span class="text-lg md:text-xl align-top text-newGreen">+</span>
                    </p>
                    <p class="text-center text-hitam font-semibold text-base md:text-lg">
                        Pilihan Rute
                    </p>
                </div>
            </div>
        </div>


        <div class="mt-10 md:mt-16 lg:mt-20">
            <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-newGold mb-2">
                Layanan Kami
            </div>
            <div class="text-hitam text-center text-sm md:text-xl mb-2 md:mb-4">
                Pilih Layanan Terbaik Dari Kami
            </div>
            <div class="px-8 py-10 flex flex-wrap justify-center gap-5 items-stretch">
                <!-- REGULAR Section -->
                <div
                    class="opacity-0 transform translate-y-10 transition-all duration-1000 fade-animation bg-newGreen px-5 py-4 rounded-xl text-putih w-full sm:w-80 md:w-96 lg:w-[23rem] flex flex-col min-h-[36rem]">
                    <div class="text-center text-putih font-semibold text-2xl">REGULAR</div>
                    <div>
                        <img src="{{ asset('img/layanan-reguler.jpg') }}"
                            class="rounded-lg pt-3 pb-6 w-full h-60 object-cover">
                    </div>
                    <div class="flex-grow">
                        <ul class="list-outside leading-relaxed text-justify space-y-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Termasuk driver, ideal untuk perjalanan dalam kota.
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Durasi fleksibel: harian atau mingguan.
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Armada nyaman untuk keluarga, wisata, dan bisnis.
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-4">
                        <a href="https://wa.me/{{ $settings['phone_number'] }}"
                            class="flex justify-center items-center bg-newGold text rounded-lg w-full h-14 text-bgPutih font-semibold text-xl border-2 border-newGold hover:bg-newGreen hover:text-newGold transition duration-300">Pesan</a>
                    </div>
                </div>

                <!-- Most Picked Section -->
                <div
                    class="opacity-0 transform translate-y-10 transition-all duration-1000 fade-animation bg-newGold rounded-xl p-2 w-full sm:w-80 md:w-96 lg:w-[23rem] flex flex-col min-h-[36rem]">
                    <div class="text-center text-putih font-semibold text-xl pb-2 w-full">Most Picked</div>
                    <div class="bg-newGreen px-5 py-4 rounded-xl text-putih w-full flex flex-col flex-grow">
                        <div class="text-center text-putih font-semibold text-2xl">CHARTER</div>
                        <div>
                            <img src="{{ asset('img/layanan-charter.jpg') }}"
                                class="rounded-lg pt-3 pb-6 w-full h-60 object-cover">
                        </div>
                        <div class="flex-grow">
                            <ul class="list-outside leading-relaxed space-y-2 text-justify">
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                    Cocok untuk perjalanan luar kota & acara khusus.
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                    Pilihan mobil lebih besar: Hiace, atau Bus.
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                    Rute & jadwal fleksibel sesuai kebutuhan.
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-center pt-4">
                            <a href="https://wa.me/{{ $settings['phone_number'] }}"
                                class="flex justify-center items-center bg-newGold text rounded-lg w-full h-14 text-bgPutih font-semibold text-xl border-2 border-newGold hover:bg-newGreen hover:text-newGold transition duration-300">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- INTERNATIONAL Section -->
                <div
                    class="opacity-0 transform translate-y-10 transition-all duration-1000 fade-animation bg-newGreen px-5 py-4 rounded-xl text-putih w-full sm:w-80 md:w-96 lg:w-[23rem] flex flex-col min-h-[36rem]">
                    <div class="text-center text-putih font-semibold text-2xl">INTERNATIONAL</div>
                    <div>
                        <img src="{{ asset('img/dummyImage.jpg') }}"
                            class="rounded-lg pt-3 pb-6 w-full h-60 object-cover">
                    </div>
                    <div class="flex-grow">
                        <ul class="list-outside leading-relaxed text-justify space-y-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Layanan di Swiss, Jerman, Singapura, Korea Selatan, Jepang & Sydney.
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Armada premium dengan standar internasional.
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('img/Checklist.svg') }}" alt="">
                                Bisa sewa dengan driver lokal untuk perjalanan lebih nyaman.
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-center pt-4">
                        <a href="https://wa.me/{{ $settings['phone_number'] }}"
                            class="flex justify-center items-center bg-newGold text rounded-lg w-full h-14 text-bgPutih font-semibold text-xl border-2 border-newGold hover:bg-newGreen hover:text-newGold transition duration-300">Pesan</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-cover mt-10 md:mt-16 lg:mt-20"
            style="background-image: url('{{ asset('img/bg-rent.png') }}')">
            <div
                class="opacity-0 transform translate-y-10 transition-all duration-1000 fade-animation px-8 md:px-28 lg:px-28 py-5">
                <div class="text-2xl md:text-3xl lg:text-5xl font-bold text-newGold mb-2">
                    Rute Kami
                </div>
                <div class="text-putih text-sm md:text-xl mb-4">
                    Kami menyediakan rute-rute ke kota-kota besar yang tersedia setiap harinya
                </div>
                <div class="flex md:flex-row flex-col gap-3 pb-4 text-base md:text-lg">
                    <button id="ruteKhusus"
                        class="font-[poppins] text-newGreen bg-putih py-2 px-7 font-semibold rounded-xl"
                        onclick="showRuteKhusus()">Rute Khusus</button>
                    <button id="ruteInternational"
                        class="font-[poppins] text-newGreen bg-putih py-2 px-7 font-semibold rounded-xl"
                        onclick="showRuteInternational()">Rute Internasional</button>
                </div>

                <div id="ruteContainer"
                    class="bg-[#f6f1eb] rounded-lg text-base md:text-lg opacity-0 transition-opacity duration-500">
                    <!-- Data awal ditampilkan di sini -->
                    <div class="py-4">
                        <span class=" text-base md:text-lg font-semibold px-10">Untuk perjalanan antar kota</span>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-putih px-10 py-4">Bandung - Bandara Soekarno-Hatta </div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Bandara Kertajati</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-putih px-10 py-4">Bandung - Yogyakarta</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Bali</div>
                    </div>
                    <div>
                        <div class="bg-[#494d2d] text-putih px-10 py-4">Bandung - Semarang</div>
                    </div>
                    <div>
                        <div class="px-10 py-4">Bandung - Surabaya</div>
                    </div>
                    <div class="mx-6 mt-8 mb-2">
                        <div class="bg-newGreen w-full h-0.5 "></div>
                    </div>
                    <div class="p-5 flex justify-center items-center">
                        <a href="https://wa.me/{{ $settings['phone_number'] }}"
                            class="font-[poppins] flex justify-center items-center text-putih bg-newGold w-full h-14 rounded-xl text-lg  md:text-xl font-bold border-2 border-newGold hover:bg-[#f6f1eb] hover:text-newGold  transition duration-300">Hubungi
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 md:mt-16 lg:mt-20">
            <div>
                <div>
                    <div
                        class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-newGold mb-2">
                        Paling Populer
                    </div>
                    <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                        Paling banyak disewa dan dicari
                    </div>
                    <div class="mx-10 md:mx-16">
                        @foreach ($mostPickedCars as $mostPickedCar)
                            <div
                                class="bg-newGreen flex flex-col md:flex-col lg:flex-row p-8 md:p-6 gap-6 rounded-xl mb-6 shadow-lg ">
                                {{-- Gambar mobil --}}
                                <div class="">
                                    <img src="{{ asset('storage/' . $mostPickedCar->image) }}"
                                        alt="{{ $mostPickedCar->car_name }}"
                                        class="rounded-xl w-full lg:w-[29rem] lg:h-[14rem]  object-cover">
                                </div>

                                {{-- Deskripsi singkat --}}
                                <div class="text-[#E0E0E0] w-full md:w-full lg:w-8/12 flex flex-col justify-between">
                                    <div>
                                        <h2 class="font-[Poppins] text-2xl font-bold text-newGold">
                                            {{ $mostPickedCar->car_name }}</h2>
                                        <div class="grid grid-cols-2 md:flex gap-4 my-6 md:my-2 text-sm">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                                                    </path>
                                                </svg>
                                                <span>{{ $mostPickedCar->model ? $mostPickedCar->model->model_name : 'Tidak Ada Model' }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                    </path>
                                                </svg>
                                                <span>{{ $mostPickedCar->seat_capacity }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z">
                                                    </path>
                                                </svg>
                                                <span>{{ $mostPickedCar->transmission }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <svg class="w-[15px] h-[15px] fill-newGold" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z">
                                                    </path>
                                                </svg>
                                                <span>{{ $mostPickedCar->engine_capacity }} cc</span>
                                            </div>
                                        </div>

                                        {{-- Deskripsi --}}
                                        <p class="line-clamp-2 lg:line-clamp-3">
                                            {{ $mostPickedCar->description }}
                                        </p>
                                    </div>

                                    {{-- Harga dan tombol selengkapnya --}}
                                    <div class="flex flex-col md:flex-row justify-between lg:mt-0 mt-8 space-y-4">
                                        <div class="mb-4 md:mb-0">
                                            <a href="{{ route('car-detail', ['id' => $mostPickedCar->id]) }}"
                                                class="font-[poppins] border-2 border-newGold bg-newGold text-hitam py-2 px-4 rounded-lg hover:bg-newGreen hover:text-newGold transition">
                                                Selengkapnya
                                            </a>
                                        </div>
                                        <div class="md:text-right text-lg md:text-xl font-bold">
                                            Rp {{ number_format($mostPickedCar->price, 0, ',', '.') }} <span
                                                class="text-newGold">/ </span> Hari
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

        <div class=" mt-10 md:mt-16 lg:mt-20 mx-6 md:mx-12 lg:mx-16">
            <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-newGold mb-2">
                Galeri
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Aktivitas dan Fasilitas Bright Global Trans
            </div>
            <div class="bg-newGreen p-5 md:p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($galleries as $gallery)
                        <div><img src="{{ asset('storage/' . $gallery->image) }}" alt=""
                                class="w-full lg:w-[27rem] md:h-[19rem] object-cover transition-transform transform hover:scale-105 hover:shadow-lg">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="mt-10 md:mt-16 lg:mt-20 mx-6 md:mx-12 lg:mx-16 my-8">
            <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-newGold mb-2">
                Blog dan Artikel Kami
            </div>
            <div class="text-center text-sm md:text-xl mb-4 md:mb-8">
                Blog dan Artikel teratas kami 
            </div>
            <div class="flex flex-col justify-center items-center md:flex-row gap-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($blogs as $blog)    
                    <!-- Card 1 -->
                    <div class="bg-white overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image 1" class="w-full h-52 object-cover">
                        </div>
                        <div class="pt-4">
                            <h3 class="text-lg font-bold text-gray-800">{{ $blog->title }}</h3>
                            <div class="text-sm text-gray-500 mt-2">Published on: {{ $blog->created_at->format('d F, Y') }}</div> <!-- Tanggal ditambahkan di sini -->
                            <a href="{{ route('blog-detail', ['id' => $blog->id]) }}" class="font-[poppins] flex items-center text-newGold hover:text-newGreen font-semibold mt-4 transition duration-300">
                                READ MORE
                                <span class="ml-2 text-xl">&rarr;</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                
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
