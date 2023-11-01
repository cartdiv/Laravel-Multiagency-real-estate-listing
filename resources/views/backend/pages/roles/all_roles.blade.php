@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Roles Table</li>
        </ol>

        <a href="{{route('add.roles')}}" class="btn btn-primary mb-1 mb-md-0">Add Roles</a>

    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Roles Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Role Name</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($roles as $key => $role)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a href="{{ route('edit.roles',$role->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                <a href="{{ route('delete.roles',$role->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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