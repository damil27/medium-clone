<x-app-layout>
   

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4 text-gray-900">
                    
                    <ul class="flex flex-wrap text-sm font-medium text-center text-body justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2.5 text-white bg-brand rounded-base active" aria-current="page">All</a>
                        </li>
                      
                        @foreach ($categories as $category )
                            <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 rounded-base hover:text-heading hover:bg-neutral-secondary-soft">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach
                        
                        
                      
                    </ul>
                </div>
            </div>
            

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="py-8 text-gray-900">
                    
                   @foreach ( $posts as $post )
                    

                    <div class=" flex  block  p-6 border w-full border-default rounded-base shadow-xs mb-4">
                        <div class='p-5 flex-1'>

                            <a href="#">
                                <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $post->title}}</h5>
                            </a>
                            <div class="mb-6 text-body">{{ Str::words($post->content, 20)}}</div>
                            <a href="#" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                Read more
                                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                            </a>
                        </div>
                        <a href="#">
                            <img class="rounded-base w-48 h-48 object-cover rounded-r-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>

                   @endforeach
                

                   {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
