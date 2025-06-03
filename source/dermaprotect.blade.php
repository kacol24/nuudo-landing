@extends('_layouts.dermaprotect')

@section('site_title', 'Nuudo Dermaprotect - For sensitive, dry, atopic skin | Nuudo')
@section('site_description', 'Nuudo Dermaprotect provides skincare solutions for sensitive, dry, and atopic skin. Our 3-step regimen, featuring Gentle Cleanser, Body & Face Cream, and Barrier Balm, uses plant butter and oil to protect and repair the skin barrier. Ideal for eczema and dryness. Discover healthy skin with Nuudo.')

@section('content')
    <section class="mt-10">
        <div class="relative">
            <img src="assets/images/dermaprotect/hero-banner.jpeg" alt="" class="w-full">
            <div class="absolute top-0 left-0 w-full h-full flex items-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-2xl text-white md:text-4xl" data-aos="fade-down">
                        3 Langkah Perawatan untuk
                        <span class="font-bold text-2xl md:text-5xl block" data-aos="fade-down" data-aos-delay="100"
                              style="text-shadow: 1px 1px rgba(0, 0, 0, .7);">
                            Kulit Sensitif, Kering & Rentan Eksim
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div style="background: url(assets/images/dermaprotect/bg-ripple.png) no-repeat center bottom;background-size: cover"
         class="pt-10">
        <section>
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-xl font-bold mb-8 md:text-3xl" data-aos="fade-up">
                    Nuudo percaya bahwa tubuh yang sehat dimulai dengan <span
                            class="text-primaryAlt">skin barrier yang sehat.</span>
                </h1>
                <p class="text-lg mb-4 md:text-2xl" data-aos="fade-up" data-aos-delay="100">
                    Skin barrier adalah lapisan terluar kulit manusia,
                    yang memiliki fungsi utama untuk menjaga kelembapan kulit dan melindungi tubuh dari potensi iritasi.
                </p>
                <img src="assets/images/dermaprotect/skin-barrier.png" alt="" class="mx-auto w-40 mb-4" data-aos="flip-down"
                     data-aos-delay="200">
                <p class="text-lg mb-4 font-bold md:text-2xl" data-aos="fade-down" data-aos-delay="300">
                    Pada kondisi kulit normal, skin barrier umumnya tidak mudah rusak. Kondisi skin barrier yang mudah
                    rusak
                    sering ditemui pada kulit:
                </p>
            </div>
            <div class="swiper swiper--zoom" id="skin_swiper">
                <div class="swiper-wrapper">
                    @foreach($page->dermaprotect->skin_types as $skin)
                        <div class="swiper-slide p-2">
                            <div class="p-4 bg-gradient-to-b from-blue-100 to-white rounded-xl shadow-md text-center md:py-20"
                                 data-aos="fade-left" data-aos-delay="{{ 300 * $loop->index }}">
                                <img src="{{ $skin->image }}" alt="{{ $skin->title }}"
                                     class="size-40 md:size-60 mx-auto mb-4">
                                <h2 class="text-lg font-bold md:text-2xl">
                                    {{ $skin->title }}
                                </h2>
                                <p class="text-base mt-2 md:text-lg">
                                    {{ $skin->body }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="mt-12">
            <div class="container mx-auto px-4">
                <div class="mx-auto max-w-[800px]">
                    <h2 class="text-lg text-center md:text-2xl">
                        <strong class="text-primaryAlt">Nuudo Dermaprotect</strong> diformulasikan khusus
                        untuk menjaga skin barrier kulit sensitif, kering, dan rentan eksim, menggunakan campuran
                        <strong>plant butter dan oil.</strong>
                    </h2>
                </div>
                <img src="assets/images/dermaprotect/natural-ingredients.png" alt="" class="mx-auto mt-8" data-aos="fade-up">
            </div>
            <img src="assets/images/dermaprotect/product-showcase.png" alt="" class="w-full" data-aos="fade-down">
        </section>
    </div>
    <div style="background: url(assets/images/dermaprotect/bg-ripple.png) no-repeat center bottom;background-size: cover"
         class="pt-10">
        <section>
            <div class="swiper swiper--zoom" id="step_swiper">
                <div class="swiper-wrapper">
                    @php($numberIcons = ['assets/images/dermaprotect/icons/icon-one.png', 'assets/images/dermaprotect/icons/icon-two.png', 'assets/images/dermaprotect/icons/icon-three.png'])
                    @foreach($page->dermaprotect->steps as $step)
                        <div class="swiper-slide p-2">
                            <div class="p-6 rounded-xl text-center">
                                <h3 class="text-xl md:text-2xl font-bold">Step {{ $loop->iteration }}</h3>
                                <h2 class="text-lg md:text-3xl font-bold text-primaryAlt uppercase">
                                    {{ $step->tag }}
                                </h2>
                                <div class="relative mt-2 md:mt-4">
                                    <div class="absolute bottom-4 left-0 w-full h-full flex items-center justify-center">
                                        <div data-aos="fade-left"
                                             data-aos-delay="{{ 300 * $loop->index }}">
                                            <img src="{{ $numberIcons[$loop->index] }}" alt=""
                                                 class="mx-auto w-auto h-full -translate-x-24 pt-10">
                                        </div>
                                    </div>
                                    <img src="{{ $step->image }}" alt="Gentle Cleanser"
                                         class="relative w-40 h-auto mx-auto">
                                </div>
                                <p class="text-sm md:text-base mt-2 md:mt-4 font-gotham-book">
                                    {!! nl2br($step->body) !!}
                                </p>
                                <div class="rounded-full border-primaryAlt border-4 bg-white flex items-center p-2 gap-x-2 mt-4 md:mt-6"
                                     data-aos="flip-down" data-aos-delay="{{ 100 * $loop->index }}">
                                    <img src="assets/images/dermaprotect/icons/bulb-icon.png" alt="" class="w-20">
                                    <div class="text-center flex-grow text-xs md:text-base">
                                        <strong class="block text-sm md:text-xl">
                                            TAHUKAH ANDA?
                                        </strong>
                                        {{ $step->faq }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @foreach($page->dermaprotect->steps as $step)
                        <div class="swiper-slide p-2">
                            <div class="p-6 rounded-xl text-center">
                                <h3 class="text-xl md:text-2xl font-bold">Step {{ $loop->iteration }}</h3>
                                <h2 class="text-lg md:text-3xl font-bold text-primaryAlt uppercase">
                                    {{ $step->tag }}
                                </h2>
                                <div class="relative mt-2 md:mt-4">
                                    <div class="absolute bottom-4 left-0 w-full h-full flex items-center justify-center">
                                        <div data-aos="fade-left"
                                             data-aos-delay="{{ 300 * $loop->index }}">
                                            <img src="{{ $numberIcons[$loop->index] }}" alt=""
                                                 class="mx-auto w-auto h-full -translate-x-24 pt-10">
                                        </div>
                                    </div>
                                    <img src="{{ $step->image }}" alt="Gentle Cleanser"
                                         class="relative w-40 h-auto mx-auto">
                                </div>
                                <p class="text-sm md:text-base mt-2 md:mt-4 font-gotham-book">
                                    {!! nl2br($step->body) !!}
                                </p>
                                <div class="rounded-full border-primaryAlt border-4 bg-white flex items-center p-2 gap-x-2 mt-4 md:mt-6"
                                     data-aos="flip-down" data-aos-delay="{{ 100 * $loop->index }}">
                                    <img src="assets/images/dermaprotect/icons/bulb-icon.png" alt="" class="w-20">
                                    <div class="text-center flex-grow text-xs md:text-base">
                                        <strong class="block text-sm md:text-xl">
                                            TAHUKAH ANDA?
                                        </strong>
                                        {{ $step->faq }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="mt-12 pb-8 md:mt-20">
            <h3 class="font-bold text-2xl text-center" data-aos="fade-down">
                Rasakan Kebaikan Nuudo
            </h3>
            <div class="md:mt-8">
                <div class="swiper swiper--zoom" id="testimonial_swiper">
                    <div class="swiper-wrapper">
                        @foreach($page->dermaprotect->testimonials as $testimony)
                            <div class="swiper-slide p-2">
                                <div class="p-2 md:p-4 bg-white rounded-[2rem] shadow-md text-center shadow-lg">
                                    <img src="{{ $testimony->image }}" alt="{{ $testimony->title }}"
                                         class="mx-auto mb-4 w-full">
                                    <h2 class="text-base font-bold text-primaryAlt md:text-xl">
                                        {{ $testimony->title }}
                                    </h2>
                                    <p class="text-sm mt-2 md:text-base">
                                        {!! $testimony->body !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="container mx-auto px-4 md:mt-8 md:text-3xl">
                <div class="text-center max-w-[800px] mx-auto">
                    Nuudo accommodates the needs of all types of skin from normal, sensitive, dry and atopic skin
                </div>
            </div>
            <h3 class="font-bold text-2xl text-center mt-8 md:text-5xl">
                Other Products:
            </h3>
            <div class="mt-4 md:mt-8">
                <div class="swiper swiper--zoom" id="products_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="border border-black bg-white rounded-[2rem] px-2 py-4 text-center md:py-10 md:px-4 md:text-left">
                                <img src="assets/images/dermaprotect/logo-nuudo@2x.png" alt="" class="w-24 mx-auto md:mx-0 md:w-40">
                                <div class="font-bold my-2 md:my-4 md:text-xl">
                                    for normal to sensitive skin
                                </div>
                                <img src="assets/images/dermaprotect/nuudo-10.jpeg" alt="" class="w-full">
                                <div class="mt-2 md:text-xl md:mt-4 flex flex-col md:flex-row md:items-center md:gap-x-4">
                                    <div class="flex-grow whitespace-nowrap">
                                        <strong class="block text-primary">
                                            Baby Wash
                                        </strong>
                                        <strong class="block text-primary">
                                            Kids Wash
                                        </strong>
                                        <strong class="block text-primary">
                                            Body Lotion
                                        </strong>
                                    </div>
                                    <div class="flex flex-row items-center gap-x-2">
                                        <img src="assets/images/dermaprotect/icons/icon-drop.png" alt="" class="w-14 md:w-20">
                                        <div class="font-gotham-book text-xs text-left md:text-base">
                                            Formulated using blends of plant extract and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-black bg-white rounded-[2rem] px-2 py-4 text-center md:py-10 md:px-4 md:text-left">
                                <div class="flex flex-row gap-x-2 items-end justify-center md:justify-start">
                                    <img src="assets/images/dermaprotect/logo-dermaprotect@2x.png" alt="" class="w-24 md:w-40">
                                    <div>
                                        <div class="bg-primaryAlt rounded text-white font-bold text-xs px-2 py-1 md:text-base">
                                            DERMAPROTECT
                                        </div>
                                    </div>
                                </div>
                                <div class="font-bold my-2 md:my-4 md:text-xl">
                                    for sensitive to dry & atopic prone skin
                                </div>
                                <img src="assets/images/dermaprotect/nuudo-3.jpeg" alt="" class="w-full">
                                <div class="mt-2 md:text-xl md:mt-4 flex flex-col md:flex-row md:items-center md:gap-x-4">
                                    <div class="whitespace-nowrap flex-grow">
                                        <strong class="block text-primaryAlt">
                                            Gentle Cleanser
                                        </strong>
                                        <strong class="block text-primaryAlt">
                                            Body & Face Cream
                                        </strong>
                                        <strong class="block text-primaryAlt">
                                            Barrier Balm
                                        </strong>
                                    </div>
                                    <div class="flex flex-row items-center gap-x-2">
                                        <img src="assets/images/dermaprotect/icons/icon-drop.png" alt="" class="w-14 md:w-20">
                                        <div class="font-gotham-book text-xs text-left md:text-base">
                                            Formulated using blends of plant butter and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-black bg-white rounded-[2rem] px-2 py-4 text-center md:py-10 md:px-4 md:text-left">
                                <div class="flex flex-row gap-x-2 items-end justify-center md:justify-start">
                                    <img src="assets/images/dermaprotect/logo-nuudo@2x.png" alt="" class="w-24 md:w-40">
                                    <div>
                                        <div class="bg-primary rounded text-white font-bold text-xs px-2 py-1 md:text-base">
                                            HAIR CARE
                                        </div>
                                    </div>
                                </div>
                                <div class="font-bold my-2 md:text-xl">
                                    for baby and kids healthy hair
                                </div>
                                <img src="assets/images/dermaprotect/nuudo-23.jpeg" alt="" class="w-full">
                                <div class="mt-2 md:text-xl md:mt-4 flex flex-col md:flex-row md:items-center md:gap-x-4">
                                    <div class="whitespace-nowrap flex-grow">
                                        <strong class="block text-primary">
                                            Kids Shampoo
                                        </strong>
                                        <strong class="block text-primary">
                                            Hair Lotion
                                        </strong>
                                    </div>
                                    <div class="flex flex-row items-center gap-x-2">
                                        <img src="assets/images/dermaprotect/icons/icon-drop.png" alt="" class="w-14 md:w-20">
                                        <div class="font-gotham-book text-xs text-left md:text-base">
                                            Formulated using blends of plant extract and oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="border border-black bg-white rounded-[2rem] px-2 py-4 text-center md:py-10 md:px-4 md:text-left">
                                <div class="flex flex-row gap-x-2 items-end">
                                    <img src="assets/images/dermaprotect/logo-nuudo@2x.png" alt=""
                                         class="w-24 mx-auto md:mx-0 md:w-40">
                                </div>
                                <div class="font-bold my-2 md:text-xl">
                                    for irritated skin
                                </div>
                                <img src="assets/images/dermaprotect/nuudo-7.jpeg" alt="" class="w-full">
                                <div class="mt-2 text-xs font-gotham-book md:text-base">
                                    Irritated skin can be caused by Wet Rash or Dry Rash
                                </div>
                                <div class="mt-2 flex flex-col font-gotham-book text-sm gap-y-2 md:text-base md:flex-row">
                                    <div class="md:w-1/2">
                                        <strong class="block text-primary font-gotham-rounded">
                                            Nuudo Rash Cream
                                        </strong>
                                        For Wet Rash caused by sweat, such as diaper rash
                                    </div>
                                    <div class="md:w-1/2">
                                        <strong class="block text-primaryAlt font-gotham-rounded">
                                            Nuudo Barrier Balm
                                        </strong>
                                        For Dry Rash on dry & atopic skin and other conditions such as sun burn, minor
                                        burn & minor cut
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
    </div>
    <section title="outro">
        <div class="relative">
            <img src="assets/images/dermaprotect/all-products.jpeg" alt="" class="w-full">
            <div class="absolute bottom-0 left-0 w-full text-center py-4 md:py-20">
                <img src="assets/images/dermaprotect/logo-nuudo@2x.png" alt="" class="w-40 mx-auto md:w-60" data-aos="fade-down">
                <div class="container mx-auto px-4">
                    <h4 class="text-xl mt-2 md:text-5xl font-bold md:mt-8" data-aos="fade-up" data-aos-delay="100">
                        Where Natural Goodness Meets Everyday Care
                    </h4>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after_scripts')
    <script>
      new Swiper('#skin_swiper', {
        slidesPerView: 1.5,
        centeredSlides: true,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5
          }
        }
      });

      new Swiper('#step_swiper', {
        slidesPerView: 1.1,
        centeredSlides: true,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5
          }
        }
      });

      new Swiper('#testimonial_swiper', {
        slidesPerView: 1.5,
        centeredSlides: true,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5
          }
        }
      });

      new Swiper('#products_swiper', {
        slidesPerView: 1.5,
        centeredSlides: true,
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5
          }
        }
      });
    </script>
@endpush
