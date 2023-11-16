@php
    $partner = App\Models\Partner::orderBy('id', 'DESC')->get();
@endphp
<section class="brand-section pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="mb-[60px]">
                    <span class="text-secondary text-tiny inline-block mb-2">Our Partner’s</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                        Reliable Partner’s<span class="text-secondary">.</span></h2>
                </div>
                <div class="brand-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->
                            @foreach ( $partner as $item )
                                
                           
                            <div class="swiper-slide text-center">
                                <a href="#" class="block">
                                    <img src="{{ asset($item->partner_image) }}" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                </a>
                            </div>
                            
                            @endforeach

                            <!-- swiper-slide end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>