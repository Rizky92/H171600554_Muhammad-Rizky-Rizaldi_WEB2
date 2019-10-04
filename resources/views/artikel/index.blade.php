@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Artikel') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Waktu Publikasi</th>
                                    <th>ID User</th>
                                    <th>ID Kategori</th>
                                </tr>
                                @foreach($artikel as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->isi }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->users_id }}</td>
                                        <td>{{ $item->kategori_artikel_id }}</td>
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
