@extends('admin.admindashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .form-check-label{
        text-transform: capitalize;
    }
</style>
<div class="page-content">

    <div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Edit Roles in Permission</h6>
								<form id="myForm" method="POST" action="{{route('admin.roles.update', $role->id)}}">
                                    @csrf
									<div class="form-group mb-3">
										<label for="exampleInputText1" class="form-label">Permission Name</label>
                                        <h3>{{ $role->name }}</h3>
									</div>

                                  

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                                                              <label class="form-check-label" for="checkDefaultmain">
                                                                  All Permission
                                                              </label>
                                                          </div>

                                                          <hr>
                                   
                                                          @foreach ( $permission_groups as $group )
                                                              
                                                        
                                   <div class='row'>
                                        <div class="col-3">
                                            @php
                                                $permissions = App\Models\USer::getpermissionByGroupName($group->group_name);
                                            @endphp
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" id="checkDefault" {{ App\Models\user::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="checkDefault">
                                                        {{$group->group_name}}
                                                    </label>
                                                </div>
                                        </div>
                                        <div class="col-9">
                                            
                                            @foreach ( $permissions as $permission)
                                                
                                            
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" name="permission[]" id="checkDefault {{$permission->id}}" value=" {{$permission->id}}" 
                                                {{$role->hasPermissionTo($permission->name) ? 'checked' : ''}}>
                                                    <label class="form-check-label" for="checkDefault {{$permission->id}}">
                                                        {{$permission->name}}
                                                    </label>
                                                </div>
                                                @endforeach
                                                <br>
                                        </div>
                                    </div>

                                    @endforeach
									<button class="btn btn-primary" type="submit">Save Changes</button>
								</form>
							</div>
						</div>
					</div>
				</div>

        </div>

        <script type="text/javascript">
            $('#checkDefaultmain').click(function(){
                if ($(this).is(':checked')){
                    $('input[type=checkbox]').prop('checked', true);
                }else{
                    $('input[type=checkbox]').prop('checked', false);
                }
            });
            
        </script>

@endsection