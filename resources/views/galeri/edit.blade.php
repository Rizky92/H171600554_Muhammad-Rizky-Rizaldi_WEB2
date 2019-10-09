@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Edit a Gallery') }}</div>

                <div class="card-body">
                    {!! Form::model($artikel, ['route' => ['galeri.update', $artikel->id], 'method' => 'PUT']) !!}
                        @include('galeri.form')
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