<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StreamApp</title>
    <!-- Tailwind CDN -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine CDN -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<style>
    [x-cloak] { display: none !important; }
</style>
<body class="bg-black text-gray-100">

<x-header />

<nav class="mt-16">
    <x-navbar />
</nav>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Enjoy on your TV.</div>
                <div class="text-2xl">
                    watch on Smart TV, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.
                </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img1.jpg') }}" />
    </div>
</section>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <img width="600" src="{{ asset('img/img2.jpg') }}" />
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Download your shows to watch offline.</div>
                <div class="text-2xl">
                    Save your favorites easily and always have something to watch. </div>
            </div>
        </div>
    </div>
</section>

<x-gap />

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Watch everywhere.</div>
                <div class="text-2xl">
                    Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV. </div>
            </div>
        </div>
        <img width="600" src="{{ asset('img/img3.png') }}" />
</section>

<x-gap />
<x-flash />

<section>
    <footer class="bg-gray-800 text-white p-4 text-center">
        <div>
            <p>&copy; 2023 StreamApp. All rights reserved.</p>
            <p>Contact us: <a href="mailto:info@streamapp.com">info@streamapp.com</a></p>
        </div>

        <!-- Social Media Links -->
        <div class="mt-4">
            <a href="https://facebook.com/streamapp" target="_blank" class="text-gray-300 hover:text-white mr-4">Facebook</a>
            <a href="https://twitter.com/streamapp" target="_blank" class="text-gray-300 hover:text-white mr-4">Twitter</a>
            <a href="https://instagram.com/streamapp" target="_blank" class="text-gray-300 hover:text-white">Instagram</a>
            <!-- Add more social media links as needed -->
        </div>
    </footer>
</section>

</body>
</html>
