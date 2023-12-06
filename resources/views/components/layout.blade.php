<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StreamApp</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  @livewireStyles
</head>
<style>
  [x-cloak] {
    display: none !important;
  }
</style>

<body style="background-color: #141414">

  {{ $slot }}

  <x-flash />

  @livewireScripts
  <script src="/resources/js/app.js"></script>
  <script src="/public/echo.js"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  @stack('scripts')
</body>

</html>