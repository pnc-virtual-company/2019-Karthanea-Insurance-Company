<table id="myTable3" class="table table-striped table-bordered" style="width:100%">
    <thead class="bg-dark text-white">
       <tr>
           <th>ID</th>
           <th>Month</th>
          <th>Amounth</th>
          <th>Status</th>
          <th>Due date</th>
         
         
       </tr>
    </thead>
    <tbody>
    @foreach ($note as $item)
    
       <tr class="data-row">
          <td class="enddate">{{$item->id}}</td>
          <td class="enddate">{{date('M,Y', strtotime($item->month))}}</td>
          <td class="monthlybill">$ {{$item->amount}}</td>
          <td class="monthlybill">{{$item->billStatus->status}}</td>
          <td class="monthlyduedate"> {{$item->duedate}}</td>
          
       </tr>
      

    @endforeach
    </tbody>
 </table>