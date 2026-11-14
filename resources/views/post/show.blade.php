<x-app-layout>
   

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
              
                    
                <h1 class="text-3xl font-bold mb-4"> {{$post->title}}</h1>
               
                <div class="flex items-center mb-4">
                    @if ($post->user->imageUrl())
                        <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}">
                    @else
                        <img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/40" alt="{{ $post->user->name }}">
                    @endif
                 {{-- avatar section  --}}
                    <div>
                        <div class='flex gap-2 text-sm  ' >
                            <h3 class="text-sm capitalize font-medium text-gray-900">{{ $post->user->username }}</h3> &middot
                            <a href="#" class="text-sm capitalize text-blue-500 font-bold hover:underline" >follow</a>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-500">

                            <p class="text-sm text-gray-500">{{ $post->readTime() }} min read   </p>
                            <p> {{$post->created_at->format('F j, Y')}}</p>
                        </div>
                    </div>
                   

                </div>

                 {{-- clap section  --}}
                 <div class="mt-4 border-t border-b flex gap-3 items-center py-2">
                    <button class="py-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                    </svg>
                   
                </button>
                 3.5K
                 </div>
                 <div class="mt-4">
                    <img class="w-full h-auto max-h-96 object-cover rounded-lg mb-4" src="{{ $post->imageUrl() ?? asset('images/default-image.jpg') }}" alt="{{ $post->title }}">
                    <div class="text-gray-700 text-lg leading-relaxed mt-5">
                        {{ $post->content }}
                        
                    </div>
                    <div class="m-4 text-2xl text-gray-500">
                        <span class=" text-sm bg-grey-400 border border-grey-400   rounded-xl p-4 ">

                            {{ $post->category ?  $post->category->name : 'No category' }}
                        </span>
                    </div>

                 </div>

                
            </div>
            

            
        </div>
    </div>
</x-app-layout>
