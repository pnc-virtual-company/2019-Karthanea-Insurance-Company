@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    
                    <div class="row">

                        <div class="col-md-4 col-sm-12 border-right text-center border-bottom">
                            <img src="{{ asset('storage/images/'.Auth::user()->avatar)}}"
                                style="width: 150px; height: 140px;" class="rounded-circle btn" alt="profile" 
                                data-toggle="modal" data-target="#upload"/>
                            <h5>Choose profile</h5>     

                        <div class="col-md-12">
                            <img id="imgProfilePic" src="{{url('images/examples/faces/m34.jpg')}}" class="img-fluid rounded mx-auto d-block clickable"/>
                            {!! $user->name !!}<br />
                            {!! $user->email !!}<br />

                        </div>
                        <div class="col-md-8 col-sm-12 pt-4">
                            <div class="row">
                                <div class="col-3">
                                    <p><strong>Id:</strong> </p>
                                </div>
                                <div class="col-9">PNC_00{{$user['id']}}</div>

                                <div class="col-3">
                                    <p><strong>Name:</strong> </p>
                                </div>
                                <div class="col-9">{{$user['name']}}</div>

                                <div class="col-3">
                                    <p><strong>Email:</strong> </p>
                                </div>
                                <div class="col-9">{{$user['email']}}</div>

                                <div class="col-3">
                                    <p><strong>Created:</strong> </p>
                                </div>
                                <div class="col-9">{{$user['created_at']->format('d M Y - H:i:s')}}</div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
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
                <div class="modal-body">
                    <form action="{{url('/upload')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group text-center">
                            <input type="file" id="file" class="form-control-file" name="profile">
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </div><!--/row-->
</div>
@endsection
