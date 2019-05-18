@extends('layout.dashboard')
@section('content')
<body>
<div class="container mt-4">
    <div class="row shadow-lg bg-light">
        <div class="col-4"><button class="btn btn-block btn-light "><i class="material-icons text-success  mr-4">call</i>  In a call</button></div>
        <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-success  mr-4">access_time</i> 5min13sec</button></div>
        <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-danger sm mr-4">call</i>  HANG UP</button></div>
    </div>
</div>
    <div class="container mt-4">
        <h1>Payments</h1>
        <div class="card">
            <div class="card-body">
                {{-- list of client --}}
                <div class="table-responsive">
                    <table id="myTables" class="table table-striped table-bordered table-hover">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Disable ID</th>
                                    <th>Clients</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Contract</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $value)
                                    @if ($value->status=='1')
                                        <tr>
                                            <td>
                                                <a href="{{route('payment.update',$value->id)}}" data-toggle="modal" data-target="#editClient"
                                                        data-id="{{$value->id}}" data-firstname="{{$value->firstname}}" data-lastname="{{$value->lastname}}" 
                                                        data-address="{{$value->address}}" data-phonenumber="{{$value->phonenumber}}" data-email="{{$value->email}}">
                                                        <i class="material-icons text-success">create</i>
                                                    </a>
                                                <input type="checkbox" name="disable" id="disable">
                                                {{$value->id}}
                                            </td>
                                            <td>{{$value->firstname}} {{$value->lastname}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->phonenumber}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>
                                                <a href="#" class="togglePayment">
                                                    <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            <br>
                        </table>
                </div>
                {{-- list all contract of client --}}
                <div class="table-responsive">
                    <table id="table2" class="table table-striped table-bordered table-hover collapse">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>ID</th>
                                <th>Contract type</th>
                                <th>Status</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Monthly bill</th>
                                <th>Bills</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($contract as $value=>$item)
                               
                                <tr class="data-row">
                                    <td class="id">
                                        <div class="row">
                                            <div class="col-5">
                                                    {{$item->id}}
                                            </div>
                                            <div class="col-4">
                                                    <a href="" data-toggle="modal" data-target="#editContract" 
                                                            data-id="{{$item->id}}" data-status="{{$item->status}}" data-startdate="{{$item->startdate}}" 
                                                            data-contracttype_id="{{$item->contracttype_id}}" data-monthlyduedate="{{$item->monthlyduedate}}" 
                                                            data-enddate="{{$item->enddate}}" data-monthlybill="{{$item->monthlybill}}" data-client_id="{{$item->client_id}}" 
                                                             data-bill_id="{{$item->bill_id}}" data-toggle="modal">
                                                            <i class="material-icons text-success">edit</i>
                                                        </a>
                                            </div>
                                        </div>
                                        </td>
                                        <td class="contracttype">
                                            <div class="row">
                                                <div class="col-6">
                                                        {{$item->contracttype->contracttype}} 
                                                </div>
                                                <div class="col-3">
                                                        <a href="#" class="text-center">
                                                            <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                        </a>  
                                                </div>
                                            </div>
                                        </td>
                                        <td class="status">{{$item->contractStatus->status}}</td>
                                        <td class="startdate">{{$item['startdate']}}</td>
                                        <td class="enddate">{{$item['enddate']}}</td>
                                        <td class="monthlybill">{{$item['monthlybill']}} $</td>
                                <td>
                                    <a href="#" class="toggleBill">
                                        <i  class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- list all of client bill --}}
                <div class="table-responsive">
                    <table  id="myTabless" class="table table-striped table-bordered table-hover collapse">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>Month</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Due date</th>
                                <th>Bill</th>
                            </tr>
                        </thead>
                        <tbody>
                              
                            @foreach ($contract as $item) 
                            @foreach ($period as $dt)      
                            <tr>
                               
                                        {{-- {{$item->startdate}} --}}
                                        
                                       
                                        <td> 
                                        {{$dt->format("M,Y") . PHP_EOL}}
                                      </td>
                                          
                                        
                                           
                                <td>
                                    {{$item->monthlybill}}
                                </td>
                                
                                <td>{{$item->bill->status}}<a href="{{route('payment.update',$item->id)}}"  data-id="{{$item->id}}" data-bill_id="{{$item->bill_id}}"  data-toggle="modal" data-target="#editPayment"><i class="material-icons text-success">edit</i></a></td>
                               
                                <td>
                                    {{$dt->format("d-m-Y") . PHP_EOL}}
                                </td>
                                <td>
                                    <a href="#" class="text-center">
                                        <i class="material-icons text-info ml-5">insert_drive_file</i>
                                    </a>
                                </td>
                            </tr>
                           
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                <div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
    <script src="{{asset('js/table.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
{{-- payment model update status payment --}}
    <div class="modal fade bd-example-modal-lg" id="editPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit payment status</h5>
            </div>
            <form action="" method="POST" id="editFormPayment">
                 @csrf
                @method('PATCH')
            <div class="modal-body">
                
                  <div class="row">
                      <div class="col-2"><p> Status</p></div>
                      <div class="col-6">
                            <select class=" custom-select" name='bill_id' id="bill_id">
                                @foreach ($bill as $item)
                                   
                                        <option value="{{$item->id}}" >{{$item->status}}</option>
                                           
                                 @endforeach
                                   
                            </select>
                      </div>
                  </div>
                  
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info" >OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script>
              $('#editPayment').on('show.bs.modal',function(event){
                  var button = $(event.relatedTarget)
                  var bill_id= button.data('bill_id')
                 
                  
                  var id = button.data('id')
                  var modal = $(this)
                  
                  modal.find('#bill_id').attr('value',bill_id)
                  
                  var url ="{{url('/payment')}}/"+id;
                  $('#editFormPayment').attr('action',url);   
              });
              </script>
