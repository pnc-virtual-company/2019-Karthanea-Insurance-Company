<script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@extends('layout.dashboard')
@section('content')
<html>
    <head>
        <title>Line Chart</title>
        <style>
            canvas{
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Payment Completion</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <select id="pieOption" value='DataSet' class="form-control" onChange="switchPieData();">
                                    @foreach ($bill as $item)
                                    <option value="{{$item->id}}">{{$item->month}}</option>
                                    @endforeach
                                </select>    
                            </div>
                        {{-- PieChart Element for Payment completion  --}}
                            <div class="col-8">
                                <div style="width:100%;">
                                    <canvas id="pieChart"></canvas>
                                </div>  
                            </div>
                        {{--End PieChart Element --}}
                        </div>
                    </div>
                    <div class="card-footer">     
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-warning">Late Payment</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <select id="numClientLate" value='DataSet' class="form-control" onChange="clientLate();">
                                    @foreach ($bill as $item)
                                    <option value="{{$item->id}}">{{$item->month}}</option>
                                    @endforeach
                                </select>    
                            </div>
                            <div class="col-4">
                                <h1 class="text-danger text-center" id="num">5</h1>
                                <h5 class="text-warning text-center">Client/s Late Pay Bills</h5>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
{{-- LineChart and BarChart Element  --}}
    <div class="row">        
        <div class="col-6 col-md-6 col-sm-12">
            <div style="width:100%;">
                <canvas id="line"></canvas>
            </div>
        </div>
        <div class="col-6 col-md-6 col-sm-12">            
            <div style="width:100%;">
                <canvas id="myChart"></canvas>
            </div>
         </div>
    </div>
{{-- End LineChart and BarChart Element --}}
</body>
</html>
<script>
        function showCallData(id){
            var url = "{{ url('payment/showBill') }}";
            $.ajax({
                type: "POST",
                url: url,
                data: {_token: "{{csrf_token()}}",id:id},
                    success:function(data){
                    
                    var callTable = '<table id="myTable2" class="table table-striped table-bordered table-hover"> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Date</th> <th>Call Operator</th> <th>Duration</th> <th>Comments</th> </tr> </thead> <tbody>';
                    for(var i = 0; i <data['call'].length; i++) {
                        if(data.call[i].client_id ==id){
                            callTable +='<tr><td><a href="#" data-id="'+data.call[i].id+'" data-date="'+data.call[i].date+'" data-cOperate="'+data.call[i].callOperator+'" data-duration="'+data.call[i].duration+'" data-comments="'+data.call[i].comments+'" data-client_id="'+id+'" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="material-icons text-success">create</i></a>' +data.call[i].id +'</td><td>'
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

