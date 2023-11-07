@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Building</h6>
								<form method="post" action="{{route('update.bulding')}}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$building->id}}">
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Building Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="building_name" value="{{ $building->building_name}}" placeholder="Amenitie Name">
									</div>

                                  
									<button class="btn btn-primary" type="submit">Update Building</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection