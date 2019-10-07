@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Write an Article') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'artikel.store', 'method' => 'POST']) !!}
                        @include('artikel.form')
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
