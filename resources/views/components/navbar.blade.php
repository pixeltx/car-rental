@props(['settings'])

<div>
    <div class="font-[poppins]">
        <!-- Navbar -->
        <header id="navbar" class="bg-newGreen w-full z-50 fixed top-0 transition-transform duration-500 ease-in-out">
            <nav class="flex justify-between items-center w-full shadow-md md:px-16 px-2">
                <!-- Logo dan Brand -->
                <a href="{{ route('index') }}" class="flex justify-center items-center gap-2 mr-4 md:mr-0">
                    <img class="w-14 my-3 cursor-pointer" src="{{ asset('img/Logo.png') }}" alt="Logo">
                    <div class="text-putih text-sm md:text-lg">
                        Bright Global trans
                    </div>
                </a>

                <!-- Navigation Links -->
                <div
                    class="nav-links lg:static absolute bg-newGreen lg:min-h-fit min-h-[50vh] md:min-h-[30vh] left-0 top-0 lg:w-auto w-full flex items-center px-5 lg:translate-x-0 transform -translate-x-full duration-300">
                    <ul class="flex lg:flex-row flex-col lg:items-center lg:gap-[4vw] gap-8 text-putih">
                        <li>
                            <a href="{{ route('index') }}" class="relative group ">
                                Home
                                <span
                                    class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('rent') }}" class="relative group ">
                                Mobil
                                <span
                                    class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('rent') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimoni') }}" class="relative group ">
                                Testimoni
                                <span
                                    class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('testimoni') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('aboutus') }}" class="relative group ">
                                Tentang Kami
                                <span
                                    class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('aboutus') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('information') }}" class="relative group ">
                                Informasi
                                <span
                                    class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('information') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kontak Button & Hamburger Icon -->
                <div class="flex items-center gap-2 lg:gap-6">
                    <a href="https://wa.me/{{ $settings['phone_number'] }}"
                        class="bg-newGold text-putih border-2 border-newGold hover:bg-transparent hover:text-newGold px-5 py-2 rounded-full transition duration-300">
                        Kontak
                    </a>
                    <ion-icon name="menu" class="text-3xl cursor-pointer lg:hidden text-putih"
                        onclick="toggleMenu()"></ion-icon>
                </div>
            </nav>
        </header>
    </div>

    <!-- Script -->
    <script>
        const navbar = document.getElementById('navbar');
        let lastScrollY = window.scrollY;
        let isNavbarHidden = false;

        // Scroll event listener
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > lastScrollY && !isNavbarHidden) {
                // Scroll ke bawah dan navbar sedang terlihat -> sembunyikan
                navbar.style.transform = 'translateY(-100%)';
                isNavbarHidden = true;
            } else if (currentScrollY < lastScrollY && isNavbarHidden) {
                // Scroll ke atas dan navbar tersembunyi -> munculkan
                navbar.style.transform = 'translateY(0)';
                isNavbarHidden = false;
            }

            // Update posisi scroll terakhir
            lastScrollY = currentScrollY;
        });

        // Toggle menu for mobile
        const navLinks = document.querySelector('.nav-links');

        function toggleMenu() {
            navLinks.classList.toggle('translate-x-0');
        }
    </script>
</div>
