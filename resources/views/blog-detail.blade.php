<x-app :settings="$settings">
    <div class="mx-8 sm:mx-6 lg:mx-16  mb-10 mt-[100px] md:mt-[120px]">
        <div>
            <div class="font-[Raleway] text-3xl md:text-5xl lg:text-6xl font-bold text-center text-[#ffd700] mb-2">
                {{ $blog->title }}
            </div>
            {{-- <div class="text-center text-sm sm:text-lg md:text-xl mb-4 md:mb-8">
                SUB HEADLINE
            </div> --}}
        </div>
        
        <div class="text-justify">
            <div class="lg:mx-28 space-y-6">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Car and scenery" class="w-full sm:h-96 object-cover">
                <div class="text-end ">
                    <p class="font-bold">{{ $blog->created_at->format('d F, Y') }}</p>
                </div>
            </div>
        
            <!-- Content Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                
                
                <!-- Articles -->
                <div class="space-y-12">
                    <!-- Article 1 -->
                    <div class=" p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $blog->title }}</h3>
                        <p class="mt-4 text-gray-600">{!! $blog->content !!}</p>
                    </div>
        
                    {{-- <!-- Article 2 -->
                    <div class=" p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Avoid the Hassle of Public Transport</h3>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aliquid dolore officiis, voluptatibus optio velit beatae atque blanditiis sunt in ducimus voluptatum voluptatem vero, eum nesciunt veritatis fugit? Veritatis, alias.Navigating 's public transport can be challenging. Renting a car eliminates crowded buses and schedules, letting you focus solely on enjoying your trip.</p>
                    </div>
        
                    <!-- Article 3 -->
                    <div class=" p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Save Money on Group Travel</h3>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat debitis inventore quasi perspiciatis magnam deleniti, natus molestiae expedita odio? Saepe quos voluptatem itaque odit. Inventore, doloribus est. Dolorem, voluptate temporibus.For families or friends, renting a car is an affordable way to explore . A single car can save costs compared to multiple taxis or rideshares.</p>
                    </div>
        
                    <!-- Article 4 -->
                    <div class=" p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Visit 's Top Attractions with Ease</h3>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt vel nobis, itaque corporis laboriosam possimus eum amet facilis error accusamus perspiciatis iure, provident impedit ducimus voluptas repellat qui dolores esse!From the iconic Kuta Beach to the lush rice fields of Ubud, a rental car makes it convenient to explore 's attractions at your own leisure.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app>
