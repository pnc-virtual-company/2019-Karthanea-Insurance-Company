{{-- {{dd($monthly_post_data_array)}} --}}
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
                                {{-- <select id="pieOption" value='DataSet' class="form-control" onChange="switchPieData();">
                                    @foreach ($bill as $item)
                                    <option value="{{$item->id}}">{{$item->month}}</option>
                                    @endforeach --}}
                                   

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

                                {{-- <select id="numClientLate" value='DataSet' class="form-control" onChange="clientLate();">
                                    @foreach ($bill as $item)
                                    <option value="{{$item->id}}">{{$item->month}}</option>
                                    @endforeach --}}
                                   
                                    
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
{{-- {{dd($monthly_post_data_array)}} --}}
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
<div class="tableClientContract"></div>
</body>
</html>
          <script src="{{asset('js/app.js')}}"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    function clientDetail(id){
        var url = "{{ url('chart/showData') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: {_token: "{{csrf_token()}}",id:id},


            success:function(data){
                console.log(data);
                var billTable = '<table id="myTabless" class="table table-striped table-bordered table-hover"> <thead class="bg-dark text-white"> <tr> <th>Month</th> <th>Amount</th> <th>Status</th> <th>Due date</th> <th>Bill</th> </tr> </thead> <tbody>';
                var clientContractTable = '<table id="table2" class="table table-striped table-bordered table-hover "> <thead class="bg-dark text-white"> <tr> <th>ID</th> <th>Contract type</th> <th>Status</th> <th>Start</th> <th>End</th> <th>Monthly bill</th> <th>Bills</th> </tr> </thead> <tbody>';
               
                        // for(var k = 0; k <data['bill'].length;k++){
                            
                        //         clientContractTable +='<tr> <td class=" text-center"> CO00' + data.contracts[i].id +'</td><td>'
                                                   
                        //                             +data.bill[i].amount +'</td>'
                        //                             +'<td> <a href="#"><i class="material-icons text-info ml-5 ">attach_money<i class="material-icons">arrow_drop_down</i></i></a></td></tr>';
                           
                        // }
                    
                clientContractTable += '</tbody></table>';
                $(".tableClientContract").html(clientContractTable);
                // show bill table of contract
            //     for(var i = 0; i <data['bills'].length; i++) {
            //         for(var k = 0; k <data['states'].length; k++) {
            //             var monthbill = new Date(data.bills[i].month);
            //             var month = ["January", "February", "March", "April", "May", "June",
            //             "July", "August", "September", "October", "November", "December"][monthbill.getMonth()];
            //             var getMonthBill = month + ',' + monthbill.getFullYear();
            //             if(data.bills[i].billStatus_id == data.states[k].id){
            //                 billTable +='<tr><td class=" text-center">' + getMonthBill +'</td><td>'
            //                                     +data.bills[i].amount+"</td><td>"+'<i class="material-icons text-success ml-3 mr-5">create</i>'
            //                                     +data.states[k].status+"</td><td>"
            //                                     +data.bills[i].duedate+"</td>"
            //                                     +'<td> <a href="#"><i class="material-icons text-success ml-5 ">description</i></a></td></tr>';
            //             }
            //         }
            //     }
            //     billTable +='</tbody></table>';
            //     $("#showBill").html(billTable);

             },
            error:function(){
                alert("Data Not Founded.");
            },
        });
    }
 
  //barChart
  var bar = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(bar, {
      type: 'bar',
      data: {
        labels: {!!json_encode($chart_name['label'])!!},
        //   labels: ['Jan', 'Feb', 'Mar', 'April', 'May', 'jun'],
          datasets: [{
              label: 'Operator',
              data: {!!json_encode($chart_name["data"])!!},
            //   data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)',
                  'rgba(255, 206, 86, 0.7)',
                  'rgba(75, 192, 192, 0.7)',
                  'rgba(153, 102, 255, 0.7)',
                  'rgba(255, 159, 64, 0.7)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
    //barChart
    var line= document.getElementById('line').getContext('2d');
  var myChart = new Chart(line, {
      type: 'line',
      data: {
          labels:{!!json_encode($chart_duration['label_duration'])!!},
          datasets: [{
              label: 'Duration',
              data: {!!json_encode($chart_duration["data_duration"])!!},
              backgroundColor: [
                  'rgba(255, 99, 132, 0.7)',
                  'rgba(54, 162, 235, 0.7)',
                  'rgba(255, 206, 86, 0.7)',
                  'rgba(75, 192, 192, 0.7)',
                  'rgba(153, 102, 255, 0.7)',
                  'rgba(255, 159, 64, 0.7)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>
@endsection 