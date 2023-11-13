@extends('frontend.frontend_master')
@section('frontend.main')

 <!-- Hero section start -->


 <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] xl:h-[650px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{asset($property->property_image)}}');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Our Property</span></div>
                    <h1 class="font-recoleta text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl">
                        {{$property->property_name}}
                    </h1>

                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero section end -->

<!-- Popular Properties start -->
<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">

        <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                <img src="{{asset($property->property_image)}}" class="w-auto h-auto" loading="lazy" alt="{{$property->property_name}}" width="770" height="465">
                <div class="mt-[45px] mb-[35px]">
                    <h2 class="font-recoleta leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px]">
                        {{$property->property_name}}</h2>
                    <h3 class="font-light text-[18px] text-secondary underline mb-[20px]">{{$property->property_address}}</h3>
                    {!!$property->property_description!!}
                </div>


                @php
                    $amenities = $property->amenity;
                    $property_ame = explode(',', $amenities);
                @endphp

                <h4 class="font-recoleta text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px]">
                    Property Amenities<span class="text-secondary">.</span>
                </h4>

                <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
                    @foreach ( $property_ame as $item )
                        
                    
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="{{asset('frontend/assets/images/about/check.png')}}" loading="lazy" alt="icon" width="20" height="20">
                        <span>{{ ucwords($item) }}</span>
                    </li>
                   @endforeach
                </ul>


                

            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                <aside class="mb-[-40px] asidebar">
                    <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Property Search <span
                             class="text-secondary">.</span></h3>

                        <form action="#" class="relative">
                            <div class="relative mb-[25px] bg-white">
                                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" placeholder="Location">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.39648 6.41666H8.60482" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M7 8.02083V4.8125" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M2.11231 4.9525C3.26148 -0.0991679 10.7456 -0.0933345 11.889 4.95833C12.5598 7.92167 10.7165 10.43 9.10064 11.9817C7.92814 13.1133 6.07314 13.1133 4.89481 11.9817C3.28481 10.43 1.44148 7.91583 2.11231 4.9525Z" stroke="#016450" stroke-width="1.5" />
                                </svg>
                            </div>

                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_928_754)">
                                        <path d="M4.64311 0H0V4.64311H4.64311V0ZM3.71437 3.71437H0.928741V0.928741H3.71437V3.71437Z" fill="#016450" />
                                        <path d="M8.35742 0V4.64311H13.0005V0H8.35742ZM12.0718 3.71437H9.28616V0.928741H12.0718V3.71437Z" fill="#016450" />
                                        <path d="M0 13H4.64311V8.35689H0V13ZM0.928741 9.28563H3.71437V12.0713H0.928741V9.28563Z" fill="#016450" />
                                        <path d="M8.35742 13H13.0005V8.35689H8.35742V13ZM9.28616 9.28563H12.0718V12.0713H9.28616V9.28563Z" fill="#016450" />
                                        <path d="M6.96437 0H6.03563V6.03563H0V6.96437H6.03563V13H6.96437V6.96437H13V6.03563H6.96437V0Z" fill="#016450" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_928_754">
                                            <rect width="13" height="13" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option value="0">Property Category</option>
                                    <option value="1">Property</option>
                                    <option value="2">Category</option>
                                </select>
                            </div>

                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.16602 12.8333H12.8327" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.7207 12.8333L1.74987 5.81583C1.74987 5.45999 1.91904 5.12169 2.19904 4.90002L6.28237 1.72085C6.70237 1.39418 7.29154 1.39418 7.71737 1.72085L11.8007 4.89418C12.0865 5.11585 12.2499 5.45416 12.2499 5.81583V12.8333" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                                    <path d="M9.04232 6.41666H4.95898C4.47482 6.41666 4.08398 6.8075 4.08398 7.29166V12.8333H9.91732V7.29166C9.91732 6.8075 9.52648 6.41666 9.04232 6.41666Z" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.83398 9.47916V10.3542" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.125 4.375H7.875" stroke="#01614E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option value="0">Property Type</option>
                                    <option value="1">Property A</option>
                                    <option value="2">Category B</option>
                                </select>
                            </div>


                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78125 9.55323C5.78125 10.4132 6.44125 11.1066 7.26125 11.1066H8.93458C9.64792 11.1066 10.2279 10.4999 10.2279 9.75323C10.2279 8.9399 9.87458 8.65323 9.34792 8.46657L6.66125 7.53323C6.13458 7.34657 5.78125 7.0599 5.78125 6.24657C5.78125 5.4999 6.36125 4.89323 7.07458 4.89323H8.74792C9.56792 4.89323 10.2279 5.58657 10.2279 6.44657" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8 4V12" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.9987 14.6667C11.6806 14.6667 14.6654 11.6819 14.6654 8C14.6654 4.3181 11.6806 1.33333 7.9987 1.33333C4.3168 1.33333 1.33203 4.3181 1.33203 8C1.33203 11.6819 4.3168 14.6667 7.9987 14.6667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option selected value="0">Price Range</option>
                                    <option value="1">1500 usd</option>
                                    <option value="2">1600 usd</option>
                                </select>
                            </div>

                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.33268 4.66667H4.66602V9.33334H9.33268V4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.91602 12.8333C3.87852 12.8333 4.66602 12.0458 4.66602 11.0833V9.33333H2.91602C1.95352 9.33333 1.16602 10.1208 1.16602 11.0833C1.16602 12.0458 1.95352 12.8333 2.91602 12.8333Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.91602 4.66667H4.66602V2.91667C4.66602 1.95417 3.87852 1.16667 2.91602 1.16667C1.95352 1.16667 1.16602 1.95417 1.16602 2.91667C1.16602 3.87917 1.95352 4.66667 2.91602 4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.33398 4.66667H11.084C12.0465 4.66667 12.834 3.87917 12.834 2.91667C12.834 1.95417 12.0465 1.16667 11.084 1.16667C10.1215 1.16667 9.33398 1.95417 9.33398 2.91667V4.66667Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.084 12.8333C12.0465 12.8333 12.834 12.0458 12.834 11.0833C12.834 10.1208 12.0465 9.33333 11.084 9.33333H9.33398V11.0833C9.33398 12.0458 10.1215 12.8333 11.084 12.8333Z" stroke="#016450" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option selected value="0">Property Size</option>
                                    <option value="1">1500 squre fit</option>
                                    <option value="2">1600 squre fit</option>
                                </select>
                            </div>


                            <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all">Search</button>

                        </form>
                    </div>
