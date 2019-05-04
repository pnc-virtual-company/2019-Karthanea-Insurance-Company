@extends('layout.dashboard')
@section('content')
<div class="content">
<div class="container mt-4">
    <div class="row shadow-lg bg-light">
        <div class="col-4"><button class="btn btn-block btn-light "><i class="material-icons text-success  mr-4">call</i>  In a call</button></div>
        <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-success  mr-4">access_time</i> 5min13sec</button></div>
        <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-danger sm mr-4">call</i>  HANG UP</button></div>
    </div>
</div>
    <div class="container-fluid">
        <h1>Information Of Contract</h1>
            <div class="card">
                <div class="card-body">
                        <table id="myTable3" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-dark text-white">
                                        <tr>
                                                <th>ID</th>
                                                <th>Client Name</th>
                                                <th>Contract Type</th>
                                                <th>Status</th>
                                                <th>Start</th>
                                                 <th>End</th>
                                                <th>Monthly bill</th>
                                                <th>Bill</th>
                                             </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contractselect as $value=>$item)
                                        
                                   
                                                <tr class="data-row">
                                                        <td class="id">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                        {{$item->id}}
                                                                </div>
                                                                <div class="col-4">
                                                                        <a href="#" class="text-center">
                                                                                <a href="{{route('contractlist.update',$item->id)}}" data-toggle="modal" data-target="#editContract" data-id="{{$item->id}}" data-status="{{$item->status}}" data-startdate="{{$item->stardate}}" data-id_contracttype="{{$item->id_contracttype}}" data-enddate="{{$item->enddate}}" data-monthlybill="{{$item->monthlybill}}" data-id_client="{{$item->id_client}}" data-enddate="{{$item->enddate}}" data-toggle="modal"><i class="material-icons text-success">edit</i></a>
                                                                        </a>
                                                                </div>
                                                            </div>
                                                                
                                                               
                                                            </td>
                                                            <td class="client">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                            {{$item->client->firstname}} {{$item->client->lastname}}
                                                                    </div>
                                                                    <div class="col-3">
                                                                            <a href="#" id="edit-item"><i class="material-icons ml-5 text-info">call</i></a>
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
                                                            <td class="monthlybill">$ {{$item['monthlybill']}}</td>
                                                            <td>
                                                                <a href="#" class="text-center">
                                                                   $
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons'>add_circle_outline</i> Add a new Contract</button>
                </div>
            </div>
    </div>
</div>

       {{-- modelad add a new contract --}}

 <div class="modal fade bd-example-modal-lg" id="Contract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Contract</h5>
                          </div>
                          <div class="card-body">
                                <form action="{{action('ContractController@store')}} " method="POST">
                                        @csrf
                                <div class="modal-body">
                                           
                                          
                                                <div class="form-group">
                                                    <div class="row">
                                                        
                                                            
                                                       
                                                        <div class="col-2">
                                                                <label for="">Client</label>
                                                        </div>
                                                        
                                                        <div class="col-10">
                                                           
                                                                <select name="id_client" id="client" class="browser-default custom-select">
                                                                     @foreach ($client as $item)
                                                                    <option value="{{$item->id}}">{{$item->firstname}} {{$item->lastname}}</option>
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

                                                                        <div class="input-group col-md-12">
                                                                                <select name="id_contracttype" id="" class="browser-default custom-select">
                                                                                        @foreach ($contracttype as $item)
                                                                                       <option value="{{$item->id}}">{{$item->contracttype}}</option>
                                                                                       @endforeach
                                                                                   </select>
                                                                                {{-- <input class="form-control py-2" name="id_contracttype" type="search"  id="example-search-input"> --}}
                                                                                <span class="input-group-append">
                                                                                    <button class="btn btn-outline-secondary bg-info text-white" data-toggle="modal" data-target="#select" type="button" style="margin-top:0%;">
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
                                                                          
                                                                        <select class="browser-default custom-select" name="status">
                                                                            <option selected value="Open">Open</option> 
                                                                            <option value="To be completed">To be completed</option>                                                                              
                                                                            <option value="To be signed">To be signed</option>
                                                                            <option value="Closed">Closed</option>
                                                                           
                                                                           
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
                                                                                      <input type='text' name="startdate" class='txtDate' placeholder="mm/dd/yy"  />

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
                                                                            <input type='text' name="enddate" class='txtDate' placeholder="mm/dd/yy"  />
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
                                                            <input type="text" name="monthlybill" class="form-control">
                                                        </div>   
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        
                                </div>
                            <div class="modal-footer mr-5">
                                <button type="submit" class="btn bg-info "><i class='material-icons'>check</i> Save Contract</button>
                                <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            <div>
        </div>
    </div>
            
