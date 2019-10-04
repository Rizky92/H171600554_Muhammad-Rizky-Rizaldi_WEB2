@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('News') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('berita.create') }}">Add new data</a>
                        </div>

                        <div class="form-group row">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Headline</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Publisher</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($berita as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kategori_berita->nama }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->users->name }}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ route('berita.show', $item->id)}}">View</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
