@extends('backend.layout.app')
@section('title', 'Category List')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Categories</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">News</a></li>
                        <li class="breadcrumb-item active">Category List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Category List <span
                        class="text-muted fw-normal ms-2">({{ count($categories) }})</span>
                </h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <a href="{{ route('admin.') }}" class="btn btn-light"><i class="bx bx-undo me-1"></i> Back</a>
                </div>
                <div>
                    <a href="#" class="btn btn-light"><i class="bx bxs-add-to-queue me-1"></i> Add New</a>
                </div>
            </div>

        </div>
    </div>
    <!-- end row -->

    <div class="table-responsive mb-4">
        <table class="table align-middle datatable dt-responsive table-check nowrap"
            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
            <thead>
                <tr>
                    <th style="width: 30px">
                        <div class="form-check font-size-16">
                            <input type="checkbox" name="check" class="form-check-input" id="checkAll" />
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th style="width: 20px">ID</th>
                    <th width="20%">Name</th>
                    <th width="20%">Remarks</th>
                    <th width="20%">created</th>
                    <th width="20%">Updated</th>
                    <th style="width: 80px; min-width: 80px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                <label class="form-check-label" for="contacusercheck1"></label>
                            </div>
                        </th>
                        <td>{{ $category->id }}</td>
                        <td>
                            <img src="{{ $category->img }}" alt="" class="avatar-sm rounded-circle me-2">
                            <a href="#" class="text-body">{{ $category->name }}</a>
                        </td>
                        <td>{{ Str::limit($category->remarks, 20, '...') }}</td>
                        <td>{{ $category->created_at->format('d-m-y') }}</td>
                        <td>{{ $category->updated_at->format('d-m-y') }}</td>
                        {{-- <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="badge badge-soft-primary">Photoshop</a>
                                <a href="#" class="badge badge-soft-primary">illustrator</a>
                            </div>
                        </td> --}}
                        <td>
                            <a href="#" class="btn btn-light"><i class="bx bx-show"></i> </a>
                            <a href="#" class="btn btn-light"><i class="bx bx-edit "></i> </a>
                            <a href="#" class="btn btn-light"><i class="bx bxs-trash"></i> </a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- end table -->
    </div>
    <!-- end table responsive -->
@endsection
