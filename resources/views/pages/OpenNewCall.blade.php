@extends('layout.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
    <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons mr-3 text-info'>call</i>Open new call</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New call<i class='material-icons ml-3 text-success'>call</i></h5>
                      </div>
                      <div class="card-body">
                            <div class="modal-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="client">Client</label>
                                                </div>
                                                <div class="col-10">
                                                    <input type="text" id="client" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                                <div class="row">
                                                        <label for="call" >Call Operator</label>
                                                        <div class="col-6">
                                                            <input type="text" id="call" class="form-control">
                                                        </div> 
                                                        <label for="" >Duration</label>
                                                        <div class="col-6">
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
                                                <a class="btn btn-default" ><i class="material-icons">date_range</i></a>
                                        </div>
                                        <div class="form-group">
                                                <div class="row">
                                                        <label for="comment">Comments</label>
                                                        <div class="col-10">
                                                       <textarea name="comment" id="comment" cols="50"></textarea>
    
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
    <div>
    </div>
 @endsection