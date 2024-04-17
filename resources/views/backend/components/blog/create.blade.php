@extends('backend.layout.app')
@section('title', 'blog List')

@section('content')
    <div class="card-body">
        <div class="d-flex flex-wrap">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <a href="{{ route('admin.blog.index') }}"
                                    class="btn btn-secondary waves-effect waves-light"><i class="bx bx-undo me-1"></i>
                                    Back</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title">
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                <label for="image" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" id="image"></input>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <label for="category" class="col-form-label">Category:</label>
                                <select class="form-control" data-trigger name="category" id="category">
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <label for="country" class="col-form-label">Country:</label>
                                <select class="form-control" data-trigger name="country" id="country"
                                    placeholder="This is a search placeholder">
                                    <option value="" selected disabled>Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <div class="mb-3">
                                <label for="summernote" class="col-form-label">Content:</label>
                                <textarea class="form-control" name="content" id="summernote"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>

            </div>
        </div><!-- end preview-->
    </div><!-- end card body -->
@endsection
