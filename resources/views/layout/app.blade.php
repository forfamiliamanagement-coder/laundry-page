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
                const reveals = document.querySelectorAll('.reveal');
                const line = document.querySelector('.line-animate');

                function revealOnScroll() {
                    reveals.forEach(el => {
                        const windowHeight = window.innerHeight;
                        const elementTop = el.getBoundingClientRect().top;

                        if (elementTop < windowHeight - 100) {
                            el.classList.add('active');
                        }
                    });

                    if (line) {
                        const lineTop = line.getBoundingClientRect().top;
                        if (lineTop < window.innerHeight - 100) {
                            line.classList.add('active');
                        }
                    }
                }

                window.addEventListener('scroll', revealOnScroll);

        </script>
        <script>
            function trackCTA(action) {
                if (typeof gtag === 'function') {
                    gtag('event', action, {
                        event_category: 'CTA',
                        event_label: 'Laundry Landing Page',
                    });
                }
            }
        </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-XXXXXXX');
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {

            const form = document.getElementById('heroSearch');

            form.addEventListener('submit', function () {
                const select = form.querySelector('select');
                const input = form.querySelector('input');

                const value = `${input.value} ${select.value} laundry`;
                input.value = value;
            });

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