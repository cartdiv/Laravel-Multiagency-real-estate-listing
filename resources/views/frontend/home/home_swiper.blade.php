@php
    $sliders = App\Models\Slider::orderBy('id', 'DESC')->get();
@endphp
<section class="bg-[#FFFFFF] relative before:absolute before:w-1/2 lg:before:w-[calc(50%_-_35px)] xl:before:w-[calc(50%_-_65px)] before:h-full before:top-0 before:right-0 before:content-[''] before:bg-[#ECFAF7] pt-[130px] lg:pt-[80px] xl:pt-[0px] mb-[70px] lg:mb-[0px]">
    <div class="hero-slider overflow-hidden">
        <div class="swiper-container">
            <div class="swiper-wrapper">

               @foreach ( $sliders as $item )
                   
               
                <!-- swiper-slide start -->
                <div class="swiper-slide lg:h-[700px] xl:h-[950px] xs:h-[auto] flex flex-wrap items-center">
                    <div class="container">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-5 xl:col-span-6">
                                <div class="slider-content max-w-[560px]">
                                    <div class="relative mb-5 sub_title">
                                        <span class="text-base text-secondary block">{{ $item->slider_header }}</span>
                                    </div>
                                    <h1 class="font-recoleta text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
                                        <span>{{ $item->slider_title }}</span>
                                    </h1>

                                    <p class="text-base text-[#494949] mt-5 mb-8 text max-w-[570px]">
                                        {{ $item->slider_content }}
                                    </p>
                                    <div class="inline-block mb-[60px] hero_btn">
                                        <a href="{{ $item->button_url }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all block">
                                            {{ $item->button_text }}</a>
                                    </div>
                                    <ul class="flex flex-wrap list-none">
                                        <li class="block">
                                            <span class="font-recoleta text-secondary text-lg"><span>20</span> <span>k+</span></span>
                                            <p>Properties</p>
                                        </li>
                                        <li class="block pl-[25px] sm:pl-[40px] md:pl-[60px]">
                                            <span class="font-recoleta text-secondary text-lg"><span>12</span> <span>k+</span></span>
                                            <p>Customers</p>
                                        </li>
                                        <li class="block pl-[25px] sm:pl-[40px] md:pl-[60px]">
                                            <span class="font-recoleta text-secondary text-lg"><span>160</span> <span>+</span></span>
                                            <p>Awards Win</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-7 xl:col-span-6">
                                <div class="relative mt-10 md:mt-0 lg:absolute lg:right-0 lg:bottom-0">
                                    <img class="hero_image lg:max-w-[550px] xl:max-w-[650px] 2xl:max-w-[750px] 3xl:max-w-[866px]" src="{{ asset($item->slider_image) }}" width="866" height="879" alt="hero image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- swiper-slide end-->
                @endforeach
            </div>
        </div>

    </div>

</section>