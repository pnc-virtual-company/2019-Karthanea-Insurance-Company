@extends('layout.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        <h1>List of contract</h1>
            <div class="card">
                <div class="card-body">
                        <table id="myTable3" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-dark text-white">
                                        <tr>
                                                <th>ID</th>
                                                <th>Contract Type</th>
                                                <th>Status</th>
                                                <th>Start</th>
                                                 <th>End</th>
                                                <th>Monthly bill</th>
                                                <th>Bill</th>
                                             </tr>
                                </thead>
                                <tbody>
                                  
                                        <tr>
                                                <td>
                                                        1
                                                        <a href="#" class="text-center">
                                                                <a href="#"  data-toggle="modal" data-target="#editContract"><i class="material-icons text-success">edit</i></a>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        Car
                                                        <a href="#" class="text-center">
                                                                <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                        </a>
                                                    </td>
                                                    <td>open</td>
                                                    <td>dd/mm/yyyy</td>
                                                    <td>dd/mm/yyyy</td>
                                                    <td>$15</td>
                                                    <td>
                                                        <a href="#" class="text-center">
                                                           $
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                1
                                                                <a href="#" class="text-center">
                                                                        <a href="#"  data-toggle="modal" data-target="#editContract"><i class="material-icons text-success">edit</i></a>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                Car
                                                                <a href="#" class="text-center">
                                                                        <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                                </a>
                                                            </td>
                                                            <td>open</td>
                                                            <td>dd/mm/yyyy</td>
                                                            <td>dd/mm/yyyy</td>
                                                            <td>$15</td>
                                                            <td>
                                                                <a href="#" class="text-center">
                                                                   $
                                                                </a>
                                                            </td>
                                                        </tr>


                            
                                       
                                                 
                                                   
                                </tbody>
                               
                            </table>
                        
                            <button type="button" class="btn bg-info ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons'>add_circle_outline</i> Add a new Contract</button>
                </div>
            </div>
    </div>
</div>

       
       

       
       {{-- modelad add a new contract --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add a new contract</h5>
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
                                                            </div>
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
                                                                                <label for="startDate">Start date</label>
                                                                        </div>
                                                                        <div class="col-9">
                                                                                <div class="row">
                                                                                    <div class="col-8">
                                                                                            <input type="date" class="form-control" id='startDate'> 
                                                                                    </div>
                                                                                    <div class="col-3">
                                                                                            <div class="input-group-btn">
                                                                                                    <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
                                                                                             </div>
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
                                                                              <div class="col-9">
                                                                                    <input type="date" class="form-control" id='endDate'>
                                                                              </div>
                                                                              <div class="col-3">
                                                                                    <div class="input-group-btn">
                                                                                            <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
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
                                        <button type="button" class="btn bg-info "><i class='material-icons'>check</i> Save Contract</button>
                                        <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    <div>
                </div>
            </div>

            <script type="text/javascript">
//  modelad edit a new contract



 

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
                                                                        <label for="startDate">Start date</label>
                                                                </div>
                                                                <div class="col-9">
                                                                        <div class="row">
                                                                            <div class="col-8">
                                                                                    <input type="date" class="form-control" id='startDate'> 
                                                                            </div>
                                                                            <div class="col-3">
                                                                                    <div class="input-group-btn">
                                                                                            <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
                                                                                     </div>
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
                                                                      <div class="col-9">
                                                                            <input type="date" class="form-control" id='endDate'>
                                                                      </div>
                                                                      <div class="col-3">
                                                                            <div class="input-group-btn">
                                                                                    <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
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
                                <button type="button" class="btn bg-info "><i class='material-icons'>check</i> Save Contract</button>
                                <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </div>


            {{-- model select contract  --}}

            <div class="modal fade bd-example" id="#selectAddContract"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

                                                      <button type="button" class="btn btn-info" >OK</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

                                                   
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        
                                                    
                                            </div>
                                         </div>
                                         <div class="modal-footer">

                                            <button type="button" class="btn btn-info">OK</button>
                                            <button type="button" class="btn btn-danger"  data-dismiss="modal">Cancel</button>

                                          </div>
                                    </div>
                             </div>
                        </div>
                    </div>

    


=
@endsection