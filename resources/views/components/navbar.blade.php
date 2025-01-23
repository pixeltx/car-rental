<div>
    <div class="font-[Poppins]">
        <!-- Navbar -->
        <header id="navbar" class="bg-newGreen w-full z-50 transition duration-300">
            <nav class="flex justify-between items-center w-full shadow-md md:px-16 px-2">
                <!-- Logo dan Brand -->
                <a href="{{ route('index') }}" class="flex justify-center items-center gap-2">
                    <img class="w-14 my-3 cursor-pointer" src="{{ asset('img/Logo.png') }}" alt="Logo">
                    <div class="text-baseBackground  text-lg">
                        BrightGlobaltrans
                    </div>
                </a>

                <!-- Navigation Links -->
                <div class="nav-links md:static absolute bg-newGreen md:min-h-fit min-h-[60vh] left-0 top-0 md:w-auto w-full flex items-center px-5 md:translate-x-0 transform -translate-x-full duration-300">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-baseBackground">
                        <li>
                            <a href="{{ route('index') }}" class="relative group {{ request()->routeIs('index') ? 'text-newGold ' : '' }}">
                                Home
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('index') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('rent') }}" class="relative group {{ request()->routeIs('rent') ? 'text-newGold ' : '' }}">
                                Mobil
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('rent') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('aboutus') }}" class="relative group {{ request()->routeIs('aboutus') ? 'text-newGold ' : '' }}">
                                Tentang
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('aboutus') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimoni') }}" class="relative group {{ request()->routeIs('testimoni') ? 'text-newGold ' : '' }}">
                                Testimoni
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('testimoni') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('information') }}" class="relative group {{ request()->routeIs('information') ? 'text-newGold ' : '' }}">
                                Informasi
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('information') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" class="relative group {{ request()->routeIs('blog') ? 'text-newGold ' : '' }}">
                                Blog
                                <span class="absolute left-0 bottom-0 h-[2px] bg-newGold transition-all duration-300 {{ request()->routeIs('blog') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kontak Button & Hamburger Icon -->
                <div class="flex items-center gap-2 md:gap-6 ">
                    <a href="https://wa.me/+6281214955293" class="bg-newGold text-putih border-2 border-newGold hover:bg-transparent hover:text-newGold px-5 py-2 rounded-full transition duration-300">
                        Kontak
                    </a>
                    <ion-icon name="menu" class="text-3xl cursor-pointer md:hidden text-baseBackground" onclick="toggleMenu()"></ion-icon>
                </div>
            </nav>
        </header>
    </div>

    <!-- Script -->
    <script>
        const navbar = document.getElementById('navbar');
        const stickyOffset = navbar.offsetTop;

        // Add scroll event listener
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > stickyOffset) {
                navbar.style.position = 'fixed';
                navbar.style.top = '0';
                navbar.style.left = '0';
                navbar.style.width = '100%';
                navbar.classList.add('shadow-lg'); // Optional: Add shadow when sticky
            } else {
                navbar.style.position = 'static';
                navbar.classList.remove('shadow-lg');
            }
        });

        // Toggle menu for mobile
        const navLinks = document.querySelector('.nav-links');
        function toggleMenu() {
            navLinks.classList.toggle('translate-x-0');
        }
    </script>
</div>
