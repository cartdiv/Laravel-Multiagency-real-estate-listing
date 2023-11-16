@extends('frontend.frontend_master')
@section('frontend.main')

  <!-- Team Section Etart-->

  <section class="team-section pt-[80px] lg:pt-[120px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">

            <div class="col-span-12 md:col-span-5 lg:col-span-4 mb-[30px]">
                <div class="text-center xl:mr-[30px]">
                    <div class="relative rounded-[6px_6px_0px_0px]">
                        <div class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                            <img src="{{asset($agentDetail->agent_image)}}" class="w-auto h-auto block mx-auto" loading="lazy" alt="{{ $agentDetail->name }}" width="197" height="313">
                        </div>
                    </div>

                    <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] bg-primary transition-all duration-700 border-secondary">
                        <h3 class="font-recoleta font-normal text-[28px] text-white">{{ $agentDetail->agent_name }}</h3>
                        <p class="font-normal text-[18px] leading-none capitalize mb-[5px] text-white">{{ $agentDetail->agent_title }}</p>

                        {{-- <div class="flex flex-wrap items-center justify-center mt-[10px]">
                            <span class="mx-[1px]"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                        fill="white" />
                                </svg></span>
                            <span class="mx-[1px]"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                        fill="white" />
                                </svg></span>
                            <span class="mx-[1px]"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                        fill="white" />
                                </svg></span>
                            <span class="mx-[1px]"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                        fill="white" />
                                </svg></span>
                            <span class="mx-[1px]"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                        fill="white" />
                                </svg></span>
                        </div> --}}
                        <ul class="inline-flex items-center justify-center absolute w-full top-[-30px] left-0">

                            <li class="ml-[15px]"><a href="{{ $agentDetail->facebook }}" class="w-[43px] h-[43px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.09447 6.52324V4.73709C6.09447 3.96309 6.27309 3.54632 7.52339 3.54632H9.07139V0.569397H6.68986C3.71293 0.569397 2.52216 2.53417 2.52216 4.73709V6.52324H0.140625V9.50017H2.52216V18.4309H6.09447V9.50017H8.71416L9.07139 6.52324H6.09447Z" fill="currentColor" />
                                    </svg>

                                </a></li>
                            <li class="ml-[15px]"><a href="{{ $agentDetail->twitter }}" class="w-[43px] h-[43px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.3325 2.78225C21.506 3.1432 20.6307 3.37988 19.7349 3.48458C20.6751 2.93245 21.3822 2.05688 21.7239 1.02145C20.833 1.54002 19.8614 1.90527 18.8495 2.10197C18.4234 1.65565 17.9109 1.30083 17.3432 1.05914C16.7754 0.817445 16.1644 0.693954 15.5474 0.696197C13.0489 0.696197 11.0235 2.69184 11.0235 5.15056C11.0235 5.49897 11.0632 5.83966 11.1404 6.16492C9.34827 6.07968 7.59358 5.6218 5.98831 4.82049C4.38303 4.01918 2.96242 2.89204 1.81712 1.51099C1.4156 2.18841 1.20455 2.96172 1.2063 3.7492C1.20707 4.48567 1.39134 5.21035 1.74247 5.85773C2.09359 6.50512 2.6005 7.05481 3.21738 7.45712C2.50014 7.43397 1.7984 7.24248 1.16881 6.89812V6.95325C1.16881 9.11207 2.72894 10.9126 4.79625 11.3227C4.40772 11.4258 4.00746 11.4781 3.60548 11.4782C3.3133 11.4782 3.02994 11.4506 2.7532 11.3955C3.04878 12.2863 3.61442 13.0629 4.37156 13.6175C5.12871 14.1721 6.03977 14.4772 6.97822 14.4904C5.36856 15.7303 3.39249 16.4001 1.36066 16.3945C0.994609 16.3945 0.635173 16.3725 0.28125 16.3328C2.35545 17.6456 4.76052 18.3408 7.21528 18.3372C15.5363 18.3372 20.0855 11.5487 20.0855 5.66215L20.0701 5.0855C20.9575 4.46109 21.7241 3.68067 22.3325 2.78225Z" fill="currentColor" />
                                    </svg>


                                </a></li>
                            <li class="ml-[15px]"><a href="{{ $agentDetail->instagram }}" class="w-[43px] h-[43px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1121 5.19942C8.17913 5.19942 5.81207 7.56648 5.81207 10.4995C5.81207 13.4325 8.17913 15.7995 11.1121 15.7995C14.0451 15.7995 16.4122 13.4325 16.4122 10.4995C16.4122 7.56648 14.0451 5.19942 11.1121 5.19942ZM11.1121 13.9441C9.21537 13.9441 7.66748 12.3962 7.66748 10.4995C7.66748 8.60272 9.21537 7.05482 11.1121 7.05482C13.0089 7.05482 14.5568 8.60272 14.5568 10.4995C14.5568 12.3962 13.0089 13.9441 11.1121 13.9441ZM16.6293 3.74713C15.9445 3.74713 15.3915 4.30014 15.3915 4.98493C15.3915 5.66973 15.9445 6.22273 16.6293 6.22273C17.3141 6.22273 17.8671 5.67231 17.8671 4.98493C17.8673 4.82233 17.8354 4.66127 17.7733 4.51101C17.7111 4.36074 17.6199 4.2242 17.505 4.10922C17.39 3.99424 17.2535 3.90307 17.1032 3.84094C16.9529 3.77881 16.7919 3.74693 16.6293 3.74713ZM21.4435 10.4995C21.4435 9.07303 21.4564 7.65951 21.3763 6.23565C21.2962 4.58181 20.9189 3.11402 19.7095 1.90464C18.4976 0.692685 17.0324 0.317986 15.3785 0.237878C13.9521 0.15777 12.5386 0.170691 11.1147 0.170691C9.68827 0.170691 8.27475 0.15777 6.85089 0.237878C5.19704 0.317986 3.72925 0.69527 2.51988 1.90464C1.30792 3.1166 0.933221 4.58181 0.853112 6.23565C0.773004 7.6621 0.785925 9.07562 0.785925 10.4995C0.785925 11.9233 0.773004 13.3394 0.853112 14.7633C0.933221 16.4171 1.3105 17.8849 2.51988 19.0943C3.73184 20.3063 5.19704 20.681 6.85089 20.7611C8.27733 20.8412 9.69085 20.8283 11.1147 20.8283C12.5412 20.8283 13.9547 20.8412 15.3785 20.7611C17.0324 20.681 18.5002 20.3037 19.7095 19.0943C20.9215 17.8823 21.2962 16.4171 21.3763 14.7633C21.459 13.3394 21.4435 11.9259 21.4435 10.4995ZM19.1695 16.5929C18.9808 17.0632 18.7534 17.4146 18.3891 17.7764C18.0247 18.1408 17.6758 18.3682 17.2055 18.5568C15.8463 19.0969 12.6187 18.9754 11.1121 18.9754C9.60558 18.9754 6.37541 19.0969 5.01615 18.5594C4.54584 18.3708 4.1944 18.1433 3.83262 17.779C3.46826 17.4146 3.24085 17.0658 3.05221 16.5954C2.51471 15.2336 2.63617 12.006 2.63617 10.4995C2.63617 8.99293 2.51471 5.76276 3.05221 4.4035C3.24085 3.93319 3.46826 3.58175 3.83262 3.21997C4.19698 2.85819 4.54584 2.6282 5.01615 2.43956C6.37541 1.90206 9.60558 2.02351 11.1121 2.02351C12.6187 2.02351 15.8488 1.90206 17.2081 2.43956C17.6784 2.6282 18.0299 2.85561 18.3916 3.21997C18.756 3.58433 18.9834 3.93319 19.172 4.4035C19.7095 5.76276 19.5881 8.99293 19.5881 10.4995C19.5881 12.006 19.7095 15.2336 19.1695 16.5929Z" fill="currentColor" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>


                </div>
            </div>

            <div class="col-span-12 md:col-span-7 lg:col-span-5 mb-[30px]">
                <div class="mb-[-30px]">
                   
                    <div class="mb-[30px]">
                        <h3 class="font-recoleta font-normal text-[28px] text-primary mb-[10px]">Birography<span class="text-secondary">.</span></h3>
                        {{ $agentDetail->agent_description }}
                        <span class="font-recoleta font-normal block text-secondary text-[18px] mt-[10px]">
                            Phone no. </span>
                        <a href="tel:{{ $agentDetail->agent_number }}" class="font-recoleta font-normal text-primary text-[28px]">{{ $agentDetail->agent_number }}</a>
                    </div>
                </div>

            </div>

            {{-- <div class="col-span-12 lg:col-span-3 mb-[30px]">
                <ul class="flex flex-wrap lg:flex-col list-none items-center justify-around lg:justify-between bg-[#F5F9F8] rounded-[8px] h-full text-center py-[30px] lg:py-[65px] xl:max-w-[230px]">
                    <li class="block">
                        <span class="font-recoleta text-secondary text-lg"><span class="counter-up">135</span>
                        <span>k+</span></span>
                        <p>Properties Sold</p>
                    </li>
                    <li class="block">
                        <span class="font-recoleta text-secondary text-lg"><span class="counter-up">172</span>
                        <span>k+</span></span>
                        <p>Customers</p>
                    </li>
                    <li class="block">
                        <span class="font-recoleta text-secondary text-lg"><span class="counter-up">10</span>
                        <span>+</span></span>
                        <p>Awards Win</p>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
</section>

<!-- Team Section End-->



<!-- Work Experience Section Etart-->
{{-- 
<section class="pt-[80px] lg:pt-[100px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] xl:gap-x-[55px] mb-[-30px]">
            <div class="col-span-12 lg:col-span-5 mb-[30px]">
                <h4 class="font-recoleta text-primary text-[24px] leading-[1.277] sm:text-[36px] capitalize mb-[40px]">
                    Property Amenities<span class="text-secondary">.</span>
                </h4>
                <p>Huge number of propreties availabe here for buy, sell and
                    Rent. Also you find here co-living property lots opportunity
                    you have to choose here and enjoy huge discount. </p>

                <div class="flex flex-wrap items-center justify-between mt-[45px]">
                    <ul>
                        <li class="flex flex-wrap mb-[40px]">
                            <img class="self-start mt-[8px] mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                            <span class="flex-1 max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</span>
                        </li>
                        <li class="flex flex-wrap mb-[40px]">
                            <img class="self-start mt-[8px] mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                            <span class="flex-1 max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</span>
                        </li>
                        <li class="flex flex-wrap mb-[40px]">
                            <img class="self-start mt-[8px] mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                            <span class="flex-1 max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</span>
                        </li>
                        <li class="flex flex-wrap mb-[40px]">
                            <img class="self-start mt-[8px] mr-[15px]" src="assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                            <span class="flex-1 max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-7 mb-[30px]">
                <h4 class="font-recoleta text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mb-[10px]">
                    Send Message to Amelia
                </h4>
                <p class="mb-[45px] max-w-[460px]">
                    Huge number of propreties availabe here for buy, sell and Rent.
                    Also you find here co-living property, lots opportunity
                </p>
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
    </div>
</section> --}}

<!-- Work Experience Section End-->


<div class="pt-[80px] lg:pt-[120px]">

    <div class="container">
        <div class="grid gap-y-[30px] gap-x-[50px]  grid-cols-1 sm:grid-cols-2 md:grid-cols-3  xl:px-[35px]">
            <div class="relative py-[50px] px-[20px] lg:px-[35px] bg-[#F5F9F8] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px] skew-left">
                <span class="font-recoleta text-[28px] leading-none text-secondary mb-[15px] block">Email.</span>

                <a href="mailto:{{ $agentDetail->agent_email }}" class="font-recoleta text-base text-primary hover:text-secondary">{{ $agentDetail->agent_email }}</a>
                <svg class="absolute top-1/2 -translate-y-1/2 right-[30px]" width="90" height="91" viewBox="0 0 90 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.05" clip-path="url(#clip0_1035_2387)">
                        <path d="M63.7323 21.964C63.7482 19.4792 61.7431 17.4577 59.2586 17.4497C59.2506 17.4497 59.2426 17.4497 59.2347 17.4497C56.7662 17.4497 54.753 19.4472 54.745 21.924L54.7291 24.1851C51.5496 21.7403 47.6831 20.35 43.3692 20.35C32.7683 20.35 21.8079 29.5223 21.8079 44.8627C21.8079 58.8608 31.2824 70.2383 42.9378 70.2383C48.0026 70.2383 52.5881 68.105 56.143 64.5096C56.846 65.9398 57.7807 67.2581 58.9071 68.3926C61.4155 70.9094 64.643 72.2997 67.9982 72.2997C77.7124 72.2997 83.8636 65.5403 86.38 59.2044C90.2865 49.3769 90.9895 41.0915 88.6568 32.3507C88.6408 32.3028 88.6328 32.2548 88.6169 32.2069C85.0859 20.5018 77.1851 10.9221 66.3685 5.22537C55.5519 -0.471353 43.1775 -1.56595 31.5221 2.1493C20.4898 5.68079 11.2948 13.2631 5.65486 23.506C0.0148859 33.7569 -1.46301 45.5818 1.47681 56.7835C4.03317 66.4911 9.54533 74.8724 17.4221 81.0085C25.0033 86.921 34.4539 90.3166 44.0163 90.5803C44.0642 90.5803 44.1042 90.5803 44.1441 90.5803C46.5727 90.5803 48.5698 88.6468 48.6337 86.2099C48.7056 83.7251 46.7484 81.6637 44.2639 81.5918C28.2707 81.1523 14.2506 70.0066 10.1684 54.4904C7.8118 45.5179 9.0021 36.058 13.5317 27.8285C18.0532 19.607 25.4188 13.5268 34.2622 10.7144C43.6009 7.75014 53.5228 8.62902 62.1904 13.1912C70.8342 17.7454 77.1532 25.3916 79.9971 34.7397C81.8984 41.9385 80.756 49.0653 78.0399 55.8966C77.1532 58.1338 74.3971 63.3271 68.0062 63.3271C66.728 63.3271 65.7534 62.5441 65.29 62.0727C64.2036 60.9781 63.5485 59.3642 63.5565 57.7582L63.7323 21.964ZM42.9378 61.2578C37.0981 61.2578 30.7951 54.9938 30.7951 44.8627C30.7951 35.1391 37.186 29.3386 43.3692 29.3386C49.832 29.3386 54.3935 35.3389 54.6332 44.0238L54.6252 45.6697C54.2817 54.3466 49.177 61.2578 42.9378 61.2578Z" fill="#FF6500" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1035_2387">
                            <rect width="90" height="90.5882" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="relative py-[50px] px-[20px] lg:px-[35px] bg-[#F5F9F8] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px]">
                <span class="font-recoleta text-[28px] leading-none text-secondary mb-[15px] block">Whatsapp</span>
                <a href="tel:{{ $agentDetail->agent_number }}" class="font-recoleta text-base text-primary hover:text-secondary">{{ $agentDetail->agent_number }}</a>
                <svg class="absolute top-1/2 -translate-y-1/2 right-[30px]" width="90" height="100" viewBox="0 0 90 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.05" clip-path="url(#clip0_1035_2389)">
                        <path d="M39.0114 62.0855C42.3982 65.4768 46.7536 67.0369 49.7794 67.0369L51.4999 67.0068C57.4915 66.9044 63.1281 64.507 67.3632 60.2664C68.9152 58.7183 68.452 56.4113 67.2489 55.5198L57.702 48.442C57.1245 48.0143 56.3124 48.0746 55.8071 48.5806L51.524 52.8694C50.6216 53.7729 50.369 55.0861 50.766 56.2185C49.2982 56.2788 47.8304 55.7186 46.7656 54.6524L35.6066 43.4906C34.5418 42.4244 33.9884 40.9607 34.0425 39.4849C35.1735 39.8824 36.4849 39.6294 37.3872 38.7259L41.6703 34.4371C42.1817 33.9251 42.2418 33.1179 41.8087 32.5396L34.7524 22.9741C33.8861 21.7995 31.5881 21.2815 30.012 22.8597C25.777 27.1063 23.3828 32.7444 23.2805 38.744L23.2505 40.4727C23.2444 40.7077 23.2264 46.2795 28.1953 51.255L39.0114 62.0855ZM26.1981 38.7982C26.2884 33.5576 28.3758 28.6303 32.0814 24.9258C32.2438 24.7631 32.3822 24.7571 32.5085 24.8354L38.7287 33.2625L35.3299 36.6658C35.2156 36.7803 35.0171 36.7803 34.9028 36.6658C33.7598 35.5213 31.7987 36.0574 31.3896 37.6175C30.6557 40.4426 31.4799 43.4906 33.5492 45.5567C41.55 53.5681 40.0341 52.0502 44.7022 56.7245C46.7716 58.7966 49.8095 59.6219 52.6308 58.887C54.1949 58.4774 54.7243 56.5137 53.5813 55.3692C53.467 55.2547 53.467 55.056 53.5813 54.9415L56.9802 51.5382L65.396 57.7666C65.4742 57.8931 65.4682 58.0316 65.3058 58.1943C61.6062 61.8988 56.6854 63.989 51.4518 64.0854L49.7433 64.1155C49.5629 64.1215 45.1354 64.0854 41.0748 60.0194L30.2587 49.1889C26.1981 45.123 26.168 40.6956 26.168 40.5209L26.1981 38.7982Z" fill="#FF6500" />
                        <path d="M21.2816 86.7944C20.6921 88.0594 22.0516 89.3545 23.2848 88.7039C27.0747 86.7041 30.4976 84.4452 33.4452 81.9996C34.0047 81.5358 34.7566 81.3672 35.4605 81.5539C59.4388 87.8666 82.6772 69.6392 82.6772 45.117C82.6772 24.3415 65.7973 7.44519 45.0554 7.44519C24.3135 7.44519 7.43359 24.3475 7.43359 45.117C7.43359 57.3991 13.4432 68.9404 23.5074 76.0001C24.3015 76.5603 24.6504 77.5602 24.3797 78.4879C23.5014 81.4635 22.4607 84.2585 21.2816 86.7944ZM10.3512 45.117C10.3512 25.9558 25.9197 10.3606 45.0614 10.3606C64.1972 10.3606 79.7717 25.9498 79.7717 45.117C79.7717 67.7417 58.3259 84.5536 36.2124 78.7288C34.6002 78.3072 32.8737 78.6866 31.5984 79.7468C29.7877 81.2467 27.7845 82.6803 25.6129 84.0175C26.1843 82.5056 26.7077 80.9335 27.1829 79.3071C27.8086 77.1687 27.0085 74.8797 25.1857 73.6027C15.8916 67.0972 10.3512 56.4474 10.3512 45.117Z" fill="#FF6500" />
                        <path d="M48.5721 90.1015C59.1957 89.2763 69.2298 84.6561 76.8216 77.0905C84.4133 69.5248 89.0754 59.5075 89.9597 48.8818C90.0259 48.0807 89.4304 47.3759 88.6303 47.3036C87.8242 47.2374 87.1264 47.8337 87.0542 48.6348C85.3638 69.0308 68.7245 85.6079 48.3495 87.1921C47.5495 87.2523 46.9479 87.9571 47.0081 88.7582C47.0742 89.5714 47.7781 90.1617 48.5721 90.1015Z" fill="#FF6500" />
                        <path d="M90 41.8401C89.1819 30.5037 84.1408 19.9683 75.8031 12.1617C67.4233 4.31894 56.5049 0 45.0571 0C20.2126 0 0 20.2394 0 45.117C0 58.369 5.87728 71.1029 16.158 79.7287C14.7323 83.6863 12.9697 87.0836 10.9244 89.8424C9.28815 92.0471 9.29416 95.0047 10.9425 97.1973C12.6328 99.4441 15.4903 100.179 17.9807 99.2393C21.8067 97.7996 29.1759 94.6192 36.154 89.3425C37.9226 89.6979 39.7393 89.9508 41.55 90.0894C42.3561 90.1556 43.0539 89.5533 43.1141 88.7461C43.1743 87.945 42.5787 87.2402 41.7726 87.18C39.8657 87.0294 37.9587 86.7523 36.1059 86.3487C35.6848 86.2584 35.2456 86.3547 34.9027 86.6198C28.075 91.9085 20.7239 95.083 16.9521 96.5045C15.6166 97.0045 14.1428 96.6009 13.2705 95.4384C12.4043 94.2878 12.4043 92.7398 13.2645 91.5772C15.6587 88.3546 17.674 84.3609 19.2561 79.7107C19.4546 79.1264 19.2681 78.4818 18.7868 78.1024C8.69862 70.0427 2.91759 58.0196 2.91759 45.117C2.91759 21.8477 21.8247 2.91544 45.0632 2.91544C67.0503 2.91544 85.5123 20.1008 87.0944 42.0449C87.1546 42.8521 87.8524 43.4545 88.6525 43.3942C89.4526 43.34 90.0541 42.6413 90 41.8401Z" fill="#FF6500" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1035_2389">
                            <rect width="90" height="99.6429" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="relative py-[50px] px-[20px] lg:px-[35px] bg-[#F5F9F8] transition-all drop-shadow-[0px_10px_20px_rgba(0,0,0,0.15)] rounded-[10px] skew-right">
                <span class="font-recoleta text-[28px] leading-none text-secondary mb-[15px] block">Skype.</span>
                <a href="skype:{{ $agentDetail->skype }}" class="font-recoleta text-base text-primary hover:text-secondary">{{ $agentDetail->skype }}</a>
                <svg class="absolute top-1/2 -translate-y-1/2 right-[30px] skype" width="90" height="102" viewBox="0 0 90 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.05" clip-path="url(#clip0_1035_2394)">
                        <path d="M66.3384 102C61.8961 102 57.5298 100.585 53.7782 97.9205C47.2129 99.4862 40.3625 99.2707 33.8859 97.2812C26.801 95.1051 20.2928 90.8246 15.0773 84.9065C9.86187 78.9885 6.08494 71.6268 4.15845 63.5973C2.40306 56.2572 2.21295 48.4933 3.60078 41.0527C0.907499 36.1832 -0.33458 30.4088 0.077334 24.6344C0.533608 18.307 2.96707 12.3531 6.93411 7.85709C10.9012 3.3611 16.1546 0.603182 21.7377 0.0860716C26.8327 -0.387946 31.9278 1.02693 36.2243 4.07213C42.7896 2.50643 49.6401 2.7219 56.1166 4.71134C63.2015 6.88751 69.7098 11.168 74.9252 17.0861C80.147 23.0041 83.9176 30.3729 85.8441 38.4025C87.5995 45.7426 87.7896 53.5064 86.4081 60.9471C89.0951 65.8165 90.3435 71.5909 89.9252 77.3653C89.4689 83.6927 87.0355 89.6467 83.0685 94.1427C79.1014 98.6387 73.8479 101.397 68.2649 101.914C67.6249 101.971 66.9785 102 66.3384 102ZM54.3232 91.435C54.8872 91.435 55.4449 91.629 55.9138 92.0096C63.1318 97.7625 72.91 96.8001 79.1584 89.7113C85.4069 82.6298 86.2624 71.5478 81.1863 63.3674C80.73 62.6277 80.5716 61.7012 80.7617 60.825C83.7972 46.5685 80.1534 31.874 71.0216 21.5174C61.8771 11.1608 48.9113 7.03833 36.3321 10.4786C35.559 10.6868 34.7415 10.5145 34.0887 9.99735C26.8707 4.23732 17.0989 5.2069 10.8441 12.2884C4.58937 19.37 3.7402 30.4519 8.82258 38.6323C9.27885 39.3721 9.43728 40.2986 9.24717 41.1748C6.21168 55.4312 9.85553 70.1258 18.9873 80.4824C28.1255 90.8389 41.0913 94.9686 53.6705 91.5212C53.8859 91.4638 54.1014 91.435 54.3232 91.435Z" fill="#FF6500" />
                        <path d="M44.9983 77.6815C40.5686 77.6815 36.3671 76.2451 33.1732 73.6452C29.7068 70.8154 27.793 66.9587 27.793 62.7715C27.793 61.0406 29.0287 59.6329 30.5623 59.6329C32.0959 59.6329 33.3316 61.0334 33.3316 62.7715C33.3316 67.4542 38.6738 71.4115 45.0046 71.4115C51.3354 71.4115 56.6776 67.4542 56.6776 62.7715C56.6776 58.4622 50.106 55.9413 43.7499 53.5066C40.144 52.1276 36.4178 50.6984 33.5408 48.788C29.7321 46.2527 27.7993 43.0351 27.7993 39.2286C27.7993 35.0486 29.7068 31.1847 33.1795 28.3549C36.3735 25.7478 40.575 24.3186 45.0046 24.3186C49.4343 24.3186 53.6358 25.755 56.8297 28.3549C60.2961 31.1847 62.21 35.0415 62.21 39.2286C62.21 40.9595 60.9742 42.3672 59.4406 42.3672C57.907 42.3672 56.6713 40.9667 56.6713 39.2286C56.6713 34.5459 51.3291 30.5886 44.9983 30.5886C38.6675 30.5886 33.3253 34.5459 33.3253 39.2286C33.3253 42.8987 39.8018 45.3837 45.5116 47.5742C53.3316 50.5763 62.1973 53.9734 62.1973 62.7787C62.1973 66.9587 60.2898 70.8226 56.8171 73.6524C53.6295 76.2523 49.4343 77.6815 44.9983 77.6815Z" fill="#FF6500" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1035_2394">
                            <rect width="90" height="102" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>

        </div>
    </div>
</div>
@endsection