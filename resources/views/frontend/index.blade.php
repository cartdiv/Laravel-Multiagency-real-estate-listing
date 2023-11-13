 @extends('frontend.frontend_master')
 @section('frontend.main')
 <!-- Hero section start -->
@include('frontend.home.home_swiper')
<!-- Hero section end -->


<!-- Addvanced search tab start -->
<div class="mt-[80px] lg:mt-[120px] xl:mt-[-160px] relative z-[2] pl-[40px] lg:pl-[50px] xl:pl-[0px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 relative">
                <ul class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-l border-t border-r border-solid border-[#016450] border-opacity-25 rounded-tl-[15px] rounded-tr-[15px] bg-white">
                    <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">buy</button>
                    </li>
                    <li data-tab="sell" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">sell</button>
                    </li>
                    <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">rent</button>
                    </li>
                    <li data-tab="co-living" class="md:mr-[0px] my-1"><button class="font-recoleta leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-32px] before:w-0 before:h-[2px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Co-living</button>
                    </li>
                </ul>

                <button class="tab-toggle-btn px-[10px] py-[15px] absolute bottom-[-56px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-white text-primary border-opacity-25 rounded-tl-[10px] rounded-bl-[10px]" aria-label="svg icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 22V17" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 13V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 11H7" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 11H21" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 13H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="col-span-12 selectricc-border-none">
                <div id="buy" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px] active">
                    <form action="#">
                        <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/location.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="location" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                    <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/property.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Type</label>
                                    <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/dollar-circle.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="price" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                        Range</label>
                                    <select name="price" id="price" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">1500 USD</option>
                                        <option value="1">1600 USD</option>
                                        <option value="2">1700 USD</option>
                                        <option value="3">1800 USD</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/area.svg')}}" width="24" height="24" alt="svg icon">
                                </div>

                                <div class="flex-1">
                                    <label for="property-size" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Size</label>
                                    <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2500 Sqft</option>
                                        <option value="1">2600 Sqft</option>
                                        <option value="2">2700 Sqft</option>
                                        <option value="3">2800 Sqft</option>
                                    </select>
                                </div>
                                <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                    <img src="{{asset('frontend/assets/images/icon/search-outline.svg')}}" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                    <span class="hidden">Search Properties</span>
                                </button>
                            </div>

                        </div>



                        <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/location.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="bedrooms10" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                    <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Bedrooms</option>
                                        <option value="1">kitchen</option>
                                        <option value="2">dinning rooms</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/property.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property9" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                    <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="{{asset('frontend/assets/images/icon/dollar-circle.svg')}}" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="garage" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                    <select name="garage" id="garage" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2 Garage</option>
                                        <option value="1">2 Garage</option>
                                        <option value="2">3 Garage</option>
                                        <option value="3">4 Garage</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <button class="search-properties-btn">
                                    Search Properties
                                </button>
                            </div>

                        </div>


                    </form>
                </div>


                <div id="sell" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                    <form action="#">
                        <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="location2" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                    <input id="location2" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property2" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Type</label>
                                    <select name="property" id="property2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Apartments</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="price2" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                        Range</label>
                                    <select name="price" id="price2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">100 USD</option>
                                        <option value="1">600 USD</option>
                                        <option value="2">700 USD</option>
                                        <option value="3">800 USD</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                </div>

                                <div class="flex-1">
                                    <label for="property-size2" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Size</label>
                                    <select name="property-size" id="property-size2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">500 Sqft</option>
                                        <option value="1">600 Sqft</option>
                                        <option value="2">700 Sqft</option>
                                        <option value="3">800 Sqft</option>
                                    </select>
                                </div>
                                <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                    <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                    <span class="hidden">Search Properties</span>
                                </button>
                            </div>

                        </div>


                        <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="bedrooms" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                    <select name="property" id="bedrooms" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Bedrooms</option>
                                        <option value="1">kitchen</option>
                                        <option value="2">dinning rooms</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property3" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                    <select name="property" id="property3" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="garage2" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                    <select name="garage" id="garage2" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2 Garage</option>
                                        <option value="1">2 Garage</option>
                                        <option value="2">3 Garage</option>
                                        <option value="3">4 Garage</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <button class="search-properties-btn">
                                    Search Properties
                                </button>
                            </div>

                        </div>


                    </form>
                </div>

                <div id="rent" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                    <form action="#">
                        <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="location7" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                    <input id="location7" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property8" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Type</label>
                                    <select name="property" id="property8" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="price7" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                        Range</label>
                                    <select name="price" id="price7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">1500 USD</option>
                                        <option value="1">1600 USD</option>
                                        <option value="2">1700 USD</option>
                                        <option value="3">1800 USD</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                </div>

                                <div class="flex-1">
                                    <label for="property-size9" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Size</label>
                                    <select name="property-size" id="property-size9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2500 Sqft</option>
                                        <option value="1">2600 Sqft</option>
                                        <option value="2">2700 Sqft</option>
                                        <option value="3">2800 Sqft</option>
                                    </select>
                                </div>
                                <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                    <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                    <span class="hidden">Search Properties</span>
                                </button>
                            </div>

                        </div>



                        <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="bedrooms6" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                    <select name="property" id="bedrooms6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Bedrooms</option>
                                        <option value="1">kitchen</option>
                                        <option value="2">dinning rooms</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property7" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                    <select name="property" id="property7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="garage20" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                    <select name="garage" id="garage20" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2 Garage</option>
                                        <option value="1">2 Garage</option>
                                        <option value="2">3 Garage</option>
                                        <option value="3">4 Garage</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <button class="search-properties-btn">
                                    Search Properties
                                </button>
                            </div>

                        </div>


                    </form>
                </div>
                <div id="co-living" class="tab-content bg-white border border-solid border-[#016450] border-opacity-25 rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]">
                    <form action="#">
                        <div class="advanced-searrch flex flex-wrap items-center -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="location6" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Location</label>
                                    <input id="location6" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full">
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property6" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Type</label>
                                    <select name="property" id="property6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Apartments</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="price6" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Price
                                        Range</label>
                                    <select name="price" id="price6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">5500 USD</option>
                                        <option value="1">5600 USD</option>
                                        <option value="2">5700 USD</option>
                                        <option value="3">5800 USD</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                </div>

                                <div class="flex-1">
                                    <label for="property-size4" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Property
                                        Size</label>
                                    <select name="property-size" id="property-size4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">3500 Sqft</option>
                                        <option value="1">3600 Sqft</option>
                                        <option value="2">3700 Sqft</option>
                                        <option value="3">3800 Sqft</option>
                                    </select>
                                </div>
                                <button class="search-btn absolute right-0 lg:right-[-60px] xl:right-[-70px]">
                                    <img src="assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                    <span class="hidden">Search Properties</span>
                                </button>
                            </div>

                        </div>



                        <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="bedrooms4" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bedrooms</label>
                                    <select name="property" id="bedrooms4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Bedrooms</option>
                                        <option value="1">kitchen</option>
                                        <option value="2">dinning rooms</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="property4" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Bathrooms</label>
                                    <select name="property" id="property4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">Duplex House</option>
                                        <option value="1">Duplex House 1</option>
                                        <option value="2">Duplex House 2</option>
                                        <option value="3">Duplex House 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <div class="mr-4 self-start shrink-0">
                                    <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                </div>
                                <div class="flex-1">
                                    <label for="garage4" class="font-recoleta block capitalize text-primary text-[18px] xl:text-[25px] leading-none mb-1">Garage</label>
                                    <select name="garage" id="garage4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                        <option selected value="0">2 Garage</option>
                                        <option value="1">2 Garage</option>
                                        <option value="2">3 Garage</option>
                                        <option value="3">4 Garage</option>
                                    </select>
                                </div>

                            </div>

                            <div class="advanced-searrch-list flex items-center lg:border-r lg:border-[#D6D4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                <button class="search-properties-btn">
                                    Search Properties
                                </button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Addvanced search tab end -->

