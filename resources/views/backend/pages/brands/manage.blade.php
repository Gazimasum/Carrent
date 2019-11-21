@extends('backend.layouts.master')
@section('content')
  		<div class="content-wrapper">
  			<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-title">Manage Brands</h2>
                <div class="" style="position: absolute;top: 10px;right: 0;padding-right:100px;"><a href="{!! route('admin.brand.create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Add Brand</a></div>

                  <!-- Zero Configuration Table -->
                  <div class="panel panel-default">
                    <div class="panel-heading">Listed  Brands</div>

                    <div class="panel-body">
                    @include('backend.partial.messages')
                      <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                          <tr>

                              <th>Brand Name</th>
                            <th>Creation Date</th>
                            <th>Updation date</th>

                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>

                            <th>Brand Name</th>
                            <th>Creation Date</th>
                            <th>Updation date</th>

                            <th>Action</th>
                          </tr>
                          </tr>
                        </tfoot>
                        <tbody>
                          @foreach ($brands as $b)
                          <tr>
                            <td>{{$b->name}}</td>
                            <td>{{$b->created_at}}</td>
                            <td>{{$b->updated_at}}</td>
                            <td><a href="{!! route('admin.brand.edit',$b->id) !!}" class="btn btn-primary"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                              <a href="#deleteModal{{ $b->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-close"></i></a></td>
                          </tr>

                          <!-- Delete Modal -->
                          <div class="modal fade" id="deleteModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{!! route('admin.brand.delete', $b->id) !!}"  method="post">
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
