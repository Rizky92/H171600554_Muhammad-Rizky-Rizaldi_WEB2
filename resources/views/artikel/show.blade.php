@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show an Article') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Category</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->kategori_artikel->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Title</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Content</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Created At</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Last Updated</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Publisher</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->users->name }}</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5">
                            <a href="{!! route('artikel.edit', $artikel->id) !!}" class="btn btn-primary">Edit</a>
                            <a href="{!! route('artikel.destroy', $artikel->id) !!}" class="btn btn-secondary">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
