@extends('layout.dashboard')
@section('content')
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
                                    @if ($value->status=='Active')
                                        <tr>
                                            <td>
                                                <a href="{{route('client.update',$value->id)}}" data-toggle="modal" data-target="#editClient"><i class="material-icons text-success">create</i></a>
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
                                                <a href="{{route('contract.update',$item->id)}}" data-toggle="modal" data-target="#editContract" data-id="{{$item->id}}" data-status="{{$item->status}}" data-startdate="{{$item->startdate}}" data-contracttype_id="{{$item->contracttype_id}}" data-enddate="{{$item->enddate}}" data-monthlybill="{{$item->monthlybill}}" data-client_id="{{$item->client_id}}" data-enddate="{{$item->enddate}}" data-toggle="modal"><i class="material-icons text-success">edit</i></a>
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
                                        <td class="status">{{$item['status']}}</td>
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
                <div class="table-responsive">

                </div>
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
                                <tr>
                                    <td>{{$item->startdate}}</td>
                                    <td>{{$item->monthlybill}}</td>
                                    <td>{{$item->bill->status}}<a href="{{route('payment.edit',$item->id)}}"  data-toggle="modal" data-target="#editPayment"><i class="material-icons text-success">edit</i></a></td>
                                    <td>{{$item->enddate}}</td>
                                    
                                    <td>
                                        <a href="#" class="text-center">
                                            <i class="material-icons text-info ml-5">insert_drive_file</i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </table>
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
            <div class="modal-body">
                <form action="#" method="POST" >
                  <div class="row">
                      <div class="col-2"><p> Status</p></div>
                      <div class="col-6">
                            <select class=" custom-select">
                                @foreach ($contract as $item)
                                    @if ($item->bill->id == $item->bill_id)
                                        <option value="{{$item->bill->id}}" selected>{{$item->bill->status}}</option>
                                    @endif
                                    @if($item->bill->id != $item->bill_id)
                                        <option value="{{$item->bill->id}}">{{$item->bill->status}}</option>
                                    @endif
                                @endforeach
                            </select>
                      </div>
                  </div>
                  
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info" >OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

