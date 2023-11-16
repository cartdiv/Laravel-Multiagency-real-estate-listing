@extends('agent.agent_master');
@section('agent_body')

@php
    $id = Auth::user()->id;
	$agencyId = App\Models\User::find($id);
	$status = $agencyId->status;
@endphp
<div class="page-content">

    @if ( $status == 'inactive')


        <h2>Your Accout is still <span class="text-success">INACTIVE</span></h2>

    @else
        
   

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
      </div>
      {{-- <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="printer"></i>
          Print
        </button>
        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="download-cloud"></i>
          Download Report
        </button>
      </div> --}}
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow-1">
          <div class="col-md-6 grid-margin stretch-card">

            @php
              $agency_id = Auth::user()->id;
              $properties = App\Models\Property::where('agent_id', $agency_id)->latest()->get();
        $messages = App\Models\AgentMessages::where('agency_id', $agency_id)->orderBy('id', 'DESC')->get();
            @endphp
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Properties uploaded</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="{{route('all.agency.property')}}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{count($properties)}}</h3>
                    
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Messages</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item d-flex align-items-center" href="{{ route('all.agency.message') }}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{count($messages)}}</h3>
                   
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
    </div> <!-- row -->

    
    @php
    $agency_id = Auth::user()->id;
    $propertiestab = App\Models\Property::where('agent_id', $agency_id)->orderBy('popularity', 'desc')->limit(6)->get();
$messageslist = App\Models\AgentMessages::where('agency_id', $agency_id)->orderBy('id', 'DESC')->limit(5)->get();
  @endphp
    <div class="row">
      <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">Messages</h6>
              <div class="dropdown mb-2">
                <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('all.agency.message') }}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">

              @foreach ( $messageslist as $item )
                
              
              <a href="{{ route('view.message',$item->id) }}" class="d-flex align-items-center border-bottom py-3">
                <div class="me-3">
                  <img src="{{asset('frontend/assets/images/user/avater.png')}}" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2">{{$item->frist_name}} {{$item->last_name}}</h6>
                    <p class="text-muted tx-12">{{date("g:i a", strtotime($item->created_at))}}</p>
                  </div>
                  <p class="text-muted tx-13">Hey! there I'm available...</p>
                </div>
              </a>
             @endforeach
              

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">Properties (Ordered By Most viewed)</h6>
              <div class="dropdown mb-2">
                <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="{{route('all.agency.property')}}"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th class="pt-0">#</th>
                    <th class="pt-0">Property Name</th>
                    <th class="pt-0">Property Address</th>
                    <th class="pt-0">Status</th>
                    <th class="pt-0">No Views</th>
                  </tr>
                </thead>
                @foreach ( $propertiestab as $key=>$item )
                  
                
                <tbody>
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->property_name}}</td>
                    <td>{{ Str::limit($item->property_address, 20, '...') }}</td>
                    <td>
                      @if ($item->staus == '0')
                        <span class="badge bg-danger">Inactive</span>
                        @else
                        <span class="badge bg-success">Active</span>
                      @endif
                    </td>
                    <td>{{$item->popularity}}</td>
                  </tr>
                  
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div> 
        </div>
      </div>
    </div> <!-- row -->

    @endif
        </div>
@endsection