@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Slider</h6>
								<form id="myForm" method="POST" action="{{route('update.testimonial')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $editData->id }}">
                                    <input type="hidden" name="old_img" value="{{ $editData->image }}">

								

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="name" value="{{ $editData->name }}" >
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Testimonial</label>
                                        <textarea id="maxlength-textarea" class="form-control"  name="testimonial_text" rows="8" >{{ $editData->testimonial_text }}</textarea>
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Stars</label>
										<input type="text" class="form-control" id="exampleInputText1" name="rate" value="{{ $editData->rate }}" >
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Image</label>
										<div class="col-sm-9 text-secondary">
                                            <input type="file" name="image" class="form-control"  id="image" />
                                        </div>
									</div>
                                   
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ asset($editData->image) }}" alt="Image" style="width:100px; height: 100px;"  >
                                        </div>
                                        <br>
                                    


								

									<button class="btn btn-primary" type="submit">Edit Testimonial</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>


       
        
        
        
        
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