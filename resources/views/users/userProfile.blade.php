<style>
.btn:not(:disabled):not(.disabled) {
    width: 113px;
}
</style>
@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
            <div class="col-6 col-md-6 col-sm-6 col-lg-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h2>My Profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 data">
                                <p>{!! $user->name !!}</p>
                                <p>{!! $user->email !!}</p>
                            </div>
                            <div class="col-6">
                                    <img id="imgProfilePic" src="{{url('images/examples/faces/m34.jpg')}}" 
                                class="img-fluid rounded mx-auto d-block clickable"/>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                                <input type="file" class="btn btn-sm btn-success ">
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-3 col-lg-3"></div>
        </div>
</div>
@endsection