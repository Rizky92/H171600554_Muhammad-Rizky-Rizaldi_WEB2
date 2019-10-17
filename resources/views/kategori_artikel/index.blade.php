@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Article Categories') }}</div>

                <div class="card-body">
                    <form>
                        @csrf

                        <div class="form-group row">
                            <a class="btn btn-primary" href="{{ route('kategori_artikel.create') }}">Add new data</a>
                            {{-- TODO: Add verification check for viewing only trashed records --}}
                            {{-- @if (Route::has('kategori_artikel.onlyTrashed') || Route::has('kategori_artikel.withTrashed'))
                                {!! Form::model($kategori_artikel, ['route' => ['kategori_artikel.delete'], 'method' => 'delete']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-secondary']) !!}
                                {!! Form::close() !!}
                            @endif --}}
                        </div>

                        <div class="form-group row">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead class="thead-dark">
                                        <th scope="col" width="20px">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Added by</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col" width="80px">Action</th>
                                    </thead>
                                    <tbody class="text-justify">
                                        @foreach($kategori_artikel as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ Str::limit($item->nama, 50) }}</td>
                                                <td>{{ $item->users->name }}</td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-secondary" href="{{ route('kategori_artikel.show', $item->id) }}">View</a>
                                                        <a class="btn btn-sm btn-secondary" href="{{ route('kategori_artikel.edit', $item->id) }}">Edit</a>
                                                        {!! Form::open(['route' => ['kategori_artikel.destroy', $item->id], 'method' => 'delete']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-secondary']) !!}
                                                        {!! Form::close() !!}
                                                        {{-- TODO: Add verification check for viewing only trashed records --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7" align="center">
                                                {{ $kategori_artikel->links() }}
                                                <div class="text-muted text-small">
                                                    Showing {{ count($kategori_artikel) }} out of {{ $kategori_artikel->total() }} record(s).
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
