@props(['settings'])

<footer class="bg-newGreen text-white py-10 font-[inter]">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo dan Tentang -->
            <div>
                <a href="{{ route('index') }}" class="flex items-center mb-4">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="h-12 mr-3">
                    <span class="text-2xl font-semibold">Bright Global Trans</span>
                </a>
                <p class="text-sm text-gray-300">Bright Global Trans adalah penyedia layanan rental mobil terpercaya
                    dengan berbagai pilihan kendaraan untuk kebutuhan Anda.</p>
            </div>

            <!-- Navigasi dan Info Kontak -->
            <div>
                <h2 class="text-sm font-semibold uppercase mb-4">Navigasi</h2>
                <ul class="space-y-2">
                    <li><a href="{{ route('aboutus') }}" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="{{ route('testimoni') }}" class="hover:underline">Testimoni</a></li>
                    <li><a href="{{ route('information') }}" class="hover:underline">Informasi</a></li>
                    <li><a href="https://wa.me/{{ $settings['phone_number'] }}" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-semibold uppercase mb-4">Hubungi Kami</h2>
                <p class="text-sm text-gray-300">Jl. Mekarwangi No.79, Sariwangi, Kec. Parongpong, Kabupaten Bandung
                    Barat, Jawa Barat 40559</p>
                <p class="text-sm text-gray-300">Telepon: <a href="tel:{{ $settings['phone_number'] }}"
                        class="hover:underline">{{ $settings['phone_number'] }}</a></p>
                <p class="text-sm text-gray-300">Email: <a href="mailto:{{ $settings['email_address'] }}"
                        class="hover:underline">{{ $settings['email_address'] }}</a></p>
            </div>
        </div>

        <!-- Divider -->
        <div class="my-6 border-t border-gray-700"></div>

        <!-- Sosial Media dan Legal -->
        <div class="flex flex-col md:flex-row md:justify-between items-center text-sm">
            <div class="flex space-x-4">
                <a href="mailto:{{ $settings['email_address'] }}" class="hover:text-gray-300">Gmail</a>
                <a href="{{ $settings['instagram_link'] }}" class="hover:text-gray-300">Instagram</a>
                <a href="{{ $settings['tiktok_link'] }}" class="hover:text-gray-300">Tiktok</a>
            </div>
            <p class="mt-4 md:mt-0 text-gray-400">© 2025 Brightglobaltrans. All rights reserved.</p>
        </div>
    </div>
</footer>
