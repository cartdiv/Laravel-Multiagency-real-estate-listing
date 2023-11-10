@extends('agent.agent_master')
@section('agent_body')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    
    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Agent</h6>
								<form id="myForm" method="POST" action="{{route('store.agency.agent')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Name</label>
										<input type="text" class="form-control" name="agent_name" >
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Title</label>
										<input type="text" class="form-control" name="agent_title" >
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Email</label>
										<input type="text" class="form-control" name="agent_email">
									</div>
                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Agent Image</label>
										<div class="col-sm-9 text-secondary">
                                            <input type="file" name="agent_image" class="form-control"  id="image"   />
                                        </div>
									</div>
                                   
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Image" style="width:100px; height: 100px;"  >
                                        </div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent phone</label>
										<input type="text" class="form-control" name="agent_number" >
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Agent Description</label>
										<textarea id="maxlength-textarea" class="form-control" name="agent_description" rows="8" placeholder="This textarea has a limit of 100 chars."></textarea>
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label"> Skype (optional)</label>
										<input type="text" class="form-control" name="agent_skype" placeholder="Agent phone">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Facebook (optional)</label>
										<input type="text" class="form-control" name="facebook" placeholder="Agent phone">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Instagram (optional)</label>
										<input type="text" class="form-control" name="instagram" placeholder="Agent phone">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Twitter (optional)</label>
										<input type="text" class="form-control" name="twitter" placeholder="Agent phone">
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
                        agent_name: {
                            required : true,
                        }, 

                        agent_number: {
                            required : true,
                        },

                        agent_email: {
                            required : true,
                        },

                        agent_title: {
                            required : true,
                        }, 
                        agent_description: {
                            required : true,
                        }, 
                        
                    },
                    messages :{
                        agent_name: {
                            required : 'Please Enter Admin Name',
                        }, 

                        agent_number: {
                            required : 'Please Enter Admin UserName',
                        }, 
                        
                        agent_email: {
                            required : 'Please Enter Admin Email',
                        },

                        agent_title: {
                            required : 'Please select Admin Role',
                        }, 

                        agent_description: {
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