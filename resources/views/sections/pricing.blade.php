<section id="paket-layanan" class="py-20 md:py-24 bg-gray-50 px-4">

    <div class="max-w-6xl mx-auto">

        <!-- SECTION HEADER -->
        <div class="text-center max-w-2xl mx-auto mb-14 reveal">

            <!-- EYEBROW -->
            <span
                class="inline-flex items-center gap-2
                       px-4 py-2
                       rounded-full
                       bg-orange-50
                       border border-orange-100
                       text-orange-500
                       text-xs
                       font-semibold
                       uppercase
                       tracking-wide"
            >
                <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                Pilihan Layanan
            </span>

            <!-- HEADING -->
            <h2 class="mt-5 text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                Pilih layanan sesuai
                <span class="text-orange-500">
                    kebutuhan Anda.
                </span>
            </h2>

            <!-- SUBTEXT -->
            <p class="mt-4 text-slate-500 leading-relaxed">
                Dari kebutuhan laundry rutin hingga pakaian yang membutuhkan
                penanganan lebih khusus, kami siap membantu.
            </p>

        </div>


        <!-- SERVICE CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            <!-- REGULER -->
            <article
                class="group relative
                       bg-white
                       border border-slate-200
                       rounded-2xl
                       p-7 md:p-8
                       transition-all duration-300
                       hover:-translate-y-1
                       hover:shadow-xl
                       reveal"
            >

                <!-- ICON -->
                <div
                    class="w-14 h-14
                           flex items-center justify-center
                           rounded-xl
                           bg-orange-50
                           border border-orange-100
                           mb-6"
                >
                    <img
                        src="{{ asset('images/icon/sparkles.svg') }}"
                        alt="Layanan laundry reguler"
                        class="w-7 h-7"
                    >
                </div>


                <!-- TITLE -->
                <h3 class="text-xl font-bold text-slate-900 mb-3">
                    Reguler
                </h3>


                <!-- DESCRIPTION -->
                <p class="text-sm text-slate-500 leading-relaxed mb-6">
                    Pilihan praktis untuk kebutuhan laundry rutin
                    sehari-hari dengan proses yang nyaman dan mudah.
                </p>


                <!-- BENEFITS -->
                <ul class="space-y-3 text-sm text-slate-600">

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Cocok untuk kebutuhan rutin
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Praktis dari rumah
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Antar jemput tersedia
                        </span>
                    </li>

                </ul>

            </article>



            <!-- EXPRESS -->
            <article
                class="group relative
                       bg-white
                       border-2 border-orange-200
                       rounded-2xl
                       p-7 md:p-8
                       shadow-sm
                       transition-all duration-300
                       hover:-translate-y-1
                       hover:shadow-xl
                       reveal delay-1"
            >

                <!-- BADGE -->
                <span
                    class="absolute
                           top-5 right-5
                           px-3 py-1
                           rounded-full
                           bg-orange-500
                           text-white
                           text-xs
                           font-semibold"
                >
                    Prioritas
                </span>


                <!-- ICON -->
                <div
                    class="w-14 h-14
                           flex items-center justify-center
                           rounded-xl
                           bg-orange-50
                           border border-orange-100
                           mb-6"
                >
                    <img
                        src="{{ asset('images/icon/time-fast.svg') }}"
                        alt="Layanan laundry express"
                        class="w-7 h-7"
                    >
                </div>


                <!-- TITLE -->
                <h3 class="text-xl font-bold text-slate-900 mb-3">
                    Express
                </h3>


                <!-- DESCRIPTION -->
                <p class="text-sm text-slate-500 leading-relaxed mb-6">
                    Untuk Anda yang membutuhkan laundry lebih cepat
                    tanpa harus menunggu terlalu lama.
                </p>


                <!-- BENEFITS -->
                <ul class="space-y-3 text-sm text-slate-600">

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Untuk kebutuhan mendesak
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Proses lebih cepat
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Antar jemput tersedia
                        </span>
                    </li>

                </ul>

            </article>



            <!-- PREMIUM -->
            <article
                class="group relative
                       bg-white
                       border border-slate-200
                       rounded-2xl
                       p-7 md:p-8
                       transition-all duration-300
                       hover:-translate-y-1
                       hover:shadow-xl
                       reveal delay-2"
            >

                <!-- ICON -->
                <div
                    class="w-14 h-14
                           flex items-center justify-center
                           rounded-xl
                           bg-orange-50
                           border border-orange-100
                           mb-6"
                >
                    <img
                        src="{{ asset('images/icon/benefit.svg') }}"
                        alt="Layanan laundry premium"
                        class="w-7 h-7"
                    >
                </div>


                <!-- TITLE -->
                <h3 class="text-xl font-bold text-slate-900 mb-3">
                    Premium
                </h3>


                <!-- DESCRIPTION -->
                <p class="text-sm text-slate-500 leading-relaxed mb-6">
                    Untuk pakaian yang membutuhkan perhatian dan
                    penanganan lebih khusus.
                </p>


                <!-- BENEFITS -->
                <ul class="space-y-3 text-sm text-slate-600">

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Penanganan lebih khusus
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Cocok untuk pakaian tertentu
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span
                            class="mt-0.5 flex-shrink-0
                                   w-5 h-5
                                   rounded-full
                                   bg-green-50
                                   text-green-500
                                   flex items-center justify-center"
                        >
                            ✓
                        </span>

                        <span>
                            Konsultasi sebelum diproses
                        </span>
                    </li>

                </ul>

            </article>

        </div>


        <!-- CTA -->
        <div class="text-center mt-12 reveal">

            <p class="text-sm text-slate-500 mb-4">
                Belum yakin layanan mana yang sesuai?
            </p>

                    <a
            href="https://wa.me/628211354085?text={{ urlencode('Hallo for laundry, saya mau konsultasi layanan laundry') }}"
            target="_blank"
            rel="noopener noreferrer"

            onclick="gtag('event', 'whatsapp_click', {
                cta_location: 'paket_layanan',
                cta_type: 'consultation',
                service_package: 'general'
            });"

            class="inline-flex items-center justify-center
                px-6 py-3
                rounded-xl
                bg-orange-500
                hover:bg-orange-600
                text-white
                font-semibold
                text-sm
                shadow-lg
                shadow-orange-500/20
                transition-all duration-300
                hover:-translate-y-0.5"
        >
            Konsultasi via WhatsApp
            <span class="ml-2">→</span>
        </a>
        </div>

    </div>

</section>