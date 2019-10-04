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
                        <label for="judul" class="col-md-3 col-form-label text-md-right">ID Kategori</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->kategori_artikel_id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Judul</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Isi</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Dibuat</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->created_at }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Diedit</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->updated_at }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Publisher</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->users_id }}</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
