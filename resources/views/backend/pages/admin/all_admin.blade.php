@extends('admin.admindashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admins</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin Table</li>
        </ol>

        <a href="{{route('add.admin')}}" class="btn btn-primary mb-1 mb-md-0">Add Admin</a>

    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Admin Table</h6>
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
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($alladmin as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td><img src="{{ (!empty($item->photo)) ? url('upload/admin_photo/'.$item->photo) : url('upload/no_image.jpg')}}" style="width: 40px; height: 40px;" alt="" srcset=""></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
                @foreach ( $item->roles as $role)
                    <span class="badge badge-pill bg-danger">{{ $role->name }}  </span>
                @endforeach
            </td>
            <td>
              @if (Auth::user()->can('edit.admin'))
                <a href="{{ route('edit.admin',$item->id) }}" class="btn btn-primary mb-1 mb-md-0" title="Edit"> <i data-feather="edit"></i> </a>
                @endif
                @if (Auth::user()->can('delete.admin'))
                <a href="{{ route('delete.admin',$item->id) }}" id="delete" class="btn btn-danger mb-1 mb-md-0" title="Delete"><i data-feather="trash-2"></i> </a>
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