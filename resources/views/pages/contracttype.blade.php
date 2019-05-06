 <body>
 @extends('layout.dashboard')
    @section('content')
    <div class="content">
      <div class="container-fluid">.
        
        <h1>Contract Type</h1>
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
                @foreach ( $contracttype as $item )
                  <tr >
                    <td class="text-center">
                      <a href="" aria-hidden="true" data-toggle="modal" data-target="#deleteContractType" data-id="{{$item->id}}"
                         data-title="{{$item->contracttype}}"><i class="material-icons text-danger">delete</i>

                      {{-- <a href="{{$item->id}}" id='delete' data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a> --}}
                      <a href="#"  data-toggle="modal" data-target="#updateContractType"><i class="material-icons text-success">edit</i></a>
                      {{$item->id}}
                    </td>
                    <td> {{$item->contracttype}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
              <button type="submit" class="btn bg-primary text-white" data-toggle="modal" data-target="#createContractType"><i class="material-icons">control_point</i> Create New contract type</button>
          </div>
        </div>
      </div>
    @endsection

   

  {{-- model create --}}
      <div class="modal fade bd-example"  id="createContractType"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
            </div>
            <div class="card-body">
              <form action="{{action('contracttypeController@store')}}" method="POST">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <div class="row">
                      <label for="">Type of contract</label>
                      <div class="col-8"> 
                        <input type="text" class="form-control" placeholder="type of contract" name="contracttype">
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
                      <div class="col-4"><p>Edit of contract</p></div>
                      <div class="col-7">
                          <div class="form-group">
                          
                              <input type="text" name="contracttype" id="" class="form-control">
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



      {{-- model delete --}}
      <div  class="modal fade" id="deleteContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" >Confirmation</h5>
              <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formDelete">
                @csrf
                @method('DELETE')
              <div class="modal-body">
              
                  <p class="text-danger">Are you sure that you want to delete that?</p>
                  <h3 id="conId"></h3>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script>
       $('#deleteContractType').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id')
        var title = button.data('contracttype')
        var modal = $(this)
        modal.find('#conId').val(id)
        var url = "{{url('/contracttype/')}}/"+id;
        $("#formDelete").attr('action',url);
        
      </script>
    </body>