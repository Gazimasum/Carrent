@extends('backend.layouts.master')
@section('content')
  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Create Brand</h2>

  						<div class="row">
                {{-- @include('backend.partial.messages') --}}
  							<div class="col-md-10">
  								<div class="panel panel-default">
  									<div class="panel-heading">Form fields</div>
  									<div class="panel-body">
  										<form method="post" action="{!! route('admin.brand.store') !!}" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
                        @csrf
  											<div class="form-group">
  												<label class="col-sm-4 control-label">Brand Name</label>
  												<div class="col-sm-8">
  													<input type="text" class="form-control" name="name" id="brand" required>
  												</div>
  											</div>
  											<div class="hr-dashed"></div>
  											<div class="form-group">
  												<div class="col-sm-8 col-sm-offset-4">

  													<button class="btn btn-primary" name="submit" type="submit">Submit</button>
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
  @endsection
