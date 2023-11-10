@extends('agent.agent_master')
@section('agent_body')


<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">User messages</a></li>
            <li class="breadcrumb-item active" aria-current="page">User message Table</li>
        </ol>

       
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">User message Table</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($messages as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>
              {{-- 
                <a href="{{ route('edit.building',$item->id) }}" class="btn btn-primary mb-1 mb-md-0">view message</a>
                
                 --}}
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