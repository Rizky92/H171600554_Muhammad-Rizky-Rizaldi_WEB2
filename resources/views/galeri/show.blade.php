@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Show an Article') }}
                    <a href="{!! route('artikel.index', $artikel->id) !!}" class="btn btn-outline-secondary btn-sm offset-10">Return</a>
                </div>

                <div class="card-body">
                    @csrf
                    <div class ="form-group row">

                    </div>
                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Category</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $artikel->kategori_artikel->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Title</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $artikel->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Content</label>
                        <label for="artikel" class="col-md-9 col-form-label text-md-left">{{ $artikel->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Created At</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $artikel->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Last Updated</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $artikel->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-3 col-form-label text-md-right">Publisher</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $artikel->users->name }}</label>
                    </div>
                </div>
                <div class="card-footer">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
