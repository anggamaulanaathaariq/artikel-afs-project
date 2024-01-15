@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Project - AFS</h2>
                    <h5 class="text-white op-7 mb-2">Article Excerpt</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Form Article</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Article Name</label>
                                <input type="text" name="judul" class="form-control" id="text"
                                    placeholder="Enter Name Article">
                            </div>
                            <div class="form-group">
                                <label for="body">Body Name</label>
                                <textarea name="body" class="form-control"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="kategori_id" class="form-control">
                                    @foreach ($category as $row);
                                    <option value="{{ $row->id }}">{{ $row -> name_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Image</label>
                                <input type="file" name="gambar_artikel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1">Publish</option>
                                    <option value="0">Draft</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <span class="btn-label">
                                        <i class="fas fa-save fa-lg"></i>
                                    </span> Save
                                </button>
                                <a href="{{ route('artikel.index') }}" class="btn btn-warning btn-sm ml-auto">
                                    <i class="fas fa-chevron-circle-left fa-lg"></i> Back
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
