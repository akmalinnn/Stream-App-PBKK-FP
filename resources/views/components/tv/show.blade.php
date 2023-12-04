
<x-layout>
    <div class="flex h-full w-full items-center overflow-y-auto pt-4 shadow-lg">
        <div class="container mx-auto overflow-y-auto rounded-lg lg:px-56">
            <div class="rounded-xl bg-gray-800">
                <div class="responsive-container relative overflow-hidden" style="padding-top: 56.25%">
                    <iframe class="responsive-iframe absolute top-0 left-0 h-full w-full rounded-t-xl"
                        src="https://www.youtube.com/embed/{{ $shows['videos']['results'][0]['key'] }}"
                        style="border:0;" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                </div>

                <div class="modal-body px-8 py-3">
                    <div class="responsive-container relative overflow-hidden text-white">
                        <div class="my-4 flex w-full flex-row space-x-4">
                            <button class="bg-gradient flex w-28 items-center justify-center space-x-2 rounded bg-white px-2 py-2 shadow-md">
                                <x-bi-caret-right-fill class="h-6 w-6 text-black"/>
                                <span class="font-semibold text-black">Play</span>
                            </button>
                            <button class="mr-2 flex h-8 w-8 items-center justify-center rounded-full ring-2 ring-gray-400">
                                <x-bi-plus class="h-4 w-4 text-white"/>
                            </button>
                            <button class="mr-2 flex h-8 w-8 items-center justify-center rounded-full ring-2 ring-gray-400">
                                <x-bi-hand-thumbs-up class="h-4 w-4 text-white"/>
                            </button>
                            <button class="mr-8 flex h-8 w-8 items-center justify-center rounded-full ring-2 ring-gray-400">
                                <x-bi-hand-thumbs-down class="h-4 w-4 text-white" />
                            </button>
                        </div>

                        <div class="my-6 flex">
                            <div class="w-4/6">
                                <span class="mb-3 flex space-x-4">
                                    <div class="flex items-center">
                                        <div id="vote_average" class="relative h-16 w-16 rounded-full bg-gray-800 text-white">
                                            {{-- @push('scripts')
                                                <x-rating-script :slug="'vote_average'" :rating="$shows['vote_average'] * 10" :event='null' />
                                            @endpush --}}
                                            <div class="mx-4 flex">
                                                <span class="font-bold text-green-500">{{ $shows['vote_average'] * 10 . '%' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="font-semibold text-white">{{ $shows['name'] }}</div>
                                        <div class="text-sm text-gray-500">{{ date('Y', strtotime($shows['first_air_date'] )) }}</div>
                                    </div>
                                </span>

                                <span>
                                    {{ $shows['overview'] }}
                                </span>
                            </div>

                            <div class="w-2/6">
                                <span class="text-gray-500">
                                    Cast:
                                    <span class="flex truncate text-sm font-medium text-gray-400">
                                        @foreach ($shows['credits']['cast'] as $cast)
                                            <div class="">
                                                {{ $cast['name'] }},
                                            </div>
                                        @endforeach
                                    </span>

                                </span>
                                <span class="text-gray-500">
                                    Genres:
                                    <span class="flex truncate text-sm font-medium text-gray-400">
                                        @foreach ($shows['genres'] as $genre)
                                            <div class="">
                                                {{ $genre['name'] }},
                                            </div>
                                        @endforeach
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

