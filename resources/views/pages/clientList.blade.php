@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">

        <h1>Information All The Clients </h1>

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
                                <a href="{{route('client.update',$item->id)}}" data-toggle="modal" data-target="#editClient" data-id="{{$item->id}}"
                                    data-firstname="{{$item->firstname}}" data-lastname="{{$item->lastname}}"
                                    data-address="{{$item->address}}" data-phonenumber="{{$item->phonenumber}}"
                                    data-email="{{$item->email}}"><i class="material-icons text-success">edit</i></a>
                                <input type="checkbox" name="disable" id="disable">
                                {{$item->id}}
                            </td>
                            <td>{{$item->firstname}} {{$item->lastname}} </td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phonenumber}}</td>
                            <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <button type="button" class="btn text-white bg-primary" data-toggle="modal" data-target="#createClient"><i class="material-icons">control_point</i> Create Client</button>
                </div>
            </div>
        </div>
    </div>
          <!-- Modal -->
          <div class="modal fade" id="createClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="POST" action="{{action('ClientController@store')}}">
                @csrf
                <div class="modal-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="firstname" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="lastname" id="name" class="form-control">
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
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
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
                <div class="modal-body">
                    <form action="" method="POST" id="editform">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="firstname">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="lastname">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="lastname" id="lastname" class="form-control">
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
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">OK</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
              </div>
            </div>
          </div>
@endsection
<script src="{{asset('js/app.js')}}"></script>
<script>
          
        $('#editClient').on('show.bs.modal',function (event){
              var button = $(event.relatedTarget)
              var firstname = button.data('firstname')
              var lastname = button.data('lastname')    
              var address = button.data('address')
              var phonenumber = button.data('phonenumber')
              var email = button.data('email')
              var id = button.data('id')
             
              var modal = $(this)
  
              modal.find('#firstname').attr('value',firstname)
              modal.find('#lastname').attr('value',lastname)
              modal.find('#address').attr('value',address)
              modal.find('#phonenumber').attr('value',phonenumber)
              modal.find('#email').attr('value',email)
  
              var url ="{{url('/client')}}/"+ id;
              $('#editform').attr('action',url);   
              });
          });
        </script>