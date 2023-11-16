@extends('frontend.frontend_master')
@section('frontend.main')


<section class="pt-[80px] lg:pt-[120px]">
    <div class="container">
        <div class="grid sm:grid-cols-12 gap-[30px]">
            <div class="col-span-12 lg:col-span-5 xl:col-span-6">
                <div class="p-[30px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC]">
                    <img class="self-center mb-[15px] w-full h-full" src="{{ (!empty($item->photo))?url('upload/agent_photo/'.$item->photo):url('upload/no_image.jpg') }}" width="499" height="988" loading="lazy" alt="brand logo">

                </div>
            </div>
            <div class="col-span-12 lg:col-span-7 xl:col-span-6">
                <div class="xl:pl-[40px]">
                    <h4 class="font-recoleta text-primary text-[22px] lg:text-[36px]"> {{ $agencyDetail->name }}
                        <span class="text-secondary">.</span>
                    </h4>
                    <span class="underline font-light block text-[18px] mb-[15px]">{{ $agencyDetail->address }}</span>

                    {{-- <div class="flex flex-wrap mb-[30px]">
                        <span class="mx-[1px]">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#FF6500" />
                            </svg>
                        </span>
                        <span class="mx-[1px]">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#FF6500" />
                            </svg>
                        </span>
                        <span class="mx-[1px]">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#FF6500" />
                            </svg>
                        </span>
                        <span class="mx-[1px]">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#FF6500" />
                            </svg>
                        </span>
                        <span class="mx-[1px]">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1887 5.51714L10.2215 4.94058L8.4481 1.34527C8.39966 1.24683 8.31997 1.16714 8.22154 1.11871C7.97466 0.996832 7.67466 1.09839 7.55122 1.34527L5.77779 4.94058L1.8106 5.51714C1.70123 5.53277 1.60123 5.58433 1.52466 5.66246C1.4321 5.75759 1.3811 5.88558 1.38286 6.0183C1.38461 6.15103 1.43899 6.27762 1.53404 6.37027L4.40435 9.16871L3.72623 13.1203C3.71032 13.2122 3.72049 13.3067 3.75559 13.3932C3.79068 13.4796 3.84929 13.5545 3.92477 13.6093C4.00025 13.6641 4.08958 13.6967 4.18263 13.7033C4.27568 13.71 4.36873 13.6904 4.45123 13.6468L7.99966 11.7812L11.5481 13.6468C11.645 13.6984 11.7575 13.7156 11.8653 13.6968C12.1372 13.65 12.32 13.3921 12.2731 13.1203L11.595 9.16871L14.4653 6.37027C14.5434 6.29371 14.595 6.19371 14.6106 6.08433C14.6528 5.81089 14.4622 5.55777 14.1887 5.51714Z"
                                    fill="#FF6500" />
                            </svg>
                        </span>
                    </div> --}}

                    <h4 class="font-recoleta text-primary text-[22px] lg:text-[28px] mb-[10px]">Overview <span
                            class="text-secondary">.</span></h4>
                    <p class="mb-[30px] max-w-[480px]">
                        Huge number of propreties availabe here for buy, sell and Rent.
                        Also you find here co-living property, lots opportunity you have to
                        choose here and enjoy huge discount you can get. She work like a
                        machine and can serve best service for the clients.
                    </p>
                    <ul class="font-recoleta text-[18px] flex flex-wrap sm:items-center justify-between m-[-10px] flex-col sm:flex-row items-start">
                        <li class="m-[10px]">
                            <span class="text-secondary block">Phone no.</span>
                            <a href="tel:+9985254784" class="text-primary">{{$agencyDetail->phone}}</a>
                        </li>

                        @php
                        $properties = App\Models\Property::where('agent_id', $agencyDetail->id)->where('status', 1)->get();
                        $agents = App\Models\Agent::where('agency_id', $agencyDetail->id)->get();
                    @endphp
                        <li class="m-[10px]">
                            <span class="text-secondary block">Agent.</span>
                            <span class="text-primary"> {{ count($agents) }} Agent</span>
                        </li>
                        <li class="m-[10px]">
                            <span class="text-secondary block">Properties.</span>
                            <span class="text-primary">{{ count($properties) }} Properties</span>
                        </li>
                    </ul>




                </div>
            </div>
        </div>

        {{-- <div class="py-[80px] lg:py-[120px]">
            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="col-span-12">
                    <ul class="flex flex-wrap list-none justify-between max-w-[800px] mx-auto">
                        <li class="sm:border-r sm:border-[#CFCFCF] sm:pr-[60px] md:pr-[115px]">
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">150</span> <span>k+</span></span>
                            <p>Properties</p>
                        </li>
                        <li class="sm:border-r sm:border-[#CFCFCF] sm:pr-[60px] md:pr-[115px]">
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">160</span> <span>k+</span></span>
                            <p>Customers</p>
                        </li>
                        <li>
                            <span class="font-recoleta text-secondary text-lg"><span class="counter-up">90</span>
                            <span>+</span></span>
                            <p>Awards Win</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

    </div>
</section>

 <!-- Team Section Etart-->

 <section class="team-section pb-[80px] lg:pb-[120px] overflow-hidden">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="mb-[30px] lg:mb-[60px] text-center">
                    <span class="text-secondary text-tiny inline-block mb-2">Our Agents</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">Here
                        is our
                        Experts<span class="text-secondary">.</span></h2>
                </div>
            </div>
        </div>
            @php
                $agents = App\Models\Agent::where('agency_id', $agencyDetail->id)->get();
            @endphp
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-x-[30px] mb-[-30px]">
            <!-- single team start -->
            
            @foreach ( $agents as $item )
                
            
            <div class="text-center group mb-[30px]">
                <div class="relative rounded-[6px_6px_0px_0px]">
                    <a href="{{url('/agent/detail/'.$item->id)}}" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#F5F9F8] before:w-full before:h-[calc(100%_-_60px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                        <img src="{{ asset($item->agent_image) }}" class="w-auto h-auto block mx-auto" loading="lazy" width="215" height="310" alt="{{ $item->agent_name }}">
                    </a>
                </div>

                <div class="bg-[#FFFDFC] z-[1] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[15px] py-[20px] border-b-[6px] border-primary before:transition-all before:duration-300 group-hover:border-secondary relative before:absolute before:left-0 before:bottom-0 before:h-0 before:w-full before:bg-primary before:z-[-1] group-hover:before:h-full">
                    <h3><a href="{{url('/agent/detail/'.$item->id)}}" class="font-recoleta font-normal text-base text-primary group-hover:text-white">{{ $item->agent_name }}</a></h3>
                    <p class="font-normal text-[14px] leading-none capitalize mt-[5px] group-hover:text-white">{{ $item->agent_title }}</p>
                    <ul class="inline-flex items-center justify-center absolute w-full top-[-15px] left-0 overflow-hidden">
                        <li class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-300 delay-300 first:ml-0 ml-[15px]"><a href="{{ $item->facebook }}" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.36 4.20156V3.12156C4.36 2.65356 4.468 2.40156 5.224 2.40156H6.16V0.601562H4.72C2.92 0.601562 2.2 1.78956 2.2 3.12156V4.20156H0.760002V6.00156H2.2V11.4016H4.36V6.00156H5.944L6.16 4.20156H4.36Z" fill="currentColor" />
                                </svg>

                            </a></li>
                        <li class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-500 delay-300 ml-[15px]"><a href="{{ $item->twiter }}" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6667 1.93957C13.1669 2.15783 12.6376 2.30093 12.096 2.36424C12.6645 2.0304 13.092 1.50098 13.2987 0.874908C12.76 1.18846 12.1725 1.40931 11.5607 1.52824C11.303 1.25838 10.9931 1.04383 10.6498 0.897693C10.3065 0.751554 9.93709 0.676884 9.564 0.678241C8.05333 0.678241 6.82866 1.88491 6.82866 3.37157C6.82866 3.58224 6.85266 3.78824 6.89933 3.98491C5.81571 3.93337 4.75474 3.65651 3.78411 3.172C2.81348 2.68749 1.9545 2.00596 1.26199 1.17091C1.01921 1.58051 0.891605 2.04809 0.892662 2.52424C0.893126 2.96955 1.00455 3.40773 1.21685 3.79917C1.42916 4.19061 1.73566 4.52298 2.10866 4.76624C1.67498 4.75224 1.25068 4.63646 0.869995 4.42824V4.46157C0.869995 5.76691 1.81333 6.85557 3.06333 7.10357C2.8284 7.16591 2.58638 7.1975 2.34333 7.19757C2.16666 7.19757 1.99533 7.18091 1.828 7.14757C2.00672 7.68619 2.34873 8.15578 2.80654 8.49113C3.26435 8.82648 3.81522 9.01095 4.38266 9.01891C3.40937 9.7686 2.21454 10.1736 0.985995 10.1702C0.764662 10.1702 0.547328 10.1569 0.333328 10.1329C1.5875 10.9267 3.04172 11.3471 4.52599 11.3449C9.55733 11.3449 12.308 7.24024 12.308 3.68091L12.2987 3.33224C12.8352 2.95469 13.2988 2.4828 13.6667 1.93957Z" fill="currentColor" />
                                </svg>


                            </a></li>
                        <li class="translate-y-[30px] group-hover:translate-y-[0] transition ease-in-out duration-700 delay-300 ml-[15px]"><a href="{{ $item->instagram }}" class="w-[26px] h-[26px] transition-all rounded-full bg-[#FFF6F0] flex items-center justify-center hover:drop-shadow-[0px_4px_10px_rgba(0,0,0,0.25)] text-[#494949] hover:text-[#3B5998]">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 3.79646C5.22656 3.79646 3.79531 5.22771 3.79531 7.00115C3.79531 8.77458 5.22656 10.2058 7 10.2058C8.77344 10.2058 10.2047 8.77458 10.2047 7.00115C10.2047 5.22771 8.77344 3.79646 7 3.79646ZM7 9.08396C5.85312 9.08396 4.91719 8.14802 4.91719 7.00115C4.91719 5.85427 5.85312 4.91834 7 4.91834C8.14687 4.91834 9.08281 5.85427 9.08281 7.00115C9.08281 8.14802 8.14687 9.08396 7 9.08396ZM10.3359 2.91834C9.92187 2.91834 9.5875 3.25271 9.5875 3.66677C9.5875 4.08084 9.92187 4.41521 10.3359 4.41521C10.75 4.41521 11.0844 4.0824 11.0844 3.66677C11.0845 3.56845 11.0652 3.47107 11.0277 3.38021C10.9901 3.28935 10.935 3.2068 10.8654 3.13727C10.7959 3.06775 10.7134 3.01262 10.6225 2.97506C10.5316 2.93749 10.4343 2.91821 10.3359 2.91834ZM13.2469 7.00115C13.2469 6.13865 13.2547 5.28396 13.2063 4.42302C13.1578 3.42302 12.9297 2.53552 12.1984 1.80427C11.4656 1.07146 10.5797 0.844898 9.57969 0.796461C8.71719 0.748023 7.8625 0.755836 7.00156 0.755836C6.13906 0.755836 5.28437 0.748023 4.42344 0.796461C3.42344 0.844898 2.53594 1.07302 1.80469 1.80427C1.07187 2.53709 0.84531 3.42302 0.796873 4.42302C0.748435 5.28552 0.756248 6.14021 0.756248 7.00115C0.756248 7.86209 0.748435 8.71834 0.796873 9.57927C0.84531 10.5793 1.07344 11.4668 1.80469 12.198C2.5375 12.9308 3.42344 13.1574 4.42344 13.2058C5.28594 13.2543 6.14062 13.2465 7.00156 13.2465C7.86406 13.2465 8.71875 13.2543 9.57969 13.2058C10.5797 13.1574 11.4672 12.9293 12.1984 12.198C12.9312 11.4652 13.1578 10.5793 13.2063 9.57927C13.2562 8.71834 13.2469 7.86365 13.2469 7.00115ZM11.8719 10.6855C11.7578 10.9699 11.6203 11.1824 11.4 11.4011C11.1797 11.6215 10.9687 11.759 10.6844 11.873C9.8625 12.1996 7.91094 12.1261 7 12.1261C6.08906 12.1261 4.13594 12.1996 3.31406 11.8746C3.02969 11.7605 2.81719 11.623 2.59844 11.4027C2.37812 11.1824 2.24062 10.9715 2.12656 10.6871C1.80156 9.86365 1.875 7.91209 1.875 7.00115C1.875 6.09021 1.80156 4.13709 2.12656 3.31521C2.24062 3.03084 2.37812 2.81834 2.59844 2.59959C2.81875 2.38084 3.02969 2.24177 3.31406 2.12771C4.13594 1.80271 6.08906 1.87615 7 1.87615C7.91094 1.87615 9.86406 1.80271 10.6859 2.12771C10.9703 2.24177 11.1828 2.37927 11.4016 2.59959C11.6219 2.8199 11.7594 3.03084 11.8734 3.31521C12.1984 4.13709 12.125 6.09021 12.125 7.00115C12.125 7.91209 12.1984 9.86365 11.8719 10.6855Z" fill="currentColor" />
                                </svg>
                            </a></li>
                    </ul>
                </div>


            </div>
          @endforeach

            <!-- single team end-->
        </div>
    </div>
</section>

<!-- Team Section End-->

@php
    $property = App\Models\Property::where('status', 1)->where('agent_id', $agencyDetail->id)->orderBy('id', 'DESC')->limit(6)->get();
    $category = App\Models\Category::latest()->get();
@endphp
 <!-- Featured Properties Start -->
 <section class="featured-properties">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <span class="text-secondary text-tiny inline-block mb-2">Our Property</span>
            </div>
            <div class="col-span-12 flex flex-wrap flex-col md:flex-row items-start justify-between mb-[50px]">
                <div class="mb-5 lg:mb-0">

                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize">
                        Properties Collections<span class="text-secondary">.</span></h2>
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
                        $catproperty = App\Models\Property::where('category_id',$item->id)->where('status',1)->where('agent_id', $agencyDetail->id)->orderBy('id','DESC')->get();
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
<!-- Featured Properties End -->

@endsection