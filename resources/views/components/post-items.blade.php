                
@php
    $image = $post->image;

    if ($image && Str::startsWith($image, ['http://', 'https://'])) {
        $imageUrl = asset('images/default-image.jpg');
    } elseif ($image && Storage::disk('public')->exists($image)) {
        $imageUrl = Storage::disk('public')->url($image);
    } else {
        $imageUrl = asset('images/default-image.jpg');
    }
@endphp
                
                <div class=" flex  block   border w-full border-default rounded-base shadow-xs mb-4">
                        <div class='p-5 flex-1'>

                            <a href="{{ route('post.show', ['username' => $post->user->username, 'post' => $post]) }}" class="inline-block mb-2 text-sm font-medium text-primary hover:underline">
                                {{ $post->user->name }}
                                <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $post->title}}</h5>
                            </a>
                            <div class="mb-6 text-body">{{ Str::words($post->content, 20)}}</div>
                            <a href="#" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                               <x-primary-button>

                                   Read more
                                   <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                                </x-primary-button>
                               </a>
                        </div>
                        <a href="#" class="flex-shrink-0 overflow-hidden rounded-r-lg w-48">
                           
                            <img class="w-48 h-full max-h-64 object-cover rounded-r-lg "
                            src="{{ $imageUrl }}"
                             alt="{{ $post->title }}" />
                        </a>
                    </div>