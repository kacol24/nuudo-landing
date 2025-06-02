@extends('_layouts.master')

@section('site_title', 'Cooler Bag')

@section('content')
    <section class="relative gradient-decoration">
        <img src="assets/images/hero-banner-cooler-bag-mobile.jpeg" alt="hero banner"
             class="block h-auto w-full max-w-full md:hidden">
        <img src="assets/images/hero-banner-cooler-bag.jpeg" alt="hero banner"
             class="hidden h-auto w-full max-w-full md:block">
        <div class="absolute top-0 left-0 z-20 w-full py-10 text-center md:py-20">
            <img src="assets/images/logo@3x.png" alt="logo babygo" class="mx-auto h-12 max-w-none md:h-20"
                 data-aos="fade-down">
            <div class="mt-4 rounded-full px-6 md:py-2 py-1 font-gotham-book bg-[#fbfafb] inline-block md:text-4xl text-xl"
                 data-aos="fade-up">
                Making parents life <strong class="font-gotham-rounded text-primary">easier</strong>
            </div>
        </div>
    </section>
    <section id="intro" title="Intro" class="mt-10 md:mt-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="mb-2 text-3xl font-bold tracking-tighter font-gotham-rounded text-primary md:md-6 md:mb-4 md:text-7xl">
                    <span class="block text-[#ff8000]">High Quality & Leak Proof</span>
                    Cooler Bag for Working Mom
                </h1>
                <div class="text-lg text-body md:text-5xl" data-aos="fade">
                    Solusi Kebutuhan Orang Tua Modern
                </div>
                <div class="relative mt-10 flex items-center justify-center text-center line-decoration md:mt-14">
                    <div class="relative z-10 mx-auto inline-block whitespace-nowrap rounded-full px-6 py-1 text-xl font-bold uppercase text-white shadow bg-gradient md:py-2 md:text-6xl"
                         data-aos="zoom-in">
                        Komitmen Babygo
                    </div>
                </div>
                <div class="mt-6 text-xl font-bold uppercase text-primary md:mt-8 md:text-5xl">
                    "Making Parent's Life Easier"
                </div>
                <div class="mx-auto mt-2 text-base max-w-[900px] text-body md:mt-3 md:text-3xl" data-aos="fade-up">
                    babyGo hadir dengan produk-produk
                    yang memudahkan kegiatan orang tua
                    sehari-hari dengan si Kecil.
                </div>
            </div>
        </div>
    </section>
    <section id="features" title="Features" class="mt-4 mb-20">
        <div class="py-20 swiper md:py-32 swiper--blur swiper--blur-expanded" id="feature-swiper"
             style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-large-compartment.jpeg"
                             alt="showing cooler bag has large compartment"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    Large Compartment
                                </div>
                            </div>
                            <div>
                                Bawa pompa ASI tipe besar sekarang lebih mudah
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-laptop-compartment.jpeg"
                             alt="showing cooler bag with laptop compartment"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    Laptop Compartment
                                </div>
                            </div>
                            <div>
                                Memudahkan Moms bawa laptop (up to 14 inch)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-luggage-belt.jpeg"
                             alt="showing cooler bag has luggage belt"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    Built In Luggage Belt
                                </div>
                            </div>
                            <div>
                                Business trip bawa cooler bag? Siapa takut!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-stroller-hook.jpeg"
                             alt="showing cooler bag has stroller hook"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    Built In Stroller Hook
                                </div>
                            </div>
                            <div>
                                Gantung di stroller anak saat diperlukan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-stylish-design.jpeg"
                             alt="showing cooler bag has stylish design"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    Stylish Design
                                </div>
                            </div>
                            <div>
                                Tidak mengganggu style Mommy saat bekerja
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full rounded-lg p-4 shadow-lg bg-white">
                        <img src="assets/images/feature-thermal-foil.jpeg"
                             alt="showing cooler bag has high quality thermal foil"
                             class="h-auto max-w-full rounded-lg w-100">
                        <div class="mt-4 text-center">
                            <div class="flex items-center justify-center">
                                <div class="ml-2 text-lg font-bold text-primary md:text-xl">
                                    High Quality Thermal Foil
                                </div>
                            </div>
                            <div>
                                Daya tahan hingga 24 jam (dengan 2 Ice Gel Pack 500gr)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section class="mt-8 mb-20 md:mt-32">
        <div class="container mx-auto px-4">
            <div class="relative mb-4 flex items-center justify-center text-center md:mt-14">
                <h2 class="relative z-10 mx-auto inline-block rounded-full px-4 py-2 text-lg font-bold uppercase text-white shadow bg-gradient md:text-6xl"
                    data-aos="fade-down">
                    Koleksi BabyGo Cooler Bag
                </h2>
            </div>
        </div>
        <div class="swiper" id="product-swiper" style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                @foreach($page->cooler_bag->products as $product)
                    <div class="swiper-slide">
                        <div class="m-4 rounded-lg border p-3 shadow-lg border-primary">
                            <div class="grid gap-x-4 md:grid-cols-2">
                                <div class="relative">
                                    <img src="{{ $product->featured_image }}" alt="{{ $product->title }}"
                                         class="h-auto w-full max-w-full rounded-lg">
                                    @if($product->credit)
                                        <div class="absolute left-2 bottom-2 inline-block rounded-full text-white bg-[#444f57] px-4 py-1 shadow-lg text-xs font-bold">
                                            {{ $product->credit }}
                                        </div>
                                    @endif
                                </div>
                                <div class="md:px-3">
                                    <h2 class="mb-3 text-3xl font-bold text-primary md:text-6xl">
                                        {!! $product->title !!}
                                    </h2>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                                        @unless(is_iterable($product->dimension))
                                            <div class="text-center border border-[#444f57] text-[#444f57] md:text-lg text-base">
                                                <div class="bg-[#444f57] block text-white py-2">
                                                    Dimensions Bag
                                                </div>
                                                <div class="py-2 text-base">
                                                    {{ $product->dimension }}
                                                </div>
                                            </div>
                                        @else
                                            @foreach($product->dimension as $key => $dimension)
                                                <div @class([
                                                    'text-center border border-[#444f57] text-[#444f57] md:text-lg text-base',
                                                    'mb-4' => ! $loop->last,
                                                ])>
                                                    <div class="bg-[#444f57] block text-white py-2">
                                                        {{ $key }}
                                                    </div>
                                                    <div class="py-2 text-base">
                                                        {{ $dimension }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endunless
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 mt-4">
                                        <div class="text-center">
                                            @if($product->bonus)
                                                @foreach($product->bonus as $bonus)
                                                    <div class="mb-4 text-center px-8">
                                                        <img src="{{ $bonus->image }}"
                                                             alt="{{ $bonus->title }}"
                                                             class="mx-auto h-auto w-80 max-w-full">
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="mt-8 flex flex-col justify-center text-lg font-gotham-book">
                                                Available in:
                                                <div class="mt-4 flex justify-center gap-x-4">
                                                    @foreach($product->colors as $color)
                                                        @unless(is_iterable($color))
                                                            <div class="rounded-full size-8 md:size-12"
                                                                 style="background-color:{{ $color }};"></div>
                                                        @else
                                                            <div class="rounded-full size-8 md:size-12 flex flex-row">
                                                                @foreach($color as $subColor)
                                                                    <div @class([
                                                                            'w-4 h-8 md:w-6 md:h-12',
                                                                            'rounded-l-full' => $loop->first,
                                                                            'rounded-r-full' => $loop->last,
                                                                        ])
                                                                         style="background-color:{{ $subColor }};"></div>
                                                                @endforeach
                                                            </div>
                                                        @endunless
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            @if($product->has_laptop)
                                                <div class="mb-4 mt-8">
                                                    <div class="rounded-full border border-[#6da333] px-4 py-2 flex flex-row items-center gap-x-2">
                                                        <div class="max-w-[40px]">
                                                            <img src="assets/images/icons/icon-laptop.png"
                                                                 alt="icon laptop" class="h-auto max-w-full">
                                                        </div>
                                                        <div class="text-[#667076] text-sm">
                                                            Laptop compartment.<br>Up to 14 inch
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="px-4 mt-8">
                                                <img src="{{ $product->image }}"
                                                     alt="thumbnail {{ $product->title }}"
                                                     class="h-auto w-full max-w-full">
                                            </div>
                                            @if($product->after_image)
                                                <div class="mt-8">
                                                    @foreach($product->after_image as $type => $afterImage)
                                                        @if($type == 'image')
                                                            <img src="{{ $afterImage }}" alt="{{ $afterImage }}"
                                                                 class="h-auto w-full max-w-full">
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
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
    <section title="Testimonials" id="testimonials" class="mb-10">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="text-center line-decoration">
                    <div class="relative mx-auto inline-block whitespace-nowrap px-4 text-xl font-bold uppercase text-primary md:px-8 md:text-6xl"
                         data-aos="zoom-in">
                        What They Say
                        <div class="text-lg md:text-5xl">
                            About BabyGo
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-20 swiper swiper--blur md:py-32 swiper--blur" id="testimonial-swiper"
             style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                @foreach($page->cooler_bag->testimonials as $testimony)
                    <div class="swiper-slide">
                        <div class="rounded-lg bg-white p-4 shadow-lg">
                            <div class="relative">
                                <img src="{{ $testimony->image }}" alt="{{ $testimony->name }} dengan BabyGo"
                                     class="z-0 h-auto w-full max-w-full">
                                <div class="absolute bottom-0 left-0 z-10 -mb-1 flex w-full items-end justify-center">
                                    <div class="rounded-t-lg bg-white px-4 py-0 text-sm font-bold text-primary md:text-xl">
                                        {{ $testimony->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-center text-xs font-gotham-book md:text-lg">
                                "{!! $testimony->message !!}"
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section title="Produk Lainnya" class="mb-20">
        <div class="container mx-auto px-4">
            <div class="text-center line-decoration">
                <div class="relative mx-auto inline-block whitespace-nowrap px-4 text-lg font-bold uppercase text-primary md:px-8 md:text-5xl">
                    Temukan Produk
                    <div class="text-xl md:text-6xl">
                        BabyGo Lainnya
                    </div>
                </div>
            </div>
            <div class="-mx-4 mt-10">
                <div class="flex flex-wrap justify-center gap-y-4 md:gap-y-8">
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/products/diaper-bag.jpeg" alt="diaper bag"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Diaper Bag
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/products/cooler-bag.jpeg" alt="cooler bag"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Cooler Bag
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/products/organizer.jpeg" alt="organizer"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Organizer
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/babygo-bottle-bag.jpeg" alt="bottle bag"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Bottle Bag
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/products/accessories.jpeg"
                                     alt="accessories"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Accessories
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 px-4 md:w-1/3">
                        <div class="flex flex-col justify-center" data-aos="fade-up" data-aos-delay="500">
                            <div class="rounded-full border-4 border-primary">
                                <img src="assets/images/products/hooks.jpeg" alt="hooks"
                                     class="h-auto w-full max-w-full rounded-full">
                            </div>
                            <div class="-mt-4 text-center">
                                <div class="inline-block rounded-full px-4 py-1 text-lg font-bold text-white bg-gradient md:text-2xl">
                                    Hooks
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section title="Links" class="mb-20">
        <div class="container mx-auto px-4">
            <div class="relative mb-10 flex items-center justify-center text-center line-decoration md:mt-14">
                <div class="relative z-10 mx-auto inline-block whitespace-nowrap rounded-full px-6 py-2 text-xl font-bold uppercase text-white shadow bg-gradient md:text-5xl"
                     data-aos="zoom-in">
                    Visit Us
                </div>
            </div>
            <div class="-mx-4">
                <div class="flex flex-wrap justify-center gap-y-4 md:gap-y-8">
                    <div class="px-4 md:w-1/3">
                        <a href="https://www.instagram.com/babygoinc/" target="_blank"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-instagram.png" alt="instagram icon"
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                @babygoinc
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://babygoinc.com/" target="_blank"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-web.png" alt="web icon"
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                www.babygoinc.com
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://www.tiktok.com/@babygo.inc" target="_blank"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-tiktok.png" alt="tiktok icon"
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                @babygo.inc
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://www.youtube.com/@BabyGo-inc" target="_blank"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-youtube.png" alt="youtube icon"
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                Youtube
                            </div>
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://id.shp.ee/V9Dw4qu" target="_blank"
                           class="flex w-full items-center justify-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-shopee.png" alt="shopee icon"
                                 class="h-7 w-auto">
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://www.tokopedia.com/incbrands" target="_blank"
                           class="flex w-full items-center justify-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-tokopedia.png" alt="tokopedia icon"
                                 class="h-7 w-auto">
                        </a>
                    </div>
                    <div class="px-4 md:w-1/3">
                        <a href="https://wa.me/6289676717676" target="_blank"
                           class="flex w-full items-center rounded-full bg-white px-5 py-3 text-2xl no-underline shadow transition hover:bg-gray-50">
                            <img src="assets/images/icons/icon-whatsapp.png" alt="whatsapp icon"
                                 class="h-auto w-7 max-w-full">
                            <div class="ml-4">
                                WhatsApp
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after_scripts')
    <script>
      new Swiper('#product-swiper', {
        slidesPerView: 1.2,
        centeredSlides: true,
        navigation: {
          prevEl: '#product-swiper .swiper-button-prev',
          nextEl: '#product-swiper .swiper-button-next'
        }
      });
      new Swiper('#testimonial-swiper', {
        slidesPerView: 1.5,
        loop: true,
        autoHeight: true,
        centeredSlides: true,
        navigation: {
          prevEl: '#testimonial-swiper .swiper-button-prev',
          nextEl: '#testimonial-swiper .swiper-button-next'
        },
        breakpoints: {
          768: {
            slidesPerView: 3
          }
        }
      });

      new Swiper('#feature-swiper', {
        slidesPerView: 1.5,
        loop: true,
        autoHeight: true,
        centeredSlides: true,
        spaceBetween: 48,
        navigation: {
          prevEl: '#feature-swiper .swiper-button-prev',
          nextEl: '#feature-swiper .swiper-button-next'
        },
        breakpoints: {
          768: {
            slidesPerView: 4
          }
        }
      });
    </script>
@endpush
