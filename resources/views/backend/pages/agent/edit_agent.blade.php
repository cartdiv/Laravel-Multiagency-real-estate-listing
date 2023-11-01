@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Admin</h6>
								<form id="myForm" method="POST" action="{{route('update.agent')}}">
                                    @csrf
                                    <input type="hidden"  name="id" value="{{$editagent->id}}">
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Name</label>
										<input type="text" class="form-control" name="name" value="{{$editagent->name}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Username</label>
										<input type="text" class="form-control" name="username" value="{{$editagent->username}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Email</label>
										<input type="text" class="form-control" name="email" value="{{$editagent->email}}">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent phone</label>
										<input type="text" class="form-control" name="phone" value="{{$editagent->phone}}">
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