<!-- Explore Cities Start-->
@include('frontend.home.home_place')

<!-- Explore Cities End-->


 <!-- About Us Sectin Start -->
 <section class="about-section lg:pt-[55px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-7">
                <div class="scene" data-relative-input="true">
                    <img data-depth="0.1" src="{{asset('frontend/assets/images/about/about.png')}}" class="2xl:ml-[-130px] mx-auto lg:max-w-[500px] xl:max-w-[729px]" loading="lazy" width="729" height="663" alt="about Image">
                </div>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-3">
                    We
                    Provide Right Choice of
                    Properties that You need<span class="text-secondary">.</span></h2>
                <p class="max-w-[448px]">Huge number of propreties availabe here for buy, sell and
                    Rent. Also you find here co-living property so lots opportunity
                    you have to choose here and enjoy huge discount. </p>

                <div class="-mb-10 mt-[45px]">
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="{{asset('frontend/assets/images/icon/doller.png')}}" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">Budget
                                Friendly</h3>
                            <p class="max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</p>
                        </div>

                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="{{asset('frontend/assets/images/icon/location.png')}}" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">Prime
                                Location</h3>
                            <p class="max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</p>
                        </div>

                    </div>
                    <div class="flex flex-wrap mb-5 lg:mb-10">
                        <img src="{{asset('frontend/assets/images/icon/trusted.png')}}" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                        <div class="flex-1">
                            <h3 class="font-recoleta text-primary text-[22px] xl:text-lg capitalize mb-2">
                                Trusted by
                                Thousand</h3>
                            <p class="max-w-[315px]">Properties are most budget friendly so you
                                have opportunity to find the best one</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About Us Sectin End -->

