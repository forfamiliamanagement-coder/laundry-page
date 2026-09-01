<footer class="bg-slate-950 text-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- MAIN FOOTER -->
        <div class="py-14
                    grid grid-cols-1
                    md:grid-cols-3
                    gap-10">

            <!-- BRAND -->
            <div>

                <a href="/"
                   class="inline-flex items-center gap-2"
                   aria-label="For Laundry Home">

                    <img
                        src="{{ asset('images/For1.svg') }}"
                        alt="For Laundry"
                        class="h-12 w-auto"
                    >

                    <span class="text-xl font-semibold tracking-tight">
                        Laundry
                    </span>

                </a>

                <p class="mt-4
                          max-w-sm
                          text-sm
                          leading-relaxed
                          text-slate-400">

                    Layanan laundry antar jemput yang praktis,
                    profesional, dan siap membantu kebutuhan laundry
                    Anda dari rumah.

                </p>

            </div>


            <!-- NAVIGATION -->
            <div>

                <h3 class="text-sm font-semibold uppercase tracking-wider">
                    Navigasi
                </h3>

                <nav class="mt-4 flex flex-col gap-3 text-sm">

                    <a href="/"
                       class="text-slate-400 hover:text-white transition">
                        Home
                    </a>

                    <a href="#layanan"
                       class="text-slate-400 hover:text-white transition">
                        Layanan
                    </a>

                    <a href="#cara-kerja"
                       class="text-slate-400 hover:text-white transition">
                        Cara Kerja
                    </a>

                </nav>

            </div>


            <!-- CONTACT -->
            <div>

                <h3 class="text-sm font-semibold uppercase tracking-wider">
                    Hubungi Kami
                </h3>

                <p class="mt-4 text-sm leading-relaxed text-slate-400">
                    Butuh bantuan atau ingin melakukan pemesanan?
                    Tim kami siap membantu melalui WhatsApp.
                </p>

                <a
                    href="{{ $waOrder ?? 'https://wa.me/628211354085' }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center
                           mt-5
                           px-4 py-2.5
                           rounded-lg
                           bg-orange-500
                           hover:bg-orange-600
                           text-sm font-semibold
                           text-white
                           transition"
                >
                    Pesan via WhatsApp
                    <span class="ml-2">→</span>
                </a>

            </div>

        </div>


        <!-- BOTTOM BAR -->
        <div class="border-t border-white/10
                    py-5
                    flex flex-col
                    md:flex-row
                    items-center
                    justify-between
                    gap-3">

            <p class="text-xs text-slate-500">
                © {{ date('Y') }} For Laundry. All rights reserved.
            </p>

            <p class="text-xs text-slate-500">
                Laundry antar jemput • Praktis dari rumah
            </p>

        </div>

    </div>

</footer>