@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Amenitie</h6>
								<form method="post" action="{{route('update.amenities')}}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$amenities->id}}">
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Amenitie Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="amenities_name" value="{{ $amenities->amenities_name}}" placeholder="Amenitie Name">
									</div>

                                  
									<button class="btn btn-primary" type="submit">Update Amenitie</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection