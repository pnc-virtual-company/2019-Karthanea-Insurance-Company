@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1>List of Clients call calendar</h1>
        <div class="myCalendar p-3 pr-4 float-right">
            <a href="{{url('/calendar')}}">
                <i class="material-icons">date_range</i>
                My Calendar
            </a>
        </div>
        <div class="card">
            <div class="card-body">
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
                        <tr>
                            <td>
                                <input type="checkbox" name="disable" id="disable">
                                1
                            </td>
                            <td>Mona</td>
                            <td>
                                <a href="#">
                                    <i class="material-icons">insert_drive_file</i>
                                </a>
                            </td>
                            <td>
                                <a href="#"><i class="material-icons">call</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="disable" id="disable">
                                2
                            </td>
                            <td>Sith</td>
                            <td>
                                <a href="#">
                                    <i class="material-icons">insert_drive_file</i>
                                </a>
                            </td>
                            <td>
                                <a href="#"><i class="material-icons">call</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" name="disable" id="disable">
                                3
                            </td>
                            <td>Sona</td>
                            <td>
                                <a href="#">
                                    <i class="material-icons">insert_drive_file</i>
                                </a>
                            </td>
                            <td>
                                <a href="#"><i class="material-icons">call</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <!-- Modal -->
    
            </div>
          </div>
@endsection