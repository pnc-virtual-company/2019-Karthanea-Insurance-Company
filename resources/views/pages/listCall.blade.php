
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
        <h1>Information Of Calls</h1>
        <div class="card">
            <div class="card-body">
                <table  id="myTable1" class="table table-striped table-bordered table-hover">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>Disable ID</th>
                                <th>Clients</th>
                                <th>Contract</th>
                                <th>Call</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">create</i></a>
                                    <input type="checkbox" name="disable" id="disable">
                                    2
                                </td>
                                <td>Li</td>
                                <td ><a class="toggleCallHistory" href="#"><i class="material-icons text-info ml-5">insert_drive_file</i></a></td>
                                <td><i class="material-icons text-primary text-center">call</i></td>
                            </tr>
                            <tr>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">create</i></a>
                                        <input type="checkbox" name="disable" id="disable">
                                        2
                                    </td>
                                    <td>Li</td>
                                    <td ><a class="toggleCallHistory" href="#"><i class="material-icons text-info ml-5">insert_drive_file</i></a></td>
                                    <td><i class="material-icons text-primary text-center">call</i></td>
                                </tr>
                        </tbody>
                        <br>
                    </table>
                        <table id="myTable2" class="table table-striped table-bordered table-hover collapse">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Call Operator</th>
                                    <th>Duration</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>
                                        1
                                    </td>
                                    <td>14/08/2019</td>
                                    <td>Pinau</td>
                                    <td>24min13sec</td>
                                    <td>car contract review</td>
                                </tr>
                                <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>
                                            1
                                        </td>
                                        <td>14/08/2019</td>
                                        <td>Pinau</td>
                                        <td>24min13sec</td>
                                        <td>car contract review</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>
                                            1
                                        </td>
                                        <td>14/08/2019</td>
                                        <td>Pinau</td>
                                        <td>24min13sec</td>
                                        <td>car contract review</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>
                                            1
                                        </td>
                                        <td>14/08/2019</td>
                                        <td>Pinau</td>
                                        <td>24min13sec</td>
                                        <td>car contract review</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>
                                            1
                                        </td>
                                        <td>14/08/2019</td>
                                        <td>Pinau</td>
                                        <td>24min13sec</td>
                                    <td>car contract review</td>
                                </tr>
                            </tbody>
                        </table>
                    <div>
                    </div>
                <button type="button" class="btn bg-info ml-3 text-white btn-md" data-toggle="modal" data-target="#openNewCall"><i class='material-icons mr-3 text-white'>call</i>Open new call</button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/table.js')}}"></script>
    {{-- modal new call  --}}
    <div class="modal fade bd-example-modal-lg" id="openNewCall" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New call<i class='material-icons ml-3 text-success'>call</i></h5>
                      </div>
                      <div class="card-body">
                            <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <div class="row">
                                                    <label for="">Client</label>
                                                    <div class="col-10">
                                                    <input type="text" class="form-control">

                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                                <div class="row">
                                                        <label for="" >Call Operator</label>
                                                        <div class="col-4">
                                                            <input type="text" class="form-control">
                                                        </div> 
                                                        <label for="" >Duration</label>
                                                        <div class="col-4">
                                                            <input type="text" class="form-control">
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
                                                   
                                                  
                                                      </div>
                                                  </div>
                                                

                                        <div class="form-group">
                                                <div class="row">
                                                        <label for="">Comments</label>
                                                        <div class="col-10">
                                                       <textarea name="" id="" cols="50" class="form-control"></textarea>
    
                                                        </div>
                                                </div>
                                            </div>
                                            
                                      </form>
                              </div>
                      </div>
                      <div class="modal-footer mr-5">
                                <button type="button" class="btn bg-info "><i class='material-icons'>check</i> Save Call</button>
                                <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                    </div>
        </div>
    </div>
    </div> 
 
      </div>
        {{-- modal edit call  --}}
      <div class="modal fade bd-edit-modal-lg" id="openNewCall" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New call<i class='material-icons ml-3 text-success'>call</i></h5>
                                  </div>
                                  <div class="card-body">
                                        <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="row">
                                                                <label for="">Client</label>
                                                                <div class="col-10">
                                                                <input type="text" class="form-control">
            
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                            <div class="row">
                                                                    <label for="" >Call Operator</label>
                                                                    <div class="col-4">
                                                                        <input type="text" class="form-control">
                                                                    </div> 
                                                                    <label for="" >Duration</label>
                                                                    <div class="col-4">
                                                                        <input type="text" class="form-control">
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
                                                               
                                                              
                                                                  </div>
                                                              </div>
                                                            
            
                                                    <div class="form-group">
                                                            <div class="row">
                                                                    <label for="">Comments</label>
                                                                    <div class="col-10">
                                                                   <textarea name="" id="" cols="50" class="form-control"></textarea>
                
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                  </form>
                                          </div>
                                  </div>
                                  <div class="modal-footer mr-5">
                                            <button type="button" class="btn bg-info "><i class='material-icons'>check</i> Save Call</button>
                                            <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                                </div>
                    </div>
                </div>
                </div> 
             
          </div>
          <script src="{{asset('js/app.js')}}"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection 