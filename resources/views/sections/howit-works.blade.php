<section class="py-24 bg-gray-100 text-center">

    <h2 class="text-3xl font-bold mb-2">How it works</h2>
    <p class="text-gray-500 mb-12">Super simple. Super quick.</p>

    <div class="grid md:grid-cols-4 gap-10 max-w-6xl mx-auto px-6">

        @foreach ([
            'Book your order',
            'We pick up',
            'We clean',
            'We deliver'
        ] as $item)

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-xl transition">
            <div class="w-16 h-16 mx-auto mb-4 bg-orange-100 rounded-full flex items-center justify-center">
                🚚
            </div>
            <p class="font-semibold">{{ $item }}</p>
        </div>

        @endforeach

    </div>

</section>