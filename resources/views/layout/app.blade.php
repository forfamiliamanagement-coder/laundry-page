<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width,
        initial-scale=1.0">
        <title>Laundry app</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script>
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const logo = document.getElementById("logo");
    const text = document.getElementById("brandText");

    if (window.scrollY > 50) {
        navbar.classList.add("bg-white", "shadow");
        navbar.classList.remove("bg-transparent");

        logo.classList.remove("text-white");
        logo.classList.add("text-black");

        text.classList.remove("text-white");
        text.classList.add("text-black");

    } else {
        navbar.classList.remove("bg-white", "shadow");
        navbar.classList.add("bg-transparent");

        logo.classList.remove("text-black");
        logo.classList.add("text-white");

        text.classList.remove("text-black");
        text.classList.add("text-white");
    }
});
</script>
    </head>
    <body class="bg-gray-100 text-gray-800">
        `{{-- navbar --}}
        @include('components.navbar')
        {{-- content --}}
        <main>
            @yield('content')
        </main>
        {{-- footer --}}
        @include('components.footer')
    </body>
</html>