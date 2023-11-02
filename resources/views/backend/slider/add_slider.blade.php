@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Slider</h6>
								<form id="myForm" method="POST" action="{{route('create.slider')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Slider Header</label>
										<input type="text" class="form-control" id="exampleInputText1" name="slider_header" >
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Slider Title</label>
										<input type="text" class="form-control" id="exampleInputText1" name="slider_title" >
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Slider Content</label>
                                        <textarea id="maxlength-textarea" class="form-control"  name="slider_content" rows="8" ></textarea>
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Slider Image</label>
										<div class="col-sm-9 text-secondary">
                                            <input type="file" name="slider_image" class="form-control"  id="image"   />
                                        </div>
									</div>
                                   
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Image" style="width:100px; height: 100px;"  >
                                        </div>
                                        <br>
                                    
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Button Text</label>
										<input type="text" class="form-control" id="exampleInputText1" name="button_text">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Button Url</label>
										<input type="text" class="form-control" id="exampleInputText1" name="button_url">
									</div>

								

									<button class="btn btn-primary" type="submit">Add slider</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>


        <script type="text/javascript">
            $(document).ready(function (){
                $('#myForm').validate({
                    rules: {
                        slider_header: {
                            required : true,
                        }, 
                        slider_title: {
                            required : true,
                        },
                        slider_content: {
                            required : true,
                        },
                        slider_image: {
                            required : true,
                        },
                    },
                    messages :{
                        slider_header: {
                            required : 'Please Enter Slider Header',
                        },
                        slider_title: {
                            required : 'Please Enter Slider Title',
                        },
                        slider_content: {
                            required : 'Please Enter Slider Content',
                        },
                        slider_image: {
                            required : 'Please Enter Slider Image',
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
        
        
        
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>

@endsection