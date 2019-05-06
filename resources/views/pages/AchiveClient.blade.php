
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

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
                            <a href="#" data-toggle="modal" data-target="#editClient" data-id="{{$item->id_client}}"
                                data-firstname="{{$item->firstname}}" data-lastname="{{$item->lastname}}"
                                data-addresss="{{$item->address}}" data-phonenumber="{{$item->phonenumber}}"
                                data-email="{{$item->email}}"> <i class="material-icons text-success">edit</i></a>
                                <input type="checkbox" name="disable" id="disable">

                                {{$item->id}}

                            </td>
                            <td>{{$item->firstname}} {{$item->lastname}}</td>
                            <td>{{$item->address}}</td>
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

                                    <input type="text" name="address" id="address" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="col-10">
                                    <input type="number" name="phonenumber" id="phonenumber" class="form-control">

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
                    <button type="submit" class="btn bg-primary text-white">OK</button>

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
                <div class="modal-body"
                <form id="editform" method="POST" action="">
                    @csrf
                    @method('PATCH')
                <div class="modal-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="firstname">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="" name="firstname" id="firstname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="lastname">Lastname</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" value="" name="lastname" id="lastname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="address">Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" value="" name="address" id="address" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="number"value="" name="phonenumber" id="phonenumber" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-2">
                                            <label for="email">E-Mail</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" value="" name="email" id="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn bg-primary text-white edit">Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                </form>
              </div>
            </div>
          </div>
         
              
          @endsection
<script>
        $('#editClient').on('show.bs.modal',function (event){
                var button = $(event.relatedTarget)
                var firstname = button.data('firstname')
                var lastname = button.data('lastname')    
                var address = button.data('address')
                var phonenumber = button.data('phonenumber')
                var email = button.data('email')
               
                var modal = $(this)
    
                modal.find('#firstname').attr('value',firstname)
                modal.find('#lastname').attr('value',lastname)
                modal.find('#address').attr('value',address)
                modal.find('#phonenumber').attr('value',phonenumber)
                modal.find('#email').attr('value',email)
    
                var url ="{{url('/achiveclient')}}/"+ id;
                $('#editform').attr('action',url);   
                });
            });
    
    </script>