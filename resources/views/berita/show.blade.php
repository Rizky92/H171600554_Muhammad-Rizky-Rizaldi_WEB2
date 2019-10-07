@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Show a News') }}
                    <a href="{!! route('berita.index', $artikel->id) !!}" class="btn btn-outline-secondary btn-sm offset-10">Return</a>
                </div>

                <div class="card-body">
                    @csrf
                    <div class ="form-group row">

                    </div>
                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Category</label>
                        <label for="berita" class="col-md-6 col-form-label text-md-left">{{ $berita->kategori_berita->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Title</label>
                        <label for="berita" class="col-md-6 col-form-label text-md-left">{{ $berita->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Content</label>
                        <label for="berita" class="col-md-9 col-form-label text-md-left">{{ $berita->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Created At</label>
                        <label for="berita" class="col-md-6 col-form-label text-md-left">{{ $berita->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Last Updated</label>
                        <label for="berita" class="col-md-6 col-form-label text-md-left">{{ $berita->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="berita" class="col-md-3 col-form-label text-md-right">Publisher</label>
                        <label for="berita" class="col-md-6 col-form-label text-md-left">{{ $berita->users->name }}</label>
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
