@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Permission</h6>
								<form method="post" action="{{route('update.permission')}}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$editpermission->id}}">
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Permission Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="name" value="{{ $editpermission->name}}" placeholder="Permission Name">
									</div>

                                    <div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Group Name</label>
										<select class="form-select" name="group_name" id="exampleFormControlSelect1">
											<option selected="" disabled="">Select Group</option>
                                            <option value="type" {{ $editpermission->group_name == 'type' ? 'selected' : '' }}>Property Type</option>
                                            <option value="amenities" {{ $editpermission->group_name == 'amenities' ? 'selected' : '' }}>Amenities</option>
										</select>
                                    </div>
									<button class="btn btn-primary" type="submit">Update Permission</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection