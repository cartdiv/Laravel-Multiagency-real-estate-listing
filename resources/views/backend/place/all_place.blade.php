@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Places</a></li>
            <li class="breadcrumb-item active" aria-current="page">Places Table</li>
        </ol>

        <a href="{{route('add.place')}}" class="btn btn-primary mb-1 mb-md-0">Add Places</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Places Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Place name</th>
            <th>Place image</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($allplace as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->place_name }}</td>
            <td> <img src="{{ asset($item->place_image) }}" style="width: 70px; height:40px;" >  </td>
            <td>
              @if (Auth::user()->can('edit.slider'))
                <a href="{{ route('edit.place',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.slider'))
                <a href="{{ route('delete.place',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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