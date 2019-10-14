@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Show a Gallery') }}</div>

                <div class="card-body">
                    @csrf
                    <div class="card-img shadow shadow-sm">
                        <img src="{{ asset($galeri->path) }}">
                    </div>

                    <div class="form-group row"></div>
                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Image URL</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ public_path($galeri->path) }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Category</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $galeri->kategori_galeri->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Name</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $galeri->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Description</label>
                        <span class="col-md-6">{!! $galeri->keterangan !!}</span>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Created At</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $galeri->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Last Updated</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $galeri->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Publisher</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $galeri->users->name }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('galeri.edit', $galeri->id) }}">Edit</a>
                            {!! Form::open(['route' => ['galeri.destroy', $galeri->id], 'method' => 'delete']) !!}
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
