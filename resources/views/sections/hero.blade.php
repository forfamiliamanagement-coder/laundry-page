<section class="relative min-h-[720px] md:min-h-screen flex items-center justify-center text-white overflow-hidden px-4 py-24">

    <!-- BACKGROUND -->
    <div class="absolute inset-0">

        <img
            src="{{ asset('images/backup3.jpg') }}"
            alt="Layanan laundry antar jemput"
            class="w-full h-full object-cover scale-105 animate-[zoom_20s_linear_infinite]"
        >

        <!-- CLEAN DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/65"></div>

    </div>


    <!-- CONTENT -->
    <div class="relative z-10 w-full max-w-4xl mx-auto text-center animate-fadeUp">

        <!-- TRUST BADGE -->
        <div
            class="inline-flex items-center gap-2
                   px-4 py-2 mb-7
                   rounded-full
                   bg-white/10
                   border border-white/20
                   backdrop-blur-md
                   text-sm font-medium"
        >

            <span class="w-2 h-2 rounded-full bg-green-400"></span>

            Gratis Antar-Jemput

        </div>


        <!-- H1 -->
        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl
                   font-bold
                   leading-[1.05]
                   tracking-tight
                   mb-6"
        >

            Laundry Bersih & Wangi,

            <span class="block">
                Tanpa Perlu Keluar Rumah
            </span>

        </h1>


        <!-- DESCRIPTION -->
        <p
            class="max-w-2xl mx-auto
                   mb-9
                   text-base sm:text-lg md:text-xl
                   leading-relaxed
                   text-gray-200"
        >

            Kami jemput laundry Anda, proses dengan standar profesional,
            lalu antar kembali ke rumah.

        </p>


        <!-- CTA -->
        <div
            class="flex flex-col sm:flex-row
                   items-center justify-center
                   gap-3 sm:gap-4
                   mb-9"
        >

            <!-- PRIMARY -->
            <a
                href="https://wa.me/628211354085?text={{ urlencode('Hallo for laundry, saya mau bertanya paket laundry yang tersedia') }}"
                target="_blank"
                rel="noopener noreferrer"

                class="w-full sm:w-auto
                       inline-flex items-center justify-center
                       px-7 py-4
                       rounded-xl

                       bg-orange-500
                       hover:bg-orange-600

                       text-white
                       font-semibold

                       shadow-lg shadow-orange-500/20

                       transition-all
                       duration-300

                       hover:-translate-y-0.5
                       hover:shadow-xl"
            >

                Pesan via WhatsApp

                <span class="ml-2 text-lg">
                    →
                </span>

            </a>


            <!-- SECONDARY -->
            <a
                href="#cara-order"

                class="w-full sm:w-auto
                       inline-flex items-center justify-center
                       px-7 py-4
                       rounded-xl

                       bg-white/10
                       hover:bg-white/15

                       border border-white/20

                       backdrop-blur-md

                       text-white
                       font-medium

                       transition-all
                       duration-300"
            >

                Lihat Cara Order

            </a>

        </div>


        <!-- TRUST SIGNALS -->
        <div
            class="flex flex-wrap
                   items-center justify-center
                   gap-x-6 gap-y-3

                   text-sm
                   text-gray-200"
        >

            <span class="inline-flex items-center gap-2">

                <span class="text-green-400 font-semibold">
                    ✓
                </span>

                Gratis Antar-Jemput

            </span>


            <span class="hidden sm:block text-white/30">
                •
            </span>


            <span class="inline-flex items-center gap-2">

                <span class="text-green-400 font-semibold">
                    ✓
                </span>

                Express 1 Hari

            </span>


            <span class="hidden sm:block text-white/30">
                •
            </span>


            <span class="inline-flex items-center gap-2">

                <span class="text-green-400 font-semibold">
                    ✓
                </span>

                Order dari Rumah

            </span>

        </div>

    </div>

</section>