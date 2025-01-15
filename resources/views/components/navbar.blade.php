<div>
    <div class="font-[Poppins]">
        <!-- Sticky Header -->
        <header class="bg-navbarTitle sticky top-0 z-50 shadow-md md:px-4 px-2">
            <nav class="flex justify-between items-center w-full">
                <!-- Logo dan Brand -->
                <div class="flex justify-center items-center gap-2">
                    <img class="w-14 my-3 cursor-pointer" src="{{ asset('img/Logo.png') }}" alt="Logo">
                    <div class="text-baseBackground">
                        BrightGlobaltrans
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="nav-links md:static absolute bg-navbarTitle md:min-h-fit min-h-[60vh] left-0 top-0 md:w-auto w-full flex items-center px-5 md:translate-x-0 transform -translate-x-full duration-300">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 text-baseBackground">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('rent') }}">Mobil</a></li>
                        <li><a href="{{ route('aboutus') }}">Tentang</a></li>
                        <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                        <li><a href="{{ route('information') }}">Informasi</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <!-- Login Button & Hamburger Icon -->
                <div class="flex items-center gap-6">
                    <button class="bg-baseBackground text-black px-5 py-2 rounded-full">Log in</button>
                    <ion-icon name="menu" class="text-3xl cursor-pointer md:hidden text-baseBackground" onclick="toggleMenu()"></ion-icon>
                </div>
            </nav>
        </header>
    </div>

    <!-- Script to Handle Hamburger Menu -->
    <script>
        const navLinks = document.querySelector('.nav-links');
        function toggleMenu() {
            navLinks.classList.toggle('translate-x-0');
        }
    </script>
</div>
