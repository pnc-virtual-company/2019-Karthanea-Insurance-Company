@extends('layout.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
 <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons'>add_circle_outline</i> Add a new Contract</button>
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
                                                                <label for="">Client</label>
                                                                <div class="col-10">
                                                                <input type="text" class="form-control" placeholder="Search">
        
                                                                </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group ">
                                                            <div class="row">
                                                                    <label for="" >Type</label>
                                                                    <div class="col-3">
                                                                        <select class="browser-default custom-select">
                                                                                <option selected>Bicycle</option>
                                                                                <option value="1">House</option>
                                                                                <option value="2">Car</option>
                                                                                <option value="3">Moto</option>
                                                                        </select>
                                                                       
                                                                    </div>
                                                                         <label for="">Status</label>
                                                                         <div class="col-3">
                                                                                <select class="browser-default custom-select">
                                                                                        <option selected>Open</option>
                                                                                        <option value="1">To be completed</option>
                                                                                        <option value="2">To be signed</option>
                                                                                        <option value="3">Closed</option>
                                                                                </select>
                                                                         </div>
                                                                         
                                                                    
                                                            </div>
                                                    </div>
        
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label for="startDate">Start date</label>
                                                        <div class="col-3">
                                                             <input type="date" class="form-control" id='startDate'>
                                                             
                                                        </div>
                                                        <div class="input-group-btn">
                                                                <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
                                                         </div>
                                                        <label for="endDate">End Date</label>
                                                        <div class="col-3">
                                                                <input type="date" class="form-control" id='endDate'>
                                                        </div>
                                                        <div class="input-group-btn">
                                                                <button class="btn btn-default" ><i class="material-icons">date_range</i></button>
                                                         </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                                <label for="" >Monthly bill</label>
                                                                <div class="col-3">
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
@endsection