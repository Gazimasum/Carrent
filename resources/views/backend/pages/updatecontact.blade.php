@extends('backend.layouts.master')
@section('content')

  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Update Contact Info</h2>

  						<div class="row">
  							<div class="col-md-10">
  								<div class="panel panel-default">
  									<div class="panel-heading">Form fields</div>
  									<div class="panel-body">
  										<form method="post" name="chngpwd" class="form-horizontal" action="{!! route('updatecontact',$c->id) !!}">
                        @csrf
                            <div class="form-group">
  												<label class="col-sm-4 control-label"> Address</label>
  												<div class="col-sm-8">
  													<textarea class="form-control" name="address" id="address" required>{{$c->address}}</textarea>
  												</div>
  											</div>
  											<div class="form-group">
  												<label class="col-sm-4 control-label"> Email id</label>
  												<div class="col-sm-8">
  													<input type="email" class="form-control" name="email" id="email" value="{{$c->email}}" required>
  												</div>
  											</div>
                        <div class="form-group">
  												<label class="col-sm-4 control-label"> Contact Number </label>
  												<div class="col-sm-8">
  													<input type="text" class="form-control" value="{{$c->phone}}" name="phone" id="contactno" required>
  												</div>
  											</div>

  											<div class="hr-dashed"></div>
  											<div class="form-group">
  												<div class="col-sm-8 col-sm-offset-4">
  				  								<button class="btn btn-primary" name="submit" type="submit">Update</button>
  												</div>
  											</div>

  										</form>

  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>


@endsection
