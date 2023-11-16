@extends('frontend.frontend_master')
@section('frontend.main')



   <!-- Brand Section Etart-->

   <section class="pt-[80px] lg:pt-[120px]">
    <div class="container">
        <div class="grid sm:grid-cols-2 gap-[30px]">

            @foreach ( $agencys as $item )

            <div class="p-[25px] sm:p-[20px] lg:p-[25px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] flex flex-col xl:flex-row flex-wrap">
                <img class="self-center mb-[15px] xl:mb-0" src="{{ (!empty($item->photo))?url('upload/agent_photo/'.$item->photo):url('upload/no_image.jpg') }}" width="220" height="208" loading="lazy" alt="brand logo">
                <div class="flex-1">
                    <div class="sm:flex flex-wrap md:items-center md:justify-center flex-col text-center">
                        <h4 class="font-recoleta text-primary text-[22px] lg:text-[28px]">{{ $item->name }} <span
                                class="text-secondary">.</span></h4>
                        <span class="underline text-secondary font-light block mb-[15px]">{{ $item->address }}</span>

                        @php
                            $properties = App\Models\Property::where('agent_id', $item->id)->where('status', 1)->get();
                            $agents = App\Models\Agent::where('agency_id', $item->id)->get();
                        @endphp
                        <p class="mb-[15px] xl:mb-[30px] font-recoleta text-primary text-[16px]">{{ count($properties) }} Properties - {{ count($agents) }} Agents
                        </p>
                        <a href="{{url('/agency/detail/'.$item->id)}}" class="inline-block before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-center text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">View
                            Details</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <div class="grid grid-cols-12 mt-[50px] gap-x-[30px]">
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
</section>

<!-- Brand Section End-->


@endsection