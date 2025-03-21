<x-app :settings="$settings">
    <div class="z-0 mt-[72px] md:mt-[80px]">
        <div>
            <div
                class="fade-animation flex flex-col justify-center items-center text-center space-y-4 px-4 md:px-16 lg:px-32 py-8 my-5 md:my-10">
                <div class="font-[Poppins] text-3xl md:text-5xl lg:text-6xl font-bold text-newGold ">
                    ARMADA KAMI
                </div>
                <div class="text-sm md:text-lg lg:text-xl text-customGreen font-semibold leading-relaxed">
                    Jaminan kualitas dan kenyamanan ada di tangan kami. Setiap armada kami dirawat dengan baik untuk
                    memastikan Anda tiba di tujuan dengan aman dan nyaman.
                </div>
            </div>
        </div>
        <div>
            <div class="mx-10 md:mx-16">
                @foreach ($cars as $car)
                    <div
                        class="bg-newGreen flex flex-col md:flex-col lg:flex-row p-8 md:p-6 gap-6 rounded-xl mb-6 shadow-lg ">
                        {{-- Gambar mobil --}}
                        <div class="">
                            <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->car_name }}"
                                class="rounded-xl w-full lg:w-[29rem] lg:h-[14rem]  object-cover">
                        </div>

                        {{-- Deskripsi singkat --}}
                        <div class="text-[#E0E0E0] w-full md:w-full lg:w-8/12 flex flex-col justify-between">
                            <div>
                                <h2 class="font-[Poppins] text-2xl font-bold text-newGold">{{ $car->car_name }}</h2>
                                <div class="grid grid-cols-2 md:flex gap-4 my-6 md:my-2 text-sm">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                                            </path>
                                        </svg>
                                        <span>{{ $car->model ? $car->model->model_name : 'Tidak Ada Model' }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                            </path>
                                        </svg>
                                        <span>{{ $car->seat_capacity }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 fill-newGold" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z">
                                            </path>
                                        </svg>
                                        <span>{{ $car->transmission }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-[15px] h-[15px] fill-newGold" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M80 96c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32l96 0c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32h16c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64l16 0zm304 96c0-8.8-7.2-16-16-16s-16 7.2-16 16v32H320c-8.8 0-16 7.2-16 16s7.2 16 16 16h32v32c0 8.8 7.2 16 16 16s16-7.2 16-16V256h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H384V192zM80 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16z">
                                            </path>
                                        </svg>
                                        <span>{{ $car->engine_capacity }} cc</span>
                                    </div>
                                </div>

                                {{-- Deskripsi --}}
                                <p class="line-clamp-2 lg:line-clamp-3">
                                    {{ $car->description }}
                                </p>
                            </div>

                            {{-- Harga dan tombol selengkapnya --}}
                            <div class="flex flex-col md:flex-row justify-between lg:mt-0 mt-8 space-y-4">
                                <div class="mb-4 md:mb-0">
                                    <a href="{{ route('car-detail', ['id' => $car->id]) }}"
                                        class="font-[poppins] border-2 border-newGold bg-newGold text-hitam py-2 px-4 rounded-lg hover:bg-newGreen hover:text-newGold transition">
                                        Selengkapnya
                                    </a>
                                </div>
                                <div class="md:text-right text-lg md:text-xl font-bold">
                                    Rp {{ number_format($car->price, 0, ',', '.') }} <span class="text-newGold">/
                                    </span> Hari
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</x-app>
