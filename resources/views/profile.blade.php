<link rel="stylesheet" href="{{asset('css/app.css')}}">
@extends('layout.dashboard')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-4 col-sm-12 border-right text-center border-bottom">
                            @if (auth::user()->avatar!=null)
                            <img src="{{ asset('storage/images/'.Auth::user()->avatar)}}" id="imgProfile"
                                 class="rounded-circle btn" alt="profile" data-toggle="modal" data-target="#Modal"/>
                                <a href="#"  data-toggle="modal" data-target="#Modal"><h5> Choose Profile</h5></a>
                            @else
                            <img src="storage/images/default-avatar.png" class="img-circle2">
                            @endif
                        </div>
                        <div class="col-md-8 col-sm-12 pt-5">
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
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{url('/uploadmyprofile')}}" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="file" id="file" class="form-control-file" name="profile">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm bg-danger text-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm bg-primary text-white">Save</button>
                </div>
            </form>
              </div>
            </div>
          </div>
          <div class="col-2"></div>
    </div><!--/row-->
</div>
@endsection