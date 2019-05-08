<link rel="stylesheet" href="{{asset('css/app.css')}}">
@extends('layout.dashboard')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white"><h4> View User Profile</h4></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 border-right text-center border-bottom">
                            @if (auth::user()->avatar!= null)
                                <img src="{{ asset('storage/images/'.Auth::user()->avatar)}}"
                                 class="rounded-circle btn" id="image" alt="profile" 
                                data-toggle="modal" data-target="#upload"/>
                            @else
                                <img src="storage/images/default-avatar.png" class="img-circle2">
                            @endif
                            <a href="#"  data-toggle="modal" data-target="#upload"><h5>Choose profile</h5>  </a>   
                        </div>
                        <div class="col-md-8 col-sm-12 pt-4">
                            <div class="row">
                                <div class="col-3">
                                    <p><strong>Id:</strong> </p>
                                </div>
                                <div class="col-9">PNC_00{{$user->id}}</div>

                                <div class="col-3">
                                    <p><strong>Name:</strong> </p>
                                </div>
                                <div class="col-9">{{$user['name']}}</div>

                                <div class="col-3">
                                    <p><strong>Email:</strong> </p>
                                </div>
                                <div class="col-9">{{$user['email']}}</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

        </div>
        <div class="col-2"></div> 

        <div class="modal fade" id="upload">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Your Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('/uploadprofile')}}" enctype="multipart/form-data" method="POST">
                    <div class="modal-body">
                            @csrf
                                <input type="file" name="profile" class="form-control" >
                    </div>
                    <div class="modal-footer">
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm bg-primary text-white">Save</button>
                        </div>
                    </div>
            </form>
                </div>
            </div>
        </div>

    </div><!--/row-->
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection