@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Permission</h6>
								<form id="myForm" method="POST" action="{{route('store.permission')}}">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Permission Name</label>
										<input type="text" class="form-control" name="name" placeholder="Permission Name">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Group Name</label>
										<select class="form-select" name="group_name" id="exampleFormControlSelect1">
											<option selected="" disabled="">Select Group</option>
											<option value="type">Property Type</option>
											<option value="amenities">Amenities</option>
										</select>
                                    </div>

                                    
									<button class="btn btn-primary" type="submit">Save Permission</button>
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

                        group_name: {
                            required : true,
                        }, 
                        
                    },
                    messages :{
                        name: {
                            required : 'Please Enter Permission Name',
                        }, 

                        group_name: {
                            required : 'Please Enter Permission Group',
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