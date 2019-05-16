@extends('layout.dashboard')
@section('content')
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
                                        <tr>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#editClient"
                                                    data-id="{{$value->id}}" data-firstname="{{$value->firstname}}" data-lastname="{{$value->lastname}}" 
                                                    data-address="{{$value->address}}" data-phonenumber="{{$value->phonenumber}}" data-email="{{$value->email}}">
                                                    <i class="material-icons text-success">create</i>
                                                </a>
                                                <input type="checkbox" name="disable" id="disable">
                                                {{$value->id}}
                                            </td>
                                            <td>{{$value->firstname}} {{$value->lastname}}</td>
                                            <td>{{$value->address}}</td>
                                            <td>{{$value->phonenumber}}</td>
                                            <td>{{$value->email}}</td>
                                            <td> 
                                                <a  href="#" id="toggleContractTable" 
                                                    onclick="clientDetail({{$value->id}})" class="togglePayment">
                                                    <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>
                    {{-- list all contract of client --}}
                    <div class="table-responsive">
                        <div id="tableClientContract">
                            <table id="table2" class="table table-striped table-bordered table-hover collapse">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Contract type</th>
                                        <th>Status</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Monthly bill</th>
                                        <th>Bills</th>
                                    </tr>
                                </thead>
                                <tbody id="clientContract">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- list all of client bill --}}
                    <div class="table-responsive">
                        <table  id="myTabless" class="table table-striped table-bordered table-hover collapse">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Month</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Due date</th>
                                    <th>Bill</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    function clientDetail(id){
        var url = "{{ url('payment/showData') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},

            success:function(data){
                console.log(data);
                // var clientContractTable = '<table id="table2" class="table table-striped table-bordered table-hover collapse"> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Contract type</th> <th>Status</th> <th>Start</th> <th>End</th> <th>Monthly bill</th> <th>Bills</th> </tr> </thead> <tbody>';
                // for(var i = 0; i < data.length; i++) {
                //     clientContractTable += i '<tr><input type="checkbox" name="disable" id="disable"><td>' + data[i].id +"</td><td>"
                //                         +data[i].contracttype_id+"</td><td>"
                //                         +data[i].status +'</td><td>'
                //                         +data[i].startdate +'</td><td>'
                //                         +data[i].enddate +'</td><td>'
                //                         +data[i].monthlybill +'</td>'
                //                         +'<td> <a href="#" class="toggleBill"> <i class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i> </a> </td> </tr>';
                // }
                // clientContractTable += '</tbody></table>';
                // $("#table2").append(clientContractTable);
    //         var len = 0;
    //        $('#userTable tbody').empty(); // Empty <tbody>
    //        if(data['data'] != null){
    //          len = data['data'].length;
    //        }

    //        if(len > 0){
    //          for(var i=0; i<len; i++){
    //            var id = data['data'][i].id;
    //            var contracttype_id = data['data'][i].contracttype_id;
    //            var status = data['data'][i].status;
    //            var startdate = data['data'][i].startdate;
    //            var enddate = data['data'][i].enddate;
    //            var monthlybill = data['data'][i].monthlybill;

    //            var tr_str = "<tr>" +
    //                "<td align='center'>" + (i+1) + "</td>" +
    //                "<td align='center'>" + contracttype_id + "</td>" +
    //                "<td align='center'>" + nastatusme + "</td>" +
    //                "<td align='center'>" + startdate + "</td>" +
    //                "<td align='center'>" + enddate + "</td>" +
    //                "<td align='center'>" + monthlybill + "</td>" +
    //                '<td> <a href="#" class="toggleBill"> <i class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i> </a> </td>'+
    //            "</tr>";

    //            $("#clientContract tbody").append(tr_str);
    //          }
    //        }else if(data['data'] != null){
    //           var tr_str = "<tr>" +
    //               "<td align='center'>1</td>" +
    //               "<td align='center'>" + contracttype_id + "</td>" +
    //                "<td align='center'>" + nastatusme + "</td>" +
    //                "<td align='center'>" + startdate + "</td>" +
    //                "<td align='center'>" + enddate + "</td>" +
    //                "<td align='center'>" + monthlybill + "</td>" +
    //                '<td> <a href="#" class="toggleBill"> <i class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i> </a> </td>'+
    //           "</tr>";

    //           $("#clientContract tbody").append(tr_str);
    //        }else{
    //           var tr_str = "<tr>" +
    //               "<td align='center' colspan='4'>No record found.</td>" +
    //           "</tr>";

    //           $("#clientContract tbody").append(tr_str);
    //        }

    //      }
    //    });
            },
            error:function(){
                alert("Route Not Found." + id);
            },
        });
        console.log(url);
    }
</script>
@endsection