{{-- //  modelad edit a new contract --}}
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
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-2">
                                                                <label for="">Client</label>
                                                        </div>
                                                        <div class="col-10">
                                                           
                                                                <select name="client_id" id="client_id" class="browser-default custom-select" value="">
                                                                     @foreach ($client as $value)
                                                                    <option value="{{$value->id}}" >{{$value->firstname}} {{$value->lastname}}</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                  <label for="">Type</label>
                                                                </div>

                                                                <div class="col-10">

                                                                        <div class="input-group">
                                                                            <select name="contracttype_id" id="contracttype_id" class="browser-default custom-select">
                                                                                @foreach ($contracttype as $value)
                                                                               <option value="{{$value->id}}">{{$value->contracttype}}</option>
                                                                               @endforeach
                                                                           </select>
                                                                                {{-- <input class="form-control py-2" name="contracttype_id" type="search"  id="example-search-input"> --}}
                                                                                <span class="input-group-append">
                                                                                    <button class="btn btn-outline-secondary bg-info text-white" data-toggle="modal" data-target="#selectUpdateContract" type="button" style="margin-top:0%;">
                                                                                       Select
                                                                                    </button>
                                                                                </span>
                                                                            </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                              
                                                        
                                                        <div class="col-6">
    
                                                            <div class="row">

                                                                    <div class="col-2">
                                                                            <label for="">Status</label>
                                                                        
                                                                     </div>
                                                                     <div class="col-10">
                                                                          
                                                                        <select class="browser-default custom-select" name="status" id="status"  >
                                                                           @foreach ($contract as $item)
                                                                                <option value="{{$item->status}}">{{$item->status}}</option>
                                                                           @endforeach
                                                                            
                                                                            
                                                                
                                                                           
                                                                        </select>
                                                                     </div>

                                                            </div>

                                                            </div>   
                                                         
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                            <div class="col-6">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                              <label for="startDate">Start Date</label>
                                                                        </div>
                                                                        <div class="col-9">

                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <input type='text' name="startdate" class='startDate ' value="" id="startdate" placeholder="mm/dd/yy"  />

                                                                                </div>
                                                                              </div>


                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                       
                                                      <div class="col-6">
                                                          <div class="row">
                                                              <div class="col-3">
                                                                    <label for="endDate">End Date</label>
                                                              </div>
                                                              <div class="col-9">
                                                                  <div class="row">
                                                                      <div class="col-12">
                                                                            <input type='text' name="enddate" class='txtDate' value="" id="enddate" placeholder="mm/dd/yy"  />
                                                                      </div>
                                                                    </div>
                                                                    </div>
                                                                  </div>
                                                              </div>

                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-2"><label for="" >Monthly bill</label></div>
                                                        
                                                        <div class="col-10">
                                                            <input type="text" name="monthlybill" value="" id="monthlybill" class="form-control">
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        
                                </div>
                            <div class="modal-footer mr-5">
                                <button type="submit" class="btn bg-info "><i class='material-icons'>check</i> Save Contract</button>
                                <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cancel</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            <div>
        </div>
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
                  var client_id = button.data('client_id')
                  console.log(client_id)
                  var contracttype_id = button.data('contracttype_id')
                  var id = button.data('id')
                  var modal = $(this)
                  modal.find('#status').attr('value',status)
                 
                  modal.find('#enddate').attr('value',enddate)
                  modal.find('#startdate').attr('value',startdate)
                  modal.find('#monthlybill').attr('value',monthlybill)
                  modal.find('#client_id').attr('value',client_id)
                  modal.find('#contracttype_id').attr('value',contracttype_id)
                  
                  var url ="{{url('/contract')}}/"+id;
                  $('#editForm').attr('action',url);   
              })
              </script>

            <div class="modal fade bd-example" id="selectAddContract"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
                                      </div>
                                      <div class="card-body">
                                            <div class="modal-body">
                                                    <div class="table-responsive">
                                                            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                                                                    <thead class="bg-dark text-white">
                                                                        <tr>
                                                                            <th class="text-center ">ID</th>
                                                                            <th> Contract type</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      @foreach ($contracttype as $item)
                                                                          
                                                                      
                                                                        <tr >
                                                                            <td class="text-center">
                                                                                <a href="#deleteContractType" data-id="{{$item->id}}" data-contracttype="{{$item->contracttype}}" data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a>
                                                                                <a href="{{route('contracttype.update',$item->id)}}"  data-toggle="modal" data-target="#updateContractType" data-id="{{$item->id}}"  data-contracttype="{{$item->contracttype}}" ><i class="material-icons text-success">edit</i></a>
                                                   
                                                                                {{$item->id}}
                                                                            </td>
                                                                            <td>{{$item->contracttype}}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                   
                                                                </table>
                                                          </div>
                                    
                                          {{-- model update --}}
                                        
                                          <div class="modal fade" id="updateContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Edit contract type</h5>
                                                      
                                                    </div>
                                                    <div class="modal-body">
                                                      <form action="#" method="POST" >
                                                          <div class="row">
                                                              <div class="col-4"><p>Type of contract</p></div>
                                                              <div class="col-7">
                                                                  <div class="form-group">
                                                                  
                                                                      <input type="text" name="contracttype" id="" class="form-control">
                                                                  </div>
                                                              </div>
                                                            </div>
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="submit" class="btn btn-info">OK</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        
                                        
                                              {{-- model delete --}}
                                        
                                          <div class="modal fade" id="deleteContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                                      
                                                    </div>
                                                    <div class="modal-body">
                                                      <form action="#" method="POST" >
                                                         <p class="text-danger">Are you sure that you want to delete this contract type?</p>
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="submit" class="btn btn-info">OK</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        
                                                    
                                            </div>
                                         </div>
                                         <div class="modal-footer">
                                            <button type="submit" class="btn btn-info">OK</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                          </div>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="firstname">Firstname</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="firstname" id="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <form action="" method="POST" id="editClient">
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
              </div>
              
              <script src="{{asset('js/app.js')}}"></script>
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
      
                  var url ="{{url('/client')}}/"+ id;
                  $('#editClientList').attr('action',url);   
                  });
              
    
            </script>
@endsection