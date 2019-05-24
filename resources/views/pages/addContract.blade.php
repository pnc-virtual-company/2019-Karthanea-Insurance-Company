@extends('layout.dashboard')
@section('content')
<div class="content">
	<div class="container mt-4">
		<div class="row shadow-lg bg-light">
			<div class="col-4">
				<button class="btn btn-block btn-light ">
					<i class="material-icons text-success  mr-4">call</i>  In a call
				</button>
			</div>
			<div class="col-4">
				<button class="btn btn-block btn-light">
					<i class="material-icons text-success  mr-4">access_time</i> 5min13sec
				</button>
			</div>
			<div class="col-4">
				<button class="btn btn-block btn-light">
					<i class="material-icons text-danger sm mr-4">call</i>  HANG UP
				</button>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<h1>Contracts Information </h1>
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="myTable3" class="table table-striped table-bordered" style="width:100%">
						<thead class="bg-dark text-white">
							<tr>
								<th>ID</th>
								<th>Client Name</th>
								<th>Contract Type</th>
								<th>Status</th>
								<th>Start</th>
								<th>End</th>
								<th>Monthly bill</th>
								<th>Monthly Due Date</th>
								<th>Bill</th>
							</tr>
						</thead>
						<tbody>
                        @foreach ($contractselect as $item)
							<tr class="data-row">
								<td class="id">
									<div class="row">
										<div class="col-5">
                                            {{$item->id}}
                                        </div>
										<div class="col-4">
											<a href="#" class="text-center">
												<a href="{{route('contract.update',$item->id)}}" data-toggle="modal" data-target="#editContract" 
													data-id="{{$item->id}}" data-status="{{$item->status}}" data-startdate="{{$item->startdate}}" 
													data-contracttype_id="{{$item->contracttype_id}}" data-monthlyduedate="{{$item->monthlyduedate}}" 
													data-enddate="{{$item->enddate}}" data-monthlybill="{{$item->monthlybill}}" data-client_id="{{$item->client_id}}" 
													 data-bill_id="{{$item->bill_id}}" data-toggle="modal">
													<i class="material-icons text-success">edit</i>
												</a>
											</a>
										</div>
									</div>
								</td>
								<td class="client">
									<div class="row">
										<div class="col-6">
                                            {{$item->client->firstname}} {{$item->client->lastname}}
                                        </div>
										<div class="col-1">
											<a href="#" id="edit-item">
												<i class="material-icons ml-5 text-info">call</i>
											</a>
										</div>
									</div>
								</td>
								<td class="contracttype">
									<div class="row">
										<div class="col-6">
                                			{{$item->contracttype->contracttype}} 
                                        </div>
										<div class="col-1">
												<a href="{{ url('pdf') }}" ><i class="material-icons text-success">description</i></a>
										</div>
										
									</div>
									
								</td>
								
								<td class="status">{{$item->contractStatus->status}}</td>
								<td class="startdate">{{$item->startdate}}</td>
								<td class="enddate">{{$item->enddate}}</td>
								<td class="monthlybill">$ {{$item['monthlybill']}}</td>
								<td class="monthlyduedate"> {{$item->monthlyduedate}}th</td>
								<td>
									<a href="#" class="text-center">$</a>
								</td>
							</tr>
                        @endforeach
						</tbody>
					</table>
				</div>
				<button type="button" class="btn bg-primary ml-3 text-white btn-md" data-toggle="modal" data-target=".bd-example-modal-lg">
					<i class='material-icons'>add_circle_outline</i> Add a new Contract
				</button>
				
			</div>
		</div>
	</div>
</div>
       {{-- modelad add a new contract --}}
