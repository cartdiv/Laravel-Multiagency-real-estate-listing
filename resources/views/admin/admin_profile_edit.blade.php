@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Profile</h6>
								<form method="POST" action="{{route('update.admin.profile')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="name" value="{{$edit_data->name}}" placeholder="Enter Name">
									</div>

									<div class="mb-3">
										<label for="exampleInputEmail3" class="form-label">Email</label>
										<input type="email" class="form-control" id="exampleInputEmail3" name="email" value="{{$edit_data->email}}" placeholder="Enter Email">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Username</label>
										<input type="text" class="form-control" id="exampleInputText1" name="username" value="{{$edit_data->username}}" placeholder="Enter Username">
									</div>

									<div class="mb-3">
										<label for="exampleInputNumber1" class="form-label">Phone Number</label>
										<input type="number" class="form-control" id="exampleInputNumber1" name="phone" value="{{$edit_data->phone}}">
									</div>



                                  <div class="mb-3">
                                        <label for="exampleInputNumber1" class="form-label">Address</label>
										<textarea id="maxlength-textarea" name="address" class="form-control" maxlength="100" rows="8">{{$edit_data->address}}</textarea>
									</div>

                  


									<div class="mb-3">
										<label class="form-label" for="formFile">Profile image</label>
										<input class="form-control" name="photo" type="file" id="formFile">
									</div>

									<button class="btn btn-primary" type="submit">Edit Profile</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>

@endsection