@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Agent</h6>
								<form id="myForm" method="POST" action="{{route('store.agent')}}">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Name</label>
										<input type="text" class="form-control" name="name" placeholder="Agent Name">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Username</label>
										<input type="text" class="form-control" name="username" placeholder="Agent Username">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Email</label>
										<input type="text" class="form-control" name="email" placeholder="Agent Name">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent phone</label>
										<input type="text" class="form-control" name="phone" placeholder="Agent phone">
									</div>


                                   
                                   
                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Password</label>
										<input type="password" class="form-control" name="password" placeholder="Agent Password">
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
                        password: {
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