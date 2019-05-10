@extends('layout.dashboard')
@section('content')

@include('validation-errors')

<div class="container">
    <div class="row">
            <div><h1>@lang('User details')</h1></div>
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">

                    <div class="row">
                            <div class="col-md-12">
                                <a class="btn bg-primary text-white" href="{{url('users')}}">@lang('Back to list')</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">@lang('Name')</label>
                            <input type="text" class="form-control" name="name" readonly value="{!! $user->name !!}">
                        </div>

                        <div class="form-group">
                            <label for="email">@lang('Email')</label>
                            <input type="email" class="form-control" name="email" readonly value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="roles[]">Roles</label>
                            <select class="form-control" readonly multiple size="5">
                            @foreach ($roles as $role)
                                <option @if(in_array($role->id, $user->roleIds)) selected @endif>{!! $role->name !!}</option>
                            @endforeach
                            </select>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection

