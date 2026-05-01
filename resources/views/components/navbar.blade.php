<nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-500 ease-in-out">

    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center gap-2">
           <img src="{{ asset('images/For.svg') }}" 
         id="logo"
         class="h-16 w-auto text-white transition duration-300">

            <span id="brandText" class="font-bold text-xl text-white transition duration-300">
               Laundry
            </span>
        </div>

        <!-- Menu -->
        <div class="space-x-8 hidden md:flex font-medium">
            <a href="#" class="hover:text-orange-500 transition">Home</a>
            <a href="#layanan" class="hover:text-orange-500 transition">Services</a>
            <a href="#harga" class="hover:text-orange-500 transition">Pricing</a>
        </div>

        <!-- CTA -->
        <a href="https://wa.me/6285383544075"
           class="bg-orange-500 hover:bg-orange-600 transition px-5 py-2 rounded-lg text-white font-medium">
            Order
        </a>

    </div>
</nav>