@php
    $testimony = App\Models\Testimonial::orderBy('id', 'DESC')->limit(5)->get()
@endphp
<section class="testimonial-section pt-[50px] bg-no-repeat bg-white relative z-10" style="background-image: url(assets/images/testimonial/pattern.png);">
    <div class="container testimonial-carousel-one">
        <div class="grid items-center grid-cols-12 gap-x-[30px] mb-[-30px]">
            <div class="col-span-12 lg:col-span-7 mb-[30px]">
                <div class="swiper -m-[30px] p-[30px]">
                    <div class="swiper-wrapper">

                        @foreach ( $testimony as $item )
                            
                        

                        <div class="swiper-slide">
                            <div class="relative text-right">
                                <!-- shape and images -->
                                <div class="inline-block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-primary text-primary before:w-full before:h-[calc(100%_-_50px)] before:z-[-1] before:rounded-[16px]">
                                    <img src="{{ asset($item->image) }}" class="w-auto h-auto block mx-auto relative z-[2]" loading="lazy" width="300" height="380" alt="Oliver Stephen">
                                    <img class="absolute right-[20px] bottom-0 z-[1]" src="{{ asset('frontend/assets/images/testimonial/shape.png') }}" width="130" height="132" loading="lazy" alt="shape">
                                </div>

                                <!-- content -->
                                <div class="review-shadow-card text-left rounded-[14px] pl-[20px] sm:pl-[30px] pr-[45px] pt-[30px] sm:pt-[45px] pb-[20px] sm:pb-[30px]">
                                                                <span class="block absolute right-[20px] top-[30px]">
                                    <svg class="ml-auto mb-[4px]" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.925 19.2505H7.7L11.55 11.5505V0.000488281H0V11.5505H5.775L1.925 19.2505ZM17.325 19.2505H23.1L26.95 11.5505V0.000488281H15.4V11.5505H21.175L17.325 19.2505Z" fill="#016450"/>
                                    </svg>
                                </span>
                                    <p class="text-primary">{{ $item->testimonial_text }}</p>
                                    <ul>
                                        <li class="flex flex-wrap items-center justify-between mt-4">
                                            <span class="font-recoleta text-[18px] leading-none capitalize text-secondary">{{ $item->name }}</span>
                                            @for ($i = 0; $i < $item->rate; $i++)
                                           
                                        
                                            <span class="flex flex-wrap">
                 <span class="ml-[4px]">
                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z" fill="#FF6500"/>
            </svg>
                    </span>
                                    
                            @endfor
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach



                    </div>
                </div>
            </div>



            <div class="col-span-12 lg:col-span-5 mb-[30px] order-first lg:order-last">
                <div class="relative 2xl:ml-[55px] max-w-[385px]">
                    <span class="text-secondary text-tiny capitalize inline-block mb-[10px]">Testimonial</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] xl:text-xl mb-[20px] max-w-[375px]">
                        Reviews from
                        our
                        happy Clients<span class="text-secondary">.</span></h2>
                    <p>Huge number of propreties availabe here for buy,
                        sell and Rent. Also you find here co-living property so
                        lots opportunity you have to choose here and enjoy. </p>

                    <!-- If we need navigation buttons -->
                    <div class="testimonial-pagination hidden sm:block">
                        <div class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-0">
                        </div>
                        <div class="swiper-button-next w-[36px] h-[36px] rounded-full bg-primary  text-white hover:bg-secondary top-auto bottom-[-65px] left-[56px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
