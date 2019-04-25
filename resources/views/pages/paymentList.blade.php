@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1>List of Paymets</h1>
        <div class="card">
            <div class="card-body">
                {{-- <table id="myTable" class="table table-striped table-bordered table-hover"> --}}
                        <table id="myTables" class="table table-striped table-bordered table-hover">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>Disable ID</th>
                                        <th>Clients</th>
                                        <th>Contract</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#"><i class="material-icons text-success">create</i></a>
                                            <input type="checkbox" name="disable" id="disable">
                                            1
                                        </td>
                                        <td>Li</td>
                                        <td>File</td>
                                    </tr>
            
                                    
                                </tbody>
                                <br>
                            </table>
                                <table class="table table-striped table-bordered table-hover">
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
                                        <tr>
                                            <td>
                                                <a href="#"><i class="material-icons text-success">create</i></a>
                                                1
                                            </td>
                                            <td>car</td>
                                            <td>Open</td>
                                            <td>20/10/2019</td>
                                            <td>20/11/2019</td>
                                            <td>$15</td>
                                            <td>file</td>
                                        </tr>
                                    </tbody>
                                </table>
            
                                <table  id="myTable" class="table table-striped table-bordered table-hover">
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
                                            <tr>
                                                <td>Oct.2019.12</td>
                                                <td>$15</td>
                                                <td>Paid <a href="#"><i class="material-icons text-success">create</i></a></td>
                                                <td>5/11/2019</td>
                                                <td>file</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </table>
                            <div>

                        </div>
               </div>

            </div>
        </div>
    </div>
@endsection