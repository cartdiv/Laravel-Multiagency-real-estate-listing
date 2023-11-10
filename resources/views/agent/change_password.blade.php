@extends('agent.agent_master')
@section('agent_body')


<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Profile</h6>
								<form method="POST" action="{{route('update.agent.password')}}" >
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Old Password</label>
										<input type="password" class="form-control" id="exampleInputText1" name="oldpassword"  placeholder="Enter Password">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">New Password</label>
										<input type="password" class="form-control" id="exampleInputText1" name="newpassword"  placeholder="Enter Password">
									</div>


                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Confirm Password</label>
										<input type="password" class="form-control" id="exampleInputText1" name="confirm_password"  placeholder="Enter Password">
									</div>
									

                                    

									<button class="btn btn-primary" type="submit">Update Password</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>

@endsection