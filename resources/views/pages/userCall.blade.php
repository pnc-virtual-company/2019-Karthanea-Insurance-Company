@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1> Clients Call Information</h1>
        <div class="myCalendar p-3 pr-4 float-right">
            <a href="{{url('/calendar')}}">
                <i class="material-icons">date_range</i>
                My Calendar
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered table-hover">
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
                                        {{$item->id}}
                                    </td>
                                    <td>{{$item->firstname}} {{$item->lastname}} </td>
                                    <td ><a class="toggleCallHistory" href="#" onclick="showCallData({{$item->id}})"><i class="material-icons text-info ml-5">insert_drive_file</i></a></td>
                                    <td><i class="material-icons text-primary text-center">call</i></td>
                                </tr>
                             @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
            </div>
          </div>
 <script src="{{asset('js/app.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection