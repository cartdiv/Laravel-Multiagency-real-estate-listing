@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Agents</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agent Table</li>
        </ol>

        <a href="{{route('add.agent')}}" class="btn btn-primary mb-1 mb-md-0">Add Agent</a>

    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Agent Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>images Name</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($allagent as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td><img src="{{ (!empty($item->photo)) ? url('upload/admin_photo/'.$item->photo) : url('upload/no_image.jpg')}}" style="width: 40px; height: 40px;" alt="" srcset=""></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
               active
            </td>
            <td>
                <a href="{{ route('edit.agent',$item->id) }}" class="btn btn-primary mb-1 mb-md-0" title="Edit"> <i data-feather="edit"></i> </a>
                <a href="{{ route('delete.agent',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0" title="Delete"><i data-feather="trash-2"></i> </a>
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