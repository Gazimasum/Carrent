@extends('backend.layouts.master')
@section('content')

  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Registered Users</h2>

  						<!-- Zero Configuration Table -->
  						<div class="panel panel-default">
  							<div class="panel-heading">Reg Users</div>
  							<div class="panel-body">

  								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  									<thead>
  										<tr>

  												<th> Name</th>
  											<th>Email </th>
  											<th>Contact no</th>
  										<th>DOB</th>
  										<th>Address</th>
  										<th>City</th>
  										<th>Country</th>
  										<th>Reg Date</th>

  										</tr>
  									</thead>
  									<tfoot>
  										<tr>

  											<th> Name</th>
  											<th>Email </th>
  											<th>Contact no</th>
  										<th>DOB</th>
  										<th>Address</th>
  										<th>City</th>
  										<th>Country</th>
  										<th>Reg Date</th>
  										</tr>
  										</tr>
  									</tfoot>
  									<tbody>


                      @foreach($user as $u)

  										<tr>

  											<td>{{$u->name}}</td>
  											<td>{{$u->email}}</td>
  											<td>{{$u->phone_no}}</td>
  	                     <td>{{$u->dob}}</td>
  											<td>{{$u->street_address}}</td>
  											<td>{{$u->city}}</td>
  											<td>{{$u->country}}</td>
  											<td>{{$u->created_at}}</td>
  										</tr>

                    @endforeach
  									</tbody>
  								</table>



  							</div>
  						</div>



  					</div>
  				</div>

  			</div>
  		</div>
  	</div>


@endsection
