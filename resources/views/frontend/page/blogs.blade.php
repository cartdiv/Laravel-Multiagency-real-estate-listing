@extends('frontend.frontend_master')
@section('frontend.main')

<!-- Popular Properties start -->
<section class="popular-properties pt-[80px] lg:pt-[120px]">
    <div class="container">

        <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-x-[30px] gap-y-[40px]">
                  
                    @foreach ( $blogs as $item )
                        
                    
                  
                    <div class="post-item">
                        <a href="{{url('blog/detail/'.$item->id.'/'.$item->blog_slug)}}" class="block overflow-hidden rounded-[6px] mb-[35px]">
                            <img class="w-full h-full" src="{{asset($item->blog_image)}}" width="370" height="270" loading="lazy" alt="{{ $item->blog_name }}">
                        </a>
                        <div>
                            <span class="block leading-none font-normal text-[14px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">{{ date("y F j", strtotime($item->created_at))  }}</span>
                            <h3><a href="{{url('blog/detail/'.$item->id.'/'.$item->blog_slug)}}" class="font-recoleta text-[22px] xl:text-[27px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all">{{ $item->blog_name }}</a></h3>
                            {{-- <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p> --}}
                        </div>
                    </div>

                    @endforeach


                </div>

                <div class="grid grid-cols-12 mt-[50px] gap-[30px]">
                    <div class="col-span-12">
                        <ul class="pagination flex flex-wrap items-center justify-center">

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_876_580)">
                                            <path d="M5.8853 10.0592C5.7326 10.212 5.48474 10.212 5.33204 10.0592L0.636322 5.36134C0.48362 5.20856 0.48362 4.96059 0.636322 4.80782L5.33204 0.109909C5.48749 -0.0403413 5.73535 -0.0359829 5.8853 0.119544C6.03181 0.271171 6.03181 0.511801 5.8853 0.663428L1.46633 5.08446L5.8853 9.50573C6.03823 9.65873 6.03823 9.90648 5.8853 10.0592Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_876_580">
                                                <rect width="5.47826" height="10.1739" fill="white" transform="matrix(-1 0 0 1 6 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">1</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">2</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">3</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">4</a>
                            </li>

                            <li class="mx-2">
                                <span>---</span>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] leading-none hover:text-secondary" href="#">25</a>
                            </li>

                            <li class="mx-2">
                                <a class="flex flex-wrap items-center justify-center  w-[26px] h-[26px] bg-primary rounded-full text-orange leading-none transition-all hover:bg-secondary text-white text-[12px]" href="#">
                                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(.clip0_876_576)">
                                            <path d="M0.114699 10.0592C0.267401 10.212 0.515257 10.212 0.667959 10.0592L5.36368 5.36134C5.51638 5.20856 5.51638 4.96059 5.36368 4.80782L0.667959 0.109909C0.512505 -0.0403413 0.26465 -0.0359829 0.114699 0.119544C-0.031813 0.271171 -0.031813 0.511801 0.114699 0.663428L4.53367 5.08446L0.114699 9.50573C-0.038233 9.65873 -0.038233 9.90648 0.114699 10.0592Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath class="clip0_876_576">
                                                <rect width="5.47826" height="10.1739" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 md:order-first mb-[30px]">
                <aside class="mb-[-40px]">
                    <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Search<span
                class="text-secondary">.</span></h3>


                        <form action="#" class="relative">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pr-[45px] pl-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" placeholder="Keywords here...">

                            <button class="absolute top-1/2 -translate-y-1/2 z-[1] right-[20px]">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.19559 0C8.06048 0 10.3913 2.33078 10.3913 5.19568C10.3913 6.18406 10.1138 7.10865 9.63257 7.89615C12.3593 10.0392 12.6608 10.3403 12.7621 10.442L13.5201 11.2C14.16 11.8398 14.16 12.8807 13.5201 13.5202C13.2004 13.8399 12.78 14 12.36 14C11.94 14 11.5196 13.8399 11.1999 13.5202L10.4419 12.7622C10.341 12.6612 10.0391 12.3594 7.90845 9.625C7.1184 10.1106 6.18908 10.3914 5.19559 10.3914C4.41501 10.3914 3.66434 10.2222 2.96434 9.88896C2.69163 9.75917 2.57569 9.4325 2.70585 9.15979C2.83564 8.88708 3.16231 8.77114 3.43465 8.9013C3.98663 9.16417 4.57908 9.2976 5.19559 9.2976C7.45746 9.2976 9.29751 7.45755 9.29751 5.19568C9.29751 2.9338 7.4571 1.09375 5.19559 1.09375C2.93408 1.09375 1.09366 2.9338 1.09366 5.19568C1.09366 5.93651 1.29309 6.6624 1.67043 7.29458C1.82538 7.5538 1.74043 7.88958 1.48121 8.04453C1.22163 8.19948 0.886212 8.11453 0.731265 7.85531C0.252932 7.05359 -8.96454e-05 6.13411 -8.96454e-05 5.19604C-8.96454e-05 2.33078 2.33069 0 5.19559 0ZM11.2152 11.989L11.9728 12.7469C12.1861 12.9602 12.5332 12.9602 12.7465 12.7469C12.9598 12.5336 12.9598 12.1869 12.7465 11.9736L11.9885 11.2157C11.8532 11.0801 11.2765 10.5798 8.96757 8.76495C8.90522 8.83094 8.84106 8.89547 8.77507 8.95818C10.5845 11.2795 11.0811 11.8544 11.2152 11.989ZM2.43496 3.99911C2.31465 4.2762 2.44189 4.59812 2.71897 4.71844C2.7897 4.74906 2.86371 4.76401 2.93626 4.76401C3.14736 4.76401 3.34861 4.64078 3.4383 4.43479C3.74236 3.73406 4.43215 3.28125 5.19559 3.28125C5.49783 3.28125 5.74246 3.03661 5.74246 2.73438C5.74246 2.43214 5.49783 2.1875 5.19559 2.1875C3.99611 2.1875 2.91257 2.8988 2.43496 3.99911Z" fill="#016450" />
                                </svg>
                            </button>

                        </form>
                    </div>


                    <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Categories<span
                            class="text-secondary">.</span></h3>

                        <div class="mb-[-25px]">
                            @foreach ( $blog_cat as $item )
                                @php
                                    $categorycout = App\Models\Blog::where('category_id', $item->id)->get();
                                @endphp
                           
                            <a href="{{url('category/list/'.$item->id.'/'.$item->category_slug)}}" class="font-light leading-[1.75] border border-primary border-opacity-60 rounded-[8px] pr-[20px] pl-[20px] py-[10px] hover:border-[#FD6400] hover:border-opacity-60  hover:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white flex flex-wrap items-center justify-between mb-[25px]"><span>{{$item->category_name}}</span> <span>{{count($categorycout)}}</span></a>

                            @endforeach               
                        </div>

                    </div>




                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Popular Post<span
                            class="text-secondary">.</span></h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-x-[30px] md:gap-x-[0px] relative">
                            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center mb-[20px]">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/properties/properties6.jpg" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px] sm:px-[10px] lg:px-[20px] text-left">
                                    <span class="block leading-none font-light text-[12px] text-secondary mb-[8px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">Grege Chapel on 05 December, 21</span>
                                    <h3><a href="blog-details.html" class="font-recoleta text-[16px] leading-[1.285] text-primary hover:text-secondary transition-all">The Home Buying Process: A
                                            Comprehensive Guide.</a></h3>
                                </div>
                            </div>
                            <!-- drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] -->
                            <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center">
                                <div class="relative">
                                    <a href="#" class="block">
                                        <img src="assets/images/properties/properties5.jpg" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                    </a>
                                </div>

                                <div class="py-[20px] px-[20px] sm:px-[10px] lg:px-[20px] text-left">
                                    <span class="block leading-none font-light text-[12px] text-secondary mb-[8px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">Malcon Marshal on 05 December, 21</span>
                                    <h3><a href="blog-details.html" class="font-recoleta text-[16px] leading-[1.285] text-primary hover:text-secondary transition-all">10 of the highest ROI Home
                                            Improvement Projects.</a></h3>

                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</section>
<!-- Popular Properties end -->
@endsection