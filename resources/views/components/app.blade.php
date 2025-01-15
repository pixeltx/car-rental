<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    <!--link tailwind-->
    @vite('resources/css/app.css')
    <!--link js slide testimoni-->
    @vite('resources/js/slide-testimoni.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
        <!--link swiperjs css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">   
    

    
</head>


<body class="">
    
    <x-navbar />

    {{ $slot }}

    <x-footer />

    <!--link swiperjs js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!--link swiper flowbite-->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!--link poppins icons-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    <script>
        function showRuteKhusus() {
            document.getElementById('ruteContainer').innerHTML = `
                <div class="py-4">
                    <span class="text-lg md:text-xl font-semibold px-10">Untuk perjalanan antar kota</span>
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
                    <button class="text-[#fbf7eb] bg-bigTitle w-full h-14 rounded-xl text-lg md:text-xl font-bold border-2 border-bigTitle hover:bg-[#f6f1eb] hover:text-bigTitle trans transition duration-300">Hubungi Kami</button>
                </div>
            `;
            setActiveButton('ruteKhusus', 'ruteInternational');
        }
    
        function showRuteInternational() {
            document.getElementById('ruteContainer').innerHTML = `
                <div class="py-4">
                    <span class="text-base md:text-xl font-semibold px-10">Untuk perjalanan internasional</span>
                </div>
                <div>
                    <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Swiss</div>
                </div>
                <div>
                    <div class="px-10 py-4">Jerman</div>
                </div>
                <div>
                    <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Singapura</div>
                </div>
                <div>
                    <div class="px-10 py-4">Korea Selatan</div>
                </div>
                 <div>
                    <div class="bg-[#494d2d] text-[#fbf7eb] px-10 py-4">Jepang</div>
                </div>
                <div>
                    <div class="px-10 py-4">Sydney, Australia </div>
                </div>
                <div class="mx-6 mt-4 mb-2">
                        <div class="bg-customGreen w-full h-0.5 ">
                        </div>
                    </div>
                <div class="p-5">
                    <button class="text-[#fbf7eb] bg-bigTitle w-full h-14 rounded-xl text-lg md:text-xl font-bold border-2 border-bigTitle hover:bg-[#f6f1eb] hover:text-bigTitle trans transition duration-300">Hubungi Kami</button>
                </div>
            `;
            setActiveButton('ruteInternational', 'ruteKhusus');
        }
    
        function setActiveButton(activeId, inactiveId) {
            document.getElementById(activeId).classList.remove('text-customGreen', 'bg-[#fbf7eb]');
            document.getElementById(activeId).classList.add('text-[#fbf7eb]', 'bg-bigTitle');
    
            document.getElementById(inactiveId).classList.remove('text-[#fbf7eb]', 'bg-bigTitle');
            document.getElementById(inactiveId).classList.add('text-customGreen', 'bg-[#fbf7eb]');
        }
    </script>
</body>


</html>