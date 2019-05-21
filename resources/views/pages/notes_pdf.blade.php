<table id="myTable3" class="table table-striped table-bordered" style="width:100%">
   <thead class="bg-dark text-white">
      <tr>
         <th>ID</th>
         <th>Client Name</th>
         <th>ContractType</th>
         <th>Status</th>
         <th>Start</th>
         <th>End</th>
         <th>MonthlyBill</th>
         <th>MonthlyDueDate</th>
        
      </tr>
   </thead>
   <tbody>
         @foreach ($notes as $item)
      <tr class="data-row">
         <td class="id">
            <div class="row">
               <div class="col-5">
                             {{$item->id}}
                         </div>
            
            </div>
         </td>
         <td class="client">
            <div class="row">
               <div class="col-6">
                             {{$item->client->firstname}} {{$item->client->lastname}}
                         </div>
               
            </div>
         </td>
         <td class="contracttype">
            <div class="row">
               <div class="col-6">
                          {{$item->contracttype->contracttype}} 
                         </div>
               
               
            </div>
            
         </td>
         
         <td class="status">{{$item->contractStatus['status']}}</td>
         <td class="enddate">{{$item->startdate}}</td>
         <td class="enddate">{{$item->enddate}}</td>
         <td class="monthlybill">$ {{$item['monthlybill']}}</td>
         <td class="monthlyduedate"> {{$item->monthlyduedate}}th</td>
         
      </tr>
         @endforeach
   </tbody>
</table>