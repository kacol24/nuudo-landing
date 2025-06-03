@extends('_layouts.master')

@section('site_title', 'Hair Lotion')

@section('content')
    <header class="absolute top-0 left-0 w-full z-30">
        <div class="rounded-b-3xl bg-white">
            <div class="container mx-auto px-4">
                <div class="flex items-center gap-x-4 py-4 md:gap-x-8 md:py-8">
                    <div>
                        <img src="assets/images/logo-nuudo.png" alt="logo nuudo"
                             class="h-auto max-w-full w-[120px] md:w-[240px]"
                             data-aos="fade-right">
                    </div>
                    <div class="flex-grow">
                        <h3 class="m-0 text-lg font-gotham-rounded md:text-3xl" data-aos="fade-right"
                            data-aos-delay="100">
                            Where Natural Goodness Meets Everyday Care
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section title="Hero"
             class="relative">
        <div class="block md:hidden">
            <img src="assets/images/hero-banner-mobile.jpeg" alt="hero banner" class="h-auto w-full max-w-full">
        </div>
        <div class="hidden md:block">
            <img src="assets/images/hero-banner.jpeg" alt="hero banner" class="h-auto w-full max-w-full">
        </div>
        <div class="absolute bottom-0 left-0 w-full text-center">
            <div class="container mx-auto px-4">
                <h1 class="mb-4 text-3xl font-black text-stroke text-primary font-gotham-rounded md:text-7xl"
                    data-aos="fade-up">
                    Nuudo Hair Lotion
                </h1>
                <div class="text-2xl font-bold text-body md:text-5xl">
                    Mengandung <strong class="text-3xl text-stroke-inverted md:text-6xl">7 jenis minyak alami</strong>
                    dari
                    tumbuhan dan biji-bijian
                </div>
            </div>
        </div>
    </section>
    <section class="mt-16">
        <div class="container mx-auto px-4">
            <div class="mx-auto inline-block rounded-full p-8 text-center text-lg md:text-4xl font-bold text-white bg-primary"
                 data-aos="fade-down">
                Terbukti Membantu Menutrisi Pertumbuhan Rambut Si Kecil dan Menjadikannya Lebih Lembut
            </div>
            <div class="mt-8 text-center">
                <img src="assets/images/bahan-dasar.png" alt="bahan dasar dari tumbuhan"
                     class="mx-auto h-auto max-w-full w-[400px]">
            </div>
            <div class="mt-8 grid grid-cols-1 gap-x-4 md:grid-cols-3 gap-y-4">
                <div class="px-7 md:px-0">
                    <img src="assets/images/segala-usia.png" alt="segala usia" class="h-auto w-full max-w-full"
                         data-aos="fade-right">
                </div>
                <div>
                    <img src="assets/images/tanpa-paraben.png" alt="tanpa paraben dan alkohol"
                         class="h-auto w-full max-w-full"
                         data-aos="fade-right" data-aos-delay="200">
                </div>
                <div class="px-7 md:px-0">
                    <img src="assets/images/rambut-kering-dan-basah.png" alt="untuk pemakaian rambut kering dan basah"
                         class="h-auto w-full max-w-full" data-aos="fade-right"
                         data-aos-delay="400">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-16">
        <div class="container mx-auto px-4">
            <h2 class="mx-auto text-center text-3xl font-bold max-w-[900px] text-primary md:text-5xl"
                data-aos="fade-up">
                Rasakan Kebaikan dari Alam untuk Rambut Sehat si Kecil
            </h2>
        </div>
        <div class="py-20 swiper swiper--zoom md:py-32" id="ingredients-swiper"
             style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                @foreach($page->ingredients as $ingredient)
                    <div class="swiper-slide">
                        <div class="rounded-lg bg-white p-4 shadow-lg">
                            <div class="relative">
                                <img src="{{ $ingredient->image }}" alt="{{ $ingredient->name }}"
                                     class="z-0 h-auto w-full max-w-full">
                            </div>
                            <div class="mt-2 text-center font-gotham-book">
                                <h4 class="mb-2 text-xl font-bold text-primary font-gotham-rounded">
                                    {{ $ingredient->title }}
                                </h4>
                                {!! $ingredient->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section class="mt-16">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-3xl font-bold font-gotham-rounded md:text-5xl">
                WHAT THEY SAY ABOUT
                <span class="block text-primary"
                      data-aos="fade-down">
                    NUUDO HAIR LOTION
                </span>
            </h2>
        </div>
        <div class="py-20 swiper swiper--blur md:py-32" id="testimonial-swiper"
             style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                @foreach($page->testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="rounded-lg bg-white p-4 shadow-lg">
                            <div class="relative">
                                <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}"
                                     class="z-0 h-auto w-full max-w-full">
                            </div>
                            <div class="mt-2 text-center font-gotham-book">
                                <h4 class="mb-2 rounded-full px-4 py-1 text-xl font-bold text-white font-gotham-rounded bg-primary inline-block">
                                    {{ $testimonial->name }}
                                </h4>
                                <div>
                                    "{!! $testimonial->message !!}"
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
    <section class="mt-16">
        <div class="container px-4 mx-auto">
            <h3 class="text-center font-bold md:text-4xl text-2xl"
                data-aos="fade-down">
                Nuudo accommodates the needs of all types of skin from normal, sensitive, dry to atopic
            </h3>
        </div>
        <div class="swiper mt-8" id="products-swiper"
             style="--swiper-theme-color: var(--bbg-primary)">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto">
                    <div class="rounded-3xl bg-white p-4 border-[#707579] border-[1px] h-full">
                        <div class="h-[40px] mb-4">
                            <img src="assets/images/logo-nuudo.png" alt="logo nuudo" class="w-auto h-full">
                        </div>
                        <strong class="text-xl">for normal to sensitive skin</strong>
                        <div class="mt-4">
                            <img src="assets/images/nuudo-normal.jpeg" alt="nuudo for normal to sensitive skin"
                                 class="max-w-full h-auto w-full">
                        </div>
                        <div class="mt-4 flex justify-between gap-x-4 flex-col md:flex-row gap-y-4">
                            <div class="md:w-1/2">
                                <div class="font-bold text-primary">
                                    <strong class="block text-xl">Baby Wash</strong>
                                    <strong class="block text-xl">Kids Wash</strong>
                                    <strong class="block text-xl">Body Lotion</strong>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <div class="font-gotham-book flex items-center">
                                    <div class="min-w-[50px] w-[50px]">
                                        <img src="assets/images/icon-formulated.png" alt="icon teardrop with leaf"
                                             class="h-auto max-w-full">
                                    </div>
                                    <div class="ml-2 w-auto leading-5">
                                        Formulated using blends of plant extract and oil
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="rounded-3xl bg-white p-4 border-[#707579] border-[1px] h-full">
                        <div class="h-[40px] mb-4">
                            <img src="assets/images/logo-nuudo-dermaprotect.png" alt="logo nuudo dermaprotect"
                                 class="w-auto h-full">
                        </div>
                        <strong class="text-xl">for sensitive to dry & atopic prone skin</strong>
                        <div class="mt-4">
                            <img src="assets/images/nuudo-derma.jpeg"
                                 alt="nuudo for sensitive to dry & atopic prone skin"
                                 class="max-w-full h-auto w-full">
                        </div>
                        <div class="mt-4 flex justify-between gap-x-4 flex-col md:flex-row gap-y-4">
                            <div class="md:w-1/2">
                                <div class="font-bold text-primaryAlt">
                                    <strong class="block text-xl">Gentle Cleanser</strong>
                                    <strong class="block text-xl">Body & Face Cream</strong>
                                    <strong class="block text-xl">Barrier Balm</strong>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <div class="font-gotham-book flex items-center">
                                    <div class="min-w-[50px] w-[50px]">
                                        <img src="assets/images/icon-formulated.png" alt="icon teardrop with leaf"
                                             class="h-auto max-w-full">
                                    </div>
                                    <div class="ml-2 w-auto leading-5">
                                        Formulated using blends of plant extract and oil
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="rounded-3xl bg-white p-4 border-[#707579] border-[1px] h-full">
                        <div class="h-[40px] mb-4">
                            <img src="assets/images/logo-nuudo-haircare.png" alt="logo nuudo hair care"
                                 class="w-auto h-full">
                        </div>
                        <strong class="text-xl">for baby and kids healthy hair</strong>
                        <div class="mt-4">
                            <img src="assets/images/nuudo-hair.jpeg"
                                 alt="nuudo for baby and kids healthy hair"
                                 class="max-w-full h-auto w-full">
                        </div>
                        <div class="mt-4 flex justify-between gap-x-4 flex-col md:flex-row gap-y-4">
                            <div class="md:w-1/2">
                                <div class="font-bold text-primary">
                                    <strong class="block text-xl">Kids Shampoo</strong>
                                    <strong class="block text-xl">Hair Lotion</strong>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <div class="font-gotham-book flex items-center">
                                    <div class="min-w-[50px] w-[50px]">
                                        <img src="assets/images/icon-formulated.png" alt="icon teardrop with leaf"
                                             class="h-auto max-w-full">
                                    </div>
                                    <div class="ml-2 w-auto leading-5">
                                        Formulated using blends of plant extract and oil
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide h-auto">
                    <div class="rounded-3xl bg-white p-4 border-[#707579] border-[1px] h-full">
                        <div class="h-[40px] mb-4">
                            <img src="assets/images/logo-nuudo-blue.png" alt="logo nuudo sensitive"
                                 class="w-auto h-full">
                        </div>
                        <strong class="text-xl">for sensitive to dry & atopic prone skin</strong>
                        <div class="mt-4">
                            <img src="assets/images/nuudo-sensitive.jpeg"
                                 alt="nuudo for sensitive to dry & atopic prone skin"
                                 class="max-w-full h-auto w-full">
                        </div>
                        <div class="mt-4">
                            <div class="font-gotham-book leading-5">
                                Irritated skin can be caused by Wet Rash or Dry Rash
                            </div>
                        </div>
                        <div class="mt-4 flex justify-between gap-x-4 flex-col md:flex-row gap-y-4">
                            <div class="md:w-1/2">
                                <strong class="block text-lg text-primary">
                                    Nuudo Rash Cream
                                </strong>
                                <div class="font-gotham-book leading-5">
                                    For Wet Rash caused by sweat, such as diaper rash
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                <strong class="block text-lg text-primaryAlt">
                                    Nuudo Barrier Balm
                                </strong>
                                <div class="font-gotham-book leading-5">
                                    For Dry Rash on dry & atopic skin and other conditions such as sun burn, minor
                                    burn & minor cut
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    <section class="mt-16 relative">
        <img src="assets/images/banner-footer-mobile.jpeg" alt="collection of nuudo products"
             class="max-w-full h-auto w-full block md:hidden">
        <img src="assets/images/banner-footer.jpeg" alt="collection of nuudo products"
             class="max-w-full h-auto w-full hidden md:block">
        <div class="absolute bottom-0 left-0 w-full text-center px-4">
            <img src="assets/images/logo-nuudo@2x.png" alt="logo nuudo" class="mx-auto max-w-full h-auto w-[200px]"
                 data-aos="fade-up">
            <h5 class="font-bold font-gotham-rounded text-xl md:text-2xl mt-4"
                data-aos="fade-up" data-aos-delay="100">
                Where Natural Goodness<br>Meets Everyday Care
            </h5>
        </div>
    </section>
    <footer class="mt-16 bg-[#707579] py-8">
        <div class="container mx-auto px-4 text-white">
            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-x-8 gap-y-10">
                <div>
                    <div class="flex items-center flex-col md:flex-row gap-y-4">
                        <div class="font-gotham-book whitespace-nowrap"
                             data-aos="fade-left" data-aos-offset="-100">
                            FOLLOW US
                        </div>
                        <div class="md:ml-6 flex gap-x-4">
                            <a href="https://www.instagram.com/nuudo.inc/" target="_blank"
                               data-aos="fade-left" data-aos-offset="-100" data-aos-delay="100">
                                <img src="assets/images/icons/icon-instagram.png" alt="icon instagram"
                                     class="max-w-full h-auto w-6">
                            </a>
                            <a href="https://www.tiktok.com/@nuudo.inc" target="_blank"
                               data-aos="fade-left" data-aos-offset="-100"
                               data-aos-delay="200">
                                <img src="assets/images/icons/icon-tiktok.png" alt="icon tiktok"
                                     class="max-w-full h-auto w-6">
                            </a>
                            <a href="https://www.youtube.com/@Nuudo-inc" target="_blank"
                               data-aos="fade-left" data-aos-offset="-100"
                               data-aos-delay="300">
                                <img src="assets/images/icons/icon-youtube.png" alt="icon youtube"
                                     class="max-w-full h-auto w-6">
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center flex-col md:flex-row gap-y-4">
                        <div class="font-gotham-book whitespace-nowrap"
                             data-aos="fade-left" data-aos-offset="-100" data-aos-delay="500">
                            FIND US
                        </div>
                        <div class="md:ml-6 flex gap-x-4">
                            <a href="https://www.tokopedia.com/incbrands" target="_blankc"
                               data-aos="fade-left" data-aos-offset="-100"
                               data-aos-delay="600">
                                <img src="assets/images/icons/icon-tokopedia.png" alt="icon tokopedia"
                                     class="max-w-full h-auto w-6">
                            </a>
                            <a href="https://shopee.co.id/inc.brands" target="_blank"
                               data-aos="fade-left" data-aos-offset="-100" data-aos-delay="700">
                                <img src="assets/images/icons/icon-shopee.png" alt="icon shopee"
                                     class="max-w-full h-auto w-6">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('after_scripts')
    <script>
      new Swiper('#ingredients-swiper', {
        slidesPerView: 1.5,
        loop: true,
        autoHeight: true,
        centeredSlides: true,
        navigation: {
          prevEl: '#ingredients-swiper .swiper-button-prev',
          nextEl: '#ingredients-swiper .swiper-button-next'
        },
        breakpoints: {
          768: {
            slidesPerView: 3.5,
            spaceBetween: 72
          }
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
      new Swiper('#products-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 16,
        loop: true,
        centeredSlides: true,
        navigation: {
          prevEl: '#products-swiper .swiper-button-prev',
          nextEl: '#products-swiper .swiper-button-next'
        },
        breakpoints: {
          768: {
            slidesPerView: 2.5,
            spaceBetween: 32
          }
        }
      });
    </script>
@endpush
