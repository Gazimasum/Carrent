@extends('backend.layouts.master')

@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Manage Brands</h2>
      <div class="card">
        {{-- <div class="card-header">
          Manage Banners
        </div> --}}
        <div class="card-body">
            @include('backend.partial.messages')

            <a href="#addBannerModal" data-toggle="modal" class="btn btn-info float-right mb-2">
              <i class="fa fa-plus"></i> Add New Banner
            </a>
            <br><br>
            <span style="color:red;">You Have To keep Only One Banner Active </span>
            <div class="clearfix"></div>

            <!-- Add Modal -->
            <div class="modal fade" id="addBannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="{!! route('admin.banner.store') !!}"  method="post" enctype="multipart/form-data">

                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="title">Banner Title <small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Banner Title" required>
                      </div>

                      <div class="form-group">
                        <label for="title">Banner Text <small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="text" id="title" placeholder="Banner Title" required>
                      </div>

                      <div class="form-group">
                        <label for="image">Banner Image <small class="text-danger">(required)</small></label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Banner Image" required>
                      </div>

                      <div class="form-group">
                        <label for="button_text">Banner Button Text <small class="text-info">(optional)</small></label>
                        <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Banner Button Text (if need)">
                      </div>

                      <div class="form-group">
                        <label for="button_link">Banner Button Link <small class="text-info">(optional)</small></label>
                        <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Banner Button Text (if need)">
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Deactive</label>
                      </div>


                      <button type="submit" class="btn btn-success">Add New</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>

                  </div>
                </div>
              </div>
            </div>

<div class="table table-responsive">
                            <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
            <tr>
              <th>#</th>
              <th>Banner Title</th>
              <th>Banner Image</th>
              <th>Banner Text</th>
              <th>Status</th>
              <th>Action</th>
            </tr>

            @foreach ($banners as $banner)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $banner->title }}</td>
                <td>
                  <img src="{{ asset('images/banners/'.$banner->image) }}" width="40">
                </td>
                <td>{{ $banner->text }}</td>
                <td>
                  @if ($banner->status==1)
                    Active
                    @else
                      Deactive
                  @endif
                </td>

                <td>
                  <a href="#editModal{{ $banner->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $banner->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                        </div>
                        <div class="modal-footer">
                          <form action="{!! route('admin.banner.delete', $banner->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.banner.update', $banner->id) !!}"  method="post" enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="title">Banner Title <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Banner Title" required value="{{ $banner->title }}">
                          </div>
                          <div class="form-group">
                            <label for="title">Banner Text <small class="text-danger">(required)</small></label>
                            <input type="text" class="form-control" name="text" id="title" placeholder="Banner Text" required value="{{ $banner->text }}">
                          </div>

                          <div class="form-group">
                            <label for="image">Banner Image
                              <a href="{{ asset('images/banners/'.$banner->image) }}" target="_blank">
                                Previous Image
                              </a>

                              <small class="text-danger">(required)</small></label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Banner Image">
                          </div>

                          <div class="form-group">
                            <label for="button_text">Banner Button Text <small class="text-info">(optional)</small></label>
                            <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Banner Button Text (if need)"  value="{{ $banner->button_text }}">
                          </div>

                          <div class="form-group">
                            <label for="button_link">Banner Button Link <small class="text-info">(optional)</small></label>
                            <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Banner Button Text (if need)"  value="{{ $banner->button_link }}">
                          </div>

                          @if ($banner->status==1)

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1"  checked="checked">
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                            <label class="form-check-label" for="inlineRadio2">Deactive</label>
                          </div>
                          @else
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" >
                            <label class="form-check-label" for="inlineRadio1">Active</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" checked="checked">
                            <label class="form-check-label" for="inlineRadio2">Deactive</label>
                          </div>
                        @endif

                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        </form>
                        </div>
                      </div>
                    </div>
                  </div>


                </td>
              </tr>
            @endforeach

          </table>
        </div>
        </div>
      </div>

    </div>
  </div>
    </div>
  </div>
  <!-- main-panel ends -->
@endsection
