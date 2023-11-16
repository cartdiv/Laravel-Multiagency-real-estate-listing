
@extends('frontend.frontend_master')
@section('frontend.main')

<!-- Popular Properties start -->
<section class="popular-properties pt-[80px] lg:pt-[120px]">
    <div class="container">

        <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                <img src="{{asset($blogs->blog_image)}}" class="w-auto h-auto" loading="lazy" alt="{{$blogs->blog_name}}" width="770" height="465">
                <div class="mt-[55px] mb-[35px]">
                    <span
                        class="block leading-none font-normal text-[18px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full before:block pl-[10px]"> <a href="">{{$blogs->category->category_name}}</a>  on {{date("y F, j", strtotime($blogs->created_at))}}</span>
                    <h2 class="font-recoleta leading-tight text-[22px] md:text-[28px] lg:text-[34px] text-primary mb-[10px]">
                        {{$blogs->blog_name}}</h2>

                     {!!$blogs->blog_description!!}
                </div>

               
               


                <div class="flex flex-wrap items-center justify-between mt-[25px] mb-[-15px] pt-[20px] border-t border-[#E0E0E0]">
                    <div class="flex flex-wrap mb-[15px]">

                        
                        <span class="text-secondary">Tags:</span>
                        @foreach ( $tags as $item )
                            
                        
                        <a class="font-light hover:text-secondary ml-[5px]" href="#">{{ucwords($item)}}</a>
                        @if(!$loop->last)
                        , <!-- Add a comma if it's not the last item -->
                    @endif
                        @endforeach
                    </div>

                    <div class="flex flex-wrap mb-[15px]">
                        <span class="text-secondary">Share:</span>
                        <ul class="inline-flex items-center justify-center">
                            <li class="ml-[15px]"><a href="#" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z" fill="currentColor"></path>
                                    </svg>

                                </a></li>
                            <li class="ml-[15px]"><a href="#" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z" fill="currentColor"></path>
                                    </svg>


                                </a></li>
                            <li class="ml-[15px]"><a href="#" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z" fill="currentColor"></path>
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="grid grid-cols-12 mt-[70px]">

                    <div class="col-span-12">
                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[28px] capitalize">
                            Feedback
                            <span class="text-secondary">.</span>
                        </h2>

                        <ul class="mt-[50px] lg:mt-[70px]">
                            <li class="flex flex-wrap mb-[55px] sm:even:ml-[110px] md:even:ml-[0px] lg:even:ml-[110px] last:mb-0">
                                <img class="self-start mr-[35px] border border-primary rounded-[26px]" src="assets/images/commentor/01.png" width="78" height="80" loading="lazy" alt="image">
                                <div class="flex-1">
                                    <h4 class="text-primary font-recoleta text-[18px] leading-none mb-[5px]">
                                        Stela Flemming, <span class="text-[14px] text-[#494949]">20 Jan,
                                            2022</span> </h4>
                                    <p>Bary do a great job to find the perfect home. It’s very easy for every
                                        one to buy, sell
                                        or rent property we belive they continure their great service and
                                        appriciat.</p>
                                    <p class="mt-[8px]"> <a href="#" class="inline-block mr-[10px] hover:text-secondary">Like</a> <a class="inline-block hover:text-secondary" href="#">Reply</a></p>
                                </div>
                            </li>
                            <li class="flex flex-wrap mb-[55px] sm:even:ml-[110px] md:even:ml-[0px] lg:even:ml-[110px] last:mb-0">
                                <img class="self-start mr-[35px] border border-primary rounded-[26px]" src="assets/images/commentor/02.png" width="78" height="80" loading="lazy" alt="image">
                                <div class="flex-1">
                                    <h4 class="text-primary font-recoleta text-[18px] leading-none mb-[5px]">
                                        Shane Williamson, <span class="text-[14px] text-[#494949]">20 Jan,
                                            2022</span> </h4>
                                    <p>Bary do a great job to find the perfect home. It’s very easy for every
                                        one to buy, sell
                                        or rent property we belive they continure their great service and
                                        appriciat.</p>
                                    <p class="mt-[8px]"> <a href="#" class="inline-block mr-[10px] hover:text-secondary">Like</a> <a class="inline-block hover:text-secondary" href="#">Reply</a></p>
                                </div>
                            </li>
                            <li class="flex flex-wrap mb-[55px] sm:even:ml-[110px] md:even:ml-[0px] lg:even:ml-[110px] last:mb-0">
                                <img class="self-start mr-[35px] border border-primary rounded-[26px]" src="assets/images/commentor/03.png" width="78" height="80" loading="lazy" alt="image">
                                <div class="flex-1">
                                    <h4 class="text-primary font-recoleta text-[18px] leading-none mb-[5px]">
                                        Shohel Buddy, <span class="text-[14px] text-[#494949]">20 Jan,
                                            2022</span> </h4>
                                    <p>Bary do a great job to find the perfect home. It’s very easy for every
                                        one to buy, sell
                                        or rent property we belive they continure their great service and
                                        appriciat.</p>
                                    <p class="mt-[8px]"> <a href="#" class="inline-block mr-[10px] hover:text-secondary">Like</a> <a class="inline-block hover:text-secondary" href="#">Reply</a></p>
                                </div>
                            </li>
                        </ul>

                        <h2 class="font-recoleta text-primary text-[24px] sm:text-[28px] capitalize nt-[80px] lg:mt-[90px]">
                            Leave a Message
                            <span class="text-secondary">.</span>
                        </h2>
                        <div class="mt-[60px]">
                            <form action="#" class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="First Name">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Last Name">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone number">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address">
                                </div>

                                <div class="col-span-12">
                                    <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>

                                <div class="col-span-12">
                                    <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Contact us</button>
                                </div>

                            </form>



                        </div>
                    </div>

                </div> --}}

            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
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
                       
                        <a href="#" class="font-light leading-[1.75] border border-primary border-opacity-60 rounded-[8px] pr-[20px] pl-[20px] py-[10px] hover:border-[#FD6400] hover:border-opacity-60  hover:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white flex flex-wrap items-center justify-between mb-[25px]"><span>{{$item->category_name}}</span> <span>{{count($categorycout)}}</span></a>

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



                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Tags<span
    class="text-secondary">.</span></h3>
                        <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                            @foreach ( $tags as $item )
                            
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">{{ucwords($item)}}</a>
                            </li>
                           
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</section>
<!-- Popular Properties end -->

@endsection