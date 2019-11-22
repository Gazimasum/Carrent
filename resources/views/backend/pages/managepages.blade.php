@extends('backend.layouts.master')
@section('content')
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Pages </h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Form fields</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" action="{!! route('admin.pagescotent.update') !!}">
                      @csrf
											<div class="form-group">
												<label class="col-sm-4 control-label">select Page</label>
												<div class="col-sm-8">
									<select name="type" id="page_select">
                  <option value="" selected="selected" class="form-control">***Select One***</option>
                  <option value="terms">terms and condition</option>
                  <option value="privacy">privacy and policy</option>
                  <option value="aboutus">aboutus</option>
                  <option value="faqs">FAQs</option>
                </select>
												</div>
											</div>
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-4 control-label">selected Page</label>
												<div class="col-sm-8">
				{{-- selected pages --}}
        <p id="pagetypes"></p>
												</div>
											</div>

									<div class="form-group">
												<label class="col-sm-4 control-label">Page Details </label>
												<div class="col-sm-8">
                          {{-- <p id="pagetypes"></p> --}}
			<textarea class="form-control" rows="5" cols="50" name="pgedetails" id="pagedetails" placeholder="Package Details" required>

              {{-- text --}}
										</textarea>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

												<button type="submit" name="submit" value="Update" id="submit" class="btn-primary btn">Update</button>
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
