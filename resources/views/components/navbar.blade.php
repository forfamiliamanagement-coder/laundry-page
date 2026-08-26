<nav
    id="navbar"
    class="fixed top-0 left-0 w-full z-50
           bg-black/20
           backdrop-blur-md
           border-b border-white/10
           transition-all duration-300 ease-in-out"
>

    <div
        class="max-w-7xl mx-auto
               px-5 sm:px-6 lg:px-8
               py-3.5
               flex items-center justify-between"
    >

        <!-- LOGO -->
        <a
            href="/"
            class="flex items-center gap-2 shrink-0"
            aria-label="For Laundry Home"
        >

            <img
                src="{{ asset('images/For1.svg') }}"
                id="logo"
                alt="For Laundry"
                class="h-12 md:h-14 w-auto
                       transition-all duration-300"
            >

            <span
                id="brandText"
                class="font-semibold text-lg md:text-xl
                       tracking-tight text-white
                       transition-all duration-300"
            >
                Laundry
            </span>

        </a>


        <!-- DESKTOP NAVIGATION -->
        <div
            class="hidden md:flex
                   items-center
                   gap-8
                   ml-auto mr-8"
        >

            <a
                href="/"
                class="relative
                       text-sm font-semibold
                       text-black
                       drop-shadow-sm
                       transition-colors duration-200
                       hover:text-orange-300

                       after:absolute
                       after:left-0
                       after:-bottom-1
                       after:w-0
                       after:h-0.5
                       after:bg-orange-400
                       after:rounded-full
                       after:transition-all
                       after:duration-300
                       hover:after:w-full"
            >
                Home
            </a>


            <a
                href="#layanan"
                class="relative
                       text-sm font-semibold
                       text-black
                       drop-shadow-sm
                       transition-colors duration-200
                       hover:text-orange-300

                       after:absolute
                       after:left-0
                       after:-bottom-1
                       after:w-0
                       after:h-0.5
                       after:bg-orange-400
                       after:rounded-full
                       after:transition-all
                       after:duration-300
                       hover:after:w-full"
            >
                Services
            </a>

        </div>


        <!-- CTA -->
        <a
            href="https://wa.me/6285817129957?text=Hallo%20ka%20saya%20mau%20order%20laundry"
            target="_blank"
            rel="noopener noreferrer"

            class="hidden sm:inline-flex
                   items-center justify-center
                   px-5 py-2.5

                   rounded-xl

                   bg-orange-500
                   hover:bg-orange-600

                   text-white
                   text-sm
                   font-semibold

                   shadow-lg
                   shadow-orange-500/20

                   transition-all
                   duration-300

                   hover:-translate-y-0.5"
        >
            Pesan Laundry
        </a>


        <!-- MOBILE MENU -->
        <button
            type="button"
            class="md:hidden
                   inline-flex
                   items-center
                   justify-center
                   w-10 h-10
                   rounded-lg

                   bg-white/10
                   border border-white/20

                   text-white

                   backdrop-blur-sm

                   transition-all duration-200"

            aria-label="Buka menu"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <line x1="4" x2="20" y1="6" y2="6"/>
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            </svg>

        </button>

    </div>

</nav>