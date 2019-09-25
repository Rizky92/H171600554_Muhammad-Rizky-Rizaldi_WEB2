

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategori Pengumuman') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>ID User</th>
                                </tr>
                                @foreach($kategori_artikel as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->users_id }}</td>
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
