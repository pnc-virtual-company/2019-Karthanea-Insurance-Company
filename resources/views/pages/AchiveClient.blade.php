<link rel="stylesheet" href="{{asset('css/app.css')}}">

@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div><h1>@lang('Client Information ')</h1></div>
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
                        @foreach ($client as $value=>$item)
                        @if($item->status=="Disable")
                        <tr>
                            <td>
                                <a href="{{route('clientAchive.update',$item->id)}}" data-toggle="modal"  data-target="#editClient" 
                                    data-id="{{$item->id}}" data-firstname="{{$item->firstname}}"
                                    data-lastname="{{$item->lastname}}" data-address="{{$item->address}}" 
                                    data-phonenumber="{{$item->phonenumber}}" data-email="{{$item->email}}">
                                    <i class="material-icons text-success">edit</i></a>
                                <input type="checkbox" name="disable" id="disable" checked>
                                {{$item->id}}
                            </td>
                            <td>{{$item->firstname}} {{$item->lastname}} </td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phonenumber}}</td>
                            <td>{{$item->email}}</td>
                        </tr>
                        @elseif($item->status=="Active")
                        <tr>
                                <td>
                                    <a href="{{route('clientAchive.update',$item->id)}}" data-toggle="modal"  data-target="#editClient" 
                                        data-id="{{$item->id}}" data-firstname="{{$item->firstname}}"
                                        data-lastname="{{$item->lastname}}" data-address="{{$item->address}}" 
                                        data-phonenumber="{{$item->phonenumber}}" data-email="{{$item->email}}">
                                        <i class="material-icons text-success">edit</i></a>
                                    <input type="checkbox" name="disable" id="disable" >
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
                        <div>
                              <button type="button" class="btn text-white bg-primary" data-toggle="modal" data-target="#createClient"><i class="material-icons">control_point</i> Create Client</button>
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
            <form method="POST" action="{{action('clientAchiveController@store')}}">
            @csrf
            <div class="modal-body">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="name">Firstname</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="firstname"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="name">Lastname</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="lastname"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="address"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="col-10">
                                <input type="number" name="phonenumber"  class="form-control">
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
                <button type="submit" class="btn btn-info">OK</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
            </div>
        </div>
        </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" name="firstname" id="firstname" value="" class="form-control">
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="">Lastname</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="lastname" id="lastname" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label for="">Address</label>
                        </div>
                        <div class="col-10">
                            <input type="text" name="address" id="address" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label for="">Phone</label>
                        </div>
                        <div class="col-10">
                            <input type="number" name="phonenumber" id="phonenumber" value="" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <label for="">E-Mail</label>
                        </div>
                        <div class="col-10">
                            <input type="email" name="email" id="email" value="" class="form-control">
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

</body> 

<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('#editClient').on('show.bs.modal',function(event){
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
    var url ="{{url('/clientAchive')}}/"+ id;
    $('#editClientList').attr('action',url);   
    });
    </script>   
@endsection

