@php
    $property = App\Models\Property::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
    $category = App\Models\Category::latest()->get();
@endphp
<section class="featured-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <span class="text-secondary text-tiny inline-block mb-2">Newly Added</span>
            </div>
            <div class="col-span-12 flex flex-wrap flex-col md:flex-row items-start justify-between mb-[50px]">
                <div class="mb-5 lg:mb-0">

                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                        Featured
                        Properties<span class="text-secondary">.</span></h2>
                </div>
                <ul class="all-properties flex flex-wrap lg:pt-[10px]">
                    <li data-tab="all-properties" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none active"><button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">All
                                                Properties</button></li>
                    @foreach ( $category as $item )
                    <li data-tab="category{{ $item->id }}" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none"><button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">
                        {{$item->category_name}}</button></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-span-12">
                <div id="all-properties" class="properties-tab-content active">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                        @foreach ( $property as $item )
                            
                      
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

                @foreach ( $category as $item )
                    
               
                <div id="category{{ $item->id }}" class="properties-tab-content">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                        @php
                        $catproperty = App\Models\Property::where('category_id',$item->id)->where('status','1')->orderBy('id','DESC')->get();
                        @endphp
                        
                                @forelse($catproperty as $item)
                                <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                                    <div class="relative">
                                        <a href="properties-details.html" class="block">
                                            <img src="{{asset($item->property_image)}}" class="w-full h-full" loading="lazy" width="370" height="266" alt="{{$item->property_name}}">
                                        </a>
                                      
                                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-secondary leading-none text-[14px] font-normal capitalize">{{$item->category->category_name}}</span>
                                    </div>
        
                                    <div class="py-[20px] px-[20px]">
                                        <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[22px] xl:text-lg text-primary">{{$item->property_name}}</a></h3>
                                        <h4><a href="properties-details.html" class="font-light text-tiny text-secondary underline">{{$item->property_address}}</a></h4>
                                        <span class="font-light text-sm">Added: {{date("F j, Y", strtotime($item->created_at)) }}</span>
                                        <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-recoleta text-base text-primary px-[15px] bg-white">Price: ${{$item->property_price}}</span></div>
                                        <p class="font-light">{{$item->property_size}} - {{$item->property_bedroom}} Bed - {{$item->property_bathroom}} Bath - {{$item->property_garage}} Garage</p>
                                    </div>
                                </div>
                        @empty
                        <p>No property avalable</p>
                        @endforelse
                       


                    </div>
                </div>
             @endforeach
                
            </div>
        </div>
    </div>
</section>