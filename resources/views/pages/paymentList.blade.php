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
                                    <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#editClient"><i class="material-icons text-success">create</i></a>
                                            <input type="checkbox" name="disable" id="disable">
                                            {{$value->id_client}}
                                        </td>
                                        <td>{{$value->firstname}} {{$value->lastname}}</td>
                                        <td>{{$value->addresss}}</td>
                                        <td>{{$value->phonenumber}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>
                                            <a href="#" class="togglePayment">   
                                                <i class="material-icons text-info ml-5">insert_drive_file</i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <br>
                            </table>
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
                                        {{-- @foreach ($contract as $dataItem)
                                        <tr>
                                            <td>
                                                {{$dataItem->id_contract}}
                                                <a href="#" class="text-center">
                                                    <a href="#"  data-toggle="modal" data-target="#editContract"><i class="material-icons text-success">edit</i></a>
                                                </a>
                                            </td>
                                            <td> --}}
                                                {{-- @foreach ($data->id_contracttype as $items) --}}
                                                    {{-- <a href="#" class="text-center">
                                                        <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                    </a> --}}
                                                {{-- @endforeach --}}
                                            {{-- </td>
                                            <td>{{$dataItem->status}}</td>
                                            <td>{{$dataItem->startdate}}</td>
                                            <td>{{$dataItem->enddate}}</td>
                                            <td>{{$dataItem->monthlybill}} $</td>
                                            <td>
                                                <a href="#" class="toggleBill">
                                                    <i  class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>

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
                                            <tr>
                                                <td>Oct.2019.12</td>
                                                <td>$15</td>
                                                <td>Paid <a href="#"  data-toggle="modal" data-target="#editPayment"><i class="material-icons text-success">edit</i></a></td>
                                                <td>5/11/2019</td>

                                                <td>
                                                        <a href="#" class="text-center">
                                                                <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                        </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                    <td>Oct.2019.12</td>
                                                    <td>$15</td>
                                                    <td>Paid <a href="#"  data-toggle="modal" data-target="#editPayment"><i class="material-icons text-success">edit</i></a></td>
                                                    <td>5/11/2019</td>
                                                    <td><i class="material-icons text-info ml-5">insert_drive_file</i></td>
                                                </tr>
                                                <tr>
                                                        <td>Oct.2019.12</td>
                                                        <td>$15</td>
                                                        <td>Paid <a href="#"  data-toggle="modal" data-target="#editPayment"><i class="material-icons text-success">edit</i></a></td>
                                                        <td>5/11/2019</td>
                                                        <td><i class="material-icons text-info ml-5">insert_drive_file</i></td>
                                                </tr>
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
    
    
{{-- payment model update status --}}
    <div class="modal fade" id="editPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <option selected>Unpaid</option>
                                    <option value="1">Paid</option>
                                    
                            </select>
                      </div>
                  </div>
                  
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

{{-- //  modelad edit a new contract --}}
<div class="modal fade bd-example-modal-lg" id="editContract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit contract</h5>
                          </div>
                          <div class="card-body">
                                <div class="modal-body">
                                        <form>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-2">
                                                                <label for="">Client</label>
                                                        </div>
                                                       
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="Search">
                                                        </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                  <label for="">Type</label>
                                                                </div>

                                                                <div class="col-10">
                                                                        <div class="input-group col-md-12">
                                                                                <input class="form-control py-2" type="search" value="search" id="example-search-input">
                                                                                <span class="input-group-append">
                                                                                    <button class="btn btn-outline-secondary bg-info text-white" data-toggle="modal" data-target="#selectAddContract" type="button" style="margin-top:0%;">
                                                                                       Select
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                              
                                                        
                                                        <div class="col-6">
    
                                                            <div class="row">
                                                                    <div class="col-6">
                                                                            <label for="">Status</label>
                                                                        
                                                                     </div>
                                                                     <div class="col-6">
                                                                          
                                                                        <select class="browser-default custom-select">
                                                                            <option selected>Open</option>                                                                                <option value="1">To be completed</option>
                                                                            <option value="2">To be signed</option>
                                                                            <option value="3">Closed</option>
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
                                                                              <label for="endDate">Start Date</label>
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                      <input type='text' class='txtDate' placeholder="mm/dd/yy"  />
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
                                                                            <input type='text' class='txtDate' placeholder="mm/dd/yy"  />
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
                                                            <input type="text" class="form-control">
                                                        </div>   
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            <div class="modal-footer mr-5">
                                <button type="button" class="btn btn-info "><i class='material-icons'>check</i> Edit Contract</button>
                                <button type="button" class="btn btn-danger  float-left" data-dismiss="modal"><i class='material-icons '>close</i> Cencel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </div>
            {{-- model select contract  --}}

            <div class="modal fade bd-example" id="selectAddContract"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
                                      </div>
                                      <div class="card-body">
                                            <div class="modal-body">
                                                   
                                                    <table id="myTable4" class="table table-striped table-bordered collapse" style="width:100%">
                                                            <thead class="bg-dark text-white">
                                                                <tr>
                                                                    <th class="text-center ">ID</th>
                                                                    <th> Contract type</th>
                                                                     
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                              
                                                                <tr >
                                                                    <td class="text-center">
                                                                        <a href="#"  data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a>
                                                                        <a href="#"  data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">edit</i></a>
                                                                       1
                                                                    </td>
                                                                    <td>Car</td>
                                                                </tr>
                                                                <tr >
                                                                    <td class="text-center">
                                                                        <a href="#"  data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a>
                                                                        <a href="#"  data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">edit</i></a>
                                                                       2
                                                                    </td>
                                                                    <td>Moto</td>
                                                                   
                                                                </tr>
                                                                <tr >
                                                                    <td class="text-center">
                                                                        <a href="#"  data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a>
                                                                        <a href="#"  data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">edit</i></a>
                                                                       3
                                                                    </td>
                                                                    <td>House</td>
                                                                   
                                                                </tr>
                                                            </tbody>
                                                           
                                                        </table>
                                        
                                                        
                                                    
                                          
                                                
                                                
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
                                                      <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
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
                                                      <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        
                                                    
                                            </div>
                                         </div>
                                         <div class="modal-footer">
                                            <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="lastname">Lastname</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="lastname" id="name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="name">Address</label>
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
                                <input type="number" name="phone" id="phone" class="form-control">
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
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-info">OK</button>

              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

@endsection