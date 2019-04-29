@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>My Profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mt-5">
                                <h5>{!! $user->name !!}</h5>
                                <h5>{!! $user->email !!}</h5>
                            </div>
                            <div class="col-6">
                                @if (auth::user()->avatar!= null)
                                    <img id="imgProfilePic" src="{{asset('images/'.Auth::user()->avatar)}}" class="img-fluid rounded mx-auto d-block clickable"/>
                                @else
                                    <img src="stronge/images/default-avatar.png" class="img-circle2">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form class="md-form" action="{{url('/userProfile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="file-field">
                              <div class="d-flex justify-content-center">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                  <span>Choose file</span>
                                  <input type="file" name="fileUpload" required>
                                  <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
        </div>
    </div>
@endsection