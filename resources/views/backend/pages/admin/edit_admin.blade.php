@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Admin</h6>
								<form id="myForm" method="POST" action="{{route('update.admin', $user->id)}}">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Admin Name</label>
										<input type="text" class="form-control" name="name" value="{{$user->name}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Admin Username</label>
										<input type="text" class="form-control" name="username" value="{{$user->username}}e">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Admin Email</label>
										<input type="text" class="form-control" name="email" value="{{$user->email}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Admin phone</label>
										<input type="text" class="form-control" name="phone" value="{{$user->phone}}">
									</div>


                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Admin Address</label>
										<input type="text" class="form-control" name="address" value="{{$user->address}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Role Names</label>
										<select class="form-select" name="roles" id="exampleFormControlSelect1">
											<option selected="" disabled="">Select role</option>
                                            @foreach ( $roles as $role)
											<option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                                
                                            @endforeach
										</select>
                                    </div>
        
									<button class="btn btn-primary" type="submit">Save Changes</button>
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

                        username: {
                            required : true,
                        },

                        email: {
                            required : true,
                        },

                        roles: {
                            required : true,
                        }, 
                        
                    },
                    messages :{
                        name: {
                            required : 'Please Enter Admin Name',
                        }, 

                        username: {
                            required : 'Please Enter Admin UserName',
                        }, 
                        
                        email: {
                            required : 'Please Enter Admin Email',
                        },

                        roles: {
                            required : 'Please select Admin Role',
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