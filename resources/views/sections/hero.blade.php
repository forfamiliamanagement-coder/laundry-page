<section class="relative h-screen flex items-center justify-center text-white overflow-hidden py-16 md:py-24 px-4">
<div class="container-custom">
        {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ Vite::asset('public/images/laundry-hero.png') }}"
             class="w-full h-full object-cover scale-105 animate-[zoom_20s_linear_infinite]">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/40"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 text-center max-w-2xl px-6 animate-fadeUp">
        <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold leading-tight mb-4">
            Dry Cleaning & Laundry To Your Door
        </h1>

        <p class="mb-6 text-gray-200">
            Let us take the load off your hands
        </p>

        {{-- Search Box --}}
        <div class="bg-white rounded-xl flex flex-col md:flex-row overflow-hidden shadow-2xl w-full">
            <select class="px-4 py-3 text-gray-700 outline-none">
                <option>Select City</option>
            </select>

            <input type="text"
                placeholder="Type area"
                class="flex-1 px-4 py-3 outline-none text-gray-700">

            <button class="bg-orange-500 px-6 text-white font-semibold hover:bg-orange-600 transition">
                Select Location
            </button>
        </div>
    </div>
</div>


    {{-- Wave --}}
    <div class="absolute bottom-0 w-full">
        <svg viewBox="0 0 1440 150" class="w-full">
            <path fill="#f3f4f6"
                d="M0,64L60,80C120,96,240,128,360,128C480,128,600,96,720,80C840,64,960,64,1080,80C1200,96,1320,128,1380,144L1440,160V160H0Z">
            </path>
        </svg>
    </div>

</section>