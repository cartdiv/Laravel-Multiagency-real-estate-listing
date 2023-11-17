@extends('frontend.frontend_master')
@section('frontend.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- contact form start -->

        <div class="py-[80px] lg:py-[120px]">
            <div class="container">
                <form id="myForm" method="POST" action="{{route('store.agent.register')}}">
                    @csrf
                    <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
                        <div class="col-span-12 lg:col-span-6 mb-[30px]">
                            <h2 class="font-recoleta text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[15px]">
                                Create Agency Account<span class="text-secondary">.</span></h2>

                            <p class="max-w-[465px] mb-[50px]">
                                Hello welcome you can upload your properties here for buy, sell and Rent.
                                Also you find here co-living property, lots opportunity you have to
                                choose here and enjoy huge discount you can get.
                            </p>
                           
                            <div class="grid grid-cols-12 gap-x-[20px] gap-y-[35px]">

                               
                                <div class="col-span-12">
                                    <input name="name" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Agency Name">
                                </div>

                                <div class="col-span-12">
                                    <input name="email" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email">
                                </div>

                                <div class="col-span-12">
                                    <input name="username" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Username">
                                </div>

                                <div class="col-span-12">
                                    <input name="address" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Address">
                                </div>

                                <div class="col-span-12">
                                    <input name="phone" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone Number">
                                </div>

                            

                                <div class="col-span-12">
                                    <input name="password" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="password" placeholder="Password">

                                </div>

                              


                                <div class="col-span-12">
                                    <div class="flex flex-wrap items-center">
                                        <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Register</button>

                                        <p class="ml-[40px]">Already have an Account? <a href="{{route('agent.login.option')}}" class="text-secondary"  >Login</a></p>

                                    </div>
                                </div>

                            
                            </div>
                        
                        </div>

                        <div class="col-span-12 lg:col-span-6 mb-[30px]">
                            <img src="{{asset('frontend/assets/images/contact/image2.png')}}" class="w-full lg:max-w-[538px] h-auto rounded-[10px]" width="546" height="668" alt="image">
                        </div>
                        
                    </div>
                </form>

            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function (){
                $('#myForm').validate({
                    rules: {
                        name: {
                            required : true,
                        }, 

                        username: {
                            required : true,
                        },

                        email: {
                            required : true,
                        },
                     
                        password: {
                            required : true,
                        }, 
                        
                    },
                    messages :{
                        name: {
                            required : 'Please Enter Name',
                        }, 

                        username: {
                            required : 'Please Enter Username',
                        }, 
                        
                        email: {
                            required : 'Please Enter Email',
                        },

                        password: {
                            required : 'Please Enter a password',
                        }, 
                         
        
                    },
                    errorElement : 'span', 
                    errorPlacement: function (error,element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight : function(element, errorClass, validClass){
                        $(element).addClass('is-invalid');
                    },
                    unhighlight : function(element, errorClass, validClass){
                        $(element).removeClass('is-invalid');
                    },
                });
            });
            
        </script>
        @endsection