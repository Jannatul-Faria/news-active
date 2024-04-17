@extends('backend.layout.app')
@section('title', 'news List')
@section('content')
    <!-- start page title -->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">News Detail</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">news</a></li>
                            <li class="breadcrumb-item active">News Detail</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="news-title">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <div class="mb-4">
                                        <h2>{{ $news->title }}</h2>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="mb-4">
                                        <h4>Serial No: {{ $news->id }}</h4>
                                    </div>
                                </div>
                            </div>


                            <p class="mb-1"><i class="bx bx-map align-middle me-1"></i>{{ $news->country->name }}
                            </p>
                            <p class="mb-1"><i class="bx bx-purchase-tag-alt align-middle me-1"></i>
                                {{ $news->category->name }}
                            </p>
                            <p><i class="mdi mdi-phone align-middle me-1"></i> 012-345-6789</p>
                        </div>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <p>{{ $news->content }}</p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection
