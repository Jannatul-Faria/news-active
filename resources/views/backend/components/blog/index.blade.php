@extends('backend.layout.app')
@section('title', 'blog List')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">blogs</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">blog</a></li>
                        <li class="breadcrumb-item active">blog List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">blog List <span class="text-muted fw-normal ms-2">({{ count($blogs) }})</span>
                </h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                <div>

                    <a href="{{ route('admin.') }}" class="btn btn-secondary waves-effect waves-light"><i
                            class="bx bx-undo me-1"></i> Back</a>
                </div>
                <div>
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary waves-effect waves-light"><i
                            class="bx bxs-add-to-queue me-1"></i>Add
                        New</a>


                </div>
            </div>

        </div>
    </div>
    <!-- end row -->

    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm-auto">
                            {{-- <div class="d-flex align-items-center gap-1 mb-4">
                                <div class="input-group datepicker-range">
                                    <input type="text" class="form-control flatpickr-input" data-input
                                        aria-describedby="date1" />
                                    <button class="input-group-text" id="date1" data-toggle>
                                        <i class="bx bx-calendar-event"></i>
                                    </button>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="
                          border-collapse: collapse;
                          border-spacing: 0 8px;
                          width: 100%;
                        ">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 30px">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll" />
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 20px">ID</th>
                                    <th width="20%">Title</th>
                                    <th width="20%">Content</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Category</th>
                                    <th width="10%">created</th>
                                    <th width="10%">Updated</th>
                                    <th style="width: 80px; min-width: 80px;">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $index => $blog)
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" />
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript: void(0);"
                                                class="text-dark fw-medium">{{ $blog->id }}</a>
                                        </td>
                                        <td>
                                            <img src="{{ $blog->img }}" alt=""
                                                class="avatar-sm rounded-circle me-2">
                                            <a href="#"
                                                class="text-body">{{ Str::limit($blog->title, 10, '...') }}</a>
                                        </td>
                                        <td>{{ Str::limit($blog->content, 30, '...') }}</td>
                                        <td>

                                            <input type="checkbox" id="switch{{ $index }}" switch="bool"
                                                {{ $blog->status ? 'checked' : '' }}>
                                            <label class="mb-0" for="switch{{ $index }}" data-on-label="On"
                                                data-off-label="Off"></label>



                                        </td>
                                        <td>
                                            <div class="badge bg-primary  font-size-12">
                                                {{ $blog->category->name }}

                                            </div>
                                        </td>
                                        {{-- <td class="badge badge-soft-primary"></td> --}}
                                        <td>{{ $blog->created_at->format('d-m-y') }}</td>
                                        <td>{{ $blog->updated_at->format('d-m-y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.blog.show', $blog->id) }}" class="btn btn-light"><i
                                                    class="bx bx-show"></i> </a>
                                            <a href="#" class="btn btn-light"><i class="bx bx-edit "></i> </a>


                                            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light"><i
                                                        class="bx bxs-trash"></i></button>
                                            </form>

                                        </td>


                                    </tr>
                                @endforeach

                                {{-- <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="text-dark fw-medium">#MN0214</a>
                                    </td>
                                    <td>11 Oct, 2020</td>
                                    <td>Paul Reynolds</td>

                                    <td>$24.20</td>
                                    <td>
                                        <div class="badge badge-soft-success font-size-12">
                                            Paid
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light">
                                                <i class="bx bx-download label-icon"></i> Pdf
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Print</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr> --}}


                            </tbody>
                        </table>
                    </div>

                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <!-- end table responsive -->

    <!-- end page title -->


@endsection
