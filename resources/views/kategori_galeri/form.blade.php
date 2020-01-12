@csrf
<div class="form-group row">
    {!! Form::label('nama', __('Category Name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nama', old('nama'), ['class' => 'form-control col-md-7' 'required', 'autofocus']) !!}
</div>

{!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!}

<div class="form-group row align-self-center">
    <div class="btn-group">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-secondary">
            Cancel
        </a>
    </div>
</div>

