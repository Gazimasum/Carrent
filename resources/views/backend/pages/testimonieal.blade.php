@extends('backend.layouts.master')
@section('content')

  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Manage Testimonials</h2>

  						<!-- Zero Configuration Table -->
  						<div class="panel panel-default">
  							<div class="panel-heading">User Testimonials</div>
  							<div class="panel-body">
  								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  									<thead>
  										<tr>

  											<th>Name</th>
  											<th>Email</th>
  											<th>Testimonials</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  									</thead>
  									<tfoot>
  										<tr>

  											<th>Name</th>
  											<th>Email</th>
  											<th>Testimonials</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  									</tfoot>
  									<tbody>

  								@foreach ($testimonial as $t)


  										<tr>

  											<td>{{$t->username}}</td>
  											<td>{{$t->useremail}}</td>
  											<td>{{$t->message}}</td>
  											<td>{{$t->created_at}}</td>
  										<td>
                        @if ($t->status==0)

                            <a href="#activemodel{{$t->id }}" data-toggle="modal" class="btn btn-success"><i class="fa fa-check"></i> Active</a>

                        @else

                              <a href="#deactivemodel{{$t->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-check"></i> Deactive</a>

                        @endif

                        <!-- Active Modal -->
                        <div class="modal fade" id="activemodel{{$t->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Active Testimonials?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h5>Are sure to confirm?</h5>
                              </div>
                              <div class="modal-footer">
                                <form action="{!! route('admin.testimonieal.active', $t->id) !!}"  method="post">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- deactivemodel Modal -->
                        <div class="modal fade" id="deactivemodel{{$t->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deactive Testimonials?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h5>Are sure to Confirm?</h5>
                              </div>
                              <div class="modal-footer">
                                <form action="{!! route('admin.testimonieal.deactive',$t->id) !!}"  method="post">
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-danger">Yes</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>


                        </td>
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
