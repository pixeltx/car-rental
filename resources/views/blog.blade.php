<x-app>
  <div class="mx-8 sm:mx-6 lg:mx-16 lg:mt-16 mt-[72px] md:mt-[80px]">
      <div class="flex flex-rows gap-10">
          <!-- Section Kiri -->
          <div class="w-full lg:w-3/5 space-y-14 mb-10">
            @foreach ($blogs as $blog)
            <div class="space-y-4">
               <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="rounded-lg min-w-full">
               <div class="font-bold text-lg md:text-xl">
                   {{ $blog->title }}
               </div>
               <div class="text-justify text-sm md:text-base">
                   {{ $blog->content }} 
               </div>
               <div class="flex justify-between items-center">
                   <div>
                       <a href="{{ route('blog-detail') }}" class="rounded-lg text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-putih hover:bg-transparent hover:border-newGold hover:text-newGold transition-colors duration-300">
                           Read More
                       </a>
                   </div>
                   <div class="text-gray-600 ">
                       {{ $blog->created_at->format('d F, Y') }}
                   </div>
               </div>
            </div>
            @endforeach
              <div class="space-y-4">
                 <img src="{{ asset('img/armada-bgt-slider-3.jpg') }}" alt="" class="rounded-lg min-w-full">
                 <div class="font-bold text-lg md:text-xl">
                     <---judul--->
                 </div>
                 <div class="text-justify text-sm md:text-base">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium similique omnis asperiores 
                     laborum eos dolore vero eveniet. Accusamus tempore, maiores vel magni fugiat ut deleniti, consequuntur 
                     nihil odio explicabo odit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi vel quas mollitia 
                 </div>
                 <div class="flex justify-between items-center">
                     <div>
                         <a href="{{ route('blog-detail') }}" class="rounded-lg text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-putih hover:bg-transparent hover:border-newGold hover:text-newGold transition-colors duration-300">
                             Read More
                         </a>
                     </div>
                     <div class="text-gray-600 ">
                         22 Januari, 2025
                     </div>
                 </div>
              </div>
              <div class="space-y-4">
                 <img src="{{ asset('img/armada-bgt-slider-3.jpg') }}" alt="" class="rounded-lg min-w-full">
                 <div class="font-bold text-lg md:text-xl">
                     <---judul--->
                 </div>
                 <div class="text-justify text-sm md:text-base">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium similique omnis asperiores 
                     laborum eos dolore vero eveniet. Accusamus tempore, maiores vel magni fugiat ut deleniti, consequuntur 
                     nihil odio explicabo odit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi vel quas mollitia 
                 </div>
                 <div class="flex justify-between items-center">
                     <div>
                         <a href="{{ route('blog-detail') }}" class="rounded-lg text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-putih hover:bg-transparent hover:border-newGold hover:text-newGold transition-colors duration-300">
                             Read More
                         </a>
                     </div>
                     <div class="text-gray-600 ">
                         22 Januari, 2025
                     </div>
                 </div>
              </div>
          </div>
        
          <!-- Section Kanan -->
          <div class="hidden lg:block lg:w-2/5 ">
              <div class="mb-6">
                  <a href="" class="rounded-lg text-sm md:text-xl border-2 bg-newGold border-newGold py-1 px-5 md:px-7 text-putih hover:bg-transparent hover:border-newGold hover:text-newGold transition-colors duration-300">
                      Latest Post
                  </a>
              </div>
              <div class="space-y-4">
                  <a href="{{ route('blog-detail') }}" class="flex gap-2">
                    <div>
                      <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="rounded-lg min-w-52 max-w-52">
                    </div>
                    <div class="flex flex-col">
                      <div class="font-bold text-lg text-justify">
                        lorem lorem lorem lorem lorem lorem lorem lorem 
                      </div>
                      <span class="text-gray-600 items-end">22 Januari, 2025</span>
                    </div>
                  </a>
                  <a href="{{ route('blog-detail') }}" class="flex gap-2">
                    <div>
                      <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="rounded-lg min-w-52 max-w-52">
                    </div>
                    <div class="flex flex-col">
                      <div class="font-bold text-lg text-justify">
                        lorem lorem lorem lorem lorem lorem lorem lorem 
                      </div>
                      <span class="text-gray-600 items-end">22 Januari, 2025</span>
                    </div>
                  </a>
                  <a href="{{ route('blog-detail') }}" class="flex gap-2">
                    <div>
                      <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="rounded-lg min-w-52 max-w-52">
                    </div>
                    <div class="flex flex-col">
                      <div class="font-bold text-lg text-justify">
                        lorem lorem lorem lorem lorem lorem lorem lorem 
                      </div>
                      <span class="text-gray-600 items-end">22 Januari, 2025</span>
                    </div>
                  </a>
                  <a href="{{ route('blog-detail') }}" class="flex gap-2">
                    <div>
                      <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="rounded-lg min-w-52 max-w-52">
                    </div>
                    <div class="flex flex-col">
                      <div class="font-bold text-lg text-justify">
                        lorem lorem lorem lorem lorem lorem lorem lorem 
                      </div>
                      <span class="text-gray-600 items-end">22 Januari, 2025</span>
                    </div>
                  </a>
                  <a href="{{ route('blog-detail') }}" class="flex gap-2">
                    <div>
                      <img src="{{ asset('img/dummyImage.jpg') }}" alt="" class="rounded-lg min-w-52 max-w-52">
                    </div>
                    <div class="flex flex-col">
                      <div class="font-bold text-lg text-justify">
                        lorem lorem lorem lorem lorem lorem lorem lorem 
                      </div>
                      <span class="text-gray-600 items-end">22 Januari, 2025</span>
                    </div>
                  </a>
                </div>
              </div>
        </div>
  </div>
</x-app>