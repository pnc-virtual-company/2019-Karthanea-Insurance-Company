@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1> Active Clients  </h1>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
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
                        @foreach ($client as $value=>$item)
                            @if ($item->status=='1')
                                <tr>
                                    <td>
                                        <a href="{{route('client.update',$item->id)}}" data-toggle="modal"  data-target="#editClientActive" data-id="{{$item->id}}" data-firstname="{{$item->firstname}}" data-lastname="{{$item->lastname}}" data-address="{{$item->address}}" data-phonenumber="{{$item->phonenumber}}" data-email="{{$item->email}}"><i class="material-icons text-success">edit</i></a>
                                    
                                        <a href="{{route('clientDisable.update',$item->id)}}" data-id="{{$item->id}}" data-toggle="modal" data-target="#disableClient">
                                            <input type="checkbox" name="disable[]" id="disable">
                                        </a>
                                        {{$item->id}}
                                    </td>
                                    <td>{{$item->firstname}} {{$item->lastname}} </td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->phonenumber}}</td>
                                    <td>{{$item->email}}</td>
                                </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <button type="button" class="btn text-white bg-primary" data-toggle="modal" data-target="#createClient"><i class="material-icons">control_point</i> Create Client</button>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal update client status-->
     <div class="modal fade" id="disableClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST" id="editstatus">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Disable Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body text-danger">
              Are you sure that you want to disable this client?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-primary text-white">Yes</button>
                <button type="button" class="btn bg-danger text-white" data-dismiss="modal">No</button>
            </div>
            </form>
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
                <form method="POST" action="{{action('ClientController@store')}}">
                @csrf
                <div class="modal-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="firstname" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="lastname" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="address" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="col-10">
                                    <input type="number" name="phonenumber" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="email">E-Mail</label>
                                </div>
                                <div class="col-10">
                                    <input type="email" name="email" required class="form-control">
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
          <div class="modal fade" id="editClientActive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit New Client</h5>
                </div>
                <form action="" method="POST" id="editClientList">
                    @csrf
                    @method('PATCH')
                <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" required name="firstname" id="firstname" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" required name="lastname" id="lastname" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Address</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" required name="address" id="address" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Phone</label>
                                </div>
                                <div class="col-10">
                                    <input type="number" required name="phonenumber" id="phonenumber" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">E-Mail</label>
                                </div>
                                <div class="col-10">
                                    <input type="email" required name="email" id="email" value="" class="form-control">
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
          
          <script src="{{asset('js/app.js')}}"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
       $('#editClientActive').on('show.bs.modal',function (event){
            var button = $(event.relatedTarget)
            var firstname = button.data('firstname')
            console.log(firstname)
            var lastname = button.data('lastname')   
            console.log(lastname) 
            var address = button.data('address')
            console.log(address)
            var phonenumber = button.data('phonenumber')
            console.log(phonenumber)
            var email = button.data('email')
            var id = button.data('id')
            console.log(email)
            console.log(id)
            var modal = $(this)
            modal.find('#firstname').attr('value',firstname)
            modal.find('#lastname').attr('value',lastname)
            modal.find('#address').attr('value',address)
            modal.find('#phonenumber').attr('value',phonenumber)
            modal.find('#email').attr('value',email)
            var url ="{{url('/client')}}/"+ id;
            $('#editClientList').attr('action',url);
            });

            $('#disableClient').on('show.bs.modal',function (event){
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            var url ="{{url('clientDisable')}}/"+ id;
            $('#editstatus').attr('action',url);   
            });
        </script>
@endsection