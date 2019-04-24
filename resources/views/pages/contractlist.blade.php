@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1>List of Clients</h1>
        <div class="card">
            <div class="card-body">
                <table id="contract" class="table table-striped table-bordered table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Disable ID</th>
                            <th>Clients</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><i class="material-icons text-success">create</i></a>
                                <input type="checkbox" name="disable" id="disable">
                                1
                            </td>
                            <td>Mona</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><i class="material-icons text-success">create</i></a>
                                <input type="checkbox" name="disable" id="disable">
                                2
                            </td>
                            <td>Sith</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><i class="material-icons text-success">create</i></a>
                                <input type="checkbox" name="disable" id="disable">
                                3
                            </td>
                            <td>Sona</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#createClient"><i class="material-icons">control_point</i> Create Client</button>
    </div>
          <!-- Modal -->
          <div class="modal fade" id="createClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="name">Address</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="phone">Phpne</label>
                                </div>
                                <div class="col-10">
                                    <input type="number" name="phone" id="phone" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="email">E-Mail</label>
                                </div>
                                <div class="col-10">
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info">OK</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
@endsection