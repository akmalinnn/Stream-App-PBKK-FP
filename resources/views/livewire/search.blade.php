<div class="relative border border-white bg-black p-1 text-white">
    <x-bi-search class="absolute m-1 h-5 w-5" />
    <input type="text" wire:model.live.debounce.250ms="search" placeholder="Titles, people, genres" class="ml-8 bg-black text-white placeholder-gray-500 focus:outline-none">

    @if (strlen($search) >= 3)
    <div class="absolute mt-2 -ml-2 w-64 bg-gray-700 p-2 text-sm">
        @if ($searchResults->count() > 0 )
        <ul>
            @foreach ($searchResults as $result)
            <a href="{{ route('movies.show', $result['id']) }}" class="hover:bg-gray-400">
            <li class="border-b border-gray-500 p-1">
                    {{ $result['title'] }}
                </li>
            </a>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">
            <span> Your search for "{{ $search }}" did not have any matches</span>
        </div>
        @endif
    </div>
    @endif
</div>
