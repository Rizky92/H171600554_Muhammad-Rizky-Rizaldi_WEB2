@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Show an Announcement') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Category</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->kategori_pengumuman->nama }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Title</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Content</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Created At</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->created_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Last Updated</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->updated_at->format('D, d M Y H:m') }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="artikel" class="col-md-4 col-form-label text-md-right">Publisher</label>
                        <label for="artikel" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->users->name }}</label>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" href="{{ route('pengumuman.edit', $pengumuman->id) }}">Edit</a>
                            {!! Form::open(['route' => ['pengumuman.destroy', $pengumuman->id], 'method' => 'delete']) !!}
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
