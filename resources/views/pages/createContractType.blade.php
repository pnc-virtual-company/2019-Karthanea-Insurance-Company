@extends('layout.dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
            <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example"><i class='material-icons mr-2'>add_circle_outline</i>Create new contract type</button>

        <div class="modal fade bd-example" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
                          </div>
                          <div class="card-body">
                                <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <div class="row">
                                                        <label for="">Type of contract</label>
                                                        <div class="col-8">
                                                        <input type="text" class="form-control" placeholder="type of contract">

                                                        </div>
                                                </div>
                                            </div>
                                          </form>
                                  </div>
                          </div>
                          <div class="modal-footer mr-5">
                                    <button type="button" class="btn bg-info ">OK</button>
                                    <button type="button" class="btn bg-danger float-left" data-dismiss="modal">Cencel</button>
                        </div>
            </div>
        </div>
        </div>
        
    <div>
    </div>

@endsection