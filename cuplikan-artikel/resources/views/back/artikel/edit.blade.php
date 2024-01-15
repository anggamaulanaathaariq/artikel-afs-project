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
                            <div class="card-title">Article Data</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('artikel.update', $artikel->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Article Name</label>
                                <input type="text" name="judul" class="form-control" id="text"
                                    value="{{ $artikel->judul }}">
                            </div>
                            <div class="form-group">
                                <label for="body">Body Name</label>
                                <textarea name="body" class="form-control">{{ $artikel->body }} </textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="kategori_id" class="form-control">
                                    @foreach ($category as $row)
                                        @if ($row->id == $artikel->kategori_id)
                                            <option value={{ $row->id }} selected='selected'> {{ $row->name_category }}
                                            </option>
                                        @else
                                            <option value="{{ $row->id }}">{{ $row->name_category }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="is_active" class="form-control">
                                    <option value="1" {{ $artikel->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                    <option value="0" {{ $artikel->is_active == '0' ? 'selected' : '' }}>Draft</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Artikel</label>
                                <input type="file" name="gambar_artikel" class="form-control">
                                <br>
                                <img src=" {{asset('uploads/' . $artikel->gambar_artikel)}} " width="100" >
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
