    @extends('layout.dashboard')
    @section('content')
    <div class="content">
        <div class="container-fluid">
        <h1>List of contract type</h1>
                <div class="card">
                    <div class="card-body">
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="text-center ">ID</th>
                            <th> Contract type</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               1
                            </td>
                            <td>Car</td>
                        </tr>
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               2
                            </td>
                            <td>Moto</td>
                           
                        </tr>
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               3
                            </td>
                            <td>House</td>
                           
                        </tr>
                    </tbody>
                   
                </table>
            <a href="updatecontracttype.blade.php"><i class="material-icons text-white">add_circle_outline</i>  Create contract type</a> 
            </div>
            </div>
            <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons'>add_circle_outline</i> Add a new Contract</button>
            </div>
        </div>

       
            </div>
        </div>
        <div class="modal fade bd-example" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">

            <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg"><i class='material-icons'>add_circle_outline</i> Add a new Contract</button>
            </div>
        </div>



        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

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
                                    <button type="button" class="btn bg-info ">OK</button>
                                    <button type="button" class="btn bg-danger float-left" data-dismiss="modal">Cencel</button>
                        </div>
            </div>
        </div>
        </div>
        <div>
        </div>
     @endsection
