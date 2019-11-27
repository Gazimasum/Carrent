@extends('backend.layouts.master')
@section('content')
  		<div class="content-wrapper">
  			<div class="container-fluid">

  				<div class="row">
  					<div class="col-md-12">

  						<h2 class="page-title">Manage Bookings</h2>

  						<!-- Zero Configuration Table -->
  						<div class="panel panel-default">
  							<div class="panel-heading">Bookings Info</div>
  							<div class="panel-body">
                  <div class="table-responsive">

  						     <table id="zctb" class="display table table-responsive table-striped table-bordered table-hover" cellspacing="0" width="100%">
  									<thead>
  										<tr>
  											<th>Name</th>
  											<th>Email</th>
  											<th>Vehicle</th>
  											<th>From Date</th>
  											<th>To Date</th>
  											<th>Message</th>
  											<th>Status</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  									</thead>
  									<tfoot>
  										<tr>

  										<th>Name</th>
  										<th>Email</th>
  											<th>Vehicle</th>
  											<th>From Date</th>
  											<th>To Date</th>
  											<th>Message</th>
  											<th>Status</th>
  											<th>Posting date</th>
  											<th>Action</th>
  										</tr>
  									</tfoot>
  									<tbody>
                      @foreach ($booking as $bk)
  										<tr>
  											<td>{{$bk->user->name}}</td>
  											<td>{{$bk->user->email}}</td>
  											<td><a href="{!! route('vehicles_details',$bk->vehicle->id) !!}" target="_blank">{{$bk->vehicle->VehiclesTitle}}</td>
  											<td>{{$bk->from_date}}</td>
  											<td>{{$bk->to_date}}</td>
  											<td>{{$bk->message}}</td>
  											<td>
                            @if($bk->status==0)
                              Not Confirmed
                          @elseif ($bk->status==1)
                             Confirmed
                             @else
                             Cancled
                          @endif
                        </td>
  											<td>{{$bk->created_at}}</td>
  										<td>
                        @if($bk->status==0)
                            <a href="#confirmmodel{{$bk->id }}" data-toggle="modal" class="btn btn-success"><i class="fa fa-check"></i> Confirm</a>
                            <a href="#canclemodel{{$bk->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-close"></i> Cancle</a>

                        @elseif($bk->status==1)
                            <a href="#notconfirmmodel{{$bk->id }}" data-toggle="modal" class="btn btn-warning"><i class="fa fa-close"></i> Not Confirm</a>
                            <a href="#canclemodel{{$bk->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-close"></i> Cancle</a>
                          @else
                                <a href="#confirmmodel{{$bk->id }}" data-toggle="modal" class="btn btn-success"><i class="fa fa-check"></i> Confirm</a>
                          @endif


                        </td>
                      </tr>
                          <!-- Confirm Modal -->
                          <div class="modal fade" id="confirmmodel{{ $bk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Confirm?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <h5>Are sure to Confirm?</h5>
                                </div>
                                <div class="modal-footer">
                                  <form action="{!! route('admin.booking.confirm', $bk->id) !!}"  method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                  </form>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- NOT Confirm Modal -->
                          <div class="modal fade" id="notconfirmmodel{{ $bk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">NotConfirm??</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <h6>Are sure to NotConfirm?</h6>
                                </div>
                                <div class="modal-footer">
                                  <form action="{!! route('admin.booking.notconfirm', $bk->id) !!}"  method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                  </form>

                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Cacle Modal -->
                          <div class="modal fade" id="canclemodel{{ $bk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Cancle??</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <h5>Are sure to Cancle?</h5>
                                </div>
                                <div class="modal-footer">
                                  <form action="{!! route('admin.booking.cancle', $bk->id) !!}"  method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Yes</button>
                                  </form>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>




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
  	</div>


@endsection
