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
                                <tbody>
                                    
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

<script>
    function clientDetail(id){
        var url = "{{ url('payment/showData') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},

            success:function(data){
                console.log(data);

            },
            error:function(){
                alert(url+ id);
            },
        });
        console.log(url);
    }
</script>
@endsection