<footer class="bg-black text-white py-10">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Logo dan Tentang -->
            <div>
                <a href="{{ route('index') }}" class="flex items-center mb-4">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="h-12 mr-3">
                    <span class="text-2xl font-semibold">Brightglobaltrans</span>
                </a>
                <p class="text-sm text-gray-400">Brightglobaltrans adalah penyedia layanan rental mobil terpercaya dengan berbagai pilihan kendaraan untuk kebutuhan Anda.</p>
            </div>

            <!-- Navigasi dan Info Kontak -->
            <div>
                <h2 class="text-sm font-semibold uppercase mb-4">Navigasi</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Layanan</a></li>
                    <li><a href="#" class="hover:underline">Proses Rental</a></li>
                    <li><a href="#" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-semibold uppercase mb-4">Hubungi Kami</h2>
                <p class="text-sm text-gray-400">Jl. Mekarwangi No.79, Sariwangi, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559</p>
                <p class="text-sm text-gray-400">Telepon: <a href="tel:+628123456789" class="hover:underline">+62 812 3456 789</a></p>
                <p class="text-sm text-gray-400">Email: <a href="mailto:info@brightglobaltrans.com" class="hover:underline">info@brightglobaltrans.com</a></p>
            </div>
        </div>

        <!-- Divider -->
        <div class="my-6 border-t border-gray-700"></div>

        <!-- Sosial Media dan Legal -->
        <div class="flex flex-col md:flex-row md:justify-between items-center text-sm">
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Facebook</a>
                <a href="#" class="hover:text-gray-300">Instagram</a>
                <a href="#" class="hover:text-gray-300">Twitter</a>
            </div>
            <p class="mt-4 md:mt-0 text-gray-400">© 2025 Brightglobaltrans. All rights reserved.</p>
        </div>
    </div>
</footer>
