<div>

    {{-- <h1>{{ $post->titulo }}</h1> --}}
    <div class="flex gap-2 items-center">
        <button
        wire:click="like"
        >
            <div class="my-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                 fill="{{ $isLiked ? "red" : "white" }}"
                  viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </div>
        </button>
        <p class="font-bold"> {{ $likes }}
            <span class="font-normal">likes</span>
        </p>
    </div>



</div>

