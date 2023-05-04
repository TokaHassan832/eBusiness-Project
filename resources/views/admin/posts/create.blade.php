@extends('admin.layouts.master')
    @section('content')
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Post</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Id</label></div>
                                    <div class="col-12 col-md-9"><input type="text"  name="id"  class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                                    <div class="col-12 col-md-9"><input type="email"  name="title"  class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Excerpt</label></div>
                                    <div class="col-12 col-md-9"><input type="password"  name="excerpt"  class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Body</label></div>
                                    <div class="col-12 col-md-9"><textarea name="body"  rows="9" class="form-control"></textarea></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Category</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" class="form-control-sm form-control">
                                            <option value="0">#</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Image</label></div>
                                    <div class="col-12 col-md-9"><input type="file"  name="image" class="form-control-file"></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    @endsection


