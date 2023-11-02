@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Category</h6>
								<form method="post" action="{{route('update.category')}}" >
                                    @csrf
                                    <input type="hidden" name="id" value="{{$editData->id}}">
									<div class="mb-3">
										<label for="exampleInputText1" class="form-label">Category Name</label>
										<input type="text" class="form-control" id="exampleInputText1" name="category_name" value="{{ $editData->category_name}}">
									</div>

                                  
									<button class="btn btn-primary" type="submit">Update Category</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>



@endsection