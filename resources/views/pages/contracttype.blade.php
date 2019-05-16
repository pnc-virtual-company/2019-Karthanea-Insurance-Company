@extends('layout.dashboard')
@section('content')
<script src="{{asset('js/app.js')}}"></script>
    <div class="content">
      <div class="container-fluid">.
        <h1>Contract Type</h1>
                <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th class="text-center ">ID</th>
                                        <th> Contract type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($contracttype as $item)
                                    <tr >
                                        <td class="text-center">
                                          @if (Auth::user()->hasRole('Administrator'))
                                            <a href="#deleteContractType" data-id="{{$item->id}}" data-contracttype="{{$item->contracttype}}" data-toggle="modal" data-target="#deleteContractType"><i class="material-icons text-danger">delete</i></a>
                                            <a href="{{route('contracttype.update',$item->id)}}"  data-toggle="modal" data-target="#updateContractType" data-id="{{$item->id}}"  data-contracttype="{{$item->contracttype}}" ><i class="material-icons text-success">edit</i></a>
                                          @endif
                                            {{$item->id}}
                                        </td>
                                        <td>{{$item->contracttype}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                      </div>
                <button type="submit" class="btn bg-primary text-white" data-toggle="modal" data-target="#createContractType"><i class="material-icons">control_point</i> Create New contract type</button>
              </div>
            </div>
          </div>
        </div>
      
{{-- model create for contractType --}}    
        <div class="modal fade bd-example"  id="createContractType"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new contract type</h5>
              </div>
              <div class="card-body">
                <form action="{{action('contracttypeController@store')}} " method="POST">
                  @csrf
                  <div class="modal-body">          
                    <div class="form-group">
                      <div class="row">
                        <label for="">Type of contract</label>
                        <div class="col-8">

                          {{-- field of contractType to be create --}}
                          <input type="text" class="form-control" name="contracttype" id="contracttype" placeholder="type of contract"> 

                        </div>
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
   {{--End model create --}}    
{{-- model update for contractType --}}    
  <div class="modal fade" id="updateContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit contract type</h5>
          </div>
            <form action="" method="POST" id="editForm" >
              @csrf
              @method('PATCH')
            <div class="modal-body">            
              <div class="row">
                <div class="col-4"><p>Edit of contract</p></div>
                  <div class="col-7">
                    <div class="form-group">

                      {{-- field of contractType to be update --}}
                      <input type="text" name="contracttype" id="contracttype" class="form-control">

                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
{{--End model update --}}    


      <script src="{{asset('js/app.js')}}"></script>
{{-- script update for contractType --}}
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script>
              $('#updateContractType').on('show.bs.modal',function(event){
                  var button = $(event.relatedTarget)
                  var contracttype= button.data('contracttype')
                  var id = button.data('id')
                  
                  var modal = $(this)
                  modal.find('#contracttype').attr('value',contracttype)
                  var url ="{{url('/contracttype')}}/"+id;
                  $('#editForm').attr('action',url);   
              }) 
          </script>
{{-- End script Delete --}}

      
{{-- model Delete for contractType --}}    
  <div class="modal fade" id="deleteContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" >Confirmation</h5>
              
            </div>
            <div class="modal-body">
              
                {{-- Message comfirmation of delete contractType --}}
                 <p class="text-danger">Are you sure that you want to delete this contract type?</p>
       
            </div>
            <form id ="deleteModal" action="" method="POST">
                @csrf
               @method('delete')
            <div class="modal-footer">
                
              <button type="submit" class="btn btn-info" >OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              
            </div>
          </form>
          </div>
        </div>
      </div>
    <script src="{{asset('js/app.js')}}"></script>
{{-- script Delete for contractType --}}    
      <script>
          $('#deleteContractType').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id = button.data('id')
            console.log(id)
            var modal=$(this)
            var url="{{url('contracttype')}}/"+id;
            $('#deleteModal').attr('action',url);
          });
          </script>
{{-- End script Delete --}}
     @endsection