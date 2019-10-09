@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit News Category') }}</div>

                <div class="card-body">
                    {!! Form::model($kategori_berita, ['route' => ['kategori_berita.update', $kategori_berita->id], 'method' => 'PUT']) !!}
                        @include('kategori_berita.form')
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
