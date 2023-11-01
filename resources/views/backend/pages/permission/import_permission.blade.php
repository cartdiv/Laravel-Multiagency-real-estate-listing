@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <a href="{{route('export')}}" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="printer"></i>
        Download
      </a>
      <br><br>
    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Import Permission</h6>
								<form id="myForm" method="POST" action="{{route('import')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Excel File Import</label>
										<input type="file" class="form-control" name="import_file">
									</div>

                                    
									<button class="btn btn-primary" type="submit">
                                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                                        Upload File</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>

    

@endsection