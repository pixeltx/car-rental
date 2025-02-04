<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!--link tailwind-->
    @vite('resources/css/app.css')
    
    <!--Favicon-->
    <link rel="shortcut-icon" href="{{ asset('img/Logo.png') }}">
    <link rel="icon" href="{{ asset('img/Logo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!--link swiperjs css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">   

    
    

    
</head>


<body class="font-[open-sans] flex flex-col min-h-screen">
    @stack('settings')
    
    <x-navbar :settings="$settings"/>

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-footer :settings="$settings"/>

    <!--link swiperjs js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <!--link swiper flowbite-->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!--link poppins icons-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script>
    window.settings = @json($settings);
    const ruteContainer = document.getElementById("ruteContainer");
    const phoneNumber = window.settings.phone_number || null;

        function showRuteKhusus() {
            ruteContainer.style.opacity = "0"; // Mulai dengan opacity 0
            setTimeout(() => {
                ruteContainer.innerHTML = `
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
                                <div class="bg-newGreen w-full h-0.5"></div>
                            </div>
                            <div class="p-5">
                                <a href="https://wa.me/${phoneNumber}" class="font-[poppins] flex justify-center items-center text-[#fbf7eb] bg-newGold w-full h-14 rounded-xl text-lg md:text-xl font-bold border-2 border-newGold hover:bg-[#f6f1eb] hover:text-newGold trans transition duration-300">Hubungi Kami</a>
                            </div>
                        `;
                ruteContainer.style.opacity = "1"; // Fade-in konten
            }, 300); // Delay sebelum mengganti konten
            setActiveButton("ruteKhusus", "ruteInternational");
        }

        function showRuteInternational() {
            ruteContainer.style.opacity = "0";
            setTimeout(() => {
                ruteContainer.innerHTML = `
                            <div class="py-4">
                                <span class="text-lg md:text-xl font-semibold px-10">Untuk perjalanan internasional</span>
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
                                <div class="px-10 py-4">Sydney, Australia</div>
                            </div>
                            <div class="mx-6 mt-8 mb-2">
                                <div class="bg-newGreen w-full h-0.5"></div>
                            </div>
                            <div class="p-5">
                                <a href="https://wa.me/${phoneNumber}" class="font-[poppins] flex justify-center items-center text-[#fbf7eb] bg-newGold w-full h-14 rounded-xl text-lg md:text-xl font-bold border-2 border-newGold hover:bg-[#f6f1eb] hover:text-newGold trans transition duration-300">Hubungi Kami</a>
                            </div>
                        `;
                ruteContainer.style.opacity = "1";
            }, 300);
            setActiveButton("ruteInternational", "ruteKhusus");
        }

        function setActiveButton(activeId, inactiveId) {
            document
                .getElementById(activeId)
                .classList.remove("text-newGreen", "bg-[#fbf7eb]");
            document
                .getElementById(activeId)
                .classList.add("text-[#fbf7eb]", "bg-newGold");

            document
                .getElementById(inactiveId)
                .classList.remove("text-[#fbf7eb]", "bg-newGold");
            document
                .getElementById(inactiveId)
                .classList.add("text-newGreen", "bg-[#fbf7eb]");
        }

        // Memanggil fungsi untuk menampilkan Rute Khusus saat halaman dimuat
        document.addEventListener("DOMContentLoaded", () => {
            showRuteKhusus();
    });

    document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute('data-target');
                let start = 0;
                const increment = Math.ceil(target / 50); // Kecepatan hitung
                const duration = 2000; // Durasi dalam ms
                const stepTime = duration / (target / increment);

              
                const suffix = counter.querySelector("span") ? counter.querySelector("span").outerHTML : "";

                const updateCount = () => {
                    start += increment;
                    if (start >= target) {
                        counter.innerHTML = target + suffix; 
                    } else {
                        counter.innerHTML = start + suffix;
                        setTimeout(updateCount, stepTime);
                    }
                };

                updateCount();
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});

    </script>
    
</body>


</html>