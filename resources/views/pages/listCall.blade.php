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
                <div class="table-responsive">
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
                            @foreach ($client as $value=>$item)
                            @if ($item->status=='1')
                                <tr>
                                    <td>
                                    <a href="{{route('call.update',$item->id)}}" data-toggle="modal"  data-target="#editClientActive" data-id="{{$item->id}}" data-firstname="{{$item->firstname}}" data-lastname="{{$item->lastname}}" ><i class="material-icons text-success">edit</i></a>
                                    <a href="{{route('client.update',$item->id)}}" data-id="{{$item->id}}" data-toggle="modal" data-target="#disableClient">
                                        <input type="checkbox" name="disable[]" id="disable">
                                    </a>
                                        {{$item->id}}
                                    </td>
                                    <td>{{$item->firstname}} {{$item->lastname}} </td>
                                    <td ><a class="toggleCallHistory" href="#" onclick="showCallData({{$item->id}})"><i class="material-icons text-info ml-5">insert_drive_file</i></a></td>
                                    <td><i class="material-icons text-primary text-center">call</i></td>
                                </tr>
                             @endif
                            @endforeach
                            </tbody>
                            <br>
                        </table>
                </div>
                <div class="table-responsive">
                <div id="tableCall"></div>
                    
                </div>
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
            <form method="POST" action="{{action('callController@store')}}">
            @csrf
            <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New call<i class='material-icons ml-3 text-success'>call</i></h5>
                      </div>
                      <div class="card-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="">Client id</label>
                                        <div class="col-10">
                                        <input type="number" name="client_id" class="form-control">
                                    </div>
                                 </div>
                                </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label for="" >Call Operator</label>
                                        <div class="col-4">
                                            <input type="text" name="callOperator" class="form-control">
                                        </div> 
                                            <label for="" >Duration</label>
                                        <div class="col-4">
                                            <input type="text" name="duration" class="form-control">
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
                                                            <input type='text' name="date" class='startdate' placeholder="mm/dd/yy"/>
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
                                    <textarea name="comments" id="" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="modal-footer mr-5">
                    <button type="submit" class="btn bg-info "><i class='material-icons'>check</i> Save Call</button>
                    <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                </div>
            </form>
        </div>
    </div>
    </div> 
 
      </div>
        {{-- modal edit call  --}}
      <div class="modal fade bd-edit-modal-lg" id="editCall" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="{{route('call.update',$item->id)}}" method="POST" id="formEditCall">
                        <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New call<i class='material-icons ml-3 text-success'>call</i></h5>
                                  </div>
                                  <div class="card-body">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="">Client</label>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="client_id" id="client_id" value=""> 
                                                    </div>
                                                 </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="callOperator" >Call Operator</label>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="callOperator" id="callOperator" value="">
                                                    </div> 
                                                        <label for="" >Duration</label>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="duration" id="duration" value="" >
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
                                                                <input type='text' name="date" id="date" class='startdate' placeholder="mm/dd/yy"  />
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
                                            <textarea type="text" cols="50" id="comments" name="comments" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mr-5">
                            <button type="submit" class="btn bg-info "><i class='material-icons'>check</i> Save Call</button>
                            <button type="button" class="btn bg-danger float-left" data-dismiss="modal"><i class='material-icons'>close</i> Cencel</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div> 
          </div>
          <div class="modal fade" id="editClientActive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit New call</h5>
                </div>
                <form action="" method="POST" id="editClientList">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Firstname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" required name="firstname" id="firstname" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="">Lastname</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" required name="lastname" id="lastname" value="" class="form-control">
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

        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
       $('#editClientActive').on('show.bs.modal',function (event){
            var button = $(event.relatedTarget)
            var firstname = button.data('firstname')
            var lastname = button.data('lastname')  
            var id = button.data('id')
            console.log(id)

            var modal = $(this)
            modal.find('#firstname').attr('value',firstname)
            modal.find('#lastname').attr('value',lastname)
             var url ="{{url('/call')}}/"+ id;
            $('#editClientList').attr('action',url);
            });

            $('#editCall').on('show.bs.modal',function (event){
                console.log('edit');  
            var button = $(event.relatedTarget)
            var date = button.data('date')
            console.log(date)
            var callOperator = button.data('callOperator')   
            console.log(callOperator) 
            var duration = button.data('duration')
            console.log(duration)
            var comments = button.data('comments')
            console.log(comments)
            var client_id = button.data('client_id')
            var id = button.data('id')
            console.log(id)
            var modal = $(this)
            modal.find('#date').attr('value',date)
            modal.find('#callOperator').attr('value',callOperator)
            modal.find('#duration').attr('value',duration)
            modal.find('#comments').text(comments)
            modal.find('#client_id').attr('value',client_id)
            var url ="{{url('/call')}}/"+ id;
            $('#formEditCall').attr('action',url);
            });
        </script>

    <script>
    function showCallData(id){
        var url = "{{ url('call/showCallData') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},
                // show call table of contract
                success:function(data){
                   
                var callTable = '<table id="myTable2" class="table table-striped table-bordered table-hover"> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Date</th> <th>Call Operator</th> <th>Duration</th> <th>Comments</th> </tr> </thead> <tbody>';
                for(var i = 0; i <data['call'].length; i++) {
                    if(data.call[i].client_id ==id){
                        callTable +='<tr><td><a href="#" data-id="'+data.call[i].id+'" data-date="'+data.call[i].date+'" data-callOperator="'+data.call[i].callOperator+'" data-duration="'+data.call[i].duration+'" data-comments="'+data.call[i].comments+'" data-client_id="'+id+'" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>' +data.call[i].id +'</td><td>'
                                                +data.call[i].date+'</td><td>'
                                                +data.call[i].callOperator+"</td><td>"
                                                +data.call[i].duration+"</td><td>"
                                                +data.call[i].comments+"</td>"
                    }
                }
                callTable +='</tbody></table>';
                $("#tableCall").html(callTable);
            },
            error:function(){
                alert('error');
            },
        });
    }
    </script>
@endsection 