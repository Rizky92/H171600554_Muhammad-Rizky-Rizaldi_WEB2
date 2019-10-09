@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Announcement Category') }}</div>

                <div class="card-body">
                    {!! Form::model($kategori_pengumuman, ['route' => ['kategori_pengumuman.update', $kategori_pengumuman->id], 'method' => 'PUT']) !!}
                        @include('kategori_pengumuman.form')
                    {!! Form::close() !!}
                </div>

                <div class="card-footer">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
