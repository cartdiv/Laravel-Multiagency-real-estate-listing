@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Testimonial</h6>
								<form id="myForm" method="POST" action="{{route('create.testimonial')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="name" >
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Testimonial </label>
                                        <textarea id="maxlength-textarea" class="form-control"  name="testimonial_text" rows="8" ></textarea>
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Stars</label>
										<input type="text" class="form-control" id="exampleInputText1" name="rate" >
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Image</label>
										<div class="col-sm-9 text-secondary">
                                            <input type="file" name="image" class="form-control"  id="image"   />
                                        </div>
									</div>
                                   
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Image" style="width:100px; height: 100px;"  >
                                        </div>
                                        <br>
                                    
                                  
								

									<button class="btn btn-primary" type="submit">Add Testimonial</button>
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
                        name: {
                            required : true,
                        }, 
                        testimonial_text: {
                            required : true,
                        },
                        image: {
                            required : true,
                        },
                    },
                    messages :{
                        name: {
                            required : 'Please Enter Name',
                        },
                        testimonial_text: {
                            required : 'Please Enter Testimonial Text',
                        },
                        image: {
                            required : 'Please Enter Testimonial Image',
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