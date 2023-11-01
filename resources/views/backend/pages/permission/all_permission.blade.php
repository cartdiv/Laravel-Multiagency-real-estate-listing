@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Permission</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permission Table</li>
        </ol>

        <a href="{{route('add.permission')}}" class="btn btn-primary mb-1 mb-md-0">Add Permission</a>
        &nbsp;  &nbsp; 
          <a href="{{route('import.permission')}}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
            import
          </a>
          &nbsp; &nbsp; 
          <a href="{{route('export')}}" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
            <i class="btn-icon-prepend" data-feather="printer"></i>
            Export
          </a>

    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">permission Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Permission Name</th>
            <th>Group Name</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($permission as $key => $permissions)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $permissions->name }}</td>
            <td>{{ $permissions->group_name }}</td>
            <td>
                <a href="{{ route('edit.permission',$permissions->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                <a href="{{ route('delete.permission',$permissions->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
            </td>
          </tr>
         
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

@endsection