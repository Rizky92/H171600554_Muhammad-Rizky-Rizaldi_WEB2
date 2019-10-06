@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit an Article') }}</div>

                <div class="card-body">
                    {!! Form::model($artikel, ['route' => ['artikel.update', $artikel->id], 'method' => 'PUT']) !!}
                        @include('artikel.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
