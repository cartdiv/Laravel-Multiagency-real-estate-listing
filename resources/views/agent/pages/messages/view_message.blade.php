@extends('agent.agent_master')
@section('agent_body')
<div class="page-content">
        
    <div class="row inbox-wrapper">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
             
              <div class="col-lg-9">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
                  <div class="d-flex align-items-center">
                    <i data-feather="star" class="text-primary icon-lg me-2"></i>
                    <span><a href="mailto:{{ $messages->email }}">{{ $messages->email }}</a></span>
                  </div>
                  <div>
                    <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Forward"><i data-feather="share" class="text-muted icon-lg"></i></a>
                    <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Print"><i data-feather="printer" class="text-muted icon-lg"></i></a>
                    <a type="button" data-bs-toggle="tooltip" data-bs-title="Delete"><i data-feather="trash" class="text-muted icon-lg"></i></a>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                  <div class="d-flex align-items-center">
                    <div class="me-2">
                      <img src="{{asset('frontend/assets/images/user/avater.png')}}" alt="Avatar" class="rounded-circle img-xs">
                    </div>
                    <div class="d-flex align-items-center">
                      <a href="#" class="text-body">{{$messages->frist_name}} {{$messages->last_name}}</a> 
                      <span class="mx-2 text-muted">to</span>
                      <a href="#" class="text-body me-2">me</a>
                      
                    </div>
                  </div>
                  <div class="tx-13 text-muted mt-2 mt-sm-0">{{date("F j, g:i a", strtotime($messages->created_at))}}</div>
                </div>
                <div class="p-4 border-bottom">
                  <p>{{$messages->messsage}}</p>
                 <br>
                  <p><strong><a href="tel:{{ $messages->phone }}">{{ $messages->phone }}</a></strong></p>
                </div>
               
              </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>

        </div>


@endsection