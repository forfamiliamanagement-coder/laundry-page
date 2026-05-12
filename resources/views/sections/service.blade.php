<section id="layanan" class="py-20 md:py-24 bg-white text-center px-4">

    <div class="container-custom">

        <!-- SEO TITLE -->
        <h2 class="text-3xl font-bold mb-4 reveal">
            Layanan Laundry Profesional
        </h2>

        <p class="text-gray-500 mb-12 max-w-2xl mx-auto reveal delay-1">
            Kami menyediakan berbagai layanan laundry seperti cuci pakaian, setrika, 
            dan dry clean dengan kualitas terbaik, cepat, dan terpercaya.
        </p>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Card 1 -->
            <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition duration-300 reveal">
                
                <div class="text-5xl mb-4">
                    <img src="{{ asset('images/icon/sparkles.svg') }}" class="w-12 h-12 mx-auto" alt="Layanan cuci pakaian">
                </div>

                <h3 class="font-bold text-xl mb-2">Cuci Pakaian</h3>

                <p class="text-gray-500 text-sm">
                    Layanan cuci pakaian bersih dan wangi menggunakan deterjen berkualitas tinggi.
                </p>

            </article>

            <!-- Card 2 -->
            <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition duration-300 reveal delay-1">
                
                <div class="text-5xl mb-4">
                    <img src="{{ asset('images/icon/steam-iron.svg') }}" class="w-12 h-12 mx-auto" alt="Layanan setrika pakaian">
                </div>

                <h3 class="font-bold text-xl mb-2">Setrika Pakaian</h3>

                <p class="text-gray-500 text-sm">
                    Pakaian disetrika rapi, licin, dan siap digunakan setiap hari.
                </p>

            </article>

            <!-- Card 3 -->
            <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition duration-300 reveal delay-2">
                
                <div class="text-5xl mb-4">
                    <img src="{{ asset('images/icon/benefit.svg') }}" class="w-12 h-12 mx-auto" alt="Layanan dry clean">
                </div>

                <h3 class="font-bold text-xl mb-2">Dry Clean</h3>

                <p class="text-gray-500 text-sm">
                    Perawatan khusus untuk pakaian premium agar tetap bersih dan awet.
                </p>

            </article>

        </div>

    </div>

</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Laundry Service",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Laundry Anda"
  },
  "areaServed": "Indonesia"
}
</script>