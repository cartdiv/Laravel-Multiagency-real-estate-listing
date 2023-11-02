@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider Table</li>
        </ol>

        <a href="{{route('add.slider')}}" class="btn btn-primary mb-1 mb-md-0">Add Slider</a>
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
            <th>Slider header</th>
            <th>Slider title</th>
            <th>Slider image</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($sliders as $key => $slider)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $slider->slider_header }}</td>
            <td>{{ $slider->slider_title }}</td>
            <td> <img src="{{ asset($slider->slider_image) }}" style="width: 70px; height:40px;" >  </td>
            <td>
              @if (Auth::user()->can('edit.slider'))
                <a href="{{ route('edit.slider',$slider->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                @endif
                @if (Auth::user()->can('delete.slider'))
                <a href="{{ route('delete.slider',$slider->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
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