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
            <h1>Payments</h1>
            <div class="card">
                <div class="card-body">
                    {{-- list of client --}}
                    <div class="table-responsive">
                        <div id="clientHasContract">
                            <table id="myTables" class="table table-striped table-bordered table-hover">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>Disable ID</th>
                                        <th>Clients</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
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
                                                        <td>{{$value->email}}</td>
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
<script src="{{asset('js/app.js')}}"></script>
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
                var billTable = '<table id="myTabless" class="table table-striped table-bordered table-hover"> <thead class="bg-dark text-white"> <tr> <th>Month</th> <th>Amount</th> <th>Status</th> <th>Due date</th> <th>Bill</th> </tr> </thead> <tbody>';
                var clientContractTable = '<table id="table2" class="table table-striped table-bordered table-hover "> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Contract type</th> <th>Status</th> <th>Start</th> <th>End</th> <th>Monthly bill</th> <th>Bills</th> </tr> </thead> <tbody>';
                for(var i = 0; i <data['contracts'].length; i++) {
                    for(var j = 0; j <data['type'].length;j++){
                        for(var k = 0; k <data['status'].length;k++){
                            if(data.contracts[i].client_id == id && data.status[k].id == data.contracts[i].status_id && data.type[j].id == data.contracts[i].contracttype_id){
                                clientContractTable +='<tr> <td class=" text-center"> CO00' + data.contracts[i].id +'</td><td>'
                                                    +data.type[j].contracttype+"</td><td>"
                                                    +data.status[k].status +'</td><td>'
                                                    +data.contracts[i].startdate +'</td><td>'
                                                    +data.contracts[i].enddate +'</td><td>'
                                                    +data.contracts[i].monthlybill +'</td>'
                                                    +'<td> <a href="#"><i class="material-icons text-info ml-5 ">attach_money<i class="material-icons">arrow_drop_down</i></i></a></td></tr>';
                            }
                        }
                    }
                }
                clientContractTable += '</tbody></table>';
                $("#tableClientContract").html(clientContractTable);
                // show bill table of contract
                for(var i = 0; i <data['bills'].length; i++) {
                    for(var k = 0; k <data['states'].length; k++) {
                        var monthbill = new Date(data.bills[i].month);
                        var month = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"][monthbill.getMonth()];
                        var getMonthBill = month + ',' + monthbill.getFullYear();
                        if(data.bills[i].contract_id == data.contracts[i].id && data.bills[i].billStatus_id == data.states[k].id){
                            billTable +='<tr> <td class=" text-center">' + getMonthBill +'</td><td>'
                                                +data.bills[i].amount+"</td><td>"+'<i class="material-icons text-success ml-3 mr-5">create</i>'
                                                +data.states[k].status+"</td><td>"
                                                +data.bills[i].duedate+"</td>"
                                                +'<td> <a href="#"><i class="material-icons text-success ml-5 ">description</i></a></td></tr>';
                        }
                    }
                }
                billTable +='</tbody></table>';
                $("#showBill").html(billTable);

            },
            error:function(){
                alert("Data Not Founded.");
            },
        });
    }
</script>
@endsection