<section class="py-24 bg-gray-100 text-center">

    <!-- SEO HEADING -->
    <h2 class="text-3xl font-bold mb-2 reveal">
        Cara Kerja Laundry Antar Jemput
    </h2>

    <p class="text-gray-500 mb-16 max-w-2xl mx-auto reveal delay-1">
        Layanan laundry profesional dengan sistem antar jemput yang cepat, 
        praktis, dan terpercaya langsung dari rumah Anda.
    </p>

    <div class="max-w-6xl mx-auto px-6">

        <!-- DESKTOP TIMELINE -->
        <ol class="hidden md:block relative">

            <!-- LINE -->
            <div class="absolute top-1/2 left-0 w-full h-1 bg-orange-200 line-animate"></div>

            <div class="grid grid-cols-4 relative z-10">

                <!-- STEP 1 -->
                <li class="text-center reveal delay-1">
                    <div class="w-16 h-16 mx-auto bg-orange-100 text-orange-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                          <img 
                                src="{{ asset('images/icon/phone-call.svg') }}" 
                                class="w-7 h-7 transition duration-300 group-hover:scale-110"
                            >
                    </div>
                    <h3 class="mt-4 font-semibold">Pesan Laundry</h3>
                    <p class="text-sm text-gray-500">
                        Hubungi kami via WhatsApp untuk menjadwalkan penjemputan.
                    </p>
                </li>

                <!-- STEP 2 -->
                <li class="text-center reveal delay-2">
                    <div class="w-16 h-16 mx-auto bg-orange-100 text-orange-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                         <img 
                                src="{{ asset('images/icon/truck-pickup.svg') }}" 
                                class="w-7 h-7 transition duration-300 group-hover:scale-110"
                            >
                    </div>
                    <h3 class="mt-4 font-semibold">Penjemputan</h3>
                    <p class="text-sm text-gray-500">
                        Tim kami datang ke lokasi Anda untuk mengambil pakaian.
                    </p>
                </li>

                <!-- STEP 3 -->
                <li class="text-center reveal delay-3">
                    <div class="w-16 h-16 mx-auto bg-orange-100 text-orange-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                         <img 
                                src="{{ asset('images/icon/sparkles.svg') }}" 
                                class="w-7 h-7 transition duration-300 group-hover:scale-110"
                            >
                    </div>
                    <h3 class="mt-4 font-semibold">Proses Pencucian</h3>
                    <p class="text-sm text-gray-500">
                        Pakaian dicuci dengan standar kebersihan terbaik.
                    </p>
                </li>

                <!-- STEP 4 -->
                <li class="text-center reveal delay-4">
                    <div class="w-16 h-16 mx-auto bg-orange-100 text-orange-500 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                         <img 
                                src="{{ asset('images/icon/truck-pickup.svg') }}" 
                                class="w-7 h-7 transition duration-300 group-hover:scale-110"
                            >
                    </div>
                    <h3 class="mt-4 font-semibold">Pengantaran</h3>
                    <p class="text-sm text-gray-500">
                        Laundry bersih dikirim kembali ke rumah Anda.
                    </p>
                </li>

            </div>
        </ol>

        <!-- MOBILE VERSION (TETEP ADA ANIMATION) -->
        <ol class="md:hidden space-y-6">

            <li class="flex items-center gap-4 bg-white p-4 rounded-xl shadow reveal">
                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold">1</div>
                <div class="text-left">
                    <h3 class="font-semibold">Pesan Laundry</h3>
                    <p class="text-sm text-gray-500">Order via WhatsApp dengan mudah</p>
                </div>
            </li>

            <li class="flex items-center gap-4 bg-white p-4 rounded-xl shadow reveal delay-1">
                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold">2</div>
                <div class="text-left">
                    <h3 class="font-semibold">Penjemputan</h3>
                    <p class="text-sm text-gray-500">Kami ambil laundry ke lokasi Anda</p>
                </div>
            </li>

            <li class="flex items-center gap-4 bg-white p-4 rounded-xl shadow reveal delay-2">
                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold">3</div>
                <div class="text-left">
                    <h3 class="font-semibold">Pencucian</h3>
                    <p class="text-sm text-gray-500">Diproses dengan standar profesional</p>
                </div>
            </li>

            <li class="flex items-center gap-4 bg-white p-4 rounded-xl shadow reveal delay-3">
                <div class="w-10 h-10 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold">4</div>
                <div class="text-left">
                    <h3 class="font-semibold">Pengantaran</h3>
                    <p class="text-sm text-gray-500">Laundry dikirim kembali ke rumah</p>
                </div>
            </li>

        </ol>

    </div>

</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "Cara Kerja Laundry Antar Jemput",
  "step": [
    {
      "@type": "HowToStep",
      "name": "Pesan Laundry",
      "text": "Hubungi via WhatsApp untuk menjadwalkan penjemputan"
    },
    {
      "@type": "HowToStep",
      "name": "Penjemputan",
      "text": "Tim mengambil pakaian dari lokasi Anda"
    },
    {
      "@type": "HowToStep",
      "name": "Proses Pencucian",
      "text": "Pakaian dicuci dengan standar kebersihan tinggi"
    },
    {
      "@type": "HowToStep",
      "name": "Pengantaran",
      "text": "Laundry dikirim kembali ke rumah Anda"
    }
  ]
}
</script>