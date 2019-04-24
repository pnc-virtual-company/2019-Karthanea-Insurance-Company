    @extends('layout.dashboard')
    @section('content')
    
    
    <div class="content">
        <h1>List of contract type</h1>
                <div class="card">
                    <div class="card-body">
                        
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead class="">
                        <tr>
                            <th class="text-center"><h5>ID</h5></th>
                            <th> <h5>Contract type</h5></th>
                             
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               1
                            </td>
                            <td>Car</td>
                           
                        </tr>
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               2
                            </td>
                            <td>Moto</td>
                           
                        </tr>
                        <tr >
                            <td class="text-center">
                                <a href="#"><i class="material-icons text-danger">delete</i></a>
                                <a href="#"><i class="material-icons">edit</i></a>
                               3
                            </td>
                            <td>House</td>
                           
                        </tr>
                    </tbody>
                   
                </table>
            <button class="btn btn-info" type="submit"><i class="material-icons text-white">add_circle_outline</i>  Create contract type</button> 
            </div>

            </div>
                
    
                
    @endsection