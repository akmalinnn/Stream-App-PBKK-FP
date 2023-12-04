@props(['popular', 'genres', 'trending', 'comedies', 'action', 'western', 'mystery', 'scifi', 'animation'])

<div class="container my-6 mx-auto space-y-8 px-4">
    <!-- Popular Shows -->
    <x-shows :shows='$popular'>
        <x-slot:category> Popular &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Popular Shows -->

    <!-- Trending Shows -->
    <x-shows :shows='$trending'>
        <x-slot:category> Trending &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Trending Shows -->

    <!-- Comedies Shows -->
    <x-shows :shows='$comedies'>
        <x-slot:category> Comedies &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Comedies Shows -->

    <!-- Action Shows -->
    <x-shows :shows='$action'>
        <x-slot:category> Action &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Action Shows -->

    <!-- Western Shows -->
    <x-shows :shows='$western'>
        <x-slot:category> Western &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Wester Shows -->

    <!-- Mystery Shows -->
    <x-shows :shows='$mystery'>
        <x-slot:category> Mystery &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Mystery Shows -->

    <!-- Scifi Shows -->
    <x-shows :shows='$scifi'>
        <x-slot:category> Sci-Fi &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Scifi Shows -->

    <!-- Animation Shows -->
    <x-shows :shows='$animation'>
        <x-slot:category> Animation &rsaquo; </x-slot:category>
    </x-shows>
    <!-- End Animation Shows -->
</div>
