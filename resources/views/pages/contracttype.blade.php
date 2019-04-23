
    @extends('layout.dashboard')
    @section('content')
    <div class="content">
        <div class="container-fluid">
            <h1>List of contract type</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table id="contractType" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>ID</th>
                                            <th>Contract Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Car</td>
                                            <td>
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-success">create</i>
                                                    <i class="material-icons text-danger">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Motor</td>
                                            <td>
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-success">create</i>
                                                    <i class="material-icons text-danger">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>House</td>
                                            <td>
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-success">create</i>
                                                    <i class="material-icons text-danger">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bicycle</td>
                                            <td>
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-success">create</i>
                                                    <i class="material-icons text-danger">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Land</td>
                                            <td>
                                                <a href="#" class="text-center">
                                                    <i class="material-icons text-success">create</i>
                                                    <i class="material-icons text-danger">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    