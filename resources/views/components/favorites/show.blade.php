<x-layout>
  <x-header />
  <div class="relative flex flex-col w-full h-full overflow-scroll text-white bg-gray-800 shadow-md rounded-xl bg-clip-border mt-24">
    <table class="w-full text-left table-auto min-w-max">
      <thead>
        <tr>
          <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <a href="{{ route('favorites.index', ['sort' => 'content_id', 'direction' => 'asc']) }}" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Content ID
            </a>
          </th>
          <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <a href="{{ route('favorites.index', ['sort' => 'type', 'direction' => 'asc']) }}" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Type
            </a>
          </th>
          <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <a href="{{ route('favorites.index', ['sort' => 'title', 'direction' => 'asc']) }}" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Title
            </a>
          </th>
          <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <a href="{{ route('favorites.index', ['sort' => 'overview', 'direction' => 'asc']) }}" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Overview
            </a>
          </th>
          <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
            <a href="{{ route('favorites.index', ['sort' => 'release_date', 'direction' => 'asc']) }}" class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
              Release Date
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($favorites as $favorite)
        <tr>
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              {{ $favorite->content_id }}
            </p>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              {{ $favorite->type }}
            </p>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              {{ $favorite->title }}
            </p>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              {{ $favorite->overview }}
            </p>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
              {{ $favorite->release_date }}
            </p>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </section>
  <script src="../../../js/app.js"></script>
  <script src="../../../../public/echo.js"></script>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    console.log('hello i am under the water');
    Echo.channel('favorites')
      .listen('NewFavoriteAdded', (e) => {
        console.log(e.favorite);
        alert('A new favorite has been added!');
      });
  </script>
</x-layout>