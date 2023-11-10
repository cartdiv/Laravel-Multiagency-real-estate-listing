@php
$id = Auth::user()->id;
$agencyId = App\Models\User::find($id);
$status = $agencyId->status;
@endphp

@if ( $status == 'inactive' )
    <!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
        
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

        </nav>
    @else
		<nav class="sidebar">
        
            <div class="sidebar-header">
              <a href="#" class="sidebar-brand">
                Noble<span>UI</span>
              </a>
              <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="sidebar-body">
              <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                  <a href="{{route('agent.dashboard')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item nav-category">Agents</li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#agentagent" role="button" aria-expanded="false" aria-controls="agentagent">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Agents</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="agentagent">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('all.agency.agent')}}" class="nav-link">All Agents</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('add.agency.agent')}}" class="nav-link">Add Agents</a>
                      </li>
                     
                    </ul>
                  </div>
                </li>


                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#agentproperty" role="button" aria-expanded="false" aria-controls="agentproperty">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Propery</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="agentproperty">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('all.agency.property')}}" class="nav-link">All Propery</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('add.agency.property')}}" class="nav-link">Add Propery</a>
                      </li>
                     
                    </ul>
                  </div>
                </li>

                <li class="nav-item nav-category">User Messages and Enquiry</li>
                <li class="nav-item">
                  <a href="{{ route('all.agency.message') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Messages</span>
                  </a>
                </li>

               
              </ul>
            </div>

      @endif
          </nav>