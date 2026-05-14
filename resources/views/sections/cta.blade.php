@php
  $phoneOrder = '6285283544075';
  $phoneCs = '6285283544075';

  $waOrder = "https://wa.me/$phoneOrder?text=" . urlencode("Hallo ka saya mau order laundry");
  $waChat  = "https://wa.me/$phoneCs?text=" . urlencode("Hallo ka saya mau bertanya soal laundry");
@endphp

<section class="section relative text-center px-4 overflow-hidden">
  
  <!-- BACKGROUND EFFECT -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-green-400/20 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-orange-400/20 blur-3xl rounded-full"></div>
  </div>

  <div class="max-w-4xl mx-auto">

    <h2 class="heading mb-4">
      Butuh Laundry Sekarang?
    </h2>

    <p class="subheading mb-8">
      Order cepat atau chat langsung via WhatsApp
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">

      <!-- ORDER -->
      <a href="{{ $waOrder }}"
         class="btn-accent">
        Order Sekarang
      </a>

      <!-- CHAT -->
      <a href="{{ $waChat }}"
         class="btn-secondary">
        Chat WhatsApp
      </a>

    </div>

  </div>
</section>