@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Amenitie</a></li>
            <li class="breadcrumb-item active" aria-current="page">Amenitie Table</li>
        </ol>

        <a href="{{route('add.amenities')}}" class="btn btn-primary mb-1 mb-md-0">Add Amenitie</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Amenitie Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Amenitie Name</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($amenitie as $key => $amenities)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $amenities->amenities_name }}</td>
            <td>
              @if (Auth::user()->can('edit.amenities'))
                <a href="{{ route('edit.amenities',$amenities->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.amenities'))
                <a href="{{ route('delete.amenities',$amenities->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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