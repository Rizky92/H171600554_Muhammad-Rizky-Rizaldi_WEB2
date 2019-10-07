@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Write an Announcement') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'pengumuman.store', 'method' => 'POST']) !!}
                        @include('pengumuman.form')
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
