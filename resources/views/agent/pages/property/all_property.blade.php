@extends('agent.agent_master')
@section('agent_body')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Properties</a></li>
            <li class="breadcrumb-item active" aria-current="page">Properties Table</li>
        </ol>

        <a href="{{route('add.agency.property')}}" class="btn btn-primary mb-1 mb-md-0">Add Property</a>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Properties Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Property Name</th>
            <th>Property Address</th>
            <th>Property Image</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($properties as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->property_name }}</td>
            <td>{{ $item->property_address }}</td>
            <td> <img src="{{ asset($item->property_image) }}" style="width: 50px; height:50px;" >  </td>
            <td> 
                @if($item->status == 1)
                <span class="badge rounded-pill bg-success">Active</span>
                @else
                <span class="badge rounded-pill bg-danger">InActive</span>
                @endif
            </td>
            
            <td>
              
                <a href="{{ route('edit.agency.property',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">Edit</a>
                
               
                <a href="{{ route('delete.agency.property', $item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0">Delete</a>
               


            
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