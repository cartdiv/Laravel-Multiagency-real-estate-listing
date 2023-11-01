@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Add Property Type</h6>
								<form method="POST" action="{{route('create.property.type')}}">
                                    @csrf
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Property Type Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="type_name" placeholder="Property Type Name">
									</div>

                                    <div class="mb-3">
										<label for="exampleInputText1" class="form-label">Property Type Icon</label>
										<input type="text" class="form-control" id="exampleInputText1" name="type_icon" placeholder="Property Type Name">
									</div>

								

									<button class="btn btn-primary" type="submit">Add Property Type</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection