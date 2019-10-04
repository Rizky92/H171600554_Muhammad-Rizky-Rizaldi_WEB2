@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article Category') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>User</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($kategori_artikel as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->users->name }}</td>
                                        <td><a class="btn btn-sm btn-primary" href="{{ route('kategori_artikel.show', $item->id)}}">View</a></td>
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
