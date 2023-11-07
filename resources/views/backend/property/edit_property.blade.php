@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Product</h6>
								<form id="myForm" method="POST" action="{{route('update.property')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $editData->id }}">
                                    <input type="hidden" name="old_img" value="{{ $editData->property_image }}">

                                    
									<div class="row mb-3">

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Property Name</label>
                                            <input type="text" name="property_name" class="form-control" id="exampleInputText1" value="{{ $editData->property_name }}" >
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Property type</label>
                                            <select class="js-example-basic-single form-select" name="category_id" data-width="100%">

                                                @foreach ( $type as $item )
                                                    <option value="{{ $item->id }}" {{ $item->id == $editData->category_id ? 'selected' : '' }}>{{ $item->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

									</div>


                                    <div class="row mb-3">

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Property address</label>
                                            <input type="text" name="property_address" class="form-control" id="exampleInputText1" value="{{ $editData->property_address }}"  >
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Place</label>
                                            <select class="js-example-basic-single form-select" name="place_id" data-width="100%">
                                                @foreach ( $places as $item )
                                                    <option value="{{ $item->id }}" {{ $item->id == $editData->place_id ? 'selected' : '' }}>{{ $item->place_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>

									</div>



                                    <div class="row mb-3">

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="exampleInputText1" name="property_price" value="{{ $editData->property_price }}"  >
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Agency</label>
                                            
                                            <select class="js-example-basic-multiple form-select" name="agent_id" data-width="100%">
                                                @foreach ( $agencies as $item )
                                                    <option value="{{ $item->id }}" {{ $item->id == $editData->agent_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                @endforeach
                                                
                                               
                                            </select>
                                        </div>
                                        

									</div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Bathroom</label>
                                            <input type="text" class="form-control" id="exampleInputText1" name="property_bathroom" value="{{ $editData->property_bathroom }}" >
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Building Type</label>
                                            <select class="js-example-basic-multiple form-select" name="building_id" data-width="100%">
                                                @foreach ( $buildings as $item )
                                                    <option value="{{ $item->id }}" {{ $item->id == $editData->building_id ? 'selected' : '' }}>{{ $item->building_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
									</div>


                                    <div class="row mb-3">

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Property tags</label>
                                            <div>
                                                <input name="property_tags" id="tags" value="{{ $editData->property_tags }}"  />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label"> Amenity</label>
                                            <p>You can select multiple</p>
                                            <select class="js-example-basic-multiple form-select" name="amenity" multiple="multiple" data-width="100%">
                                                @foreach ( $amenity as $item )
                                                <option value="{{ $item->id }}" {{ $item->id == $editData->amenity ? 'selected' : '' }}>{{ $item->amenities_name }}</option>
                                            @endforeach
                                            </select>
                                        </div>

									</div>


                                    <div class="row mb-3">

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Bedrooms</label>
                                            <input type="text" class="form-control" name="property_bedroom" id="exampleInputText1" value="{{ $editData->property_bedroom }}" >
                                        </div>

                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Property size</label>
                                            <input type="text" class="form-control" name="property_size" id="exampleInputText1" value="{{ $editData->property_size }}" >
                                        </div>

									</div>


                                    


                                    <div class="row mb-3">

                                            <div class="col">
                                                <label for="exampleInputText1" class="form-label">Property Image</label>
                                                <div class="col-sm-12 text-secondary">
                                                    <input type="file" name="property_image" class="form-control"  id="image"   />
                                                </div>
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0"> </h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                     <img id="showImage" src="{{ asset($editData->property_image) }}" alt="Image" style="width:100px; height: 100px;"  >
                                                </div>
                                            </div>


                                        <div class="col">
                                            <label for="exampleInputText1" class="form-label">Garage</label>
                                            <input type="text" class="form-control" name="property_garage" id="exampleInputText1" value="{{ $editData->property_garage }}" >
                                        </div>

									</div>

                                   
                                   
                                       
                                    
                                    <div class="card-body">
                                        <h4 class="card-title">Property Description</h4>
                                        <textarea class="form-control" name="property_description" id="tinymceExample" rows="10">{{ $editData->property_description }}</textarea>
                                    </div>

                                    

								

									<button class="btn btn-primary" type="submit">Add Property</button>
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
                        property_name: {
                            required : true,
                        }, 
                        property_address: {
                            required : true,
                        },
                        property_bedroom: {
                            required : true,
                        },
                        property_bathroom: {
                            required : true,
                        },
                        property_descrition: {
                            required : true,
                        },
                    },
                    messages :{
                        property_name: {
                            required : 'Please Enter Property Name',
                        },
                        property_address: {
                            required : 'Please Enter Property Address',
                        },
                        property_bedroom: {
                            required : 'Please Enter Property Bedroom',
                        },
                        property_bathroom: {
                            required : 'Please Enter Property Bathroom',
                        },
                        property_descrition: {
                            required : 'Please Enter Property Descrition',
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