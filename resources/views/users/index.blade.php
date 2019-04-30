@extends('layout.dashboard')
@section('content')
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
                            <a class="btn bg-primary  text-white" href="{{url('users/export')}}" download>@lang('Export to Excel')</a>
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
                                                <form action="{{route('users.destroy',$user->id)}}" method="POST" class="text-center">
                                                 @csrf
                                                 @method("delete")    
                                                
                                                 <a href="{{url('users')}}/{{ $user->id }}/edit" title="@lang('edit')"><i class="material-icons">edit</i></a>
                                                <a href="{{url('users')}}/{{ $user->id }}" title="@lang('view')"><i class="material-icons text-success">visibility</i></a>
                                                <button type="submit" data-toggle="modal" data-target="#frmModalDeleteConfirmation"  class="btn-danger">delete</button>      
                                             </form>
                                                 
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

<!-- Include the modal //-->
@include('modal-confirm-delete')

@endsection
