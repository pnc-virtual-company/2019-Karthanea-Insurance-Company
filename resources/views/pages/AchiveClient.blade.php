<<<<<<< HEAD
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
=======
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7

@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1>Information Active Client</h1>
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Disable ID</th>
                            <th>Clients</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($client as $item)
                        <tr>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#editClient">
                                <i class="material-icons text-success">edit</i></a>
                                <input type="checkbox" name="disable" id="disable">
<<<<<<< HEAD
                                {{$item->id_client}}
=======
                                {{$item->id_client}} 
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7
                            </td>
                            <td>{{$item->firstname}} {{$item->lastname}}</td>
                            <td>{{$item->addresss}}</td>
                            <td>{{$item->phonenumber}}</td>
                            <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <button type="button" class="btn bg-primary" data-toggle="modal" data-target="#createClient"><i class="material-icons">control_point</i> Create Client</button>
                </div>
            </div>
        </div>
      </div>
          <!-- Modal add -->
          <div class="modal fade" id="createClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form id="form" action="{{action('clientAchiveController@store')}}" method="POST">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-10">
<<<<<<< HEAD
                                    <input type="text" name="addresss" id="addresss" class="form-control">
=======
                                    <input type="text" name="addresss" class="form-control">
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="col-10">
<<<<<<< HEAD
                                    <input type="number" name="phonenumber" id="phonenumber" class="form-control">
=======
                                    <input type="number" name="phonenumber" class="form-control">
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="email">E-Mail</label>
                                </div>
                                <div class="col-10">
                                    <input type="email" name="email"  class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
<<<<<<< HEAD
                    <button type="submit" class="btn bg-primary text-white">OK</button>
=======
                    <button type="submit" class="btn bg-primary text-white" >OK</button>
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
              </div>
            </div>
          </div>

          <!-- Modal Edit -->
          <div class="modal fade" id="editClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit New Client</h5>
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
<<<<<<< HEAD
                <form id="editform" method="POST" action="/achiveclient">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}
                <div class="modal-body">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
=======
                @foreach ($client as $item)
                <form id="editform" method="POST" action="">
                    @csrf
                    @method('PATCH')
                <div class="modal-body">
>>>>>>> 1e9c524696ecffb0ad69c2eb28759624bf0e0da7
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="firstname">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{$item->firstname}}" name="firstname" id="firstname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="lastname">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{$item->lastname}}" name="lastname" id="lastname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-10">
                                    <input type="text"value="{{$item->addresss}}" name="addresss" id="addresss" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="col-10">
                                    <input type="number"value="{{$item->phonenumber}}" name="phonenumber" id="phonenumber" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="email">E-Mail</label>
                                </div>
                                <div class="col-10">
                                    <input type="email" value="{{$item->email}}" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn bg-primary text-white edit">Edit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
                </form>
                @endforeach
              </div>
            </div>
          </div>
          <script>
    $(document).ready(function() {

  
})
          </script>
@endsection
