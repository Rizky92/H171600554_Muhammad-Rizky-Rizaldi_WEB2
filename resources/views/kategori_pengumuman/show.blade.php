@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show a Gallery Category') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">ID</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Name</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">User</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->users->name }}</label>
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
