@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New News Category') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('kategori_berita.store') }}">
                        @include('kategori_berita.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
