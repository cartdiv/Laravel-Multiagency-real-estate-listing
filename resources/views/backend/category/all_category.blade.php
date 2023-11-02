@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category Table</li>
        </ol>

        <a href="{{route('add.category')}}" class="btn btn-primary mb-1 mb-md-0">Add Category</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Category Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($categorie as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->category_name }}</td>
            <td>
              @if (Auth::user()->can('edit.amenities'))
                <a href="{{ route('edit.category',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.amenities'))
                <a href="{{ route('delete.category',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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