@php
    $property = App\Models\Property::orderBy('id', 'DESC')->limit(2)->get();

@endphp
                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Featured Property<span
                            class="text-secondary">.</span></h3>
                        <div class="sidebar-carousel relative">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        @foreach ( $property as $item )
                                            
                                        
                                        <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center mb-[20px]">
                                            <div class="relative">
                                                <a href="properties-details.html" class="block">
                                                    <img src="{{asset($item->property_image)}}" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                                </a>
                                                
                                            </div>

                                            <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                <h3><a href="properties-details.html" class="font-recoleta leading-tight text-[16px] text-primary">{{$item->property_name}}</a></h3>
                                                <h4><a href="properties-details.html" class="font-light text-[14px] text-secondary underline">{{$item->property_address}}</a></h4>
                                                <ul class="mt-[10px]">
                                                    <li class="flex flex-wrap items-center justify-between">
                                                        <span class="font-recoleta text-[14px] text-primary leading-none">Price:
                                                    ${{$item->property_price}}</span>

                                                        <span class="flex flex-wrap items-center">
                                                                <button class="mr-[15px] text-[#B1AEAE] hover:text-secondary">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M13.1667 11.6667C12.8572 11.6667 12.5605 11.7896 12.3417 12.0084C12.1229 12.2272 12 12.5239 12 12.8334C12 13.1428 12.1229 13.4395 12.3417 13.6583C12.5605 13.8771 12.8572 14 13.1667 14C13.4761 14 13.7728 13.8771 13.9916 13.6583C14.2104 13.4395 14.3333 13.1428 14.3333 12.8334C14.3333 12.5239 14.2104 12.2272 13.9916 12.0084C13.7728 11.7896 13.4761 11.6667 13.1667 11.6667ZM11 12.8334C11 12.2587 11.2283 11.7076 11.6346 11.3013C12.0409 10.895 12.592 10.6667 13.1667 10.6667C13.7413 10.6667 14.2924 10.895 14.6987 11.3013C15.1051 11.7076 15.3333 12.2587 15.3333 12.8334C15.3333 13.408 15.1051 13.9591 14.6987 14.3654C14.2924 14.7717 13.7413 15 13.1667 15C12.592 15 12.0409 14.7717 11.6346 14.3654C11.2283 13.9591 11 13.408 11 12.8334Z"
                                                                        fill="currentColor" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M9.26984 1.14667C9.36347 1.24042 9.41606 1.3675 9.41606 1.5C9.41606 1.6325 9.36347 1.75958 9.26984 1.85333L8.4565 2.66667H11.1665C11.8295 2.66667 12.4654 2.93006 12.9343 3.3989C13.4031 3.86774 13.6665 4.50363 13.6665 5.16667V11C13.6665 11.1326 13.6138 11.2598 13.5201 11.3536C13.4263 11.4473 13.2991 11.5 13.1665 11.5C13.0339 11.5 12.9067 11.4473 12.813 11.3536C12.7192 11.2598 12.6665 11.1326 12.6665 11V5.16667C12.6665 4.96968 12.6277 4.77463 12.5523 4.59264C12.4769 4.41065 12.3665 4.24529 12.2272 4.10601C12.0879 3.96672 11.9225 3.85623 11.7405 3.78085C11.5585 3.70547 11.3635 3.66667 11.1665 3.66667H8.45717L9.2705 4.48C9.36154 4.57434 9.41188 4.70067 9.41068 4.83177C9.40948 4.96287 9.35683 5.08825 9.26409 5.18091C9.17134 5.27357 9.04591 5.32609 8.91481 5.32717C8.78371 5.32825 8.65743 5.27779 8.56317 5.18667L6.8965 3.52C6.80287 3.42625 6.75028 3.29917 6.75028 3.16667C6.75028 3.03417 6.80287 2.90708 6.8965 2.81333L8.56317 1.14667C8.65692 1.05303 8.784 1.00044 8.9165 1.00044C9.049 1.00044 9.17609 1.05303 9.26984 1.14667ZM2.83317 4.33333C2.98638 4.33333 3.13809 4.30316 3.27963 4.24453C3.42118 4.1859 3.54979 4.09996 3.65813 3.99162C3.76646 3.88329 3.8524 3.75468 3.91103 3.61313C3.96966 3.47158 3.99984 3.31988 3.99984 3.16667C3.99984 3.01346 3.96966 2.86175 3.91103 2.7202C3.8524 2.57866 3.76646 2.45004 3.65813 2.34171C3.54979 2.23337 3.42118 2.14744 3.27963 2.08881C3.13809 2.03018 2.98638 2 2.83317 2C2.52375 2 2.22701 2.12292 2.00821 2.34171C1.78942 2.5605 1.6665 2.85725 1.6665 3.16667C1.6665 3.47609 1.78942 3.77283 2.00821 3.99162C2.22701 4.21042 2.52375 4.33333 2.83317 4.33333ZM4.99984 3.16667C4.99984 3.7413 4.77156 4.2924 4.36524 4.69873C3.95891 5.10506 3.40781 5.33333 2.83317 5.33333C2.25853 5.33333 1.70743 5.10506 1.30111 4.69873C0.894777 4.2924 0.666504 3.7413 0.666504 3.16667C0.666504 2.59203 0.894777 2.04093 1.30111 1.6346C1.70743 1.22827 2.25853 1 2.83317 1C3.40781 1 3.95891 1.22827 4.36524 1.6346C4.77156 2.04093 4.99984 2.59203 4.99984 3.16667Z"
                                                                        fill="currentColor" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6.73016 14.8533C6.63653 14.7596 6.58394 14.6325 6.58394 14.5C6.58394 14.3675 6.63653 14.2404 6.73016 14.1467L7.5435 13.3333H4.8335C4.17046 13.3333 3.53457 13.0699 3.06573 12.6011C2.59689 12.1323 2.3335 11.4964 2.3335 10.8333V5C2.3335 4.86739 2.38617 4.74021 2.47994 4.64645C2.57371 4.55268 2.70089 4.5 2.8335 4.5C2.9661 4.5 3.09328 4.55268 3.18705 4.64645C3.28082 4.74021 3.3335 4.86739 3.3335 5V10.8333C3.3335 11.2312 3.49153 11.6127 3.77284 11.894C4.05414 12.1753 4.43567 12.3333 4.8335 12.3333H7.54283L6.7295 11.52C6.68176 11.4739 6.6437 11.4187 6.61752 11.3576C6.59135 11.2966 6.57759 11.231 6.57704 11.1646C6.5765 11.0982 6.58918 11.0324 6.61435 10.971C6.63952 10.9095 6.67667 10.8537 6.72364 10.8068C6.77061 10.7599 6.82645 10.7228 6.88791 10.6977C6.94937 10.6726 7.01521 10.6599 7.0816 10.6605C7.14799 10.6612 7.2136 10.675 7.27459 10.7012C7.33557 10.7274 7.39073 10.7656 7.43683 10.8133L9.1035 12.48C9.19713 12.5738 9.24972 12.7008 9.24972 12.8333C9.24972 12.9658 9.19713 13.0929 9.1035 13.1867L7.43683 14.8533C7.34308 14.947 7.216 14.9996 7.0835 14.9996C6.951 14.9996 6.82391 14.947 6.73016 14.8533Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </button>
                                                            <button class="text-[#B1AEAE] hover:text-secondary">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(.clip0_656_640)">
                                                                        <path
                                                                            d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z"
                                                                            fill="currentColor" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath class="clip0_656_640">
                                                                            <rect width="16" height="16" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>
                                        <!-- drop-shadow-[0px_2px_10px_rgba(0,0,0,0.1)] -->
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                <div class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>
                                <div class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>

                            </div>

                        </div>

                    </div>



                   

                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Our Agents<span
    class="text-secondary">.</span></h3>

                        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-x-[20px] mb-[-20px]">
                            <!-- single team start -->
                            @foreach ($agent as $item)
                            <div class="text-center group mb-[30px]">
                                <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                    <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                        <img src="{{asset($item->agent->agent_image)}}" class="max-w-[130px] max-h-[154px] object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Albert S. Smith">
                                    </a>
                                </div>

                                <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                    <h3><a href="agent-details.html" class="font-recoleta text-[14px] text-primary hover:text-secondary">{{$item->agent->agent_name}}</a></h3>
                                    <p class="font-light text-[12px] leading-none capitalize mt-[5px]">{{$item->agent->agent_title}}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- single team end-->
                        </div>
                    </div>

                    <div class="bg-[#f5f9f8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]">
                        <h3 class="text-primary leading-none text-[24px] font-recoleta underline mb-[30px]">Tags<span
    class="text-secondary">.</span></h3>
                        <ul class="flex flex-wrap my-[-7px] mx-[-5px] font-light text-[12px]">
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Real Estate</a>
                            </li>
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Appartment</a>
                            </li>
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Sale Property</a>
                            </li>
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Duplex</a>
                            </li>
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Buy Property</a>
                            </li>
                            <li class="my-[7px] mx-[5px]"><a href="#" class="leading-none border border-[#E0E0E0] py-[8px] px-[10px] block rounded-[4px] hover:text-secondary">Houses</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</section>
<!-- Popular Properties end -->




<!-- Brand section Start-->

@include('frontend.home.home_brand')

<!-- Brand section End-->

@endsection