@props(['shows'])

<div class="">
    <div class="mb-4 text-lg antialiased font-bold tracking-wider text-gray-200">
        {{ $category }}
    </div>

    <div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'
        class="carousel flex flex-nowrap">
        @foreach ($shows as $show)
        <div @click="open = true" class="mr-3 flex flex-col overflow-hidden rounded-md" style="background-color:  #181818">
            <div @click="open = true" class="w-72">
                <a href="{{ route('shows.show', $show['id']) }}">
                <img class="h-80 w-full cursor-pointer"
                    src="{{ 'https://image.tmdb.org/t/p/w500' . $show['poster_path'] }}"
                    alt="poster">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
