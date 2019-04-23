    @extends('layout.dashboard')
    @section('content')
    <div class="content">
        <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered table-hover">
                                    <tr class="bg-dark">
                                        <th>ID</th>
                                        <th>Contract Type</th>
                                        <th>Action</th>
                                    </tr>
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
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection