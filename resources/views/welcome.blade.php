<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix Clone</title>
    <!-- Tailwind CDN -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine CDN -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<style>
    /* Add these styles to your existing <style> tag */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('https://assets.nflxext.com/ffe/siteui/vlv3/ab4b0b22-2ddf-4d48-ae88-c201ae0267e2/c0d5282e-ebeb-41e6-abce-a6f279a4e2e1/ID-en-20231030-popsignuptwoweeks-perspective_alpha_website_medium.jpg') no-repeat center center/cover;
}

nav {
    /* background-color: #141414; */
    padding: 1rem 2rem;
}

.full {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.section {
    padding: 4rem 0;
}

.section h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #fff;
}

.section p {
    font-size: 1.5rem;
    color: #ccc;
}

.section:nth-child(even) {
    background-color: #111;
}

.py-40 {
    padding-top: 10rem;
    padding-bottom: 10rem;
}

/* Button styles */
.btn {
    display: inline-block;
    padding: 1rem 2rem;
    font-size: 1.2rem;
    background-color: #e50914;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #ff0a16;
}

/* Footer styles */
footer {
    background-color: #111;
    color: #ccc;
    text-align: center;
    padding: 2rem;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>
<body class="bg-black text-gray-100">
<nav class="mt-16">

<section>
    <div class="full flex justify-center p-12">
            <div>
                <div class="text-4xl">Bentar.</div>
                <div class="text-2xl">
                    masih bikin layout blade
                </div>
            </div>
</section>

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl"></div>
                <div class="text-2xl">
                   sama routing. </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="full flex justify-center p-12">
        <div class="flex w-3/5 flex-col items-center justify-center">
            <div>
                <div class="text-4xl">Watch everywhere.</div>
                <div class="text-2xl">
                    Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV. </div>
            </div>
        </div>
</section>
<section class="z-30 flex flex-col items-center justify-center py-40 text-gray-100 lg:py-32">
</section>


</body>
</html>
