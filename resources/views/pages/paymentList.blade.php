@extends('layout.dashboard')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<body>
    <div class="container mt-4">
        <div class="row shadow-lg bg-light">
            <div class="col-4 col-lg-4 col-md-4 col-sm-12"><button class="btn btn-block btn-light "><i class="material-icons text-success  mr-4">call</i>  In a call</button></div>
            <div class="col-4 col-lg-4 col-md-4 col-sm-12"><button class="btn btn-block btn-light"><i class="material-icons text-success  mr-4">access_time</i> 5min13sec</button></div>
            <div class="col-4 col-lg-4 col-md-4 col-sm-12"><button class="btn btn-block btn-light"><i class="material-icons text-danger sm mr-4">call</i>  HANG UP</button></div>
        </div>
    </div>
        <div class="container mt-4">
            <h1>Payments Information</h1>
            <div class="card">
                <div class="card-body">
                    {{-- list of client --}}
                    <div class="table-responsive">
                        <div id="clientHasContract">
                            <table id="myTable1" class="table table-striped table-bordered table-hover">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>Disable ID</th>
                                        <th>Clients</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>Contract</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach ($client as $value)
                                        @foreach ($contract as $item)
                                         @if ($value->id == $item->client_id)
                                                <tr>
                                                    <td class="text-center">
                                                        CL00{{$value->id}}
                                                        </td>
                                                        <td>{{$value->firstname}} {{$value->lastname}}</td>
                                                        <td>{{$value->address}}</td>
                                                        <td>{{$value->phonenumber}}</td>
                                                        <td>{{$value->email}}
                                                        
                                                        </td>
                                                        <td> 
                                                            <a  href="#" class="toggleContractTable" 
                                                            onclick="clientDetail({{$value->id}})" >
                                                            <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif  
                                        @endforeach
                                    @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>
                    {{-- list all contract of client --}}
                    <div class="table-responsive">
                        <div id="tableClientContract"></div>
                    </div>
                    {{-- list all of client bill --}}
                    <div class="table-responsive">
                        <div id="showBill"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit contract type-->
<div class="modal fade" id="editContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="" id="editBillStatus">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Bill Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-3">
                              <label for="">Bill Status:</label>
                          </div>
                          <div class="col-9">
                              <select class="custom-select" name="billStatus_id" id="billStatus_id">
                                <option value="Unpaid" selected>Unpaid</option>
                                <option value="Paid">Paid</option>
                              </select>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white bg-primary">Save</button>
                        <button type="button" class="btn text-white bg-danger" data-dismiss="modal">No</button>
                    </div>
              </form>
          </div>
        </div>
      </div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/table.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
<script>
    function clientDetail(id){
        var url = "{{ url('payment/showData') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},

            success:function(data){
                var clientContractTable = '<table id="myTabless" class="table table-striped table-bordered table-hover "> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Contract type</th> <th>Status</th> <th>Start</th> <th>End</th> <th>Monthly bill</th> <th>Bills</th> </tr> </thead> <tbody>';
                for(var i = 0; i <data['contracts'].length; i++) {
                    for(var j = 0; j<data['type'].length;j++){
                        for(var k = 0; k<data['status'].length;k++){
                            if(data.contracts[i].client_id == id && data.type[j].id == data.contracts[i].contracttype_id && data.status[k].id == data.contracts[i].status_id){
                                clientContractTable +='<tr> <td class=" text-center"> CO00' + data.contracts[i].id +'</td><td>'
                                                    +data.type[j].contracttype+"</td><td>"
                                                    +data.status[k].status +'</td><td>'
                                                    +data.contracts[i].startdate +'</td><td>'
                                                    +data.contracts[i].enddate +'</td><td>'
                                                    +data.contracts[i].monthlybill +'</td>'
                                                    +'<td> <a href="#" onclick="showBillData('+data.contracts[i].id+')"><i class="material-icons text-info ml-5 ">attach_money <i class="material-icons">arrow_drop_down</i></i> </a> </td> </tr>';
                            }
                        }
                    }
                }
                clientContractTable += '</tbody></table>';
                $("#tableClientContract").html(clientContractTable);
            },
            error:function(){
                alert("Data Not Founded.");
            },
        });
    }
</script>

<script>
    function showBillData(id){
        var url = "{{ url('payment/showBill') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},
                // show bill table of contract
                success:function(json){
                   
                var billTable = '<table id="myTables" class="table table-striped table-bordered table-hover"> <thead class="bg-dark text-white"> <tr> <th>Month</th> <th>Amount</th> <th>Status</th> <th>Due date</th> <th>Bill</th> </tr> </thead> <tbody>';
                for(var i = 0; i <json['bills'].length; i++) {
                    for(var k = 0; k <json['states'].length; k++) {
                        var monthbill = new Date(json.bills[i].month);
                        var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"][monthbill.getMonth()];
                        var getMonthBill = month + ',' + monthbill.getFullYear();
                        var startdate= json.bills[i].month;
                        var enddate = json.bills[i].duedate;
                        for(var t = startdate; t<= enddate; t++){
                            if(json.bills[i].billStatus_id == json.states[k].id && json.bills[i].contract_id == id){
                                billTable +='<tr><td>' + getMonthBill +'</td><td>'
                                                    +json.bills[i].amount+'</td><td><a href="#" id="getBillId" data-id="'+json.bills[i].id+'" data-billStatus_id="'+json.bills[i].billStatus_id+'" data-toggle="modal" data-target="#editContractType"><i class="material-icons text-success ml-3 mr-5">create</i></a>'
                                                    +json.states[k].status+"</td><td>"
                                                    +json.bills[i].duedate+"</td>"
                                                    +'<td> <a href="{{'paymentpdf'}}" id="js-download" class="exportPDF"><i class="material-icons text-success ml-5 ">description</i></a></td></tr>';
                            }
                        }
                    }
                }
                billTable +='</tbody></table>';
                $("#showBill").html(billTable);
            },
            error:function(){
                alert(error);
            },
        });
    }

</script>


@endsection