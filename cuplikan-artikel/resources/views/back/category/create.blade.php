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
                            <div class="card-title">Category Data</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="category">Name Category</label>
                                <input type="text" name="name_category" class="form-control" id="text"
                                    placeholder="Enter Category">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <span class="btn-label">
                                        <i class="fas fa-save fa-lg"></i>
                                    </span> Save
                                </button>
                                <a href="{{ route('category.index') }}" class="btn btn-warning btn-sm ml-auto">
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
