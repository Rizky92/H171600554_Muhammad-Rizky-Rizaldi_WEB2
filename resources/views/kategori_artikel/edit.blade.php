@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit Article Category') }}</div>

                <div class="card-body">
                    {!! Form::model($kategori_artikel, ['route' => ['kategori_artikel.update', $kategori_artikel->id], 'method' => 'PUT']) !!}
                        @include('kategori_artikel.form')
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
