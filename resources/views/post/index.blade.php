<x-app-layout>
   

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4 text-gray-900">
                    
                    <x-category-tabs >
                        No category
                    </x-category-tabs>
                </div>
            </div>
            

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="py-8 text-gray-900">
                    
                   @forelse ( $posts as $post )
                    

                    <x-post-items :post="$post" />

                    @empty
                        <div>
                            <p class='text-grey-900' > No Posts found. </p>
                        </div>

                   @endforelse
                

                   {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
