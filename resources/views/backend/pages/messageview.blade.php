@extends('backend.layouts.master')
@section('content')

  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Manage Contact Us Message</h2>

  						<!-- Zero Configuration Table -->
  						<div class="panel panel-default">
  							<div class="panel-heading">User Message</div>
  							<div class="panel-body">

  								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  									<thead>
  										<tr>

  											<th>Name</th>
  											<th>Email</th>
  											<th>Contact No</th>
  											<th>Message</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  									</thead>
  									<tfoot>
  										<tr>

  											<th>Name</th>
  											<th>Email</th>
  											<th>Contact No</th>
  											<th>Message</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  										</tr>
  									</tfoot>
  									<tbody>

  @foreach($message as $m)

  										<tr>

  											<td>{{$m->name}}</td>
  											<td>{{$m->email}}</td>
  											<td>{{$m->phone}}</td>
  											<td>{{$m->message}}</td>
  											<td>{{$m->created_at}}</td>
  						@if($m->status==1)

  	<td>Read</td>
  @else
  <td><a href="{!! route('seenmessage',$m->id) !!}">Pending</a>
  </td>
@endif
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
