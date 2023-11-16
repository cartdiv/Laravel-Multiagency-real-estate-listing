@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
            <li class="breadcrumb-item active" aria-current="page">Testimonial Table</li>
        </ol>

        <a href="{{route('add.testimonial')}}" class="btn btn-primary mb-1 mb-md-0">Add Testimonial</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Slider Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Testimonial name</th>
            <th>Stars</th>
            <th>Testimonial image</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($testimonial as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->rate }}</td>
            <td> <img src="{{ asset($item->image) }}" style="width: 70px; height:40px;" >  </td>
            <td>
              @if (Auth::user()->can('edit.testimonial'))
                <a href="{{ route('edit.testimonial',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.testimonial'))
                <a href="{{ route('delete.testimonial',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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