{{-- //  modelad edit a new contract --}}

       
       <div class="modal fade bd-example-modal-lg" id="editContract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Contract</h5>
                              </div>
                              <div class="card-body">
                                    <form action=" " method="POST" id="editForm">
                                            
                                            @csrf
                                            @method('PATCH')
                                    <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                    <label for="">Client</label>
                                                            </div>
                                                            <div class="col-10">
                                                               
                                                                    <select name="id_client" id="id_client" class="browser-default custom-select" value="">
                                                                         @foreach ($client as $item)
                                                                        <option value="{{$item->id}}" name="id_client" id="id_client" >{{$item->firstname}} {{$item->lastname}}</option>
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
    
                                                                            <div class="input-group col-md-12">
                                                                                <select name="id_contracttype" id="id_contracttype" class="browser-default custom-select">
                                                                                    @foreach ($contracttype as $item)
                                                                                   <option value="{{$item->id}}">{{$item->contracttype}}</option>
                                                                                   @endforeach
                                                                               </select>
                                                                                    {{-- <input class="form-control py-2" name="id_contracttype" type="search"  id="example-search-input"> --}}
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
                                                                              
                                                                            <select class="browser-default custom-select" name="status" id="status"  >
                                                                               @foreach ($contractselect as $item)
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
<script>
        $('#editContract').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var status= button.data('status')
           
            var enddate = button.data('enddate')
            var startdate = button.data('startdate')
            console.log(status)
            var monthlybill = button.data('monthlybill')
            var id_client = button.data('id_client')
            var id_contracttype = button.data('id_contracttype')
            var id = button.data('id')
            var modal = $(this)
            modal.find('#status').attr('value',status)
           
            modal.find('#enddate').attr('value',enddate)
            modal.find('#startdate').attr('value',startdate)
            modal.find('#monthlybill').attr('value',monthlybill)
            modal.find('#id_client').attr('value',id_client)
            modal.find('#id_contracttype').attr('value',id_contracttype)
            
            var url ="{{url('/contractlist')}}/"+id;
            $('#editForm').attr('action',url);   
        })
        </script>

            {{-- model select contract  --}}

            <div class="modal fade bd-example" id="selectAddContract"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
                                      </div>
                                      <div class="card-body">
                                            <div class="modal-body">
                                                   
                                                    <table id="myTable5" class="table table-striped table-bordered" style="width:100%">
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
                                                    <form id="editform" method="POST" action="">
                                                            @csrf
                                                            @method('PATCH')

                                                    <div class="modal-body">
                                                      
                                                          <div class="row">
                                                              <div class="col-4"><p>Type of contract</p></div>
                                                              <div class="col-7">
                                                                  <div class="form-group">
                                                                  
                                                                      <input type="text" name="contracttype" id="" class="form-control">
                                                                  </div>
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

                    
                   
   
{{-- model select contract  --}}

<div class="modal fade bd-example" id="select"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
                          </div>
                          <div class="card-body">
                                <div class="modal-body">
                                       
                                        <table id="myTable4" class="table table-striped table-bordered" style="width:100%">
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
@endsection