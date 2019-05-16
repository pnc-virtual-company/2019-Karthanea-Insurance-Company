@extends('layout.dashboard')
@section('content')
    <div class="container">
        {{-- list all contract of client --}}
        <div class="table-responsive">
            <div class="tableClientContract"></div>
                <table id="table2" class="table table-striped table-bordered table-hover d-none">
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
                        @foreach ($clientContract as $item)
                            <tr class="data-row">
                                <td class="id">
                                    <div class="row">
                                        <div class="col-5">
                                            {{$item->id}}
                                        </div>
                                        <div class="col-4">
                                            <a href="" data-toggle="modal" data-target="#editContract" data-id="{{$item->id}}" data-status="{{$item->status}}" data-startdate="{{$item->startdate}}" data-contracttype_id="{{$item->contracttype_id}}" data-enddate="{{$item->enddate}}" data-monthlybill="{{$item->monthlybill}}" data-client_id="{{$item->client_id}}" data-enddate="{{$item->enddate}}" data-toggle="modal"><i class="material-icons text-success">edit</i></a>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="contracttype">
                                        <div class="row">
                                            <div class="col-6">
                                                {{$item->contracttype->contracttype}} 
                                            </div>
                                            <div class="col-3">
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-info ml-5">insert_drive_file</i>
                                                </a>  
                                            </div>
                                        </div>
                                    </td>
                                    <td class="status">{{$item->contractStatus->status}}</td>
                                    <td class="startdate">{{$item->startdate}}</td>
                                    <td class="enddate">{{$item->enddate}}</td>
                                    <td class="monthlybill">{{$item->monthlybill}} $</td>
                                    <td>
                                        <a href="#" class="toggleBill">
                                            <i  class="material-icons text-info ml-5 ">attach_money <i class="material-icons">system_update_alt</i></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection