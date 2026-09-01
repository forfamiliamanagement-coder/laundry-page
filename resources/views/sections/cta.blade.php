@php
    $phoneOrder = '628211354085';
    $phoneCs = '628211354085';

    $waOrder = "https://wa.me/$phoneOrder?text=" . urlencode(
        "Hallo for laundry, saya mau order laundry"
    );

    $waChat = "https://wa.me/$phoneCs?text=" . urlencode(
        "Hallo for laundry, saya mau bertanya soal laundry"
    );
@endphp


<section
    id="cta"
    class="relative overflow-hidden
           bg-slate-900
           px-4 py-20 md:py-24"
>

    <!-- SUBTLE BACKGROUND -->
    <div
        class="absolute inset-0 pointer-events-none"
        aria-hidden="true"
    >

        <!-- ORANGE GLOW -->
        <div
            class="absolute
                   top-1/2 left-1/2
                   -translate-x-1/2 -translate-y-1/2
                   w-[500px] h-[300px]
                   rounded-full
                   bg-orange-500/10
                   blur-3xl"
        ></div>

        <!-- GRID / LIGHT EFFECT -->
        <div
            class="absolute inset-0 opacity-[0.04]"
            style="
                background-image:
                    linear-gradient(
                        rgba(255,255,255,.8) 1px,
                        transparent 1px
                    ),
                    linear-gradient(
                        90deg,
                        rgba(255,255,255,.8) 1px,
                        transparent 1px
                    );
                background-size: 48px 48px;
            "
        ></div>

    </div>


    <!-- CONTENT -->
    <div
        class="relative z-10
               max-w-3xl
               mx-auto
               text-center"
    >

        <!-- EYEBROW -->
        <span
            class="inline-flex items-center gap-2
                   px-3.5 py-1.5
                   rounded-full
                   border border-white/10
                   bg-white/5
                   text-orange-400
                   text-xs
                   font-semibold
                   uppercase
                   tracking-wide
                   reveal"
        >

            <span
                class="w-1.5 h-1.5
                       rounded-full
                       bg-orange-400"
            ></span>

            Siap Membantu Laundry Anda

        </span>


        <!-- HEADING -->
        <h2
            class="mt-5
                   text-3xl sm:text-4xl md:text-5xl
                   font-bold
                   tracking-tight
                   leading-tight
                   text-white
                   reveal delay-1"
        >

            Laundry selesai,
            <span class="text-orange-400">
                tanpa perlu keluar rumah.
            </span>

        </h2>


        <!-- DESCRIPTION -->
        <p
            class="mt-5
                   max-w-2xl
                   mx-auto
                   text-base md:text-lg
                   leading-7
                   text-slate-300
                   reveal delay-2"
        >
            Cukup pesan melalui WhatsApp. Kami bantu atur
            penjemputan laundry Anda dan proses selanjutnya.
        </p>


        <!-- CTA BUTTONS -->
        <div
            class="mt-8
                   flex flex-col sm:flex-row
                   items-center justify-center
                   gap-3
                   reveal delay-3"
        >

            <!-- PRIMARY -->
            <a
                href="{{ $waOrder }}"
                target="_blank"
                rel="noopener noreferrer"

                class="inline-flex
                       items-center
                       justify-center
                       gap-2

                       w-full sm:w-auto
                       min-w-[220px]

                       px-6 py-3.5
                       rounded-xl

                       bg-orange-500
                       hover:bg-orange-600

                       text-white
                       text-sm
                       font-semibold

                       shadow-lg
                       shadow-orange-500/20

                       hover:-translate-y-0.5

                       transition-all
                       duration-300"
            >

                Pesan Laundry via WhatsApp

                <span aria-hidden="true">
                    →
                </span>

            </a>


            <!-- SECONDARY -->
            <a
                href="{{ $waChat }}"
                target="_blank"
                rel="noopener noreferrer"

                class="inline-flex
                       items-center
                       justify-center
                       gap-2

                       w-full sm:w-auto
                       min-w-[170px]

                       px-6 py-3.5
                       rounded-xl

                       border border-white/15
                       bg-white/5

                       text-white
                       text-sm
                       font-semibold

                       hover:bg-white/10
                       hover:border-white/25

                       transition-all
                       duration-300"
            >

                Tanya Customer Care

            </a>

        </div>


        <!-- MICRO TRUST -->
        <div
            class="mt-7
                   flex flex-wrap
                   items-center
                   justify-center
                   gap-x-5
                   gap-y-2
                   text-xs md:text-sm
                   text-slate-400
                   reveal delay-4"
        >

            <span class="inline-flex items-center gap-1.5">
                <span class="text-green-400">✓</span>
                Pesan dari rumah
            </span>

            <span
                class="hidden sm:block
                       text-slate-600"
            >
                •
            </span>

            <span class="inline-flex items-center gap-1.5">
                <span class="text-green-400">✓</span>
                Antar jemput praktis
            </span>

            <span
                class="hidden sm:block
                       text-slate-600"
            >
                •
            </span>

            <span class="inline-flex items-center gap-1.5">
                <span class="text-green-400">✓</span>
                Konsultasi via WhatsApp
            </span>

        </div>

    </div>

</section>