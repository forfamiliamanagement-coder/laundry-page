<section class="py-16 md:py-24 bg-gray-50 text-center px-4">
    <div class="max-w-6xl mx-auto">

        <!-- Heading SEO -->
        <h2 class="text-3xl font-bold mb-4">
            Kenapa pilih kami?
        </h2>

        <!-- Subtext SEO (visible tipis, biar natural) -->
        <p class="text-gray-500 mb-12 max-w-2xl mx-auto">
            Layanan laundry profesional dengan antar jemput gratis, proses cepat, dan harga terjangkau untuk kebutuhan harian Anda.
        </p>

        <!-- LIST SEO -->
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

    <!-- Item 1 -->
    <li>
        <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition reveal">
            
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('images/icon/truck-pickup.svg') }}" 
                     alt="Antar jemput laundry gratis"
                     class="h-10 w-10 object-contain">
            </div>

            <h3 class="font-semibold text-lg">
                Antar jemput gratis
            </h3>

            <p class="sr-only">
                Layanan antar jemput laundry gratis ke lokasi Anda.
            </p>

        </article>
    </li>

    <!-- Item 2 -->
    <li>
        <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition reveal delay-1">
            
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('images/icon/time-fast.svg') }}" 
                     alt="Proses laundry cepat"
                     class="h-10 w-10 object-contain">
            </div>

            <h3 class="font-semibold text-lg">
                Proses cepat
            </h3>

            <p class="sr-only">
                Proses laundry cepat dan efisien.
            </p>

        </article>
    </li>

    <!-- Item 3 -->
    <li>
        <article class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition reveal delay-2">
            
            <div class="mb-4 flex justify-center">
                <img src="{{ asset('images/icon/coins.svg') }}" 
                     alt="Harga laundry terjangkau"
                     class="h-10 w-10 object-contain">
            </div>

            <h3 class="font-semibold text-lg">
                Harga terjangkau
            </h3>

            <p class="sr-only">
                Harga laundry terjangkau untuk semua kalangan.
            </p>

        </article>
    </li>

</ul>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Laundry Service",
  "description": "Layanan laundry dengan antar jemput gratis, proses cepat dan harga terjangkau.",
  "areaServed": "Indonesia"
}
</script>