<div class="modal fade bd-example-modal-lg" id="Contract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add New Contract</h5>
			</div>
			<div class="card-body">
				<form action="{{action('ContractController@store')}} " method="POST">
                @csrf
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<div class="col-2">
									<label for="">Client</label>
								</div>
								
									<div class="col-4">
										<select name="client_id" id="client_id" class="browser-default custom-select" required>
											@foreach ($client as $item)
												@if($item->status ==1)
											    <option value="{{$item->id}}">{{$item->firstname}} {{$item->lastname}}</option>
												@endif
												@endforeach
										</select>
									</div>
                                                        
									<div class="col-2">
										<label for="">Bill</label>
									</div> 
									
										<div class="col-4">
											<select name="bill_id" id="bill_id" class="browser-default custom-select" value="">
												@foreach ($billStatus as $item)
													@if($item->id==1)
														<option value="{{$item->id}}" >{{$item->status}} </option>
													@endif
												@endforeach
											</select>
										</div>
								
									</div>
									
									</div>
									<div class="form-group ">
										<div class="row">
											
													<div class="col-2">
														<label for="">Type</label>
													</div>
													<div class="col-4">
														<div class="input-group ">
															<select name="contracttype_id" id="" class="browser-default custom-select" required>
                                                                @foreach ($contracttype as $item)
                                                                    <option value="{{$item->id}}">{{$item->contracttype}}</option>
                                                               @endforeach
															</select>
																<span class="input-group-append">
																	<button class="btn btn-outline-secondary bg-info text-white" data-toggle="modal" data-target="#selectContractType" type="button" style="margin-top:0%;">
                                                                        Select
                                                                    </button>
																</span>
															</div>
														</div>
													
												
														<div class="col-2">
															<label for="">Status</label>
														</div>
														<div class="col-4">
																<select class="browser-default custom-select" name="status_id" id="status_id" required>
																		@foreach ($contractStatus as $item)
																			<option name="status_id" id="status_id" selected value="{{$item->id}}">{{$item->status}}</option>
																		@endforeach
																</select>
														</div>
													
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												        <div class="col-2">
															<label for="startdate">Start Date</label>
														</div>
														<div class="col-4">
															<input type='text' name="startdate" class='startdate' placeholder="mm/dd/yy"  required/>
														</div>
												
														<div class="col-2">
															<label for="enddate">End Date</label>
														</div>
														<div class="col-4">
															<input type='text' name="enddate" class='enddate' placeholder="mm/dd/yy"  required/>
														</div>
											</div>
										</div>
									
								<div class="form-group ">
									<div class="row">
										
												<div class="col-2">
													<label for="" >Monthly bill</label>
												</div>
												<div class="col-4">
													<input type="text" id="monthlybill" name="monthlybill" class="form-control" required>
												</div>
										
												<div class="col-2">
													<label for="" >Monthly Due Date</label>
												</div>
												<div class="col-4">
													<input type="text" id="monthlyduedate" name="monthlyduedate" class="form-control monthlyduedate" required>
												</div>
											</div>
										</div>
								</div>
								
								<div class="modal-footer mr-5">
									<button type="submit" class="btn bg-info ">
										<i class='material-icons'>check</i> Save Contract
									</button>
									<button type="button" class="btn bg-danger float-left" data-dismiss="modal">
										<i class='material-icons'>close</i> Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        {{-- //  modelad edit a new contract --}}
			<div class="modal fade bd-example-modal-lg" id="editContract" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Edit Contract</h5>
						</div>
						<div class="card-body">
							<form action="" method="POST" id="editForm">
                            @csrf
                            @method('PATCH')
								<div class="modal-body">
									
                                            <div class="form-group ">
                                                    <div class="row">
												          <div class="col-2">
                                                                <label for="">Status</label>
                                                            </div>
                                                                <div class="col-4">
                                                                        <select class="browser-default custom-select" name="status_id" id="status_id" required>
																		 @foreach ($contractStatus as $item)
																			<option name="status_id" id="status_id" selected value="{{$item->id}}">{{$item->status}}</option>
																		 @endforeach
                                                                           
                                                                        </select>
																</div>
																	<div class="col-2">
                                                                        <label for="endDate">End Date</label>
																 	</div>
																	<div class="col-4">
																		<input type='text' name="enddate" id="enddate" class='enddate' placeholder="mm/dd/yy"  required/>
																	</div>
																	
                                                               
                                                        </div>
                                                    </div>
                        
                                            
                                            <div class="form-group ">
                                                <div class="row">
                                                            <div class="col-2">
                                                                <label for="" >Monthly bill</label>
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="text" name="monthlybill" id="monthlybill" class="form-control" required>
                                                            </div>
                                                              <div class="col-2">
                                                                    <label for="" >Monthly Due Date</label>
                                                                </div>
                                                                <div class="col-4">
                                                                    <input type="text" id="monthlyduedate" name="monthlyduedate" class="form-control monthlyduedate" required>
                                                                </div>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer mr-5">
                                                <button type="submit" class="btn bg-info ">
                                                    <i class='material-icons'>check</i> Save Contract
                                                </button>
                                                <button type="button" class="btn bg-danger float-left" data-dismiss="modal">
                                                    <i class='material-icons'>close</i> Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div>
                        </div>
				<script src="{{asset('js/app.js')}}"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
				<script> 
        $('#editContract').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var status= button.data('status')
           
            var enddate = button.data('enddate')
            var startdate = button.data('startdate')
            console.log(status)
            var monthlybill = button.data('monthlybill')
            var monthlyduedate = button.data('monthlyduedate')
            var client_id = button.data('client_id')
            var bill_id = button.data('bill_id')
            console.log(client_id)
            console.log(bill_id)
            var contracttype_id = button.data('contracttype_id')
            var id = button.data('id')
            var modal = $(this)
            modal.find('#status').attr('value',status)
           
            modal.find('#enddate').attr('value',enddate)
            modal.find('#startdate').attr('value',startdate)
            modal.find('#monthlybill').attr('value',monthlybill)
            modal.find('#monthlyduedate').attr('value',monthlyduedate)
            modal.find('#client_id').attr('value',client_id) 
            modal.find('#bill_id').attr('value',bill_id)
            modal.find('#contracttype_id').attr('value',contracttype_id)
            
            var url ="{{url('/contract')}}/"+id;
            $('#editForm').attr('action',url);   
        });
        </script>
			{{-- contracttype --}}
		  
  <div class="modal fade" id="selectContractType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Select the type</h5>
			  </div>
				
				<div class="modal-body">            
				 <div class="form-group">
						 <div class="table-responsive">
										  <div class="contener">
										<table id="myTable" class="table table-striped table-bordered" style="width:100%">
												<thead class="bg-dark text-white">
													<tr>
														<th class="text-center ">ID</th>
														<th> Contract type</th>
													</tr>
												</thead>
												<tbody>
												  @foreach ($contracttype as $item)
													<tr >
														<td class="text-center">
															
							   
															{{$item->id}}
														</td>
														<td>{{$item->contracttype}}</td>
													</tr>
													@endforeach
												</tbody>
											   
											</table>
										</div>
									  </div>
							 </div>
						
	
						</div>
				
				<div class="modal-footer">
				  <button type="submit" class="btn btn-info" data-dismiss="modal">OK</button>
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			  </div>
			  </div>
			</div>
		 
@endsection
