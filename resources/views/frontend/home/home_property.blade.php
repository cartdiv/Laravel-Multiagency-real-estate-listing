@php
     $popularProducts = App\Models\Property::orderBy('popularity', 'desc')->take(3)->get();

@endphp
<!-- Popular Properties start -->
  <section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12"> <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span></div>
            <div class="col-span-12">
                <div class="flex flex-col sm:flex-row items-start justify-between mb-[50px]">
                    <div>

                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl">
                            Popular
                            Properties<span class="text-secondary">.</span></h2>
                    </div>
                    <div>
                        <a href="properties-v1.html" class="flex flex-wrap items-center text-secondary text-tiny">Explore all
                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

            @foreach ( $popularProducts as $item )
                            
                      
            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                <div class="relative">
                    <a href="properties-details.html" class="block">
                        <img src="{{asset($item->property_image)}}" class="w-full h-full" loading="lazy" width="370" height="266" alt="{{$item->property_name}}">
                    </a>
                  
                    <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">{{$item->category->category_name}}</span>
                </div>

                <div class="py-[20px] px-[20px]">
                    <h3><a href="{{url('/property/detail/'.$item->id.'/'.$item->property_slug)}}" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->property_name}}</a></h3>
                    <h4><a href="{{url('/property/detail/'.$item->id.'/'.$item->property_slug)}}" class="font-light text-tiny text-secondary underline">{{$item->property_address}}</a></h4>
                    <span class="font-light text-sm">Added: {{date("F j, Y", strtotime($item->created_at)) }}</span>
                    <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-recoleta text-base text-primary px-[15px] bg-white">Price: ${{$item->property_price}}</span></div>
                    <p class="font-light">{{$item->property_size}} - {{$item->property_bedroom}} Bed - {{$item->property_bathroom}} Bath - {{$item->property_garage}} Garage</p>
                </div>
            </div>

              @endforeach
           

        </div>

    </div>
</section>
<!-- Popular Properties end -->