<!-- Modal Edit client -->
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
        </body>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
        $('#editClient').on('show.bs.modal',function (event){
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
            var url ="{{url('/updateClient')}}/"+ id;
            $('#editClientList').attr('action',url);   
        });
            </script>
           {{-- //  modelad edit a new contract --}}
			<div class="modal fade bd-example-modal-lg" id="editContract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Contract</h5>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" id="editForm">
                                @csrf
                                @method('PATCH')
                                    <div class="modal-body">
                                        
                                                <div class="form-group ">
                                                        <div class="row">
                                                              <div class="col-2">
                                                                    <label for="">Status</label>
                                                                </div>
                                                                    <div class="col-4">
                                                                            <select class="browser-default custom-select" name="status_id" id="status_id" required>
                                                                             @foreach ($contractStatus as $item)
                                                                                <option name="status_id" id="status_id" selected value="{{$item->id}}">{{$item->status}}</option>
                                                                             @endforeach
                                                                               
                                                                            </select>
                                                                    </div>
                                                                        <div class="col-2">
                                                                            <label for="endDate">End Date</label>
                                                                         </div>
                                                                        <div class="col-4">
                                                                            <input type='text' name="enddate" id="enddate" class='enddate' placeholder="mm/dd/yy"  required/>
                                                                        </div>
                                                                        
                                                                   
                                                            </div>
                                                        </div>
                            
                                                
                                                <div class="form-group ">
                                                    <div class="row">
                                                                <div class="col-2">
                                                                    <label for="" >Monthly bill</label>
                                                                </div>
                                                                <div class="col-4">
                                                                    <input type="text" name="monthlybill" id="monthlybill" class="form-control" required>
                                                                </div>
                                                                  <div class="col-2">
                                                                        <label for="" >Monthly Due Date</label>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <input type="text" id="monthlyduedate" name="monthlyduedate" class="form-control monthlyduedate" required>
                                                                    </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer mr-5">
                                                    <button type="submit" class="btn bg-info ">
                                                        <i class='material-icons'>check</i> Save Contract
                                                    </button>
                                                    <button type="button" class="btn bg-danger float-left" data-dismiss="modal">
                                                        <i class='material-icons'>close</i> Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                            </div>
                    <script src="{{asset('js/app.js')}}"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <script> 
            $('#editContract').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget)
                var status= button.data('status')
               
                var enddate = button.data('enddate')
                var startdate = button.data('startdate')
                console.log(status)
                var monthlybill = button.data('monthlybill')
                var monthlyduedate = button.data('monthlyduedate')
                var client_id = button.data('client_id')
                var bill_id = button.data('bill_id')
                console.log(client_id)
                console.log(bill_id)
                var contracttype_id = button.data('contracttype_id')
                var id = button.data('id')
                var modal = $(this)
                modal.find('#status').attr('value',status)
               
                modal.find('#enddate').attr('value',enddate)
                modal.find('#startdate').attr('value',startdate)
                modal.find('#monthlybill').attr('value',monthlybill)
                modal.find('#monthlyduedate').attr('value',monthlyduedate)
                modal.find('#client_id').attr('value',client_id) 
                modal.find('#bill_id').attr('value',bill_id)
                modal.find('#contracttype_id').attr('value',contracttype_id)
                
                var url ="{{url('/updateContract')}}/"+id;
                $('#editForm').attr('action',url);   
            });
            </script>
                
@endsection