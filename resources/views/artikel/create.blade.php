@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Write an Article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('artikel.store') }}">
                        @include('artikel.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