@include('frontend.home.home_property')

 <!-- Video Section Start -->
 <section class="video-section">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px] items-center">
            <div class="col-span-12 lg:col-span-6 relative">
                <div class="mb-5 lg:mb-0 max-w-[450px]">
                    <span class="text-secondary text-tiny inline-block mb-2">Take a video tour</span>
                    <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[10px]">Watch the video for taking your decision easily<span class="text-secondary">.</span></h2>
                    <p>Huge number of propreties availabe here for buy, sell and
                        Rent. Also you find here co-living property so lots opportunity
                        you have to choose here and enjoy huge discount.</p>
                    <a href="#" class="flex flex-wrap items-center text-secondary text-tiny mt-[20px]">View all
                        <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor"></path>
                        </svg>
                    </a>
                    <img class="absolute bottom-[-18px] right-[5px]" src="{{asset('frontend/assets/images/video/star.png')}}" loading="lazy" width="65" height="73" alt="image">

                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 text-center">
                <div class="relative rounded-[24px] pt-[45px] pr-[45px] z-[1] inline-block">
                    <div class="absolute top-0 right-0 bg-primary w-[90%] h-[90%] rounded-[24px] z-[-2]">

                        <img src="{{asset('frontend/assets/images/video/shape.png')}}" class="absolute top-[18px] left-[-17px] z-[-1]" loading="lazy" width="68" height="56" alt="shape image">
                        <img src="{{asset('frontend/assets/images/video/shape.png')}}" class="absolute bottom-[15px] right-[15px] z-[-1]" loading="lazy" width="68" height="56" alt="shape image">
                    </div>
                    <div class="relative">
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="{{asset('frontend/assets/images/video/video.png')}}" class="rounded-[24px]" loading="lazy" width="507" height="349" alt="video image">
                        </div>
                        <a href="https://www.youtube.com/watch?v=mSC6GwizOag" class="play-button bg-white text-white hover:text-primary absolute left-0 right-0 mx-auto top-1/2 -translate-y-1/2 hover:scale-105 hover:bg-primary w-[55px] h-[55px] flex 
    flex-wrap z-[1] items-center justify-center opacity-80 shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] transition-all rounded-full group
    
    before:block before:absolute  before:bg-white before:opacity-80 before:shadow-[0px 4px 4px rgba(0, 0, 0, 0.25)] hover:before:bg-primary hover:before:opacity-80 before:w-[70px] before:h-[70px] before:rounded-full before:z-[-1]
    " aria-label="play button">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-secondary group-hover:stroke-white" d="M1.63861 10.764V6.70324C1.63861 1.66145 5.20893 -0.403178 9.57772 2.11772L13.1024 4.14812L16.6271 6.17853C20.9959 8.69942 20.9959 12.8287 16.6271 15.3496L13.1024 17.38L9.57772 19.4104C5.20893 21.9313 1.63861 19.8666 1.63861 14.8249V10.764Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Section End -->

 <!-- Featured Properties Start -->
 @include('frontend.home.home_allproperty')

  <!-- Featured Properties End -->


        <!-- Testimonial carousel Start -->
        @include('frontend.home.home_testimonial')
        <!-- Testimonial carousel End -->



        <!-- Brand section Start-->
        @include('frontend.home.home_brand')

         <!-- Brand section End-->


        <!-- Blog Section Start  -->
        @include('frontend.home.home_blog')
        <!-- Blog Section End  -->


      
        @endsection