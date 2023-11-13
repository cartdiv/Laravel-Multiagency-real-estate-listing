@php
    $places = App\Models\Place::get();
@endphp
<section class="explore-cities-section pt-[80px] pb-[120px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="mb-[30px] lg:mb-[60px] text-center">
                    <span class="text-secondary text-tiny inline-block mb-2">Explore Cities</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">Find
                        Your
                        Neighborhood<span class="text-secondary">.</span></h2>
                </div>
                <div class="cities-slider">
                    <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->

                            @foreach ( $places as $item )

                            <div class="swiper-slide text-center">
                                <div class="relative group">
                                    <a href="agency-details.html" class="block">
                                        <img src="{{ asset($item->place_image) }}" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="New York">
                                        <div class="cities-shadow bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[15px] py-[20px]">
                                            <span class="font-recoleta font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all">{{ $item->place_name }}</span>
                                            @php
                                                $property = App\Models\Property::where( 'place_id', $item->id)->get();
                                            @endphp
                                            <p class="font-light text-tiny capitalize text-secondary group-hover:text-primary transition-all">{{count($property)}} Properties</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                             @endforeach

                            <!-- swiper-slide end-->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>