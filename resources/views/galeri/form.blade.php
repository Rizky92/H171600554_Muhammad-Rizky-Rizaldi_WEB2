@csrf
<div class="form-group row">
    {!! Form::label('nama', __('Name'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::text('nama', old('nama'), ['class' => 'form-control col-md-7', 'required', 'autofocus', 'placeholder' => 'Insert gallery name...']) !!}
</div>

<div class="form-group row">
    {!! Form::label('path', __('Image'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::file('path', old('path'), ['class' => 'form-control col-md-7']) !!}
</div>

<div class="form-group row">
    {!! Form::label('keterangan', __('Description'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::textarea('keterangan', old('keterangan'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

<div class="form-group row">
    {!! Form::label('kategori_galeri_id', __('Category'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    {!! Form::select('kategori_galeri_id', $kategori_galeri, old('kategori_galeri_id'), ['class' => 'form-control col-md-7', 'required']) !!}
</div>

{!! Form::hidden('users_id', Auth::id(), ['name' => 'users_id']) !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        {!! Form::submit(__('Done'), ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('galeri.index') !!}" class="btn btn-danger">
            Cancel
        </a>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'keterangan' );
</script>

