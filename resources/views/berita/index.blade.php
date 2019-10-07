@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('News') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('berita.create') }}">Add new data</a>
                        </div>

                        <div class="form-group row">
                            <table class="table table-striped table-responsive">
                                <thead class="table thead">
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th width="120px">Title</th>
                                    <th width="40%">Content</th>
                                    <th>Created At</th>
                                    <th>Publisher</th>
                                    <th>Action</th>
                                </thead>
                                <tbody class="text-justify">
                                    @foreach($berita as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->kategori_berita->nama }}</td>
                                            <td>{{ Str::limit($item->judul, 30) }}</td>
                                            <td>{{ Str::limit($item->isi, 200) }}</td>
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $item->users->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary btn-block" href="{{ route('berita.show', $item->id) }}">View</a>
                                                <a class="btn btn-sm btn-secondary btn-block" href="{{ route('berita.edit', $item->id) }}">Edit</a>
                                                {!! Form::open(['route' => ['berita.destroy', $item->id], 'method' => 'delete']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger btn-block']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">
                                            Approximately a total of {{ DB::table('berita')->count() }} records present in the Database.
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
