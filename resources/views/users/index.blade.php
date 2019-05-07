<link rel="stylesheet" href="{{asset('css/app.css')}}">
@extends('layout.dashboard')
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
                    <div class="col-md-12">
                        
                        <div> <h1>@lang('Information of users')</h1></div>
                        @include('session-flash')
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn bg-primary text-white" href="{{url('users/create')}}">@lang('Add a new user')</a>
                                    </div>
                                </div>
                                
                                <div class="row"><div class="col-md-12">&nbsp;</div></div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="myTable" class="table table-striped table-bordered table-hover ">
                                            <thead class="bg-dark text-white">
                                                <tr>
                                                    <th>@lang('ID')</th>
                                                    <th>@lang('Name')</th>
                                                    <th>@lang('Email')</th>
                                                    <th>@lang('Roles')</th>
                                                    <th>@lang('Action')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr data-id="{{ $user->id }}">
                                                        <td>      
                                                            <span>{{ $user->id }}</span>
                                                            
                                                        </td>
                                                    <td>
                                                        <span>{!! $user->name !!}</span>
                                                    </td>
                                                    <td>
                                                        <span>{!! $user->email !!}</span>
                                                    </td>
                                                    <td>
                                                        <span>{{ $user->roles->pluck('name')->implode(', ') }}</span>
                                                    </td>
                                                    <td>   
                                                        
                                                        <a href="{{url('users')}}/{{ $user->id }}/edit" title="@lang('edit')"><i class="material-icons">edit</i></a>
                                                        <a href="{{url('users')}}/{{ $user->id }}" title="@lang('view')"><i class="material-icons text-success">visibility</i></a>
                                                        <a href="" aria-hidden="true" data-toggle="modal" title="@lang('delete')" data-target="#deleteModal" data-id="{{$user->id}}" data-title="{{$user->name}}"><i class="material-icons text-danger">delete</i></a>
                                                    
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
            </div>
              <!-- Delete Modal -->
              <div  class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Delete User</h5>
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true" data-dismiss="modal">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Are you sure to delete this user!!!</p>
                        <small id="title"></small>
                        </div>
                    <form  id="fDelete" action="" method="POST">
                        @csrf
                        @method('DELETE')
                            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary">OK</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
    <script src="{{asset('js/app.js')}}"></script>
          
          <script type="text/javascript">
                          $('#deleteModal').on('show.bs.modal',function(event){
                              var button=$(event.relatedTarget)
                              var id =button.data('id')
                              console.log(id);
                              var title =button.data('title')
                              var modal=$(this)
                              modal.find('#title').text(title)
                              var url = "{{url('users/')}}/"+id;
                              $("#fDelete").attr('action',url);
                              });
                      </script>   
          @endsection
                      
      
       
            
</body>