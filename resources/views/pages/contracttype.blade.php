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
<<<<<<< HEAD
                <button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example"><i class='material-icons mr-2'>add_circle_outline</i>Create new contract type</button>
       
=======
                <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#createContractType">Create contract type</button>
                
            </div>
            </div>
           
>>>>>>> c29191a361d2339bfac197e8339ad58eda064546
            </div>
        </div>

       
            </div>
        </div>
        {{-- model create --}}

  <div class="modal fade" id="createContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
         
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
              <button type="button" class="btn btn-danger">Cancel</button>
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
              <button type="button" class="btn btn-danger">No</button>
            </div>
          </div>
        </div>
      </div>

     @endsection
