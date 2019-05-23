<table id="myTable1" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead class="bg-dark text-white">
        <tr>
            <th>ID</th>
            <th>Month</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Duedate</th>
            
           
        </tr>
    </thead>
     <tbody>
        @foreach ($note as $value)
                 <tr>
                    <td>{{$value->id}} </td>
                    <td>{{$value->month}}</td>
                    <td>{{$value->amount}}</td>
                    <td>{{$value->billStatus->status}}   
                    <td>{{$value->duedate}}       
                </tr>
        @endforeach
    </tbody> 
</table>