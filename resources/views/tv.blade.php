<x-layout>
    <x-header />

    <x-nav :popular='$popular' />

    <x-tv.index  :popular='$popular' :genres='$genres' :trending='$trending' :comedies='$comedies' :action='$action' :western='$western' :mystery='$mystery' :scifi='$scifi' :animation='$animation' />

</x-layout>