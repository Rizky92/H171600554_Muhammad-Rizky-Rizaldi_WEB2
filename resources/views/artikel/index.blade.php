@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Articles') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('artikel.create') }}">Add new data</a>
                        </div>

                        <div class="form-group row">
                            <table class="table table-striped table-responsive">
                                <thead class="thead-dark">
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th width="120px">Title</th>
                                    <th width="40%">Content</th>
                                    <th>Created</th>
                                    <th>Publisher</th>
                                    <th>Action</th>
                                </thead>
                                <tbody class="text-justify">
                                    @foreach($artikel as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->kategori_artikel['nama'] }}</td>
                                            <td>{{ Str::limit($item->judul, 30) }}</td>
                                            <td>{{ Str::limit($item->isi, 200) }}</td>
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $item->users->name }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('artikel.show', $item->id) }}">View</a>
                                                    <a class="btn btn-sm btn-secondary" href="{{ route('artikel.edit', $item->id) }}">Edit</a>
                                                    {!! Form::open(['route' => ['artikel.destroy', $item->id], 'method' => 'delete']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-secondary']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" align="center">
                                            {{ $artikel->links() }}
                                            <div class="text-muted text-small">
                                                Showing {{ count($artikel) }} out of {{ $artikel->total() }} record(s).
                                            </div>
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
