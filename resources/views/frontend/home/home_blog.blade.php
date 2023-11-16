@php 
    $blog = App\Models\Blog::orderBy('id', 'DESC')->limit(2)->get();
@endphp
<section class="blog-section relative">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-center">
            <div class="col-span-12 lg:col-span-4 mb-[30px]">
                <div class="xl:pr-[20px]">
                    <span class="text-secondary text-tiny capitalize inline-block mb-[15px]">Our Blog</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-[15px]">
                        Always Check our
                        Latest Blog Post<span class="text-secondary">.</span></h2>

                    <p>Huge number of propreties availabe here for
                        buy, sell and Rent. Also you find here co-living
                        property so lots opportunity you have choose
                        and enjoy huge discount. </p>
                    <a href="blog-grid.html" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">View all
                        Post
                        <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor"></path>
                        </svg>
                    </a>

                </div>
            </div>

            <div class="col-span-12 lg:col-span-8 mb-[30px]">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-[30px] mb-[-30px]">

                    @foreach ($blog as $item)
                        
                   

                    <div class="mb-[30px]">
                        <a href="{{url('blog/detail/'.$item->id.'/'.$item->blog_slug)}}" class="block overflow-hidden rounded-[6px] mb-[30px]">
                            <img class="w-full h-full" src="{{asset($item->blog_image)}}" width="370" height="270" loading="lazy" alt="Tip’s about Real Estate Recent Conditions from Agent.">
                        </a>
                        <div>
                            <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">{{ date("y F j", strtotime($item->created_at))  }}</span>
                            <h3><a href="{{url('blog/detail/'.$item->id.'/'.$item->blog_slug)}}" class="font-recoleta text-[22px] xl:text-[28px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all">{{ $item->blog_name }}</a></h3>
                            {{-- <p class="font-light text-[#494949] text-[16px] leading-[1.75]">{{ Str::limit($item->blog_description, 150, '...') }}</p> --}}
                        </div>
                    </div>
                
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</section>