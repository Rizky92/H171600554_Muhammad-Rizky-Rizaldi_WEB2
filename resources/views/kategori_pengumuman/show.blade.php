@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Show a Category') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">ID</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Name</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Created At</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Added by</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $kategori_pengumuman->users->name }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('kategori_pengumuman.edit', $kategori_pengumuman->id) }}">Edit</a>
                            {!! Form::open(['route' => ['kategori_pengumuman.destroy', $kategori_pengumuman->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
                            {!! Form::close() !!}
                        </div>
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
