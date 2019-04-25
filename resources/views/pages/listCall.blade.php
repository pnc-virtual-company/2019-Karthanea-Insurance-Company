
@extends('layout.dashboard')
@section('content')
    <div class="container">
        <div class="row shadow-lg bg-light">
            <div class="col-4"><button class="btn btn-block btn-light "><i class="material-icons text-success  mr-4">call</i>  In a call</button></div>
            <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-success  mr-4">access_time</i> 5min13sec</button></div>
            <div class="col-4"><button class="btn btn-block btn-light"><i class="material-icons text-danger sm mr-4">call</i>  HANG UP</button></div>
        </div>
    </div>
    <div class="container mt-4">
        <h1>List of calls</h1>
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
                                        <td>File</td>
                                        <td><i class="material-icons text-primary text-center">call</i></td>
                                    </tr>
                                </tbody>
                                <br>
                            </table>

                                <table id="myTable2" class="table table-striped table-bordered table-hover">
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
                                                <a href="#" data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">create</i></a>
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
    <script src="{{asset('js/login.js')}}"></script>
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
                                                <label for="startDate">Date</label>
                                            <div class="col-3">
                                                 <input type="date" class="form-control" id='startDate'>
                                                 
                                            </div>
                                            <div class="input-group-btn">
                                                    <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
                                             </div>
                                            
                                        </div>
                                        <div class="form-group">
                                                <div class="row">
                                                        <label for="">Comments</label>
                                                        <div class="col-10">
                                                       <textarea name="" id="" cols="50"></textarea>
    
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
              <button type="button" class="btn btn-danger">Cancel</button>
            </div>
          </div>
        </div>
      </div>
@endsection 