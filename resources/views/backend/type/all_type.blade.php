@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property Type</a></li>
            <li class="breadcrumb-item active" aria-current="page">Property Type Table</li>
        </ol>

        <a href="{{route('add.type')}}" class="btn btn-primary mb-1 mb-md-0">Add Property Type</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Property Type Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Type Name</th>
            <th>Type Icon</th>
            <th>Action</th>
          </tr>
        </thead>
        
         
                
          
      
        <tbody>
            @foreach ($type as $key => $types)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $types->type_name }}</td>
            <td>{{ $types->type_icon }}</td>
            <td>
              @if (Auth::user()->can('edit.type'))
                <a href="{{ route('edit.type', $types->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.type'))
                <a href="{{ route('delete.type', $types->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
                @endif
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