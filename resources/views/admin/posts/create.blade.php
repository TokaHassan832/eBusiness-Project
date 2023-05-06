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

                            <x-flash-message/>

                            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Id</label></div>
                                    <div class="col-12 col-md-9"><input type="text"  name="id"  class="form-control" value="{{ old('id') }}">
                                        @error('id')
                                        <small class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Title</label></div>
                                    <div class="col-12 col-md-9"><input type="email"  name="title"  class="form-control" value="{{ old('title') }}">
                                        @error('title')
                                        <small class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Excerpt</label></div>
                                    <div class="col-12 col-md-9"><input type="text"  name="excerpt"  class="form-control" value="{{ old('excerpt') }}">
                                        @error('excerpt')
                                        <small class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Body</label></div>
                                    <div class="col-12 col-md-9"><textarea name="body"  rows="9" class="form-control" >{{ old('body') }}</textarea>
                                        @error('body')
                                        <small class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Category</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" class="form-control-sm form-control">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : ''}}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label  class=" form-control-label">Image</label></div>
                                    <div class="col-12 col-md-9"><input type="file"  name="image" class="form-control-file">
                                        @error('image')
                                        <small class="form-text text-muted">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Create
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


