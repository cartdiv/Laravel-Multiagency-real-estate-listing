@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Role</h6>
								<form method="post" action="{{route('update.role')}}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$edit_roles->id}}">
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Role Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="name" value="{{ $edit_roles->name}}" placeholder="Role Name">
									</div>

                                   
									<button class="btn btn-primary" type="submit">Update Roles</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection