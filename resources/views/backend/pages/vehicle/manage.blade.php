@extends('backend.layouts.master')
@section('content')
  		<div class="content-wrapper">
  			<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Manage Vehicle</h2>
                <div class="" style="position: absolute;top: 10px;right: 0;padding-right:100px;"><a href="{!! route('admin.vehicle.create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Add Vehicle</a></div>

                  <!-- Zero Configuration Table -->
                  <div class="panel panel-default">
                    <div class="panel-heading">Listed  Vehicle</div>

                    <div class="panel-body">
                    @include('backend.partial.messages')
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                      <thead>
                        <tr>

                          <th>Vehicle Title</th>
                          <th>Brand </th>
                          <th>Price Per day</th>
                          <th>Fuel Type</th>
                          <th>Model Year</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>

                        <th>Vehicle Title</th>
                          <th>Brand </th>
                          <th>Price Per day</th>
                          <th>Fuel Type</th>
                          <th>Model Year</th>
                          <th>Action</th>
                        </tr>
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach($vehicles as $v)
                        <tr>

                          <td>{{$v->VehiclesTitle}}</td>
                          <td>{{$v->Brand()}}</td>
                          <td>{{$v->PricePerDay}}</td>
                          <td>{{$v->FuelType}}</td>
                            <td>{{$v->ModelYear}}</td>
                            <td><a href="{!! route('admin.vehicle.edit',$v->id) !!}" class="btn btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                              <a href="#deleteModal{{ $v->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-close"></i></a></td>
                          </tr>

                          <!-- Delete Modal -->
                          <div class="modal fade" id="deleteModal{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{!! route('admin.vehicle.delete', $v->id) !!}"  method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                  </form>

                                </div>
                                <div class="modal-footer">
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




  @endsection
